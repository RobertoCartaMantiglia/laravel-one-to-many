<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = array('slug', 'title', 'description', 'thumb', 'author', 'used_technology', 'type_id');

    //collegao l'entità dipendente a quella indipendente, uso la funzione al singolare perché esiste un solo type per ogni project
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function isThumbUrl()
    {
        return filter_var($this->thumb, FILTER_VALIDATE_URL);
    }
}
