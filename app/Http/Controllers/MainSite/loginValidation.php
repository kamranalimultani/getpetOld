<?php

namespace App\Http\Controllers\MainSite;
use App\Http\Controllers\Controller;
use App\Models\cityModal;
use App\Models\pradeshModel;
use App\Models\usersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;
use TblUsers;

class loginValidation extends Controller
{
    public function showLoginPage()
    {
       
        return view('MainSite2.Login.Login');
    }
    public function showRegister()
    {
        $states=pradeshModel::where('country_id','=','101')->orderBy('name','asc')->get();
        return view('MainSite2.Login.Register',compact('states'));
    }
  public function getList(Request $req)
  {
    if($req->ajax())
    {
        $cities=cityModal::where('state_id','=',$req->cityId)->orderBy('name','asc')->get();
       
        $html='<label class="form-label" for="form3Example1n1">Cities</label>
          <select class="form-select" onchange="getCityValue()" id="cityChange" name="cityName" >
          <option value="0">--City--</option>
          <option value="noCity">--NOT LISTED--</option>
          ';
         
          foreach($cities as $city)
         {
          $html.= '<option value='.$city->id.'>'.$city->name.'</option>';
         } 
        '</select>';
        return $html;
    }
  }
  public function userRegister(Request $req)
  {
    $req->validate([
      'Email'=>'required|unique:tbl_users,user_email',
      'Phone'=>'required',
      'state'=>'required',
      'cityName'=>'required',
      'Pincode'=>'required',
     
      'user_password' => 'same:ConfirmPassword|min:6',
      'ConfirmPassword' => 'required|'
    ]);
  
    $user=new usersModel();
    $name=$req->firstName.' '.$req->LastName;
    $user->user_name=$name;
    $user->user_email=$req->Email;
    $user->user_phone=$req->Phone;
    $user->user_password=Hash::make($req->Password);
    $user->pradesh_id=$req->state;
    $user->city_id=$req->cityName;
    $user->latitude=$req->userLatitude;
    $user->longitude=$req->userLongitude;
    $user->user_pincode=$req->Pincode;
    $result= $user->save();
    if($result)
    {
        session(['userEmail' => $user->user_email]);
        session(['userName' => $user->user_name]);
        return redirect('/');
    }
    else
    {
        return redirect('user/register');
    }
  }
  public function Userlogin(Request $req)
  {
    $req->validate([
      'Email'=>'required',   
      'Password'=>'required'
      ]);
  $user= usersModel::where('user_email', '=' ,$req->Email)
                  ->first();
  if($user) 
  {     
    if(Hash::check( $req->Password,$user->user_password)) 
      {
        
        session(['userEmail' => $user->user_email]);
        session(['userName' => $user->user_name]);
        return redirect('/');
      }
      else
      {
          session(['msg-error' => 'Wrong Credentials']);
          return redirect('user/login');
      }
  }
  }

  public function logoutUser()
  {
    if(session()->has('userEmail'))
    {
      session()->remove('userEmail');
      session()->remove('userName');
    }
    return redirect("user/login");
  }
}
