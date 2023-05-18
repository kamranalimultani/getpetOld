<?php

namespace App\Http\Controllers\MainSite;
use App\Http\Controllers\Controller;
use App\Models\pImagesModel;
use App\Models\pradeshModel;
use App\Models\ProductModel;
use App\Models\productRequestModal;
use Illuminate\Http\Request;

class mainSiteProduct extends Controller
{
    public function productDetails($id)
    {
        $product=ProductModel::find($id);
        $images=pImagesModel::where('p_id','=',$id)->get();
        return view('MainSite2.Products.productDetails',compact('product','images'));
    }
    public function requestProduct ($id)
    {
        $states=pradeshModel::where('country_id','=','101')->orderBy('name','asc')->get();
        $product=ProductModel::find($id);
        $images=pImagesModel::where('p_id','=',$id)->get();
        return view('MainSite2.Products.requestProduct',compact('product','images','states'));
    
    }     
    public function postRequest(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'phonenumber'=>'required',
            'state'=>'required|not_in:0',
        ]);
            
        $request=new productRequestModal();
        $request->name=$req->name;
        $request->phone=$req->phonenumber;
        $request->StateId=$req->state;
        $request->quantity=$req->quantity;
        $request->message=$req->message;
        $result=$request->save();
        if($result)
        {
            session(['msg-success' => 'Reqeust has been sent']);
        }
        else
        {
            session(['msg-error' => 'Something went wrong!']);
        }

       
        return redirect("product/request/".$req->productID);
        
    }
}
