<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokoOnline;
use App\Http\Controllers\ImageController;

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
    return view('home', [
        'title'=>'home'
    ]);
});


Route::get('home', function () {
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('about', function () {
    return view('about');
});


Route::get('posts', [PostController::class, 'index'])->name('posts');



Route::get('posts/{post:slug}', [PostController::class, 'view']);


Route::get('/posts/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title'=>$category->name,
        'posts' => $category->posts,
        'category'=>$category->name
    ]);
});




Route::get('/scores', [ScoreController::class, 'index']);
//Route::post('/scores', [ScoreController::class, 'search']);

//Route::post('/scores/add', [ScoreController::class, 'create'])->name('add');


//Route::post('/scores/add', [Pegawai::class, 'handleForm'])->name('add');
Route::get('/data-pegawai', [Pegawai::class, 'index'])->name('data-pegawai');

Route::get('/chi', [Pegawai::class, 'chi']);

Route::post('/chi', [Pegawai::class, 'chisearch'])->name("chi");

Route::post('/add', [Pegawai::class, 'handleForm'])->name('handleForm');

Route::post('/data-pegawai/{search}', [Pegawai::class, 'search'])->name('search');

Route::get('/tabelFrekuensi', [Pegawai::class, 'tabelFrekuensi'])->name('tabelFrekuensi');

Route::get('bergolong', [Pegawai::class, 'bergolong'])->name('bergolong');

Route::get('tabeldeskripsi', [Pegawai::class, 'tabeldeskripsiData'])->name('tabeldeskripsi');

Route::get('/crud', [Pegawai::class, 'crud'])->name('crud');

Route::delete('/scores/{score}', [Pegawai::class, 'destroy'])->name('scores.destroy');

Route::get('add' , [Pegawai::class, 'add']);

Route::get('/edit/{id}', [Pegawai::class, 'crudEdit'])->name('edit');

Route::put('/crud/{score}', [Pegawai::class, 'update'])->name('pegawai.update');








// projek 2.3 dan uts tekweb
Route::get('Home/home', [HomeController::class, 'index'])->name('home/home');
Route::get('Home/about', [HomeController::class, 'about'])->name('about');
Route::get('Home/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('Home/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('Home/uji', [HomeController::class, 'uji'])->name('uji');
Route::get('utstekweb', [HomeController::class, 'utstekweb'])->name('utstekweb');
Route::get('utstekweb/{slug}', [HomeController::class, 'utstekwebslug'])->name('detail');
Route::get('inputbuku', [HomeController::class, 'inputbuku'])->name('inputbuku');
Route::post('inputbuku', [HomeController::class, 'store'])->name('store.tekweb');
Route::get('makan', [HomeController::class, 'makan'])->name('makan');
Route::get('style', [HomeController::class, 'style'])->name('style');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::post('login', [HomeController::class, 'loginRequested'])->name('loginRequested');
Route::get('register', [HomeController::class, 'register'])->name('register');
Route::post('register', [HomeController::class, 'registerRequested'])->name('registerRequested');
Route::post('logout', [HomeController::class, 'logout'])->name('logout');


Route::post('/store-image', [ImageController::class, 'store'])->name('store.image');
Route::get('/store-image', [ImageController::class, 'index']);











