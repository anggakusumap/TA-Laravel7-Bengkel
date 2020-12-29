<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterPitstop extends Model
{
    protected $table = "tb_fo_master_pitstop";
    protected $primaryKey = "id_pitstop";
    protected $fillable = [
        'nama_pitstop'
    ];

    public $timestamps = false;
}
