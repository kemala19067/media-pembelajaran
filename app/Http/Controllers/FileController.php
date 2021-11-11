<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class FileController extends Controller
{
    public function index()
    {
        $data = File::all();
    
        return view('file', compact(
            'data'
        ));
    }
    public function store(Request $request)
    {
        $data=new File();
    $file=$request->file;

    $filename=time(). '.'.$file->getClientOriginalExtension();
    $request->file->move('assets,$filename');
    $data->file=$filename;

    $data->name=$request->name;
    $data->description=$request->desription;

    $data->save();
    return redirect()->back();
}

    public function download(Request $request,$file)
    {}
}
