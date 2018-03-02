<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\NewsCRUD\app\Models\Article;
use Backpack\NewsCRUD\app\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $search_term = $request->input('q');
      $page = $request->input('page');

      if ($search_term) {
          $articles = Article::published()->where('title', 'LIKE', '%'.$search_term.'%')->latest()->paginate(10);
      } else {
          $articles = Article::published()->latest()->paginate(10);
      }

      return view('pages.blog.index', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category, Article $article)
    {
      return view('pages.blog.show', compact('article'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function showCategory(Category $category)
    {
      $articles = Article::published()->where('category_id', $category->id)->latest()->paginate(10);
      return view('pages.blog.index', compact('articles'));
    }


}
