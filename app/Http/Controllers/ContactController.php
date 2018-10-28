<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact() {
    return view('pages.contact');
    }

    function store(Request $request) {
        $name = $request->name;
        //dd($request);
        return redirect()->route('thankyou',['name'=> $name]);
    }
    function thankyou($name,Request $request){
        return view('pages.thankyou')-> with(compact('name'));

    }

}

