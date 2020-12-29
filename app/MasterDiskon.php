<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterDiskon extends Model
{
    protected $table = "tb_fo_master_diskon";
    protected $primaryKey = "id_diskon";
    protected $fillable = [
        'nama_diskon', 'jumlah_diskon'
    ];

    public $timestamps = false;
}
