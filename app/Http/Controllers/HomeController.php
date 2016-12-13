<?php

namespace App\Http\Controllers;

use App\Mail\TestMailable;
use Illuminate\Http\Request;
use App\insproduct;
use App\insrequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = insproduct::all();
        return view('home')->with('products', $products);
    }

    public function store(Request $request)
    {

        $this->validate($request,insrequest::$rules);



        $insurance=insproduct::find($request->insurance);
            insrequest::create($request->all());    // doing mass assignments

            Mail::to($request->email)
                ->send(new TestMailable($insurance));
            return view('thankyou')->with('request',$request)
                ->with('insurance',$insurance);




    }
}
