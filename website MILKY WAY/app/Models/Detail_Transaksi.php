<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    protected $table = "detail__transaksis";
    protected $primaryKey = "id_detail_transaksi";
    protected $fillable = ['id_header_transaksi', 'id', 'jumlah', 'fullname', 'address', 'payment_method'];

    static function tambah_detail_transaksi($id, $id_header_transaksi, $jumlah, $request)
    {
        Detail_Transaksi::create([
            "id"                  => $id,
            "id_header_transaksi" => $id_header_transaksi,
            "jumlah"              => $jumlah,
            "fullname"            => $request->fullname,
            "address"             => $request->address,
            "payment_method"      => $request->payment_method
        ]);
    }
}
