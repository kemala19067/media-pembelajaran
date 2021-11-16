<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class BuatForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::all();
        return view('forum.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Forum;
        return view('forum.index', compact(
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
    return redirect('forum');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        // return view('komens', [
        //     "title" => "Komentar",
        //     "forum" => $forum
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(course::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}


// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB;


// class ForumController extends Controller
// {
//     public function index(){
//         return view('forum.index');
//     }

//     public function addforum(Request $request){
//       $request->validate([
//           'title'=>'required',
//           'slug' => 'required',
//           'content'=>'required'
//     ]);
//     $query = DB::table('forums')->insert([
//         'title'=>$request->input('title'),
//         'slug'=>$request->input('slug'),
//         'content'=>$request->input('content')
//     ]);
//     if($query){
//        return back()->with('success','Berhasil membuat postingan !!');
//     }
//     }

// }
