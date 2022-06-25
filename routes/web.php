<?php

use App\Models\Menu;
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

    //dd(config('MAIL_FROM_NAME'));

    $menu = Menu::where('parent_id',0)->get();

    return view('dynamicMenu',['menus' => $menu]);
});



