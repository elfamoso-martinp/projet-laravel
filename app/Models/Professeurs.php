<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeurs extends Model
{
    use HasFactory;

    protected $table = "Professeurs";
    protected $primaryKey = "IdPersonnes";
    public $timestamps = false;

    protected $fillable = ['IdPersonnes', 'instrument'];

    public function personne(){
        return $this->hasOne('User', 'IdPersonnes');
    }
}
