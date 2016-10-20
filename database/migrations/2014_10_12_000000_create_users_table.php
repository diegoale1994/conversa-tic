<?php

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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('edad');
            $table->string('rol');
            $table->string('genero');
            $table->string('ubicacion');
            $table->string('twitter');
            $table->string('telefono');
            $table->date('fecha');
            $table->string('token',100)->unique();
            $table->string('estado',1);
            $table->string('arrivo',1);
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
        Schema::drop('users');
    }
}
