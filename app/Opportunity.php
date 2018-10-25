<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact','sales_executive','status','description','value','meeting'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
