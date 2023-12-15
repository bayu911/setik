<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $table = 'iklan';
    protected $primaryKey = 'id_iklan';
    protected $guarded = ['id_iklan'];
    public $timestamps = false;
}