<?php

namespace App\Http\Controllers\MainSite;
use App\Http\Controllers\Controller;
use App\Models\ui_model;
use Illuminate\Http\Request;
use App\Models\MainCategoriesModel;
use App\Models\usersModel;
use Illuminate\Support\Facades\Mail;
use TblUsers;

class mainSiteDashboard extends Controller
{
    public function dashboard()
    {
        $slides=ui_model::all();
        $Maincats=MainCategoriesModel::take(8)->get();;
     
        return view('MainSite2.Home.Home',compact('slides','Maincats'));
    }
    public function about()
    {
        $slides=ui_model::first();
        return view('MainSite2.About.About',compact('slides'));
    }
    public function contact()
    {
        return view('MainSite2.ContactUs.Contact');
    }
    public function sendEmail(Request $req)
    {
        
        
        $data=["senderEmail"=>$req->from,'name'=>$req->name,'phone'=>$req->phone,'message'=>$req->message];
        Mail::send('MainSite2.ContactUs.mail',$data,function($messages)  {
            $messages->to('getpet64@gmail.com');
            $messages->subject('GetPet Contact Us');
            $messages->from('kamran@gmail.com');
        });
        
       // check for failures
        if (Mail::failures()) {
            $html='<div class="alert alert-danger" role="alert">
            Failed to send message
        </div>';
        }
        else
        {
            $html='<div class="alert alert-success" role="alert">
            Message has been sent successfuly!
        </div>';
        }
        return $html ;
            
    }

    public function privacyPolicies()
    {
        return view('MainSite2.PrivacyPolicy.privacyPolicy');
    }
    public function faqs()
    {
        return view('MainSite2.Faq.Faq');
    }

    public function userVisting()
    {
        session()->put(["userVisited"=>"visited"]);
    }
}
