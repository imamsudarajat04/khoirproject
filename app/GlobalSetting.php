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
        'title_profile',
        'subtitle_profile',
        'icon_profile_one',
        'title_profile_one',
        'subtitle_profile_one',
        'icon_profile_two',
        'title_profile_two',
        'subtitle_profile_two',
        'icon_profile_three',
        'title_profile_three',
        'subtitle_profile_three',
        'subtitle_services',
        'subtitle_team',
        'subtitle_faq',
        'subtitle_contact',
    ];
}
