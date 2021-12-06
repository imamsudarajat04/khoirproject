<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    protected $table = 'footer_settings';

    protected $fillable = [
        'footer_title',
        'footer_address',
        'footer_phone',
        'footer_email',
        'footer_copyright',
        'footer_designed',
        'footer_twitter',
        'footer_facebook',
        'footer_instagram',
        'footer_youtube',
    ];
}
