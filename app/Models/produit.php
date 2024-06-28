<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $table = 'produit';
    protected $fillable = [
            'description',
            'id',
            'marque',
            'nom',
            'prix',
            'prixAchatHt',
            'quantiteStock',
            'stockAlerte',
            'taille',
            'tva'
 
     ];
     public function parametre()
     {
         return $this->belongsTo(Parametre::class);
     }
 
 
    use HasFactory;
}
