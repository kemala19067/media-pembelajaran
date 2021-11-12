<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;

class DashboardFileCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = File::all();
    
        return view('dashboard.filecourses.index', compact(
            'data'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new File;
        return view('dashboard.filecourses.create', compact(
            'data'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        {
            $data=new File;
            if($request->file('file')){
                $file=$request->file('file');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $request->file->move('storage/', $filename);
                $data->file= $filename;
            }
            $data->name=$request->name;
            $data->description=$request->description;
            $data->save();
    
            

            return redirect()->back();
            // $model = File::find($request->id);
            // File::updateOrCreate(['id'=> $request->id],
            // [
            //     "name" => $request->name,
            //     "description" => $request->description,
            //     "file" => $request->file
            // ]
            // );
            // return redirect('dashboard/filecourses');
    }}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = File::find($id);
        return view('dashboard.filecourses.details', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = File::find($request->id);
            File::updateOrCreate(['id'=> $request->id],
            [
                "name" => $request->name,
                "description" => $request->description,
                "file"=> $request->file
    
            ]
            );
            return redirect('dashboard/filecourses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = File::find($id);
        $data->delete();
        
        
        return redirect('/dashboard/filecourses')->with('success', 'File telah dihapus!'); 
    }
    
    
}