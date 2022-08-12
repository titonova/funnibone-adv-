<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Joke extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','authed_author_id','author_display_name','body','joke_format','punchline'];
}
