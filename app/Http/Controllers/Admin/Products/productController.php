<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\MainCategoriesModel;
use App\Models\pImagesModel;
use App\Models\ProductModel;
use App\Models\ultraCatModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class productController extends Controller
{
    
    public function addProductsForm()
    {
        $uCats=ultraCatModel::all();
        return view('Admin.Products.AddProducts',compact('uCats'));
    }
    public function renderCats(Request $req)
    {
       
        if($req->ajax())
        {
            $subCats=MainCategoriesModel::where('ultraCat','=',$req->ultraCat)->get();
            $html='
            <label for="exampleInputEmail1">Sub Category</label>
            <select type="" name="subCat" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            <option value="0">--Choose--</option>';
            foreach($subCats as $cat) 
            {
                $html.= '
                <option value='.$cat->main_cat_id .'>'.$cat->main_cat_name.'</option>';
            }
            '</select>';
        }
        return $html;
                
                
                
    }
    public function addProduct(Request $req)
    {
        $product= new ProductModel();
        if($req->file('ProductMainIage'))
        {
            // Get filename with the extension
            $filenameWithExt = $req->file('ProductMainIage')->getClientOriginalName();
           
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('ProductMainIage')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $req->file('ProductMainIage')->storeAs('public/Admin/Products',$fileNameToStore);
            $product->p_main_image=$fileNameToStore;
        }
        $product->p_cat_id=$req->subCat;
        $product->p_name=$req->productName;
        $product->p_description=$req->productDescription;
        $product->p_price=$req->Price;
        
        
        $result=  $product->save();
        if($req->ProductImage)
            {
      
               
               foreach ($req->ProductImage as $input) 
               {
                 
                  $pIMage=new pImagesModel();
                  $filenameWithExt = $input->getClientOriginalName();
                //   dd($filenameWithExt);
                     //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                 $extension = $input->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $input->storeAs('public/Admin/Products',$fileNameToStore);
                $pIMage->p_id=$product->p_id;
                $pIMage->image_name=$fileNameToStore;
                $pIMage->save();
               }
            }
            if($result)
            {
                session(['msg-success' => 'Product has been added']);
            }
            else
            {
                session(['msg-error' => 'Something went wrong could not add product']);
            }
            return redirect('admin/products/list');

            
           
            
            
    }
    public function listProducts()
    {
        $products=ProductModel::orderBy('p_id',"desc")->get();
       
        return view('Admin.Products.listProducts',compact('products',));
    }
    public function deleteProducts(Request $req)
    {
        $product=ProductModel::find($req->deleteProduct);
        
        $deletefile=storage_path('app/public/Admin/Products/'.$product->p_main_image);
        File::delete($deletefile);
        
        $images=pImagesModel::where('p_id','=',$product->p_id)->get();
        foreach ($images as $image) {
            $deletefile=storage_path('app/public/Admin/Products/'.$image->image_name);
            File::delete($deletefile);
            $image->delete();       
        }
        $result=$product->delete();
        if($result)
        {
            session(['msg-success' => 'Product has been Deleted']);
        }
        else
        {
            session(['msg-error' => 'Something went wrong could not delete product']);
        }
        return redirect('admin/products/list');
        
    }
    public function editForm($id)
    {
        $product=ProductModel::find($id);
        $images=pImagesModel::where('p_id','=',$product->p_id)->get();
      
        return view('Admin.Products.editForm',compact('product',"images"));
    }
    public function editProuct(Request $req)
    {
        $product= ProductModel::find($req->hiddenPID);
        if($req->file('ProductMainIage'))
        {
            // Get filename with the extension
            $filenameWithExt = $req->file('ProductMainIage')->getClientOriginalName();
           
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $req->file('ProductMainIage')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $req->file('ProductMainIage')->storeAs('public/Admin/Products',$fileNameToStore);
            $product->p_main_image=$fileNameToStore;
        }
     
        $product->p_name=$req->productName;
        $product->p_description=$req->productDescription;
        $product->p_price=$req->Price;
        $result=  $product->save();
        
        $images=pImagesModel::where('p_id','=',$product->p_id);
       
        if($req->ProductImage)
            {
      
               
               foreach ($req->ProductImage as $input) 
               {
                 
                  $pIMage=new pImagesModel();
                  $filenameWithExt = $input->getClientOriginalName();
                //   dd($filenameWithExt);
                     //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                 $extension = $input->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $input->storeAs('public/Admin/Products',$fileNameToStore);
                $pIMage->p_id=$product->p_id;
                $pIMage->image_name=$fileNameToStore;
                $pIMage->save();
               }
            }
            if($result)
            {
                session(['msg-success' => 'Product has been added']);
            }
            else
            {
                session(['msg-error' => 'Something went wrong could not add product']);
            }
            return redirect('admin/products/list');
    }
    
    }
