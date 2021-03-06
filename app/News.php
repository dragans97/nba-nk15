<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function team(){
        return $this->belongsToMany(Team::class, 'news_team');
    }
}
