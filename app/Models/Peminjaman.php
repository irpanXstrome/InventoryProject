<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function getTable()
    {
        return "data_peminjaman";
    }

    public function barang(){
        return $this->belongsTo(Barang::class,"id_barang");
    }

    public function user(){
        return $this->belongsTo(User::class,"id_user");
    }
}
