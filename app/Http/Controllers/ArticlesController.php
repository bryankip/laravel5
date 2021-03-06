<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

use App\Http\Requests\ArticleRequest;

use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller {

	//
	public function index(){
		//$articles=Article::all();
		$articles=Article::latest('published_at')->published()->get();
		
		return view('articles.articles',compact('articles'));
	}

	public function show($id){
         $article=Article::findOrFail($id);

         //dd($article->created_at->diffforHumans());
         dd($article->published_at);

         return view('articles.show',compact('article'));
	}

	public function create(){

		return view('articles.create');
	}

	public function store(ArticleRequest $request){

		Article::create($request->all());

		return redirect('articles');

	}

	public function edit($id){
        
        $article=Article::findOrFail($id);

		return view('articles.edit',compact('article'));
	}

	public function update($id,ArticleRequest $request){
     
     $article=Article::findOrFail($id);

     $article->update($request->all());
     
     return redirect('articles');

	}

}
