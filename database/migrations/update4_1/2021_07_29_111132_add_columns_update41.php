<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the Anonymous migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('advs', function (Blueprint $table) {

            if (!Schema::hasColumn('advs', 'heading1')) {
                $table->string('heading1')->nullable();
            }
            if (!Schema::hasColumn('advs', 'sub_heading1')) {
                $table->string('sub_heading1')->nullable();
            }
            if (!Schema::hasColumn('advs', 'heading2')) {
                $table->string('heading2')->nullable();
            }
            if (!Schema::hasColumn('advs', 'sub_heading2')) {
                $table->string('sub_heading2')->nullable();
            }
            if (!Schema::hasColumn('advs', 'heading3')) {
                $table->string('heading3')->nullable();
            }
            if (!Schema::hasColumn('advs', 'sub_heading3')) {
                $table->string('sub_heading3')->nullable();
            }
            });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
