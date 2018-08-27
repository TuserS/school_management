<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
      //Table name
      public  $table = 'courses';
      //primary key
      public $primaryKey= 'id';
      //TIme stamps
      public $timestamps= true;
}
