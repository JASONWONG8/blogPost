<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author_id = '1';

        $posts = DB::table('posts')
                    ->select('id as post_id','title as post_title', 'body as post_body', 'user_id as author_id', 'total_comments as total_number_of_comments')
                    ->where('user_id', '=', $author_id)
                    ->orderBy('total_comments', 'desc')
                    ->get();

        return response()->json($posts, 200, [], \JSON_PRETTY_PRINT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author_id = '1';

        if(Post::where('id', $id)->where('user_id', $author_id)->exists()){
            
            $post = DB::table('posts')
                    ->select('id as post_id','title as post_title', 'body as post_body', 'user_id as author_id', 'total_comments as total_number_of_comments')
                    ->where('id', '=', $id)
                    ->get();

            return response()->json($post, 200, [], \JSON_PRETTY_PRINT);
        
        } else {
            abort(404, "data not found.");
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
