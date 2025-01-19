<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except(['index','detail']);
    }

    public function index(){
        $data = Article::latest()->paginate(5);
        return view('articles.index',['articles' => $data]);
    }

    public function detail($id){
        $data = Article::find($id);
        return view("articles.detail",['article' => $data]);
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('info','Article Deleted.');
    }

    public function edit($id){
        return view("articles.edit",['article' => Article::find($id),'categories' => Category::all()]);
    }

    public function update($id){
        $article = Article::find($id);
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect("/articles")->with('info','Edited article successfully');
    }

    public function add(){
        return view("articles.add",['categories' => Category::all()]);
    }

    public function create(){
        $article = new Article;
        $article->user_id = 1;
        $article->title = request()->title;
        $article->body = request()->body;
        $article->category_id = request()->category_id;
        $article->save();
        return redirect("articles")->with('info','New article added.');
    }
}
