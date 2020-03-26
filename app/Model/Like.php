<?php

namespace App\Model;
use App\Model\Reply;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    
    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
