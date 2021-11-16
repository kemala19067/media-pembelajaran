<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalKuisController extends Controller
{
    public function index()
    {
        return view('kuis.soalkuis', [
            'title' => 'Soal'
        ]);
       
    }
    }


    

