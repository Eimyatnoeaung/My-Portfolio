<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view("index");
    }

    function pizzas() {
        return view('pizzas');
    }
    function insert(Request $req) {
        // return $req->toArray;
        //validation
        $validation=$req->validate([
            'username'=>"required",
            'pizza_name'=>"required",
            'topping'=>"required",
            'sauce'=>"required",
            'price'=>"required",
        ]);

        if($validation){
            return back()->with("success","Thank You for your order");
        }else{
            return back()->withErrors($validation);
        }
    }

}
