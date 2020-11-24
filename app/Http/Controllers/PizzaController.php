<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index(){
        return view("index");
    }

    function pizzas() {
        //come with array format
        // $pizzas=[
        //     ["id"=>1,"username"=>"Aung","pizza_name"=>"chicken tikka","topping"=>"salad","sauce"=>"tomato sauce","price"=>8.99],
        //     ["id"=>2,"username"=>"Kyaw","pizza_name"=>"chessy chicken pizza","topping"=>"salad","sauce"=>"tomato sauce","price"=>7.99],
        //     ["id"=>3,"username"=>"Zaw","pizza_name"=>"hot pizza","topping"=>"salad","sauce"=>"tomato sauce","price"=>5.99],
        //     ["id"=>4,"username"=>"MgMg","pizza_name"=>"hot chessy pizza","topping"=>"salad","sauce"=>"tomato sauce","price"=>11.99]
        // ];
        $pizzas=Pizza::all(); //come with object format
        // send data to blade file
        return view('pizzas',['pizzas'=>$pizzas]);

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
            //insert data to database
           $pizza=new Pizza();
           $pizza->username=$req->username;
           $pizza->pizza_name=$req->pizza_name;
           $pizza->topping=$req->topping;
           $pizza->sauce=$req->sauce;
           $pizza->price=$req->price;
           $pizza->save();
        //    return $pizza;
            return back()->with("success","Thank You for your order");
        }else{
            return back()->withErrors($validation);
        }
    }

}
