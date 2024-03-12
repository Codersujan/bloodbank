<?php

namespace App\Http\Controllers;

use App\Models\blood_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class BloodController extends Controller
{
  public function bloodDetails(Request $req)
  {
    
    $result = DB::table('blood_details')->insertGetId(['APOS' => $req->APOS, 'BPOS' => $req->BPOS ,'OPOS' => $req->OPOS,'ABPOS' => $req->ABPOS , 'ANEG' => $req->ANEG, 'BNEG' => $req->BNEG ,'ONEG' => $req->ONEG ,'ABNEG' => $req->ABNEG]);
    if ($result > 0) {
      $req->session('message', 'Successfully Insert');
      return redirect('Dashboard');
    }
  }
  public function bloodStock()
  {
    $id = session()->get('value')['bank_id'];
    $data = DB::table('blood_details')->select('*')->get();
    return view("Bloodstock", ["data" => $data]);
  }
  public function viewDetails($id)
  {

    $data = DB::table('bank_details')->select('*')->get();
    return view('viewDetails', ["data" => $data]);
  }
  public function booknow($id)
  {
    //$data=User::find($id);
    return view('booknow', ['id' => $id]);
  }
  public function stockUpdate(Request $req)
  {
    //$id=session()->get('value')['bank_id'];
    $blood_id = $req->blood_id;
    $val = $req->bloodgroup;
    $data = blood_detail::find($blood_id);
    $data->$val = $req->unit;
    $data->save();
    return redirect('bloodstock');
  }
  public function showOrder()
  {
    $id = session()->get('value')['bank_id'];
    $data = DB::table('bank_details')->join('orders', 'bank_details.bank_id', '=', 'orders.bank_id')
      ->where('bank_details.bank_id', '=', $id)->select('*')->get();
    return view("showorder", ["data" => $data]);
  }
}
