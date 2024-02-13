<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function first(){ 
       //compact method 
        // $name="Haris";
        // $email="haris@gmail.com";
        
        // return view("home",compact("name","email"));

        //associative array
        // $data=[
        //     "name"=>"Sir Haris",
        //     "email"=>"haris@aptechnorth.edu.pk",
        // ];

        // return view("home",$data);

        //With Method
        $name="abc";
        $email="abc@gmail.com";

        return view("home")
        ->with("name",$name)
        ->with("email",$email);


    }
    public function test(){  
        return view("test");
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}
