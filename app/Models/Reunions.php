<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunions extends Model
{
    use HasFactory;

    protected $table = "Reunions";
    protected $primaryKey = "IdReunions";
    public $timestamps = false;

    protected $fillable = ['libelle'];

    public function personne(){
        return $this->hasOne('User', 'IdPersonnes');
    }
}
