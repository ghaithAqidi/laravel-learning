<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //here we can add specific Model functions, for example, the following function returns incomplete tasks.
    public  function scopeIncomplete($query){
        return $query->where('completed', 0)->get();
    }
}
