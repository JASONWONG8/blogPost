<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author_id = '1';

        $comments = 'select 
                        c.id as comment_id, c.post_id, c.name as author_name, c.email as author_email, c.body as comment_body
                     from comments as c
                     inner join posts as p on c.post_id = p.id
                     where p.user_id = "'.$author_id.'"
                     ';

        if(isset($_GET["search"]) && !empty($_GET["search"])) {
            $search = $_GET["search"];
            $comments.= 'and (c.name LIKE "%'.$search.'%"
                          or c.email LIKE "%'.$search.'%"
                          or c.body LIKE "%'.$search.'%")';
        }

        $result =  DB::select($comments);

        return response()->json($result, 200, [], \JSON_PRETTY_PRINT);
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
        //
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
