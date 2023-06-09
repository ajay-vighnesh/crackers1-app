<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AddresController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Categories;
 
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
  
    Route::get('/admin/dashboard', function () {
        return Inertia::render('AdminDashboard');
    })->name('admindashboard');
   
    Route::get('/admin/profile', function () {
        return Inertia::render('Profile');
    })->name('profile');
    
    Route::get('/admin/discount', function () {
        return Inertia::render('Discount');
    })->name('discount');
   
    Route::get('/admin/products', function () {
        return Inertia::render('Products');
    })->name('products');
 
    Route::get('/admin/products/new', function () {
        return Inertia::render('AddProducts', [
            'categories' => Categories::all(),
        ]);
    })->name('addproducts');
    
    Route::get('/admin/collections/new', function () {
        return Inertia::render('AddCollections');
    })->name('addcollections');
   
    Route::get('/admin/discount/new', function () {
        return Inertia::render('AddDiscount',[
            'categories' => Categories::all(),
        ]);
    })->name('adddiscount');

    
    // Route::get('/admin/products/viewall', function () {
    //     return Inertia::render('ViewProducts');
    // })->name('viewproducts');

    Route::get('/admin/products/add', function () {
        // return view('Addmembers');
        return Inertia::render('Addmembers');
    })->name('addmembers');
    
    Route::get('/admin', function () {
        return Inertia::render('Admin');
    })->name('admin');
  
    //  categories //

    Route::get('/admin/categories', function () {
        return Inertia::render('Categories');
    })->name('categories');

    Route::get('/admin/categories/new', function () {
        return Inertia::render('AddCategories');
    })->name('addcategories');

    Route::post('/admin/categories/new', [CategoriesController::class, 'addCategories'])->name('addcategories');

    Route::post('/admin/categories/viewall',[CategoriesController::class, 'index'])->name('viewcategories');
    Route::get('/admin/categories/viewall',[CategoriesController::class, 'create'])->name('allcategories');

    // categories //
   
    Route::get('/admin/products/projects', function () {
        return Inertia::render('Projects');
    })->name('projects');
    
    Route::get('/admin/collections', function () {
        return Inertia::render('Collections');
    })->name('collections');
    
    
    Route::get('/admin/customers', function () {
        return Inertia::render('Customers');
    })->name('customers');

    
    Route::get('/admin/customers/new', function () {
        return Inertia::render('AddCustomers');
    })->name('addcustomers');

    Route::post('/admin/customers/new', [CustomersController::class, 'addCustomers'])->name('addcustomers');
    
    Route::post('/admin/customers/viewall',[CustomersController::class, 'index'])->name('viewcustomers');

    Route::get('/admin/customers/viewall',[CustomersController::class, 'create'])->name('allcustomers');

    
    // address //

    Route::get('/admin/address/new', function () {
        return Inertia::render('AddAddress');
    })->name('addaddress');
    
    Route::post('/admin/address/new', [AddresController::class, 'addAddress'])->name('addaddress');

    Route::post('/admin/address/viewall',[AddresController::class, 'index'])->name('viewaddress');
    Route::get('/admin/address/viewall',[AddresController::class, 'create'])->name('alladdress');


    // Route::view('/add',[MemberController::class,'addData']);
    
    // Route::post('/home',[MemberController::class,'index']);

    // Route::get('add','addmember');
    // Route::post('add',[MemberController::class,'addData']);

    Route::post('/admin/products/add', [MemberController::class, 'addData'])->name('addmembers');
    
    Route::post('/admin/products/new', [ProductController::class, 'addProduct'])->name('addproducts');
    
    
    // Route::get('/add', [MemberController::class, 'addData'])->name('addmembers');

    Route::post('/admin/products/viewall',[ProductController::class, 'index'])->name('viewproducts');
    // Route::get('/admin/products/viewall',[ProductController::class, 'index'])->name('viewproducts');
    Route::get('/admin/products/viewall',[ProductController::class, 'create'])->name('allproducts');


    
    Route::get('/admin/products/{id}/edit', [ProductController::class, 'show'])->name('products.edit');

    Route::post('/admin/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
    
    Route::delete('/admin/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

    
    

    Route::get('/admin/products/edit', function () {
        return Inertia::render('EditProducts');
    })->name('editproducts');
    

    
    // Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

    // Route::get('/projects', [ProjectController::class, 'index'])->name('projects.show');
    // Route::post('/projects', [ProjectController::class, 'store'])->middleware(['subscribed'])->name('projects.store');

    // Route::get('/projects/{id}/pages', [ProjectPageController::class, 'showPages'])->name('projects.pages.show');
      
    

    // Route::get('viewproducts/edit/{id}', 'ProductController@edit');

    // Route::put('viewproducts/{id}', 'ProductController@update');
 
    // Route::get('/admin/product/edit/{{ row.id }}', [ProductController::class, 'show'])->name('editproducts');
    
    // Route::get('/edit/{ row.id }}', [ProductController::class, 'show'])->name('editproducts');
    
    
    
    
    // Route::get('/admin/products/{id}/edit', [ProductController::class, 'show'])->name('editproducts');

    
    // Route::post('/admin/product/{id}/edit', 'ProductController@edit');


});
