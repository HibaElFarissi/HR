<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [

        'CIN', 'Nom', 'Prenom' ,'Sexe', 'Date_Naissance' ,
        'Téléphone', 'Email', 'Adresse',

    ];

    protected $table = 'personnels';
    
}
