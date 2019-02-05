<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('id')->nullable($value = false);
          $table->string('nombre',36)->nullable($value = true);
          $table->string('usuario',30)->nullable($value = false);
          $table->string('carrera',30)->nullable($value = true);
          $table->string('contase_„±a',50)->nullable($value = false);
          $table->string('email',50)->nullable($value = false);
          $table->unique(['usuario','contase√±a','email']);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('users');
    }
}