<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
    
    public function find(Request $request)
    {
       return view('person.find',['input' => '']);
    }

    public function search(Request $request)
    {
       $item = Person::find($request->input);
       $param = ['input' => $request->input, 'item' => $item];
       return view('person.find', $param);
    }
}
