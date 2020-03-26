<?php

namespace App\Model;
use App\Model\Question;
use App\Model\Category;
use App\User;
use App\Model\Reply;
use App\Model\Like;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    
    public function getRouteKeyName() 
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
