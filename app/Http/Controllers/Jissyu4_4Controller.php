<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Jissyu4_4Request;

class Jissyu4_4Controller extends Controller
{
    public function index(Request $request)
    {
        if($request->hasCookie('name')){
				//$dataへクッキーのデータを保存
            $data = array(
                '___(5)___' => ___(6)___,
                'adress' => $request->cookie('adress'),
                'login_id' => $request->cookie('login_id'),
            );
        }else{
            $data =[
                'name' => '',
                'adress' => '',
                'login_id' => '',
            ];
        }
        return view('___(7)___', ['data' => $data]);
    }
    public function post(Jissyu4_4Request $request)
    {
        //全データの取得
        $data = $request->all();
        $response = ___(8)___('jissyu4_4.output',['data' => $data]);
        $response->cookie('name',$data['name'],100);
        ___(9)___;
        $response->cookie('login_id',$data['login_id'],100);

        return $response;

    }
}
