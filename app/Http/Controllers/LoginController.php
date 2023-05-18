<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function loginForm()
    {
        if((session()->has('admin')))
        {
            return redirect('admin/dashboard');
        }
        return view("Admin.LOGIN.LoginForm2");
    }

    public function loginValidation(Request $req)
    {
        $req->validate([
            'vUsername'=>'required',   
            'vPassword'=>'required'
            ]);
        $user= AdminModel::where('vUsername', '=' ,$req->vUsername)
                        ->first();
        if($user) 
        {     
          if(Hash::check( $req->vPassword,$user->vPassword)) 
            {
              session()->put('admin', $req->vUsername);
              return redirect('/admin/dashboard');
            }
            else
            {
                session(['msg-success' => 'Wrong Credentials']);
            }
        }
        
        return redirect('/admin');

     
    
    }

    public function logout()
    {
        if(session()->has('admin'))
        {
            session()->remove('admin');
        }
        
        return redirect('admin');
       
    }
}
