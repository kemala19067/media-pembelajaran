<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class DashboardForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Forum::all();

        return view('dashboard.forum.index', compact(
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
        $model = new Forum;
        return view('dashboard.forum.create', compact(
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
    $model = Forum::find($request->id);
    Forum::updateOrCreate(['id'=> $request->id],
    [
        "title" => $request->title,
        "slug" => $request->slug,
        "content" => $request->content
    ]
    );
    return redirect('dashboard/forum');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        $model = Forum::find($forum)->first();
        return view('dashboard.forum.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        $rules = [
            'title' => 'required|max:255',
            'content' => 'required'
        ];

        if($request->slug != $forum->slug) {
            $rules['slug'] = 'required|unique:courses';
        }

        $validatedData = $request->validate($rules);


        forum::where('id', $forum->id)
            ->update($validatedData);

        return redirect('/dashboard/forum')->with('success', 'Forum telah diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        forum::destroy($forum->id);
        return redirect('/dashboard/forum')->with('success', 'Data telah dihapus!');
    }
}
