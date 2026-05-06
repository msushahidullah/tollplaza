<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsInUpdate42 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::table('genrals',function(Blueprint $table){

        if (Schema::hasColumn('genrals', '	api_enable')) {
            $table->tinyint('api_enable')->default(0);
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
        Schema::table('update4_2', function (Blueprint $table) {
            //
        });
    }
}
