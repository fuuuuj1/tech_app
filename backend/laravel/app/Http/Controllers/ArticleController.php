<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  //==========ここから追加========== ルーティングで指定した、アクションメソッドである indexメソッドの中身を定義していく
  public function index()
  {

    $articles = Article::all()->sortByDesc('created_at');

    return view('articles.index', ['articles' => $articles]);
  }
}
