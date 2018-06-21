<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ddp extends Model
{
    protected $table = 'ddps';
    protected $fillable = ['nom','numero','mail','rappel','projet','type_logement','etat','travaux','residence','meuble','loyer_attendu','ville','situation','prix','apport','secteur','contrat','revenus','secteurduo','contratduo','revenusduo','revenus_add','primes','loyer_actu','autre_credit','created_at','updated_at'];
}
