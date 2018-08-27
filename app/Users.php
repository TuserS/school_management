<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table name
    public  $table = 'users';
    //primary key
    public $primaryKey= 'id';
    //TIme stamps
    public $timestamps= true;
}
