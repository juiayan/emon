<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    CategoryController,
    SubCategoryController,
    PostController,
    ContactUsController,
    SliderController,
    AdministrativeController,
    AdminCategeoryController,
    FleetController,
    CvFormatController,
    PrincipalServiceController,
};
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SendMailController;


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

Route::get('/', [FrontendController::class, 'index']);
Route::get('getpage/{id}', [FrontendController::class, 'getpagedata']);
Route::get('getsubpage/{id}', [FrontendController::class, 'categoryPage']);
Route::get('onlineapply', [FrontendController::class, 'onlineAdminsion']);
Route::get('about', [FrontendController::class, 'AboutPage']);
Route::get('contact', [FrontendController::class, 'contactPage']);
Route::post('insert-cv', [SendMailController::class, 'insertCv']);
Route::post('insert-complain', [SendMailController::class, 'insertComplain']);
Route::get('career', [FrontendController::class, 'careerPage']);
Route::get('getprofile/{id}', [FrontendController::class, 'getprofilepage']);


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::resource('event','EventController');
        Route::resource('eventimage','EventimageController');
        Route::resource('StudentClass','StudentClassController');
        Route::resource('subject','SubjectController');
        Route::resource('categories', 'CategoryController');
        Route::resource('subcategories', 'SubCategoryController');
        Route::resource('contactus', 'ContactUsController');
        Route::resource('sliders', 'SliderController');
        Route::resource('administrtive', 'AdministrativeController');
        Route::resource('adminicategories', 'AdminCategeoryController');
        Route::resource('fleet', 'FleetController');
        Route::resource('cvformat', 'CvFormatController');
        Route::resource('principal', 'PrincipalServiceController');


        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::get('/getsubcat/{cat_id}',[PostController::class,'getsubcat']);
        Route::get('/getsubcategories/{cat_id}', [SubCategoryController::class, 'getsubcategory']);
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');

        Route::get('galleryimage', [AdministrativeController::class, 'gallery_image'])->name('galleryimage.index');
        Route::post('insertimage', [AdministrativeController::class, 'add_gallery_image'])->name('storeimage');
        Route::put('/gallery-update/{id}',[AdministrativeController::class,'updateimage'])->name('updateimage.update');
        Route::delete('deleteimage/{id}', [AdministrativeController::class, 'imagedelete'])->name('imagedelete');

        Route::get('imagecategory', [AdministrativeController::class, 'imagecategory'])->name('imagecategory.index');
        Route::post('insertimagecategory', [AdministrativeController::class, 'add_image_category'])->name('storeimagecategory');
        Route::put('/imagecategory-update/{id}',[AdministrativeController::class,'update_image_category'])->name('updateimagecategory.update');
        Route::delete('deleteimagecategory/{id}', [AdministrativeController::class, 'deleteimagecategory'])->name('deleteimagecategory');
});
