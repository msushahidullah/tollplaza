<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use ZipArchive;

class ImportDemo extends Command
{
    protected $signature = 'import:demo';
    protected $description = 'This will import demo on your script!';

    public function handle()
    {
        $this->info('Importing Demo...');

        // ✅ Extract seeder classes listed in DatabaseSeeder
        $databaseSeederFile = database_path('seeders/DatabaseSeeder.php');
        $skipSeeders = [];

        if (file_exists($databaseSeederFile)) {
            $contents = file_get_contents($databaseSeederFile);

            preg_match_all('/->call\((.*?)::class\)/', $contents, $matches);

            if (!empty($matches[1])) {
                $skipSeeders = $matches[1]; // Example: ["AllcountryTableSeeder", "AllstatesTableSeeder", ...]
            }
        }

        $this->info('Seeding database...');
        Log::info('--- ImportDemo started ---');

        $seederPath = database_path('seeders');
        $files = File::files($seederPath);

        foreach ($files as $file) {
            $class = $file->getFilenameWithoutExtension();

            // Skip DatabaseSeeder and any class already listed inside it
            if ($class === 'DatabaseSeeder' || in_array($class, $skipSeeders)) {
                $msg = "Skipping {$class} (defined in DatabaseSeeder).";
                $this->warn($msg);
                Log::info($msg);
                continue;
            }

            $msg = "Running seeder: {$class}";
            $this->info($msg);
            Log::info($msg);

            try {
                Artisan::call('db:seed', [
                    '--class' => "Database\\Seeders\\{$class}",
                    '--force' => true,
                ]);
                $this->info("Seeder {$class} executed.");
                Log::info("Seeder {$class} executed successfully.");
            } catch (\Exception $e) {
                $err = "Error running {$class}: " . $e->getMessage();
                $this->error($err);
                Log::error($err);
            }
        }

        ini_set('max_execution_time', 200);

        $file = public_path('democontent.zip');
        $this->info('Extracting demo contents...');
        Log::info('Extracting demo contents...');

        try {
            $zip = new ZipArchive;

            if ($zip->open($file) === true) {
                $zip->extractTo(public_path());
                $zip->close();

                $this->info('Demo data imported successfully!');
                Log::info('Demo data imported successfully.');
                Artisan::call('key:generate');
            } else {
                $this->error('Could not open demo content zip file.');
                Log::error('Could not open demo content zip file.');
            }
        } catch (\Exception $e) {
            $err = 'Error importing demo: ' . $e->getMessage();
            $this->error($err);
            Log::error($err);
        }

        Log::info('--- ImportDemo finished ---');
    }
}
