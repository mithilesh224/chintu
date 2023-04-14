<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class userAuth 
{
    
    public function userlogin(Request $req)
    {
       $data = member::where('email',$req['email'])->first();
       if(empty($data)){
        //redirect to signup
       }else{
        if($data->password !== md5($req['password'])){
            //error invalid password
        }
       }
       print_r($data->toArray()); die;
       $member = new member;
        $member->fname = $req['fname']??'';
        $member->lname = $req['lname']??'';
        $member->email = $req['email'];
        $member->password = md5($req['password']);
        $member->save();
       echo"hi g";
        // return redirect('signup')->route('signup')->with('info','User Added Successfully');  
    }
}
