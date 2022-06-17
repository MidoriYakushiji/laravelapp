<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'お名前を入力下さい。',
        ];
        return view('hello.index', $data);
    }
 
    public function post(Request $request)
    {
        $name = $request->name;
        $data = [
            'msg'=>'こんにちは、' . $name . 'さん！',
        ];
        return view('hello.index', $data);
    }
}  

