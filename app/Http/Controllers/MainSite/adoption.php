<?php


namespace App\Http\Controllers\MainSite;
use App\Http\Controllers\Controller;
use App\Models\adoptionModel;
use App\Models\cityModal;
use App\Models\MainCategoriesModel;
use App\Models\requestModal;
use App\Models\usersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
class adoption extends Controller
{
   public function adoptionLandingPage()
   {
        return view('MainSite2.Adoption.landingPage');
   }
   public function adoptionListinDashboard()
   {
      if(session()->has('userEmail'))
      {
         
      
         $user=usersModel::where('user_email','=',session('userEmail'))->first();
         $products=DB::table('tbl_adoption')->join('main_categories', 'tbl_adoption.category', '=', 'main_categories.main_cat_id')->
         where('userId','=',$user->user_id)->get();
         
         
      
         return view('MainSite2.Adoption.userListingDashboard',compact('products'));
      }
      else
      return redirect('adoption');
   }
   public function addProductForm()
   {
      if(session()->has('userEmail'))
      {
         $user=usersModel::where('user_email','=',session('userEmail'))->first();
        
         $products=DB::table('tbl_adoption')->join('main_categories', 'tbl_adoption.category', '=', 'main_categories.main_cat_id')->
                        where('userId','=',$user->user_id)->get();
         $leftLimit=5-$products->count();
         $cats=MainCategoriesModel::get();
    
         if($leftLimit<=0)
         {
               session(['msg-error' => 'Sorry you have exhausted your listing limit']);
               return redirect('/adoption/listing-dashboard');
         }
         else
         {
            return view('MainSite2.Adoption.UseraddProductForm',compact('cats','leftLimit'));
         }

            
            
      }
      else
      {
         return redirect('/adoption');
      }
   }
   public function addProduct(Request $req)
   {
      $req->validate(['title'=>'required','category'=>'required|not_in:0','Image'=>'required']);
      $adoption=new adoptionModel();
      if(session()->has("userEmail"))
      {
         $user=usersModel::where('user_email','=',session('userEmail'))->first();
         $products=DB::table('tbl_adoption')->join('main_categories', 'tbl_adoption.category', '=', 'main_categories.main_cat_id')->
         where('userId','=',$user->user_id)->get();
         $leftLimit=5-$products->count();
         if($leftLimit<=0)
         {
            session(['msg-error' => 'Sorry you have exhausted your listing limit']);
            return redirect('/adoption/listing-dashboard');
         }
         $adoption->userId=$user->user_id;
         $adoption->category=$req->category;
         $adoption->title=$req->title;
         $adoption->description=$req->description;
        
         
        if($req->file('Image'))
        {
            // Get filename with the extension
            $filenameWithExt = $req->file('Image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('Image')->getClientOriginalExtension();
            // Filename to store
            $Image = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $req->file('Image')->storeAs('public/User/Adoption/',$Image);

            $adoption->image=$Image;
            $result=$adoption->save();
            if($result)
            {
               return redirect('/adoption/listing-dashboard');
            }
        }
      }
   }
   public function EditProductForm($id)
   {
      if(session()->has('userName'))
      {
         $cats=MainCategoriesModel::get();
         $product=adoptionModel::find($id);
         return view('MainSite2.Adoption.UseraddProductForm',compact('cats',"product"));
      }
      else
      {
         return redirect('/adoption');
      }
   }
   public function EditProduct(Request $req)
   {
      $req->validate(['title'=>'required']);
      if(session()->has("userEmail"))
      {
         $user=usersModel::where('user_email','=',session('userEmail'))->first();
         $adoption= adoptionModel::where("userId",'=',$user->user_id)->find($req->productId);
         $adoption->userId=$user->user_id;
         $adoption->title=$req->title;
         $adoption->description=$req->description;
        
        
        if($req->file('Image'))
        {
         $deletefile=storage_path('/public/User/Adoption/'.$adoption->image);
         File::delete($deletefile);
            // Get filename with the extension
            $filenameWithExt = $req->file('Image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('Image')->getClientOriginalExtension();
            // Filename to store
            $Image = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $req->file('Image')->storeAs('public/User/Adoption/',$Image);

            $adoption->image=$Image;
           
        }
        $result=$adoption->update();
          
        if($result)
        {
           return redirect('/adoption/listing-dashboard');
        }
      }
   }
   public function deleteProduct(Request $req)
   {
     
      if(session()->has("userEmail"))
      {
       
         $user=usersModel::where('user_email','=',session('userEmail'))->first();
         $adoption= adoptionModel::where("userId",'=',$user->user_id)->find($req->deleteID);
        
         $deletefile=storage_path('/public/User/Adoption/'.$adoption->image);
            File::delete($deletefile);
          $result=$adoption->delete();
          
        if($result)
        {
           return redirect('/adoption/listing-dashboard');
        }
      }
   }
   public function allProductListing()
   {
      $cities=cityModal::orderBy('name','asc')->get();
      $products=adoptionModel::paginate(10);
      $user=usersModel::where('user_email','=',session('userEmail'))->first();
      return view('MainSite2.Adoption.allPetsList',compact('products','cities','user'));
   }
   public function filterProduct(Request $req)
   {
      if($req->ajax())
      {
         $paginatedData=array();
         $lat=$req->lat;
         $long=$req->long;

         if($lat!=0)
         {
            $unFilteredProducts=adoptionModel::  where('title', 'LIKE', '%'.$req->search.'%')->
                  paginate(10);
            foreach($unFilteredProducts as $product)
            {
               $user=usersModel::find($product->userId);
               $userLat=$user->latitude;
               $userLong=$user->longitude;
               // condition to check kilometers distance;
               $latDeg = deg2rad($lat);
               $lonDeg = deg2rad($long);
               $UserlatDeg = deg2rad($userLat);
               $UserlonDeg = deg2rad($userLong);
       
               $latDelta = $latDeg - $UserlatDeg;
               $lonDelta = $lonDeg - $UserlonDeg;
               $earthRadius=6371000;
               $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                   cos($UserlatDeg) * cos($latDeg) * pow(sin($lonDelta / 2), 2)));
                   $Distance=$angle * $earthRadius*0.001;
                  
                   if($Distance<=50)
                   {
                     array_push($paginatedData,$product);
                   }

            } 
               $currentPage = LengthAwarePaginator::resolveCurrentPage();

               // Define how many items we want to be visible in each page
              $perPage = 10;

               // Slice the array to get the items to display in current page
               $currentPageData = array_slice($paginatedData,($currentPage-1)*$perPage,$perPage);

               // Create our paginator and pass it to the view
               $products = new LengthAwarePaginator($currentPageData, count($paginatedData), $perPage);
         }   
         else
         {
            
            $products=DB::table('tbl_adoption')->join('main_categories', 'tbl_adoption.category', '=', 'main_categories.main_cat_id')->
            where('title', 'LIKE', '%'.$req->search.'%')->
            when($req->catId!=0, function ($query) use ($req) {
               return $query->where('category','=',$req->catId);
           })
           
            
            ->paginate(10);
            
         }
         return view('MainSite2.Adoption.ProductTable',compact('products'));
      }
   }
   public function reqAdoption(Request $req)
   {
      if($req->ajax())
      {
         
         $user= usersModel::where('user_email', '=' ,session('userEmail'))
                                 ->first();
         $petDetails=adoptionModel::find($req->petID);
         // $ownerDetails=usersModel::find($petDetails->userId);
        
         $adoptionRequest=new requestModal();
         $adoptionRequest->OwnerId=$petDetails->userId;
         $adoptionRequest->type="Adoption";
         $adoptionRequest->AdopterId=$user->user_id;
         $adoptionRequest->CityId=$req->phone;
         $adoptionRequest->PetId=$req->petID;
         $result= $adoptionRequest->save();
         if($result)
        {
            session(['msg-success' => 'Request has been sent']);
        }
        else
        {
            session(['msg-error' => 'Something went wrong!']);
        }
         $data=["message"=>"true","user"=>$result];
         return $data;
      }
   }
}
