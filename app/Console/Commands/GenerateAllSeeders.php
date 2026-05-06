<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateAllSeeders extends Command
{
    protected $signature = 'iseed:all {--exclude=migrations,failed_jobs,password_resets,personal_access_tokens}';
    protected $description = 'Generate seeders for all tables automatically using iseed';

    public function handle()
    {
        $dbName = DB::getDatabaseName();
        $tables = DB::select("SHOW TABLES");
        $key = "Tables_in_{$dbName}";

        $exclude = explode(',', $this->option('exclude'));

        foreach ($tables as $table) {
            $tableName = $table->$key;

            if (!in_array($tableName, $exclude)) {
                $this->call('iseed', [
                    'tables' => $tableName,
                    '--force' => true
                ]);
                $this->info("✅ Seeder created for: {$tableName}");
            } else {
                $this->warn("⏭ Skipped: {$tableName}");
            }
        }

        $this->info('🎉 All seeders generated successfully!');
    }
}
