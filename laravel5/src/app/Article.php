<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   // protected $table = 'articles';
    protected $primaryKey = 'id';
    public $incrementing = TRUE;
    public $timestamps = TRUE;

    //разрешаю запись поля
    protected $fillable = ['name'];

    //Запрещаю запись поля
    protected $quarded = ['*'];
}
