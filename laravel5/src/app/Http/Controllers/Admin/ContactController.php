<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
   
    public function store(ContactRequest $request, $id=FALSE)
    {

//        if ($request->isMethod('post')) {
//
//            $message = [
//                'name.required' => 'ПОЛЕ :attribute обязателен к заполнению'
//            ];
//
//            $validator = Validator::make($request->all(), [
//                'name'=>'required'
//            ], $message);
//
//            //проверка на ошибок валидатора
//            if ($validator->fails()) {
//                return redirect()->route('contact')->withErrors($validator)->withInput();
//            }
//        }

        return view('default.contact', ['title' => 'Contacts']);

    }

    public function show() {
        return view('default.contact',['title'=>'Contacts']);
    }

}
    

