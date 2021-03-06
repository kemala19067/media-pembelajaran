<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use Illuminate\Http\Request;

class DashboardKuisTopikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kuis::all();
        
        return view('dashboard.kuis.topik.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Kuis();
        return view('dashboard.kuis.topik.create', compact(
            'model'
        ));
        // return view('dashboard.kuis.topik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = Kuis::find($request->id);
        Kuis::updateOrCreate(['id'=> $request->id],
        [
            "title" => $request->title,
            "body" => $request->body

        ]
        );

        return redirect('dashboard/kuis/topik');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function show(Kuis $kuis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Kuis::where('id',$id)->first();
        return view('dashboard.kuis.topik.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuis $kuis)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $kuis = Kuis::find($id);
        $kuis->delete();
        
        
        return redirect('/dashboard/kuis/topik')->with('success', 'Topik telah dihapus!');
    }
}
