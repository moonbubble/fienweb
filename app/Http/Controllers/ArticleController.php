<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->get(); // Haalt alle artikelen op, nieuwste eerst
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:127',
            'subtitle' => 'string|max:127|nullable',
            'content' => 'required|string',
            'draft' => 'boolean'
        ]);

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'draft' => $request->draft
        ]);

        return redirect(route('articles.index'))->with('status', $article->draft ? 'Concept aangemaakt!' : 'Artikel gepubliceerd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:127',
            'subtitle' => 'string|max:127|nullable',
            'content' => 'required|string',
            'draft' => 'boolean'
        ]);

        $article->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'content' => $request->input('content'),
            'draft' => $request->input('draft')
        ]);

        return redirect()->route('articles.show', $article)->with('status', $article->draft ? 'Concept opgeslagen!' : 'Artikel gepubliceerd!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
