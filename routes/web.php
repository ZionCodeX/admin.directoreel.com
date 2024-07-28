<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


Auth::routes(['verify' => true]);


//REST API API URL 
Route::get('/api/post/articles/{secret_code}/{category}', [App\Http\Controllers\ApiPostController::class, 'api_post_articles'])->name('api_post_articles');


//GOVERNING BODY
Route::get('/governing_body/create/index', [App\Http\Controllers\GoverningBodyController::class, 'governing_body_create_index'])->name('governing_body_create_index');
Route::post('/governing_body/create/prox', [App\Http\Controllers\GoverningBodyController::class, 'governing_body_create_prox'])->name('governing_body_create_prox');


//POST CONTROLLERS
Route::get('post/create/form/index', [App\Http\Controllers\PostsController::class, 'post_create_form_index'])->name('post_create_form_index');
Route::post('post/create/form/prox', [App\Http\Controllers\PostsController::class, 'post_create_form_prox'])->name('post_create_form_prox');
Route::get('post/update/{pid_post}/form/index', [App\Http\Controllers\PostsController::class, 'post_update_form_index'])->name('post_update_form_index');
Route::post('post/update/form/prox', [App\Http\Controllers\PostsController::class, 'post_update_form_prox'])->name('post_update_form_prox');
Route::post('post/delete/record/prox', [App\Http\Controllers\PostsController::class, 'post_delete_record_prox'])->name('post_delete_record_prox');
Route::get('post/view/table/index', [App\Http\Controllers\PostsController::class, 'post_view_table_index'])->name('post_view_table_index');
Route::get('post/view/{post_slug}/list/index', [App\Http\Controllers\PostsController::class, 'post_view_list_index'])->name('post_view_list_index');


//MAIN PAGE CONTROLLERS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/users/records/view/{account_type}/index', [App\Http\Controllers\DashboardController::class, 'users_records_view_index'])->name('users_records_view_index');

Route::get('/request/quotes', [App\Http\Controllers\PagesController::class, 'request_quotes'])->name('request_quotes');
Route::get('/pending/requests', [App\Http\Controllers\PagesController::class, 'pending_requests'])->name('pending_requests');
Route::get('/generated/quotes', [App\Http\Controllers\PagesController::class, 'generated_quotes'])->name('generated_quotes');
Route::get('/payment/invoices', [App\Http\Controllers\PagesController::class, 'payment_invoices'])->name('payment_invoices');
Route::get('/orders/{status}', [App\Http\Controllers\PagesController::class, 'orders'])->name('orders');
Route::get('/quotes/onhold', [App\Http\Controllers\PagesController::class, 'quotes_onhold'])->name('quotes_onhold');
Route::get('/profile/update', [App\Http\Controllers\PagesController::class, 'profile_update'])->name('profile_update');
Route::get('/password/reset', [App\Http\Controllers\PagesController::class, 'password_reset'])->name('password_reset');
Route::get('/bank/payment', [App\Http\Controllers\PagesController::class, 'bank_payment'])->name('bank_payment');
Route::get('/payment/status', [App\Http\Controllers\PagesController::class, 'payment_status'])->name('payment_status');
//Route::get('/register_company', [App\Http\Controllers\DashboardController::class, 'index'])->name('register_company');


//PROFILE UPDATE ROUTES
Route::get('/profile/update/index', [App\Http\Controllers\ProfileUpdateController::class, 'profile_update_index'])->name('profile_update_index');
Route::post('/profile/update/prox', [App\Http\Controllers\ProfileUpdateController::class, 'profile_update_prox'])->name('profile_update_prox');


//REQUEST QUOTES ROUTES
Route::get('/request/quotes/create/index', [App\Http\Controllers\RequestQuotesController::class, 'request_quotes_create_index'])->name('request_quotes_create_index');
Route::post('/request/quotes/create/prox', [App\Http\Controllers\RequestQuotesController::class, 'request_quotes_create_prox'])->name('request_quotes_create_prox');
Route::get('/request/pending/view/index', [App\Http\Controllers\RequestQuotesController::class, 'request_pending_view_index'])->name('request_pending_view_index');
Route::get('/request/processing/view/index', [App\Http\Controllers\RequestQuotesController::class, 'request_processing_view_index'])->name('request_processing_view_index');
Route::get('/request/onhold/view/index', [App\Http\Controllers\RequestQuotesController::class, 'request_onhold_view_index'])->name('request_onhold_view_index');
Route::get('/request/quotes/update/{pid_request}/index', [App\Http\Controllers\RequestQuotesController::class, 'request_quotes_update_index'])->name('request_quotes_update_index');
Route::post('/request/quotes/update/prox', [App\Http\Controllers\RequestQuotesController::class, 'request_quotes_update_prox'])->name('request_quotes_update_prox');


//ORDER QUOTES CONTROLLER
Route::get('/quotes/view/index', [App\Http\Controllers\OrderQuotesController::class, 'quotes_view_index'])->name('quotes_view_index');
Route::get('/orders/processing/view/index', [App\Http\Controllers\OrderQuotesController::class, 'orders_processing_view_index'])->name('orders_processing_view_index');


//USERS RECORD
Route::get('/users/record', [App\Http\Controllers\PagesController::class, 'users_record'])->name('users_record');


//ORDER CONTROLLER
Route::get('/order/quotes/create/{pid_request}/{pid_user}/index', [App\Http\Controllers\OrderQuotesController::class, 'order_quotes_create_index'])->name('order_quotes_create_index');
Route::post('/order/quotes/create/prox', [App\Http\Controllers\OrderQuotesController::class, 'order_quotes_create_prox'])->name('order_quotes_create_prox');


//PRODUCTS CONTROLLER
Route::get('/products/create/index', [App\Http\Controllers\ProductsController::class, 'products_create_index'])->name('products_create_index');
Route::post('/products/create/prox', [App\Http\Controllers\ProductsController::class, 'products_create_prox'])->name('products_create_prox');

//MESSAGE CONTROLLER
Route::post('/message/request/pending/prox', [App\Http\Controllers\MessageController::class, 'message_request_pending_prox'])->name('message_request_pending_prox');

//MAIN PAGE CONTROLLERS
Route::get('/no/records', [App\Http\Controllers\PagesController::class, 'not_available'])->name('not_available');
Route::get('/password/reset', [App\Http\Controllers\PagesController::class, 'password_reset'])->name('password_reset');
Route::get('/logout', [App\Http\Controllers\PagesController::class, 'logout'])->name('logout');
//Route::get('/register_company', [App\Http\Controllers\DashboardController::class, 'index'])->name('register_company');


//ADMIN PAGES
Route::get('/admin', [App\Http\Controllers\AdminPagesController::class, 'login_admin_index'])->name('login_admin_index');
Route::post('/login/admin/prox', [App\Http\Controllers\AdminLoginController::class, 'login_admin_prox'])->name('login_admin_prox');


//MAILS
Route::get('/mail', [App\Http\Controllers\MailController::class, 'mailsend'])->name('mail');
Route::get('/maildesign', [App\Http\Controllers\MailController::class, 'preview'])->name('maildesign');


//MIGRATION
Route::get('/xmigrate', function() {
    $exitCode = Artisan::call('migrate:refresh', ['--force' => true,]);
    dd('MIGRATION WAS SUCCESSFUL!');
});


//CLEAR-CACHE
Route::get('/xclean', function() {
    $exitCode1 = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('view:clear');
    $exitCode3 = Artisan::call('route:clear');
    $exitCode4 = Artisan::call('config:cache');
    dd('CACHE-CLEARED, VIEW-CLEARED, ROUTE-CLEARED & CONFIG-CACHED WAS SUCCESSFUL!');
 });

