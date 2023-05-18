<?php

namespace App\Http\Controllers\MainSite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MainCategoriesModel;
use App\Models\ProductModel;

class mainCategories extends Controller
{
    public function catDetailsPage($catname,$id)
    {
       
        if($id)
        {
            $catDetails=MainCategoriesModel::find($id);
            if($catDetails)
            {
                $products=ProductModel::where('p_cat_id','=',$id)->paginate(8);
                return view('MainSite2.Category.CategoryDetailsPage',compact('catDetails','products'));
    
            }
            else
            {

                return redirect()->back();
            }
        }
       
    

        
    }
    // categoires
    public function allCatsPage()
    {
        $categories=MainCategoriesModel::paginate(4);
        return view('MainSite2.Category.allCatsPage',compact('categories'));
    }


}
