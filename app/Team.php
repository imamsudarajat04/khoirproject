<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $fillable = ['name', 'devision_id', 'avatar', 'facebook_link', 'twitter_link', 'instagram_link', 'linkedin_link'];
}
