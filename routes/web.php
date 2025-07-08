<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\DaftarComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\KegiatanComponent;
use App\Http\Livewire\KontakComponent;
use App\Http\Livewire\Divisi\DivisiAddComponent;
use App\Http\Livewire\Divisi\DivisiAllComponent;
use App\Http\Livewire\Divisi\DivisiEditComponent;
use App\Http\Livewire\Pengurus\PengurusAddComponent;
use App\Http\Livewire\Pengurus\PengurusEditComponent;
use App\Http\Livewire\Pengurus\PengurusAllComponent;
use App\Http\Livewire\PendaftaranHima\PendaftaranAllComponent;
use App\Http\Livewire\PendaftaranHima\PendaftaranEditComponent;
use App\Http\Livewire\PendaftaranHima\PendaftaranAddComponent;
use App\Http\Livewire\Berita\BeritaAddComponent;
use App\Http\Livewire\Berita\BeritaAllComponent;
use App\Http\Livewire\Berita\BeritaEditComponent;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' =>  ['auth']], function(){
    Route::group(['middleware' => ['role:admin']], function(){
      
    });
    Route::group(['middleware' => ['role:normal_user']], function(){

    });
    Route::group(['middleware' => ['role:supervisor_admin']], function(){
        
    });
});
  Route::get('all-pengurus', PengurusAllComponent::class)->name('pengurus.all');
        Route::get('add-pengurus', PengurusAddComponent::class)->name('pengurus.add');
        Route::get('edit-pengurus/{pengurus_id}', PengurusEditComponent::class)->name('pengurus.edit');


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::post('aksilogout', [LoginController::class, 'aksilogout'])->name('aksilogout');

Route::get('reg-admin', [RegisterController::class, 'index'])->name('admin.index');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

Route::get('all-divisi', DivisiAllComponent::class)->name('divisi.all');
Route::get('add-divisi', DivisiAddComponent::class)->name('divisi.add');
Route::get('edit-divisi/{id_divisi}', DivisiEditComponent::class)->name('divisi.edit');



Route::get('add-berita', BeritaAddComponent::class)->name('berita.add');
Route::get('all-berita', BeritaAllComponent::class)->name('berita.all');
Route::get('edit-berita/{berita_id}', BeritaEditComponent::class)->name('berita.edit');

Route::get('add-pendaftaran', PendaftaranAddComponent::class)->name('pendaftaran.add');
Route::get('all-pendaftaran', PendaftaranAllComponent::class)->name('pendaftaran.all');
Route::get('edit-pendaftaran/{pendaftaran_id}', PendaftaranEditComponent::class)->name('pendaftaran.edit');

//home
Route::get('home-user', HomeComponent::class)->name('user.home');
Route::get('about-user', AboutComponent::class)->name('user.about');
Route::get('daftar-user', DaftarComponent::class)->name('user.daftar');
Route::get('kegiatan-user', KegiatanComponent::class)->name('user.kegiatan');
Route::get('Kontak-user', KontakComponent::class)->name('user.kontak');







