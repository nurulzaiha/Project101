<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;
    protected $table = 'ARM_Lokasi';
    public $timestamps = false;
    protected $primaryKey = 'Kod';
    public $incrementing = false;
    protected $keyType = 'string';

}
