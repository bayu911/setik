<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $guarded = ['id_jadwal'];
    public $timestamps = false;

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'id_admin', 'id_admin');
    }

    public function penyiar()
    {
        return $this->belongsTo('App\Models\Penyiar', 'id_penyiar', 'id_penyiar');
    }
}