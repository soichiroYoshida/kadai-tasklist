<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model

{
   protected $guarded = ['user_id'];
}
