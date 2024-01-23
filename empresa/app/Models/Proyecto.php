<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];
    public function encargado() {
        return $this->belongsTo(Encargado::class);
    }

    public function tematica() {
        return $this->belongsTo(Tematica::class);
    }
}
