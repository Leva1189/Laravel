<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Article;

class Core extends Controller
{

    protected static $articles;
    
    
    public function __construct() {
		//$this->middleware('mymiddle');
	}
	
	public static function addArticles($array) {
		//return self::$articles[] = $array;
        Article::create([
            'name'=>'Hello world',
            'text'=>'Some text',
        ]);

		$articles = Article::all();
		dump($articles);

		return;
	}
    
    //list materials
    public function getArticles() {

        echo 'Ответ - '.$id;
		
	}
	
}
