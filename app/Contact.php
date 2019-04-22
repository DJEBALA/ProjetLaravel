<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //pour que les timestamps ne soient pas pris en compte
    public $timestamps = false; 
    // Indiquer la table associer au model Contact
    protected $table = 'contact';
    

}
