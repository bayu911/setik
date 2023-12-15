<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musik extends Model
{
    protected $table = 'musik';
    protected $primaryKey = 'id_musik';
    protected $guarded = ['id_musik'];
    public $timestamps = false;
}