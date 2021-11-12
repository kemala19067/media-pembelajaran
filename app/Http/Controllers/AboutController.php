<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class AboutController extends Controller
{
    public function index()
    {
        $data = Information::all();

        return view('about.index', compact(
            'data'
        ));
    }

    
}
