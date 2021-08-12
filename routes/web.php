<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashcontroller;
use App\Http\Controllers\Homepagecontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\informationcontroller;
use App\Http\Controllers\Monitoringcontroller;
use App\Http\Controllers\paymentcontroller;
use App\Http\Controllers\Salecontroller;
use App\Http\Controllers\collectioncontroller;
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

//Route::get('/', function () {return view('welcome'); });

//homepage
Route::get('/homepage',[Homepagecontroller::class,'homepage'])->name('homepages');


//information
Route::get('/main',[Dashcontroller::class,'dash']);
Route::get('/dashboard',[Dashcontroller::class,'dashboard'])->name('dashboards');
//cow
Route::get('/cow',[informationcontroller::class,'cow'])->name('cows');
Route::get('/addcow',[informationcontroller::class,'addcow'])->name('addcow');
Route::post('/addcow',[informationcontroller::class,'addcowstore'])->name('addcowstore');

//staff
Route::get('/staff',[informationcontroller::class,'staff'])->name('staffs');
Route::get('/addstaff',[informationcontroller::class,'addstaff'])->name('addstaff');
Route::post('/addstaff',[informationcontroller::class,'addstaffstore'])->name('addstaffstore');


//vaccine monitorig
Route::get('/vaccine',[Monitoringcontroller::class,'vaccine'])->name('vaccines');
Route::get('/addvaccine',[Monitoringcontroller::class,'addvaccine'])->name('addvaccine');
Route::post('/addvaccine',[Monitoringcontroller::class,'addvaccinestore'])->name('addvaccinestore');

//feed monitoring
Route::get('/feed',[Monitoringcontroller::class,'feed'])->name('feeds');
Route::get('/addfeed',[Monitoringcontroller::class,'addfeed'])->name('addfeed');
Route::post('/addfeed',[Monitoringcontroller::class,'addfeedstore'])->name('addfeedstore');

//cowsales
Route::get('/cowsale',[Salecontroller::class,'cowsale'])->name('cowsales');
Route::get('/addcowsale',[Salecontroller::class,'addcowsale'])->name('addcowsale');
Route::post('/addcowsale',[Salecontroller::class,'addcowsalestore'])->name('addcowsalestore');

//milk sale
Route::get('/milksale',[Salecontroller::class,'milksale'])->name('milksales');
Route::get('/addmilksale',[Salecontroller::class,'addmilksale'])->name('addmilksale');
Route::post('/addmilksale',[Salecontroller::class,'addmilksalestore'])->name('addmilksalestore');



//milk collection 
Route::get('/collection',[collectioncontroller::class,'collection'])->name('collections');
Route::get('/addmilkcollection',[collectioncontroller::class,'addmilkcollection'])->name('addmilkcollection');
Route::post('/addmilkcollection',[collectioncontroller::class,'addmilkcollectionstore'])->name('addmilkcollectionstore');

//payment
Route::get('/payment',[paymentcontroller::class,'payment'])->name('payment');
Route::get('/addpayment',[paymentcontroller::class,'addpayment'])->name('addpayment');
Route::post('/addpayment',[paymentcontroller::class,'addpaymentstore'])->name('addpaymentstore');

//login
Route::get('/login',[logincontroller::class,'login'])->name('logins');