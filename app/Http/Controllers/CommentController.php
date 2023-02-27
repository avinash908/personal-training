<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleCommentRequest;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function article_store(ArticleCommentRequest $request, $post)
    {
        $post = Post::find($post);
        $post->comments()->create($request->except('_token','captcha'));
        return redirect()->back()->with('success','Comment submited');
    }
    public function review_store(ArticleCommentRequest $request, $user)
    {
        $user = User::find($user);
        $review = $user->reviews()->create([
            'first_name'    => $request->input('first_name'),
            'last_name'     => $request->input('last_name'),
            'email'         => $request->input('email'),
            'body'          => $request->input('body')
        ]);
        
        // remaining store the star rating based on revies relation
        $review->rating()->create([
            'knowledge_rating'              =>$request->input('knowledge_rating'),
            'training_technique_rating'     =>$request->input('training_technique_rating'),
            'communication_rating'          =>$request->input('communication_rating'),
            'results_rating'                =>$request->input('results_rating'),
            'service_quality_rating'        =>$request->input('service_quality_rating')
        ]);
        return redirect()->back()->with('success','Review submited');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
