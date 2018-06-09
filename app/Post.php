<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  // all these values the model set it as defaulte
    //Table Name 
    Protected $table ='posts';
    // Primary Key 
    Public $primayKey = 'id';
    //Timestamps 
    Public $timestamps = true;
    //////// Untill Here /////////////

    public function user(){
        return $this->belongsTO('App\User');
    }
    
}
