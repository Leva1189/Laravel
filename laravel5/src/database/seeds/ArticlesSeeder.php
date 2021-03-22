<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 вызов запроса вручную
        DB::insert('insert into `articles` (`name`,`text`,`img`) VALUES (?,?,?)',
            [
                'Blog post',
                '<p>Vivamus sagittis lacus vel...</p>',
                'pic1.jpg'
            ]);

        //2 вызов запроса через Laravel
        DB::table('articles')->insert(
            [
                [
                    'name'=>"Sample blog post",
                    'text'=>"lorem ipsum  swsswswsws",
                    'img'=>'pic2.jpg'
                ],

                [
                    'name'=>"Sample blog post2",
                    'text'=>"lorem wwwww  qqqqqewe",
                    'img'=>'pic2.jpg'
                ]
            ]
        );

        //3 вызов запроса чере модель
        Article::create([
            'name'=>"Sample blog post3",
            'text'=>"Hello wold",
            'img'=>'pic4.jpg'
        ]);

    }
}
