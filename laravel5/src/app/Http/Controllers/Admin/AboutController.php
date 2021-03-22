<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    //
    
    public function show() {
		
		if(view()->exists('default.about')) {

		    //ДОБАВЛЕНИЯ В БД
		    //DB::insert("INSERT INTO `articles` (`name`, `text`) VALUES (?, ?)", ['test 1', 'TEXT']);

		    //ПОДКЛЮЧЕ К БД И ВЫВОД ПО МЕТОДУ PDO ПОСЛЕДНЕЕ id
		   // $result = DB::connection()->getpdo()->lastInsertId();

            //SQL ЗАПРОСЫ ДЛА РАБОТЫ БД
           // DB::statement('DROP table `articles`');



            //ОБНОВЛЕНИЯ ДАННЫХ В БД
           // $result = DB::update('UPDATE `articles` SET `name` = ?
           //                              WHERE `id` = ?', ["TEST3", 7]);

            //УДАЛЕНИЕ ДАННЫХ
            //$result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [6]);

            //$articles = DB::select("SELECT * FROM `articles`");
           // dump($result);
            //dump($articles);


			return view('default.about')->withTitle('Hello World');			
			
		}
		abort(404);
	}
    
}
