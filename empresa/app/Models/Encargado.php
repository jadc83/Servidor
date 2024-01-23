<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    protected $fillable = ['encargado'];
    public function proyectos(){
        return $this->hasMany(Proyecto::class);
    }

}
