<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ForumController extends Controller
{
    public function index(){
        return view('forum.index');
    }

    public function addforum(Request $request){
      $request->validate([
          'title'=>'required',
          'content'=>'required'
    ]);
    $query = DB::table('forums')->insert([
        'title'=>$request->input('title'),
        'content'=>$request->input('content')
    ]);

   if($query){
       return back()->with('success','Berhasil membuat postingan !!');
   }
      }
    }
