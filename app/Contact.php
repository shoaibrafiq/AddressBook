<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=['firstname','surname','address','phone','email'];
}
