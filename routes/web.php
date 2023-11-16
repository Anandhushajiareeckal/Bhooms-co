<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/","App\Http\Controllers\FrontendController@home");




Route::get("/about","App\Http\Controllers\FrontendController@about");




Route::get("/service","App\Http\Controllers\FrontendController@service");

Route::get("/service/{id}","App\Http\Controllers\FrontendController@service_details");


Route::get('/service_detail', function () {
    return view('frontend.service_detail');
});
Route::get("/project/{id}","App\Http\Controllers\FrontendController@project_details");

Route::get('/project_detail', function () {
    return view('frontend.project_detail');
});


Route::get("/project","App\Http\Controllers\FrontendController@project");


// Route::get('/blog', function () {
//     return view('frontend.blog');
// });

Route::get("/blog","App\Http\Controllers\FrontendController@blog");
Route::get("/blog/{id}","App\Http\Controllers\FrontendController@blog_details");



Route::get("/contact","App\Http\Controllers\FrontendController@contact");


Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

Route::get('/home', function () {
    return view('admin.home');
});

Route::get('/admin/contacts', function () {
    return view('admin.contact');
});

Route::get('/alle', function () {
    return view('admin.all');
});



Route::get('/dropdown-content', function () {
    return view('admin.dropdown_content');
})->middleware('auth');

Route::get("/admin/contact","App\Http\Controllers\ContactController@index")->middleware('auth');
Route::post("/admin/contact/add", "App\Http\Controllers\ContactController@store")->name('contact.store');
Route::get("/admin/contact/{id}/delete","App\Http\Controllers\ContactController@destroy")->middleware('auth');
Route::post("/admin/location","App\Http\Controllers\ContactController@location");


Route::get("/admin/home","App\Http\Controllers\HomesController@index")->middleware('auth');
Route::get("/admin/home/view","App\Http\Controllers\HomesController@create")->middleware('auth');
Route::post("/admin/home/add", "App\Http\Controllers\HomesController@store")->middleware('auth');
Route::get("/admin/home/{id}","App\Http\Controllers\HomesController@show")->middleware('auth');
Route::get("/admin/home/{id}/edit","App\Http\Controllers\HomesController@edit")->middleware('auth');
Route::put("/admin/home/{id}/update","App\Http\Controllers\HomesController@update")->middleware('auth');
Route::get("/admin/home/{id}/delete","App\Http\Controllers\HomesController@destroy")->middleware('auth');

Route::get("/admin/about","App\Http\Controllers\AboutController@index")->middleware('auth');
Route::post("/admin/about/{id}/add", "App\Http\Controllers\AboutController@update")->middleware('auth');
Route::get("/admin/about/view","App\Http\Controllers\AboutController@view")->middleware('auth');

Route::get("/admin/service","App\Http\Controllers\ServiceController@index")->middleware('auth');
Route::get("/admin/service/add","App\Http\Controllers\ServiceController@create")->middleware('auth');
Route::post("/admin/service/store","App\Http\Controllers\ServiceController@store")->middleware('auth');
Route::get("/admin/service/{id}","App\Http\Controllers\ServiceController@show")->middleware('auth');
Route::put("/admin/service/{id}/edit","App\Http\Controllers\ServiceController@update")->middleware('auth');
Route::get("/admin/service/{id}/delete","App\Http\Controllers\ServiceController@destroy")->middleware('auth');


Route::get("/admin/project","App\Http\Controllers\ProjectController@index")->middleware('auth');
Route::get("/admin/project/add","App\Http\Controllers\ProjectController@create")->middleware('auth');
Route::post("/admin/project/store","App\Http\Controllers\ProjectController@store")->middleware('auth');
Route::get("/admin/project/{id}","App\Http\Controllers\ProjectController@show")->middleware('auth');
Route::put("/admin/project/{id}/edit","App\Http\Controllers\ProjectController@update")->middleware('auth');
Route::get("/admin/project/{id}/delete","App\Http\Controllers\ProjectController@destroy")->middleware('auth');

Route::get("/admin/blog","App\Http\Controllers\BlogController@index")->middleware('auth');
Route::get("/admin/blog/add","App\Http\Controllers\BlogController@create")->middleware('auth');
Route::post("/admin/blog/store","App\Http\Controllers\BlogController@store")->middleware('auth');
Route::get("/admin/blog/{id}","App\Http\Controllers\BlogController@show");
Route::put("/admin/blog/{id}/edit","App\Http\Controllers\BlogController@update")->middleware('auth');
Route::get("/admin/blog/{id}/delete","App\Http\Controllers\BlogController@destroy")->middleware('auth');

//admin_testimonial
Route::get("/admin/testimonial","App\Http\Controllers\TestimonialController@index");
Route::get("/admin/testimonial/add","App\Http\Controllers\TestimonialController@create")->middleware('auth');
Route::post("/admin/testimonial/store","App\Http\Controllers\TestimonialController@store")->middleware('auth');
Route::get("/admin/testimonial/{id}","App\Http\Controllers\TestimonialController@show")->middleware('auth');
Route::put("/admin/testimonial/{id}/edit","App\Http\Controllers\TestimonialController@update")->middleware('auth');
Route::get("/admin/testimonial/{id}/delete","App\Http\Controllers\TestimonialController@destroy")->middleware('auth');


Route::get("/admin/drop-down/{id}","App\Http\Controllers\DropdownController@open")->middleware('auth');
Route::get("/admin/drops/{id}/add","App\Http\Controllers\DropdownController@show")->middleware('auth');
Route::post("/admin/drops/{id}/store","App\Http\Controllers\DropdownController@store")->middleware('auth');
Route::get("/admin/drops/{id}/edit","App\Http\Controllers\DropdownController@view")->middleware('auth');
Route::put("/admin/drops/{id}/update","App\Http\Controllers\DropdownController@update")->middleware('auth');
Route::get("/admin/drops/{id}/delete","App\Http\Controllers\DropdownController@distroy")->middleware('auth');
Route::get("/admin/dropdown","App\Http\Controllers\DropdownController@mmenu")->middleware('auth');


Route::get("/common/{id}","App\Http\Controllers\DropdownController@common");

Route::get("/admin/drop-down/{id}","App\Http\Controllers\DropdownController@open")->middleware('auth');
Route::get('/settings', function () {
    return view('admin.settings.social_media');
});                                                                                         
Route::get("/admin/social","App\Http\Controllers\SettingsController@social")->middleware('auth');
Route::get("/admin/social/view","App\Http\Controllers\SettingsController@social_view")->middleware('auth');
Route::post("/admin/social/add","App\Http\Controllers\SettingsController@social_store")->middleware('auth');
Route::get("/admin/social/{id}/edit","App\Http\Controllers\SettingsController@social_edit")->middleware('auth');
Route::put("/admin/social/{id}/update","App\Http\Controllers\SettingsController@social_update")->middleware('auth');
Route::get("/admin/social/{id}/delete","App\Http\Controllers\SettingsController@social_destroy")->middleware('auth');


Route::get("/admin/icon","App\Http\Controllers\SettingsController@icon")->middleware('auth')->middleware('auth');
Route::post("/admin/icon/{id}/update","App\Http\Controllers\SettingsController@icon_update")->middleware('auth');

Route::get("/admin/menu","App\Http\Controllers\SettingsController@menu")->middleware('auth');
Route::post("/admin/menu/store","App\Http\Controllers\SettingsController@menu_store")->middleware('auth');
Route::get("/admin/menu/add","App\Http\Controllers\SettingsController@menu_add")->middleware('auth');
Route::get("/admin/menu/{id}/edit","App\Http\Controllers\SettingsController@menu_edit")->middleware('auth');
Route::put("/admin/menu/{id}/update","App\Http\Controllers\SettingsController@menu_update")->middleware('auth');
Route::get("/admin/menu/{id}/delete","App\Http\Controllers\SettingsController@menu_destroy")->middleware('auth');
Route::get("/new/{id}","App\Http\Controllers\SettingsController@menu_view");
Route::post("/admin/menu/{id}","App\Http\Controllers\SettingsController@menu_change");



Route::get("/admin/contents/service","App\Http\Controllers\ContentsController@service_view")->middleware('auth');
Route::post("/admin/contents/service-add","App\Http\Controllers\ContentsController@service_update")->middleware('auth');
Route::get("/admin/contents/project","App\Http\Controllers\ContentsController@project_view")->middleware('auth');
Route::post("/admin/contents/project-add","App\Http\Controllers\ContentsController@project_update")->middleware('auth');
Route::get("/admin/contents/blog","App\Http\Controllers\ContentsController@blog_view")->middleware('auth');
Route::post("/admin/contents/blog-add","App\Http\Controllers\ContentsController@blog_update")->middleware('auth');


























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
