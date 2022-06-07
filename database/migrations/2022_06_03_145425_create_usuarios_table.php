<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_usuarios');
            $table->string('nombre', 45);
            $table->string('apellidos', 45);
            $table->string('correo', 45);
            $table->string('usuario', 45);
            $table->string('contraseña', 45);
            $table->integer('cargoid')->nullable()->index('cargoid');
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
        Schema::dropIfExists('users');
    }
}
