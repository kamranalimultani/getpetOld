<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productRequest', function (Blueprint $table) {
            $table->id('id');
            $table->int('p_id');
            $table->string('name');
            $table->string('phone');
            $table->string('StateId');
            $table->string('quantity')->nullable();
            $table->string('message')->nullable();
            $table->enum('status', ['Pending', 'Approved'])->default('Pending');
            $table->timestamps();
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
