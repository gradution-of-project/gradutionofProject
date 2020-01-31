<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fristname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confrimpassword');
            $table->string('phone');
            $table->string('describtion');
            $table->date('brithdate');
            $table->string('clenicAdress');
            $table->string('gender');
            $table->string('role');
            $table->mediumText('image')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
}
