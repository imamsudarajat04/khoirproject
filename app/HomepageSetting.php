<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomepageSetting extends Model
{
    protected $table = 'homepage_settings';
    protected $fillable = ['header_title', 'header_subtitle', 'header_button_text', 'header_email', 'header_phone'];
}
