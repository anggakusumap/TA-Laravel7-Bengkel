<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterJenisPerbaikan extends Model
{
    protected $table = "tb_fo_master_jenis_perbaikan";
    protected $primaryKey = "id_jenis_perbaikan";
    protected $fillable = [
        'nama_jenis_perbaikan', 'harga_jenis_perbaikan'
    ];

    public $timestamps = false;
}
