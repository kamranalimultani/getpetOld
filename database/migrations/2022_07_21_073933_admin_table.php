<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            

            $table->id('iAdminID');
            $table->string('vFirstName');
            $table->string('vLastName')->nullable();
            $table->string('vUsername');
            $table->string('vEmail')->nullable();
            $table->string('vPassword');
            $table->string('isAddedBy')->default(1);
            $table->enum('eStatus', ['Active', 'Inactive'])->default('Active');
            $table->enum('isDelete', ['Yes', 'No'])->default('No');
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
