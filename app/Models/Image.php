<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $guarded = ['id']; //Tat ca tru id
    protected $timestamp = true;
}
