<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;
use App\User;
class Transaction extends Model
{
	 use Userstamps;

     protected $guarded =['id'];
    
     protected $table="transactions";
     public function user()
    {
    	return $this->belongsTo(User::class,'user_id','id');
    }
}
