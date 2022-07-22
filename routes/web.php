<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DjController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');


Route::group(['middleware' => ['guest']], function() {
  // Route::post('/test_event', [App\Http\Controllers\EventController::class, 'test_event'])->name('test-event');
});



Route::group(['middleware' => ['auth', 'role:admin']], function () {

    Route::post('update/{id}', [App\Http\Controllers\AdminController::class, 'update']);
    Route::get('admin/sales-pipeline', [App\Http\Controllers\AdminController::class, 'salesPipeline'])->name('sales-pipeline');
    Route::post('admin/sales-pipeline_update', [App\Http\Controllers\AdminController::class, 'salesPipelineUpdate'])->name('sales-pipeline-update');
    Route::get('admin/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('admin-setting');
    Route::post('update-pass/{id}', [App\Http\Controllers\AdminController::class, 'update_pass'])->name('update-pass');
    Route::get('admin/customer-pipeline', [App\Http\Controllers\AdminController::class, 'customerPipeline'])->name('customer-pipeline');
    Route::post('admin/customer-pipeline-update', [App\Http\Controllers\AdminController::class, 'customerPipelineUpdate'])->name('customer-pipeline-update');
    Route::get('admin/payment_history', [App\Http\Controllers\AdminController::class, 'paymentHistory'])->name('payment-history');
    Route::get('admin/dj', [App\Http\Controllers\AdminController::class, 'djIndex'])->name('DJ-show');
    Route::get('admin/dj/create', [App\Http\Controllers\AdminController::class, 'djCreate'])->name('DJ-add');
    Route::post('admin/dj/store', [App\Http\Controllers\AdminController::class, 'djStore'])->name('DJ-store');
    Route::get('admin/dj/edit/{id}', [App\Http\Controllers\AdminController::class, 'djEdit'])->name('DJ-edit');
    Route::post('admin/dj/update/{id}', [App\Http\Controllers\AdminController::class, 'djUpdate'])->name('DJ-update');
    Route::post('admin/dj/update-pass{id}', [App\Http\Controllers\AdminController::class, 'djUpdate_pass'])->name('DJ-update-pass');
    Route::get('admin/dj/delete/{id}', [App\Http\Controllers\AdminController::class, 'djDestroy'])->name('DJ-delete'); 

    Route::get('admin/customer', [App\Http\Controllers\AdminController::class, 'customerIndex'])->name('customer-show');
    Route::get('admin/customer/create', [App\Http\Controllers\AdminController::class, 'customerCreate'])->name('customer-add');
    Route::post('admin/customer/store', [App\Http\Controllers\AdminController::class, 'customerStore'])->name('customer-store');
    Route::get('admin/customer/edit/{id}', [App\Http\Controllers\AdminController::class, 'customerEdit'])->name('customer-edit');
    Route::post('admin/customer/update/{id}', [App\Http\Controllers\AdminController::class, 'customerUpdate'])->name('customer-update');
    Route::get('admin/customer/delete/{id}', [App\Http\Controllers\AdminController::class, 'customerDestroy'])->name('customer-delete');
    Route::post('admin/customer/update-pass/{id}', [App\Http\Controllers\AdminController::class, 'customerUpdate_pass'])->name('customer-update-pass');
    Route::get('admin/customer-details/{id}', [App\Http\Controllers\AdminController::class, 'customerDetails'])->name('customer_details');
    Route::post('admin/customer-details/add-comment', [App\Http\Controllers\CommentController::class, 'store'])->name('add-comment');
    Route::get('admin/contact_made_details/{id}', [App\Http\Controllers\AdminController::class, 'contactMade'])->name('contact_made_details');
    Route::get('admin/quotes-details/{id}', [App\Http\Controllers\AdminController::class, 'quotedDetails'])->name('quoted_details');
    Route::get('admin/customert-pipelind-details/{id}', [App\Http\Controllers\AdminController::class, 'customerPipelineDetails'])->name('customer_pipeline_details');
    Route::post('/admin/customer-pipeline-details/assign-dj', [App\Http\Controllers\AdminController::class, 'assignDj'])->name('assign-dj');
});

Route::group(['middleware' => 'auth'], function () {

    // Route::get('/admin/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer-show');
    // Route::get('/admin/customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer-add');
    // Route::post('/admin/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer-store');
    // Route::get('/admin/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer-edit');
    // Route::post('/admin/customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer-update');
    // Route::get('/admin/customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer-delete');
    // Route::post('/admin/customer/update_pass/{id}', [App\Http\Controllers\CustomerController::class, 'update_pass'])->name('customer-update-pass');

    // Route::get('/admin/dj', [App\Http\Controllers\AdminController::class, 'djIndex'])->name('DJ-show');
    // Route::get('/admin/dj/create', [App\Http\Controllers\DjController::class, 'create'])->name('DJ-add');
    // Route::post('/admin/dj/store', [App\Http\Controllers\DjController::class, 'store'])->name('DJ-store');
    // Route::get('/admin/dj/edit/{id}', [App\Http\Controllers\DjController::class, 'edit'])->name('DJ-edit');
    // Route::post('/admin/dj/update/{id}', [App\Http\Controllers\DjController::class, 'update'])->name('DJ-update');
    // Route::post('/admin/dj/update_pass{id}', [App\Http\Controllers\DjController::class, 'update_pass'])->name('DJ-update-pass');
    // Route::get('/admin/dj/delete/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('DJ-delete');
     
    Route::get('dj/profile', [App\Http\Controllers\DjController::class, 'profile'])->name('DJ-profile');
    Route::get('dj/setting', [App\Http\Controllers\DjController::class, 'setting'])->name('DJ-setting');
    Route::post('dj/setting/update/{id}', [App\Http\Controllers\DjController::class, 'update'])->name('dj-update-details');
    Route::get('dj/upcoming-event', [App\Http\Controllers\DjController::class, 'upcomingEvent'])->name('upcoming-event');
    Route::post('dj/profile/update', [App\Http\Controllers\DjController::class, 'updateProfile'])->name('store-dj-data');
    Route::post('dj/profile/update-file', [App\Http\Controllers\DjController::class, 'updateFile'])->name('store-dj-file');
});

Route::group(['middleware' => ['role:admin|DJ|user']], function () { 
    Route::get('admin/payment_history', [App\Http\Controllers\AdminController::class, 'paymentHistory'])->name('payment-history');
});

Route::post('admin/add-event', [App\Http\Controllers\EventController::class, 'addEvent'])->name('add-event');
Route::post('admin/update-event/{id}', [App\Http\Controllers\EventController::class, 'updateEvent'])->name('update-event');
Route::post('admin/assign-package/', [App\Http\Controllers\EventController::class, 'assignPackage'])->name('add-package-event');
Route::get('admin/delete-event/{id}/{event?}', [App\Http\Controllers\EventController::class, 'deleteEvent'])->name('event-delete');

Route::get('admin/package/show', [App\Http\Controllers\PackageController::class, 'index'])->name('package-show');
Route::get('admin/package/add', [App\Http\Controllers\PackageController::class, 'create'])->name('add-package');
Route::post('admin/package/store', [App\Http\Controllers\PackageController::class, 'store'])->name('package-store');
Route::get('admin/package/edit/{id}', [App\Http\Controllers\PackageController::class, 'edit'])->name('package-edit');
Route::post('admin/package/update/{id}', [App\Http\Controllers\PackageController::class, 'update'])->name('package-update');
Route::get('admin/package/delete/{id}', [App\Http\Controllers\PackageController::class, 'destroy'])->name('package-delete');

Route::get('customer/events',[App\Http\Controllers\CustomerController::class, 'events'])->name('events');
Route::get('customer/setting',[App\Http\Controllers\CustomerController::class, 'setting'])->name('user-setting');
Route::get('customer/songs-idea',[App\Http\Controllers\CustomerController::class, 'songsIdea'])->name('songs-idea');


Route::get('quotation-details/{code}', [App\Http\Controllers\EventController::class, 'getQuotation'])->name('quotation-details');

Route::get('quotation-response/{id}/{response}', [App\Http\Controllers\EventController::class, 'responseQuot'])->name('quotation-response');

Route::get('invoice/{id}', [App\Http\Controllers\EventController::class, 'invoice'])->name('invoice');

Route::get('invoice/{id}/download', [App\Http\Controllers\EventController::class, 'invoiceDownload'])->name('invoice-download');

Route::get('invoice/{id}/send', [App\Http\Controllers\EventController::class, 'invoiceSend'])->name('invoice-send');

Route::get('cusrtomer-delele/{id}', [App\Http\Controllers\EventController::class, 'deleteCustomer'])->name('delete-person');

Route::get('event-delete/{id}', [App\Http\Controllers\EventController::class, 'deleteEvent'])->name('delete-event');

Route::group(['middleware' => ['role:dj']], function () {
    
});

