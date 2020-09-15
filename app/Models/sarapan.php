<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sarapan extends Model
{
    use HasFactory;
    protected $table = 'sarapanp';
    protected $fillable = ['url', 'nama', 'desc', 'harga'];
}
