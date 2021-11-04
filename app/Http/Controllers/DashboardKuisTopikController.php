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
        return view('dashboard.kuis.topik.index', [
            'kuisis' => Kuis::all()
        ]);
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
    public function edit(Kuis $kuis)
    {
        $model = Kuis::find($kuis)->first();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuis  $kuis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuis $kuis)
    {
        Kuis::destroy($kuis->id);
        return redirect('/dashboard/courses')->with('success', 'Topik telah dihapus!');
    }
}
