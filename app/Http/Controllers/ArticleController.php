<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Inertia\Inertia;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Article/Index', [
            'articles' => Article::orderBy('created_at','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Article/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        Article::create($request->validate([
            'title' => ['required', 'max:150'],
            'author' => ['required', 'max:50'],
            'content' => ['required'],
        ]));

        return Inertia::render('Article/Index', [
            'articles' => Article::orderBy('created_at','desc')->get(),
            'success' => true,
            'message' => 'New article has been created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return Inertia::render('Article/Edit', [
            'articles' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article->update($request->validate([
            'title' => ['required', 'max:150'],
            'author' => ['required', 'max:50'],
            'content' => ['required'],
        ]));

        return Inertia::render('Article/Index', [
            'articles' => Article::orderBy('created_at','desc')->get(),
            'success' => true,
            'message' => 'Article has been updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return Inertia::render('Article/Index', [
            'articles' => Article::orderBy('created_at','desc')->get(),
            'success' => true,
            'message' => 'Article has been deleted successfully'
        ]);
    }
}
