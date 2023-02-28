<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = array('slug', 'title', 'description', 'thumb', 'author', 'used_technology');

    public function isThumbUrl()
    {
        return filter_var($this->thumb, FILTER_VALIDATE_URL);
    }
}
