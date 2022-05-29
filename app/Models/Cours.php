<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = "cours";
    protected $primaryKey = "Idcours";
    public $timestamps = false;

    protected $fillable = ['libelle'];
}
