<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    protected $fillable = [
       'adresse',
       'email',
       'formeJuridique',
       'id',
       'matriculeFiscale',
       'nom',
       'phone',
       'raisonSociale',
       'type'

    ];

   
    use HasFactory;
}
