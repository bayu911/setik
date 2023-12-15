<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyiar extends Model
{
    protected $table = 'penyiar';
    protected $primaryKey = 'id_penyiar';
    protected $guarded = ['id_penyiar'];
    public $timestamps = false;
}