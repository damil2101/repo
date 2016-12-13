<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insrequest extends Model
{
    //

    public $timestamps = false;

    protected $guarded = array('id');
    protected $fillable = array('fname','lname','postalCode','phone','email','insurance');

    public static $rules = array(
        'fname' => 'required',
        'lname' => 'required',
        'postalCode'=>'required',
        'phone'=>'required',
        'email'=>'required|email',
        'insurance'=>'required'
    );

}
