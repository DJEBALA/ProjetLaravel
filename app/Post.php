<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Indiquer la table associer au model Contact
    protected $table = 'posts';
    
    //récuperer l'author de post
     public function author()
    {
        return $this->belongsTo('App\User','post_author');
    }
 
}
