<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\CategoriesController;


Auth::routes();

Route::get('Ethiopia', function(){
    return view('web/Ethiopia');
});

Route::get('Cameroon', function(){
    return view('web/Cameroon');
});

Route::get('Uganda', function(){
    return view('web/Uganda');
});
Route::get('CameroonDetails', function(){
    return view('web/CameroonDetails');
});


Route::get('/', [HomeController::class, 'index'])->name('home.page');
Route::get('/about', [HomeController::class, 'aboutIndex'])->name('about');
Route::get('/services', [HomeController::class, 'aboutServices'])->name('services');
Route::get('/services/{id}', [HomeController::class, 'servicesDetails'])->name('servicesDetails');
Route::get('/team', [HomeController::class, 'teamIndex'])->name('team');
Route::get('/products/view', [HomeController::class, 'productsView'])->name('productsView');
Route::get('/products/{id}', [HomeController::class, 'products'])->name('products');
Route::get('/products/details/{id}', [HomeController::class, 'productDetails'])->name('products_details');
Route::get('/products/details/show/{id}', [HomeController::class, 'Product_details_show'])->name('products_details_show');
Route::get('/contact', [HomeController::class, 'contactIndex'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [AdminHomeController::class, 'index'])->name('dashboard.home');


    Route::get('admin/dashboard/products', [ProductsController::class, 'index'])->name('productsPage');

    Route::get('admin/dashboard/products/edit/{id}', [ProductsController::class, 'edit'])->name('productsPageEdit');
    Route::put('admin/dashboard/products/update/{id}', [ProductsController::class, 'productsUpdate'])->name('productsUpdate');

    Route::get('admin/dashboard/products/sections/{sub_section_id}', [ProductsController::class, 'productsDetailsIndex'])->name('productsDetailsEdit');
    Route::put('admin/dashboard/products/sections/update/{sub_section_id}', [ProductsController::class, 'productsDetailsUpdate'])->name('productsDetailsUpdate');

    Route::get('admin/dashboard/products/sections/show/{section_id}', [ProductsController::class, 'productsDetailsShow'])->name('productsDetailsShowEdit');
    Route::put('admin/dashboard/products/sections/show/update/{section_id}', [ProductsController::class, 'productsDetailsShowUpdate'])->name('productsDetailsShowUpdate');

    Route::get('admin/dashboard/team/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::put('admin/dashboard/team/update', [TeamController::class, 'update'])->name('team.update');


    Route::get('admin/dashboard/services/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('admin/dashboard/services/update', [ServicesController::class, 'update'])->name('services.update');


    Route::get('admin/dashboard/contact', [ContactController::class, 'indexDashboard'])->name('admin.dashboard.contact');


    Route::get('admin/dashboard/change-password', [UserController::class, 'showChangePasswordForm'])->name('admin.dashboard.change.password');
    Route::put('admin/dashboard/change-password/changePassword', [UserController::class, 'changePassword'])->name('admin.dashboard.change.password.changePassword');

});
