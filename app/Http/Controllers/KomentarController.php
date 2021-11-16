<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Komen::all();
        return view('komen', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Komen();
        return view('komen', compact(
            'model'
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
        $model = Komen::find($request->id);
        Komen::updateOrCreate(['id'=> $request->id],
        [
            "nama" => $request->nama,
            "komen" => $request->komen
        ]);

        return redirect('komen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function show(Komen $komen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function edit(Komen $komen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Komen $komen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komen  $komen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komen $komen)
    {
        //
    }
}
