<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            
           // $table->engine = 'InnoDB';
            
            $table->increments('id');///  id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name',255);//Varchar 100
            $table->text('text');//text
            $table->string('img',255);//Varchar 255
            $table->timestamps();//

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
