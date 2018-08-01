<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     // Guarantee the creation when sended multiple data even some are not model member
     protected $guarded = array();
     // Means the mapped table don't enable created_at and updated_at
     public $timestamps = false;
}
