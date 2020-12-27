<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksisFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail__transaksis', function (Blueprint $table)
        {
            $table->foreign("id")->references("id")->on("milks")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_header_transaksi")->references("id_header_transaksi")->on("header__transaksis")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail__transaksis', function (Blueprint $table)
        {
            // 
        });
    }
}
