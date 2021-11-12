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
      
}
public function show($id)
{
    $data = File::find($id);
    return view('lihatmateri', compact('data'));
}
public function download($file)
{
    return response()->download('storage/'.$file);
}
}

