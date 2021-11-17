<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class KomentarForumController extends Controller
{
    public function index()
    {
        return view('komens');
    }

    public function add(Request $request){
        $request->validate([
            'komen'=>'required'

        ]);

        $query = DB::table('komens')->insert([
            'komen'=>$request->input('komen')
        ]);

       if($query){
           return back()->with('success','Berhasil terkirim !!');
       }
    }
    
}
