<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminAdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        return view('welcome');
    }
}
