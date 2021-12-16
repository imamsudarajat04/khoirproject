<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $table = 'global_settings';
    
    protected $fillable = [
        'navbar_title', 
        'primary_color',
        'secondary_color',
        'font_size_title', 
        'font_size_subtitle', 
        'page_banner', 
        'page_banner_about', 
        'page_banner_testimonials',
        'subtitle_services',
        'subtitle_team',
        'subtitle_faq',
        'subtitle_contact',
    ];
}
