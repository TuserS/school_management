<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_courses extends Model
{
    //Table name
    public  $table = 'user_courses';
    //primary key
    public $primaryKey= 'id';
    //TIme stamps
    public $timestamps= true;
}
