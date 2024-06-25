<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parametre extends Model
{
    protected $fillable = [
       'compteur',
       'id',
       'prefixe',
       'separateur',
       'table',
       'taille'
 
     ];
 
    use HasFactory;
}
