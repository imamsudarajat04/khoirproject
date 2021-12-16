<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = "abouts";

    protected $fillable = [
        'title',
        'subtitle',
        'title_point_one',
        'subtitle_point_one',
        'icon_point_one',
        'title_point_two',
        'subtitle_point_two',
        'icon_point_two',   
        'title_point_three',
        'subtitle_point_three',
        'icon_point_three',
    ];
}
