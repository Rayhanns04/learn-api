<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class breakfast extends Model
{
    protected $fillable = ['url', 'nama', 'desc', 'harga'];
}
