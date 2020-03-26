<?php

namespace App\Model;
use App\Model\Question;
use App\Model\Category;
use App\User;
use App\Model\Reply;
use App\Model\Like;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
