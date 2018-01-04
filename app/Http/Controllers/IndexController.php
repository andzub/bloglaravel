<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class IndexController extends Controller
{
    public function index() {

//        $header = "Блог Ларавел";
//        $message = "Это блог про создание сайта на фремворке Ларавел";

//        $articles = Article::select(['title','text','description'])->get();

        return view('default.index');
    }
}
