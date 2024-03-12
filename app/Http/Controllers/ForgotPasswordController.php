<?php

namespace App\Http\Controllers;

use App\Mail\SendOtpMail;
use App\Mail\UserPasswordResetMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Type\Integer;
use App\Models\User;
class ForgotPasswordController extends Controller
{
     //  $otp="";
    //  public function __constructor(){
    //     $this->$otp=rand(10000,99999);
    //    }
   function forgotPassword(Request $req){
      $otp=rand(10000,99999);
      // echo $otp;
      // echo $req->email;
       $data=User::find($req->email);
       $data->otp=$otp;
      $result= $data->save();
      if($result){
        Mail::to($req->email)->send(new SendOtpMail($otp));
        return view('putOtp',['email'=>$req->email]);
      }else{
        echo "Some thing wrong";
      }
      
    }
   public function otpVerify(Request $req){
    $data= User::find($req->email);
    $val=$data->otp;
    //echo $val;
     if($req->otp==$val){
        $data->password=$req->password;
        $result=$data->save();
        if($result){
          Mail::to($req->email)->send(new UserPasswordResetMail($data->name));
          return view('index');
        }
     }
   }
   
}

