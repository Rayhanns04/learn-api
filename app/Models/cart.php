<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
   protected $fillable = ['url','nama', 'desc', 'harga'];
}
