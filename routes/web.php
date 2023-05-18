<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogPosts\adminBlogPosts;
use App\Http\Controllers\Admin\ManageCategory\manageCategoryController;
use App\Http\Controllers\Admin\ProductRequest\productRequestController;
use App\Http\Controllers\Admin\Products\productController;
use App\Http\Controllers\Admin\UI\ui;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainSite\adoption;
use App\Http\Controllers\MainSite\blogPosts;
use App\Http\Controllers\MainSite\loginValidation;
use App\Http\Controllers\MainSite\mainCategories;
use App\Http\Controllers\MainSite\mainSiteDashboard;
use App\Http\Controllers\MainSite\mainSiteProduct;
use App\Models\MainCategoriesModel;
use App\Models\ProductModel;
use App\Models\productRequestModal;
use App\Models\requestModal;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/coming-soon', function () {
    return view('comingSoon');
});
// Route::get('/', function () {
//     return view('comingSoon');
// });

Route::get('/admin/dashboard', function () {
    return view('Admin.Dashboard.Dashboard');
})->middleware('adminCheck');


Route::get('/admin',[LoginController::class,'loginForm']);
Route::post('/admin/login',[LoginController::class,'loginValidation']);
Route::get('admin/logout',[LoginController::class,'logout'])->middleware('adminCheck');
// admin slide
Route::get('admin/ui/slider/add',[ui::class,'AddSliderForm'])->name('AddSliderForm')->middleware('adminCheck');
Route::post('admin/ui/slider/add',[ui::class,'AddSlider'])->name('AddSlider')->middleware('adminCheck');
Route::get('admin/ui/slider/list',[ui::class,'sliderList'])->name('sliderList')->middleware('adminCheck');
Route::get('admin/ui/slide/edit/{id}',[ui::class,'editSliderForm'])->name('editSliderForm')->middleware('adminCheck');
Route::post('admin/ui/slide/edit',[ui::class,'editSlider'])->name('editSlider')->middleware('adminCheck');
Route::post('admin/ui/slide/delete',[ui::class,'deletslide'])->name('deletslide')->middleware('adminCheck');

// admin main catergory

Route::get('admin/category/list',[manageCategoryController::class,'listCat'])->name('listCat')->middleware('adminCheck');
Route::get('admin/category/add',[manageCategoryController::class,'addCatForm'])->name('addCatForm')->middleware('adminCheck');
Route::post('admin/category/add',[manageCategoryController::class,'addCat'])->name('addCat')->middleware('adminCheck');
Route::get('admin/category/edit/{id}',[manageCategoryController::class,'editCatForm'])->name('editCatForm')->middleware('adminCheck');
Route::post('admin/category/edit',[manageCategoryController::class,'editCat'])->name('editCat')->middleware('adminCheck');
Route::post('admin/category/delete',[manageCategoryController::class,'deleteCat'])->name('deleteCat')->middleware('adminCheck');

//admin posts tags
Route::get('admin/posts/tags',[adminBlogPosts::class,'listTags'])->name('listTags')->middleware('adminCheck');
Route::get('admin/posts/tags/add',[adminBlogPosts::class,'addTagForm'])->name('addTagForm')->middleware('adminCheck');
Route::post('admin/posts/tags/add',[adminBlogPosts::class,'addTag'])->name('addTag')->middleware('adminCheck');
Route::get('admin/posts/tags/edit/{id}',[adminBlogPosts::class,'editTagForm'])->name('editTagForm')->middleware('adminCheck');
Route::post('admin/posts/tags/edit',[adminBlogPosts::class,'editTag'])->name('editTag')->middleware('adminCheck');
Route::post('admin/posts/tags/delete',[adminBlogPosts::class,'deleteTag'])->name('deleteTag')->middleware('adminCheck');
// admin posts
Route::get('admin/posts',[adminBlogPosts::class,'listPost'])->name('listPost')->middleware('adminCheck');
Route::get('admin/posts/add',[adminBlogPosts::class,'addPostsForm'])->name('addPostsForm')->middleware('adminCheck');
Route::post('admin/posts/add',[adminBlogPosts::class,'addPost'])->name('addPost')->middleware('adminCheck');
Route::get('admin/posts/edit/{id}',[adminBlogPosts::class,'editPostForm'])->name('editPostForm')->middleware('adminCheck');
Route::post('admin/posts/edit',[adminBlogPosts::class,'editPost'])->name('editPost')->middleware('adminCheck');
Route::post('admin/posts/delete',[adminBlogPosts::class,'deletePost'])->name('deletePost')->middleware('adminCheck');


// admin products
Route::get('admin/products/list',[productController::class,'listProducts'])->name('listProducts')->middleware('adminCheck');
Route::get('admin/products/add',[productController::class,'addProductsForm'])->name('addProductsForm')->middleware('adminCheck');
Route::get('subCatAjax',[productController::class,'renderCats'])->name('renderCats')->middleware('adminCheck');
Route::post('admin/products/add',[productController::class,'addProduct'])->name('addProduct')->middleware('adminCheck');
Route::post('/admin/products/delete',[productController::class,'deleteProducts'])->name('deleteProducts')->middleware('adminCheck');
Route::get('admin/products/edit/{id}',[productController::class,'editForm'])->name('editForm')->middleware('adminCheck');
Route::post('/admin/products/edit',[productController::class,'editProuct'])->name('editProuct')->middleware('adminCheck');

// admin request

Route::get('/admin/requests',[productRequestController::class,'listRequest'])->name('listRequest')->middleware('adminCheck');






// main site dashboard
Route::get('/',[mainSiteDashboard::class,'dashboard'])->name('dashboard');
// about
Route::get('/about',[mainSiteDashboard::class,'about'])->name('about');
// contact
Route::get('/contact-us',[mainSiteDashboard::class,'contact'])->name('contact');
// privacy policy
Route::get('/privacy-policies',[mainSiteDashboard::class,'privacyPolicies'])->name('privacyPolicies');
Route::get('/faqs',[mainSiteDashboard::class,'faqs'])->name('faqs');
Route::get('/email',[mainSiteDashboard::class,'sendEmail'])->name('sendEmail');
// show all categories
Route::get('/category/all',[mainCategories::class,'allCatsPage'])->name('allCatsPage');


// show category destails

Route::get('/category/{catname}/{id}',[mainCategories::class,'catDetailsPage'])->name('catDetailsPage');
Route::get('product/details/{id}',[mainSiteProduct::class,'productDetails'])->name('productDetails');
Route::get('product/request/{id}',[mainSiteProduct::class,'requestProduct'])->name('requestProduct');
Route::post('product/request',[mainSiteProduct::class,'postRequest'])->name('postRequest');

// usert visitins
Route::get('/userVisting',[mainSiteDashboard::class,'userVisting'])->name('userVisting');

// login and registration work
Route::get('/user/login',[loginValidation::class,'showLoginPage'])->name('showLoginPage');
Route::post('/user/login',[loginValidation::class,'Userlogin'])->name('Userlogin');
Route::get('/user/logout',[loginValidation::class,'logoutUser'])->name('logoutUser');


Route::get('/user/register',[loginValidation::class,'showRegister'])->name('showRegister');
Route::post('/user/register',[loginValidation::class,'userRegister'])->name('userRegister');
// cities render ajax
Route::get('/getCity',[loginValidation::class,'getList'])->name('getList');


// blog posts
Route::get('/blog-posts',[blogPosts::class,'blogPosts'])->name('blogPosts');
Route::get('/blog-post/{id}',[blogPosts::class,'postDetailsPage'])->name('postDetailsPage');

// adoption
Route::get('/adoption',[adoption::class,'adoptionLandingPage'])->name('adoptionLandingPage');
Route::get('/adoption/pets',[adoption::class,'allProductListing'])->name('allProductListing');
Route::get('/adoption/listing-dashboard',[adoption::class,'adoptionListinDashboard'])->name('adoptionListinDashboard');
Route::get('/adoption/user/add-product',[adoption::class,'addProductForm'])->name('addProductForm');
Route::post('/adoption/user/add-product',[adoption::class,'addProduct'])->name('addProduct');
Route::get('/adoption/user/edit/{id}',[adoption::class,'EditProductForm'])->name('EditProductForm');
Route::post('/adoption/user/edit',[adoption::class,'EditProduct'])->name('EditProduct');
Route::post('/adoption/user/delete',[adoption::class,'deleteProduct'])->name('deleteProduct');
Route::get('/adoption/filter',[adoption::class,'filterProduct'])->name('filterProduct');
Route::get('/adoption/req',[adoption::class,'reqAdoption'])->name('reqAdoption');



Route::get('/cache',function(){
    Artisan::call('cache:clear');
});

Route::get('/storage',function(){
    Artisan::call('storage:link');
});
