<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factura', function (Blueprint $table) {
            $table->foreign('idtransporte')->references(['id_transporte'])->on('transporte');
            $table->foreign('carritoid')->references(['id_carrito'])->on('carrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura', function (Blueprint $table) {
            $table->dropForeign('factura_ibfk_2');
            $table->dropForeign('factura_ibfk_1');
        });
    }
}
