<?php

namespace FarukHaiderBD\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $guarded =[];

    protected $fillable =[
        'name','messege','email','phone',
    ];
}
