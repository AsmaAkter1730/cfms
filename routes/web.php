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
use App\Http\Controllers\Stockcontroller;
use App\Http\Controllers\Cowtypecontroller;
 use App\Http\Controllers\ViewcowController;
 use App\Http\Controllers\SearchController;
/*
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
Route::get('/',[Homepagecontroller::class,'homepage'])->name('homepages');

//admin panel routes


Route::get('/admin/login',[logincontroller::class,'login'])->name('logins');
Route::post('/admin/login/post',[logincontroller::class,'loginPost'])->name('admin.login.post');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
 


  //logout
  Route::get('/logout',[logincontroller::class,'logout'])->name('logout');
       
  
     //information
       
     Route::get('/main',[Dashcontroller::class,'dash']);
     Route::get('/dashboard',[Dashcontroller::class,'dashboard'])->name('dashboards');
      Route::post('/dashboard/add/task',[Dashcontroller::class,'addtask'])->name('dashboards.add.task');
      Route::get('/dashboard/task/delete/{id}',[Dashcontroller::class,'delete'])->name('dashboards.detete.task');

    //cow
     Route::get('/cow',[informationcontroller::class,'cow'])->name('cows');
     Route::get('/cow/delete/{id}',[informationcontroller::class,'deletes'])->name('cows.detete');
     Route::get('/cow/edit/{id}',[informationcontroller::class,'cow_edit'])->name('cows.edit');
     Route::put('/cow/update/{id}',[informationcontroller::class,'cow_update'])->name('cows.update');
     Route::get('/addcow',[informationcontroller::class,'addcow'])->name('addcow');
     Route::post('/addcow',[informationcontroller::class,'addcowstore'])->name('addcowstore');

    

   //staff
    Route::get('/staff',[informationcontroller::class,'staff'])->name('staffs');
    Route::get('/staff/delete/{id}',[informationcontroller::class,'delete'])->name('staffs.delete');
    Route::get('/staff/edit/{id}',[informationcontroller::class,'staff_edit'])->name('staffs.edit');
    Route::put('/staff/update/{id}',[informationcontroller::class,'staff_update'])->name('staffs.update');
    Route::get('/addstaff',[informationcontroller::class,'addstaff'])->name('addstaff');
    Route::post('/addstaff',[informationcontroller::class,'addstaffstore'])->name('addstaffstore');
    Route::get('/search',[Searchcontroller::class,'staff_search'])->name('staff.search');
      //cow type

     Route::get('/addcowType',[Cowtypecontroller::class,'addcow_type'])->name('addcowtype');
     Route::get('/addcowType/delete/{id}',[Cowtypecontroller::class,'delete'])->name('addcowtype.delete');
     Route::get('/addcowType/edit/{id}',[Cowtypecontroller::class,'edit'])->name('addcowtype.edit');
     Route::put('/addcowType/update/{id}',[Cowtypecontroller::class,'update'])->name('addcowtype.update');
     Route::get('/addcowTypelist',[Cowtypecontroller::class,'typelist'])->name('addcowtypelist');
     Route::post('/cowtypestore',[Cowtypecontroller::class,'cowtypelist'])->name('typeliststore');
     Route::get('/cow/{id}/category',[Cowtypecontroller::class,'allcow'])->name('cowcategory');

    //vaccine monitorig
    Route::get('/vaccine',[Monitoringcontroller::class,'vaccine'])->name('vaccines');
    Route::get('/vaccine/delete/{id}',[Monitoringcontroller::class,'delete'])->name('vaccines.delete');
    Route::get('/vaccine/edit/{id}',[Monitoringcontroller::class,'vaccine_edit'])->name('vaccines.edit');
    Route::put('/vaccine/update/{id}',[Monitoringcontroller::class,'vaccine_update'])->name('vaccines.update');
    Route::get('/addvaccine',[Monitoringcontroller::class,'addvaccine'])->name('addvaccine');
    Route::post('/addvaccine',[Monitoringcontroller::class,'addvaccinestore'])->name('addvaccinestore');

   //vaccine_listname
    Route::get('/vaccine_list',[Monitoringcontroller::class,'vaccine_list'])->name('vaccine_list');
    Route::get('/vaccine_list/delete/{id}',[Monitoringcontroller::class,'vaccine_list_delete'])->name('vaccine_list.delete');
    Route::get('/vaccine_list/edit/{id}',[Monitoringcontroller::class,'vaccine_list_edit'])->name('vaccine_list.edit');
    Route::put('/vaccine_list/update/{id}',[Monitoringcontroller::class,'vaccine_list_update'])->name('vaccine_list.update');
    Route::get('/addvaccinelist_name',[Monitoringcontroller::class,'addvaccine_name'])->name('addvaccine_name');
    Route::post('/addvaccineliststore',[Monitoringcontroller::class,'addvaccine_namestore'])->name('addvaccine_namestore');

    //feed monitoring
    Route::get('/feed',[Monitoringcontroller::class,'feed'])->name('feeds');
    Route::get('/feed/delete/{id}',[Monitoringcontroller::class,'feed_delete'])->name('feeds.delete');
    Route::get('/feed/edit/{id}',[Monitoringcontroller::class,'feed_edit'])->name('feeds.edit');
    Route::put('/feed/update/{id}',[Monitoringcontroller::class,'feed_update'])->name('feeds.update');
    Route::get('/addfeed',[Monitoringcontroller::class,'addfeed'])->name('addfeed');
    Route::post('/addfeed',[Monitoringcontroller::class,'addfeedstore'])->name('addfeedstore');

    //feed_item_list
    Route::get('/feed_item',[Monitoringcontroller::class,'feed_item'])->name('feed_items');
    Route::get('/feed_item/delete/{id}',[Monitoringcontroller::class,'feed_item_delete'])->name('feed_items.delete');
    Route::get('/feed_item/edit/{id}',[Monitoringcontroller::class,'feed_item_edit'])->name('feed_items.edit');
    Route::put('/feed_item/update/{id}',[Monitoringcontroller::class,'feed_item_update'])->name('feed_items.update');
    Route::get('/addfeed_item',[Monitoringcontroller::class,'addfeed_item'])->name('addfeed_items');
    Route::post('/addfeed_itemstore',[Monitoringcontroller::class,'addfeed_itemstore'])->name('addfeed_itemstores');

   // cow-feedplan
    Route::get('/feedplan/cow',[ViewcowController::class,'feedplan_cow'])->name('feedplan.cows');
    Route::get('/cow_feed/{id}/category',[ViewcowController::class,'allcow_feedplan'])->name('allcow.feedplans');

   //milk collection 
   Route::get('/collection',[collectioncontroller::class,'collection'])->name('collections');
   Route::get('/collection/delete/{id}',[collectioncontroller::class,'delete'])->name('collections.delete');
   Route::get('/collection/edit/{id}',[collectioncontroller::class,'edit'])->name('collections.edit');
   Route::put('/collection/update/{id}',[collectioncontroller::class,'update'])->name('collections.update');
   Route::get('/addmilkcollection',[collectioncontroller::class,'addmilkcollection'])->name('addmilkcollection');
   Route::post('/addmilkcollection',[collectioncontroller::class,'addmilkcollectionstore'])->name('addmilkcollectionstore');


   //stock
   Route::get('/stock',[Stockcontroller::class,'stock'])->name('stock');
   Route::get('/addstock',[Stockcontroller::class,'addstock'])->name('addstocks');  
   Route::post('/stockstore',[Stockcontroller::class,'stockstore'])->name('stockstores');

  //cowsales
  Route::get('/cowsale',[Salecontroller::class,'cowsale'])->name('cowsales');
  Route::get('/cowsale/delete/{id}',[Salecontroller::class,'cowsale_delete'])->name('cowsales.delete');
  Route::get('/cowsale/edit/{id}',[Salecontroller::class,'cowsale_edit'])->name('cowsales.edit');
  Route::put('/cowsale/update/{id}',[Salecontroller::class,'cowsale_update'])->name('cowsales.update');
  Route::get('/addcowsale',[Salecontroller::class,'addcowsale'])->name('addcowsale');
  Route::post('/addcowsale',[Salecontroller::class,'addcowsalestore'])->name('addcowsalestore');
  Route::get('/search/cowsale',[Searchcontroller::class,'cow_search'])->name('cow.search');
  //milk sale
   Route::get('/milksale',[Salecontroller::class,'milksale'])->name('milksales');
   Route::get('/milksale/delete/{id}',[Salecontroller::class,'milksale_delete'])->name('milksales.delete');
   Route::get('/milksale/edit/{id}',[Salecontroller::class,'milksale_edit'])->name('milksales.edit');
   Route::put('/milksale/update/{id}',[Salecontroller::class,'milksale_update'])->name('milksales.update');
   Route::get('/addmilksale',[Salecontroller::class,'addmilksale'])->name('addmilksale');
   Route::post('/addmilksale',[Salecontroller::class,'addmilksalestore'])->name('addmilksalestore');
   Route::get('/milksale/search',[Searchcontroller::class,'milk_search'])->name('milk.search');
    //payment
    Route::get('/payment',[paymentcontroller::class,'payment'])->name('payment');
    Route::get('/addpayment',[paymentcontroller::class,'addpayment'])->name('addpayment');
    Route::post('/addpayment',[paymentcontroller::class,'addpaymentstore'])->name('addpaymentstore');
    Route::get('/payment/delete/{id}',[paymentcontroller::class,'payment_delete'])->name('payment.delete');
  });    

