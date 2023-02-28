<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = array('name');


    //collego il modello della entità indipendente alla entità dipendente, la funzione è al plurale perché per un solo type esistono più projects
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
