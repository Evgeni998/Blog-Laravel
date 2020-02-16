<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;


class PostsController extends Controller
{
    //createArticle();
    //updateArticle();
    //deleteArticle();
    //getArticles();

   
  
    //Reference the form from here and store the results in  storeArticle(Request $request) function
    public function createArticle() {
        return view('createArticle');
    }

    public function updateArticle(Request $request, $id) {
           //Validate the request from the user
           $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'text' => 'required',
            

        ]);
        //Fetch the data that the user entered

        $article = Articles::find($id);
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->keywords = $request->input('keywords');
        $article->category_id = $request->input('category_id');
        
        $article->save();
        return redirect('/articles');
    }

    public function editArticle($id) {
        $article = Articles::find($id);
        return view('editArticle')->with('article', $article);
    }

    public function deleteArticle($id) {
        $post = Articles::find($id);
        $post->delete();
        return redirect('/articles');
    }
    
    public function getArticles() {
        //Loop through all the articles in the database and shows them on the screen
        $articles = Articles::orderBy('created_at', 'desc')->get();
        
        return view('getArticle')->with('articles',$articles);
    }

    public function show() {
        //Loads the main page
        return view("welcome");
    }

    public function showArticle($id) {
        //Show a specific article(depending on the user id)
        $article = Articles::find($id);
        return view('showArticles')->with('article', $article);
    }

    public function storeArticle(Request $request) {
        //Validate the request from the user
        $this->validate($request, [
            'title' => 'required',
            'category_id' => 'required',
            'text' => 'required',
            

        ]);
        //Fetch the data that the user entered and insert it into the database
        $article = new Articles();
        $article->title = $request->input('title');
        $article->text = $request->input('text');
        $article->keywords = $request->input('keywords');
        $article->category_id = $request->input('category_id');
        
        $article->save();
        return redirect('/articles');
    }
}
