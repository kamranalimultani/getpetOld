<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PradeshTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pradesh', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('country_id ')->nullable();
            $table->string('country_code')->nullable();
            $table->string('fips_code')->nullable();
            $table->string('iso2')->nullable();
            $table->string('type')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('created_at')->nullable();
            $table->timestamps();
            $table->string('flag')->nullable();
            $table->string('wikiDataId')->nullable();
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
}
