<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
class Person extends Model
{
=======

class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|max:150'
   );

>>>>>>> jissyu1
    public function getData()
    {
       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }
<<<<<<< HEAD
    protected $guarded = array('id');

    public static $rules = array(
       'name' => 'required',
       'mail' => 'email',
       'age' => 'integer|min:0|max:150'
    );

    public function boards()
    {
       return $this->hasMany('App\Board');
    }
=======
    
   //  public function find(Request $request)
   //  {
   //     return view('person.find',['input' => '']);
   //  }

   //  public function search(Request $request)
   //  {
   //     $item = Person::find($request->input);
   //     $param = ['input' => $request->input, 'item' => $item];
   //     return view('person.find', $param);
   //  }
>>>>>>> jissyu1
}
