<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casting extends Model
{
    use HasFactory;
    protected $table = 'postule';

    public $timestamps = false;

    // Permet l'affectation de masse pour ces colonnes
    protected $fillable = [
        'prenom_postule', // Ajoutez cette ligne
        'nom_postule', // Ajoutez cette ligne
        'age_postule', // Ajoutez cette ligne
        'mail_postule', // Ajoutez cette ligne
        'num_postule', // Ajoutez cette ligne
        // Ajoutez les autres colonnes fillable ici si nécessaire
    ];
}
