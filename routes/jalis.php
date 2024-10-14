<?php

use App\Http\Controllers\Web\Backend\Settings\DynamicPageController;
use App\Http\Controllers\Web\Backend\Settings\GoogleSettingsController;
use App\Http\Controllers\Web\Backend\Settings\MailSettingsController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\Backend\Settings\StripeSettingsController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingsController;
use App\Http\Controllers\Web\backend\Admin\CategoryController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->group(function () {


   //! Route for Category
   Route::controller(CategoryController::class)->group(function (){
      Route::get('/category','index')->name('category.index');
      Route::get('/category/create','create')->name('category.create');
      Route::post('/category/store','store')->name('category.store');
      Route::get('/category/edit/{id}','edit')->name('category.edit');
      Route::patch('/category/update/{id}','update')->name('category.update');
      Route::get('/category/status/{id}','status')->name('category.status');
      Route::delete('/category/delete/{id}','destroy')->name('category.destroy');
   });




    //! Route for Profile Settings
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.setting');
        Route::patch('/update-profile', 'UpdateProfile')->name('update.profile');
        Route::put('/update-profile-password', 'UpdatePassword')->name('update.Password');
        Route::post('/update-profile-picture', 'UpdateProfilePicture')->name('update.profile.picture');
    });

    //! Route for System Settings
    Route::controller(SystemSettingsController::class)->group(function () {
        Route::get('/system-setting', 'index')->name('system.index');
        Route::patch('/system-setting', 'update')->name('settings.update');
    });

    //! Route for Mail Settings
    Route::controller(MailSettingsController::class)->group(function () {
        Route::get('/mail-setting', 'index')->name('mail.setting');
        Route::patch('/mail-setting', 'update')->name('mail.update');
    });

    //! Route for Google Settings
    // Route::controller(GoogleSettingsController::class)->group(function () {
    //     Route::get('/google-setting', 'index')->name('google.setting');
    //     Route::patch('/google-setting', 'update')->name('google.update');
    // });

    //! Route for Stripe Settings
    Route::controller(StripeSettingsController::class)->group(function () {
        Route::get('/stripe-setting', 'index')->name('stripe.index');
        Route::patch('/stripe-setting', 'update')->name('stripe.update');
    });

    //! Route for SocialMedia Settings
    Route::controller(SocialMediaController::class)->group(function () {
        Route::get('/social-media', 'index')->name('social.index');
        Route::post('/social-media', 'update')->name('social.update');
        Route::delete('/social-media/{id}', 'destroy')->name('social.delete');
    });

    //! Route for Dynamic Page Settings
    Route::controller(DynamicPageController::class)->name('settings.')->group(function () {
        Route::get('/dynamic-page', 'index')->name('dynamic_page.index');
        Route::get('/dynamic-page/create', 'create')->name('dynamic_page.create');
        Route::post('/dynamic-page/store', 'store')->name('dynamic_page.store');
        Route::get('/dynamic-page/edit/{id}', 'edit')->name('dynamic_page.edit');
        Route::patch('/dynamic-page/update/{id}', 'update')->name('dynamic_page.update');
        Route::get('/dynamic-page/status/{id}', 'status')->name('dynamic_page.status');
        Route::delete('/dynamic-page/delete/{id}', 'destroy')->name('dynamic_page.destroy');
    });


});
