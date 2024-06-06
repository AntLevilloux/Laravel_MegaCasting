<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    use HasFactory;
    protected $table = 'postule';

    public $timestamps = false;

    // Permet l'affectation de masse pour ces colonnes
    protected $fillable = [
        'prenom_postule',
        'nom_postule',
        'age_postule',
        'num_postule',
        'mail_postule',
    ];
}

