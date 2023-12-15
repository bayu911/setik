<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siaran extends Model
{
    protected $table = 'siaran';
    protected $primaryKey = 'id_siaran';
    protected $guarded = ['id_siaran'];
    public $timestamps = false;

    public function iklan()
    {
        return $this->belongsTo('App\Models\Iklan', 'id_iklan', 'id_iklan');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\Models\Jadwal', 'id_jadwal', 'id_jadwal');
    }

    public function musik()
    {
        return $this->belongsTo('App\Models\Musik', 'id_musik', 'id_musik');
    }
}