<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    protected $fillable = ['url', 'nama', 'desc', 'harga'];
}
