<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Models\admin;
use App\Models\confirm_order;
use App\Models\order;

class UserController extends Controller
{
    // function random(){
    //     echo Str::upper(Str::random(6));
    // }
    public function register(Request $req)
    {
        $data = new User;
        $data->name = $req->name;
         $value=$req->name;
        $data->ph_no = $req->ph_no;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->district = $req->district;
        $data->blood_group = $req->blood_group;
        $data->password = "123456";
        // echo $req->pass;exit;
        //$data->otp="0";
        //$result = Mail::to($req->email)->send(new UserMail($req->name));
        // return view('userRegistration');
        //if ($result) {
            $result = $data->save();
            
            return view('userRegistration')->with('success','Your Account created Successfully');
        //}
    }
    public function login(Request $req)
    {
        $val = User::where(['email' => $req->email, 'password' => $req->password])->first();
        // $data=User::where(['password'=>$req->password])->get();
        if ($val) {
            $req->session()->put('user', $val);
            return redirect('search');
        } else {
            echo "does't matched";
        }
    }
    public function order(Request $req)
    {
        $data = new order;
        $id = Session()->get('user')['id'];
        $price=$req->card;

        $data->user_id = $id;
        $data->bank_id = $req->bank_id;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->pin = $req->pin;
        $data->ph_no = $req->ph_no;
        $data->group = $req->group;
        $data->card = $req->card;
        $data->quantity = $req->quantity;
        if($price=='Yes'){
            $data->price=200;
        }else{
            $data->price = ($req->quantity * 7);
        }
        
        $result = $data->save();
        //if ($result > 0) {
            // $req->session('text','booking is done but not confirm');
            return view('search');
        //}
    }
    public function adminLogin(Request $req)
    {
        $data = admin::where(['email' => $req->email, 'password' => $req->password])->first();
        if ($data) {
            $req->session()->put('admin', $data);
            return redirect('adminDashboard');
        } else {
            echo "does't matched";
        }
    }
    public function userAllRecords(){
        $data= confirm_order::paginate(3);
        return view('Dashboard',["data"=>$data]);
    }
}
