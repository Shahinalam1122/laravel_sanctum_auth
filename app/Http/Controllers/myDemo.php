<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myDemo extends Controller
{
    public function homePage(){
        //return "Hello";

        $j=0;
        return view('home',["num"=>$j]);

    }

    //---------parameter pass from web.php
    public function aboutPage($learnwithfiz){
        return $learnwithfiz;
    }

    public function contactPage($id){
        return $id;
    }

    public function History($id, $stuName, $dept){
        // return "Id= ".$id."<br>Student name= ".$stuName."<br>Department= ".$dept;
        return view('homepage',["StId"=>$id, "StuName"=>$stuName, "stDept"=>$dept]);

    }

    public function homePage2(){
        $name= "<script>alert('hack')</script>";

        $value= 99;

        //$color= "red";

        $name=array("fiz","khan","mahedi","mithun");
        $countries=array("Bangladesh","Pakistan","India","Arab");
        return view('home',["keyName"=>$name,"number"=>$value,"userName"=>$name,"countryName"=>$countries]);
    }
}
