<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $table = 'global_settings';
    protected $fillable = ['navbar_title', 'primary_color'];
}
