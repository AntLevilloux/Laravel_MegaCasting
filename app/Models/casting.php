<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casting extends Model
{
    use HasFactory;
    protected $table = 'casting';

    public $timestamps = false;

    // Permet l'affectation de masse pour ces colonnes
    protected $fillable = [
        'libelle', // Ajoutez cette ligne
        'type', // Ajoutez cette ligne
        'description', // Ajoutez cette ligne
        'date', // Ajoutez cette ligne
        'adresse', // Ajoutez cette ligne
        // Ajoutez les autres colonnes fillable ici si nécessaire
    ];
}
