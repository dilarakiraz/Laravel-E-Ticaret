<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MesssageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopcartController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');

Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::post('/listas', [HomeController::class, 'listas'])->name('listas');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');
Route::get('/product/{id}/{slug}',[HomeController::class,'product'])->name('product');



//Admin
Route::middleware('auth')->prefix('admin')->group(function (){ //prefix ile ön ad ekleme,gruplama
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

    Route::get('/home', [HomeController::class, 'index'])->name('homepage');
    Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');

    #Category
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::post('category/update/{id}',[\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::get('category/delete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

    #Product
    Route::prefix('product')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\ProductController::class,'index'])->name('admin_products');
        Route::get('/create',[\App\Http\Controllers\Admin\ProductController::class,'create'])->name('admin_product_add');
        Route::post('store',[\App\Http\Controllers\Admin\ProductController::class,'store'])->name('admin_product_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('admin_product_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update'])->name('admin_product_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\ProductController::class,'destroy'])->name('admin_product_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ProductController::class,'show'])->name('admin_product_show');
    });

    #Message
    Route::prefix('messages')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[\App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
    });

    #Sales
    Route::prefix('order')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [\App\Http\Controllers\Admin\SalesController::class, 'index'])->name('admin_sales');
        Route::get('list/{status}', [\App\Http\Controllers\Admin\SalesController::class, 'list'])->name('admin_sales_list');
        Route::post('create', [\App\Http\Controllers\Admin\SalesController::class, 'create'])->name('admin_sales_add');
        Route::post('store', [\App\Http\Controllers\Admin\SalesController::class, 'store'])->name('admin_sales_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\SalesController::class, 'edit'])->name('admin_sales_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\SalesController::class, 'update'])->name('admin_sales_update');
        Route::post('itemupdate/{id}', [\App\Http\Controllers\Admin\SalesController::class, 'itemupdate'])->name('admin_sales_item_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\SalesController::class, 'destroy'])->name('admin_sales_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\SalesController::class, 'show'])->name('admin_sales_show');
    });

    #ProductImage
    Route::prefix('image')->group(function (){
        Route::get('/create/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}',[\App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[\App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });
    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update',[\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[\App\Http\Controllers\UserController::class,'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile',[\App\Http\Controllers\UserController::class,'index'])->name('userprofile');

    #Product
    Route::prefix('product')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [ProductController::class, 'index'])->name('user_products');
        Route::get('create', [ProductController::class, 'create'])->name('user_product_add');
        Route::post('store', [ProductController::class, 'store'])->name('user_product_store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('user_product_edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('user_product_update');
        Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('user_product_delete');
        Route::get('show', [ProductController::class, 'show'])->name('user_product_show');
    });

    #ShopCart
    Route::prefix('shopcart')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [ShopcartController::class, 'index'])->name('user_shopcart');
        Route::post('store/{id}', [ShopcartController::class, 'store'])->name('user_shopcart_add');
        Route::post('update/{id}', [ShopcartController::class, 'update'])->name('user_shopcart_update');
        Route::get('delete/{id}', [ShopcartController::class, 'destroy'])->name('user_shopcart_delete');
    });

    #Sales
    Route::prefix('sales')->group(function () {
        // Route assigned name "admin.users"...
        Route::get('/', [\App\Http\Controllers\SalesController::class, 'index'])->name('user_sales');
        Route::post('create', [\App\Http\Controllers\SalesController::class, 'create'])->name('user_sales_add');
        Route::post('store', [\App\Http\Controllers\SalesController::class, 'store'])->name('user_sales_store');
        Route::get('edit/{id}', [\App\Http\Controllers\SalesController::class, 'edit'])->name('user_sales_edit');
        Route::post('update/{id}', [\App\Http\Controllers\SalesController::class, 'update'])->name('user_sales_update');
        Route::get('delete/{id}', [\App\Http\Controllers\SalesController::class, 'destroy'])->name('user_sales_delete');
        Route::get('show/{id}', [\App\Http\Controllers\SalesController::class, 'show'])->name('user_sales_show');
    });

});



Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login'); //sayfa çağırırken get
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
