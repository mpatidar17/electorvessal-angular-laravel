<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
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

Route::get('/agent/dashboard', 'AgentController@dashboard')->name('agent.dashboard');

Route::get('/customer/dashboard', 'CustomerController@dashboard')->name('customer.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_setting', 'HomeController@company_user_setting')->name('user_setting');

Route::resource('storagelocation', 'StorageLocationController');

Route::get('storagelocation/delete/{id}', 'StorageLocationController@destroy');

Route::post('storagelocation/update', 'StorageLocationController@update');

Route::resource('cargo', 'CargoController');

Route::resource('cargoDocument', 'CargoDocumentController');

Route::resource('customer', 'CustomerController');

Route::get('customer/delete/{id}', 'CustomerController@destroy');

Route::post('customer/update', 'CustomerController@update');

Route::resource('cargoTagGroup', 'CargoTagGroupController');

Route::get('cargoTagGroup/delete/{id}', 'CargoTagGroupController@destroy');

Route::post('cargoTagGroup/update', 'CargoTagGroupController@update');

Route::resource('cargoTextTag', 'CargoTextTagController');

Route::resource('cargoTagValue', 'CargoTagValueController');

Route::resource('subscription', 'SubscriptionController');

Route::get('subscription/delete/{id}', 'SubscriptionController@destroy');

Route::post('subscription/update', 'SubscriptionController@update');

Route::resource('invoice', 'InvoiceController');

Route::get('invoice/delete/{id}', 'InvoiceController@destroy');

Route::post('invoice/update', 'InvoiceController@update');

Route::resource('invoiceItem', 'InvoiceItemController');

Route::get('invoiceItem/delete/{id}', 'InvoiceItemController@destroy');

Route::post('invoiceItem/update', 'InvoiceItemController@update');

Route::resource('agent', 'AgentController');

Route::get('agent/delete/{id}', 'AgentController@destroy');

Route::post('agent/update', 'AgentController@update');

Route::any('agents/list', [
    'uses' => 'AgentController@list',
    'as' => 'agentList'
    ] 
);

Route::any('storagelocations/list', [
    'uses' => 'StorageLocationController@list',
    'as' => 'storageLocationList'
    ] 
);

Route::any('cargos/list', [
    'uses' => 'CargoController@list',
    'as' => 'cargoList'
    ] 
);

Route::any('company/updateProfile', [
    'uses' => 'CompanyController@updateProfile',
    'as' => 'updateCompanyProfile'
    ] 
);
//


Route::post('/companyUserLogin', 'CompanyController@companyUserLogin')->name('companyUserLogin');
//loginUser