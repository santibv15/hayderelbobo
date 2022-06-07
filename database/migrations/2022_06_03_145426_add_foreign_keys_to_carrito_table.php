<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carrito', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->foreign(['usuario_id'])->references(['id_usuarios'])->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carrito', function (Blueprint $table) {
            $table->dropForeign('carrito_ibfk_1');
        });
    }
}
