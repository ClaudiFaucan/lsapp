<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        return view('page.home');
    }

    public function Simulator(){
        return view('page.simulator');
    }

    public function Step1(){
        return view('page.part1.step1');
    }

    public function Continuer(){
        return view('page.modals.continuer');
    }
}
