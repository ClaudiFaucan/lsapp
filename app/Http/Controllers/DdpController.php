<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\Ddp;
use View;
use Datatables;

class DdpController extends Controller
{

    protected $rules =
    [
        'nom' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i'
        
    ];

 

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = new Ddp();
            
            $post->nom = $request->nom; 
            $post->numero = $request->numero; 
            $post->mail = $request->mail; 
            $post->rappel = $request->rappel;
            $post->projet = $request->projet;
            $post->type_logement = $request->formtype_logement;
            $post->etat = $request->formetat;
            $post->travaux = $request->formtravaux;
            $post->residence = $request->formresidence;
            $post->meuble = $request->formmeuble;
            $post->loyer_attendu = $request->formloyer_attendu;
            $post->ville = $request->formville;
            $post->situation = $request->formsituation;
            $post->prix = $request->formprix;
            $post->apport = $request->formapport;
            $post->secteur = $request->formsecteur;
            $post->contrat = $request->formcontrat;
            $post->revenus = $request->formrevenus;
            $post->secteurduo = $request->formsecteurduo;
            $post->contratduo = $request->formcontratduo;
            $post->revenusduo = $request->formrevenusduo;
            $post->revenus_add = $request->formrevenus_add;
            $post->primes = $request->formprimes;
            $post->loyer_actu = $request->formloyer_actu;
            $post->autre_credit = $request->formautre_credit;

            
            $post->save();
            return response()->json($post);
        }
    } 

}
