<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientImage extends Model
{
    protected $table = 'client_images';
    protected $fillable = ['name', 'image'];
}