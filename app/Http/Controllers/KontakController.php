<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'

        ]);

        $query = DB::table('contact')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message')
        ]);

       if($query){
           return back()->with('success','Berhasil terkirim !!');
       }
    }
    
}
