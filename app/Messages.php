<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date','type','subject','body','receipent','sender'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
