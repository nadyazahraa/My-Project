<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_Transaksi extends Model
{
    protected $table = "header__transaksis";
    protected $primaryKey = "id_header_transaksi";
    protected $fillable = ['tanggal_transaksi'];

    static function tambah_header_transaksi()
    {
        $data = Header_Transaksi::create([
            "tanggal_transaksi" => date("Y-m-d")
        ]);

        return $data->id_header_transaksi;
    }
}
