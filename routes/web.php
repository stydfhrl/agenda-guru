<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AgendaController;

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

Route::group(['middleware' => ['auth', 'hakakses:admin']], function(){
    
    // Dashborad
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    //End Dashborad

    //guru
    Route::get('/guru', [GuruController::class, 'index'])->name('guru'); //guruview

    Route::get('/addguru', [GuruController::class, 'create'])->name('addguru'); //addguru
    Route::post('/insertguru', [GuruController::class, 'store'])->name('insertguru');

    Route::get('/editguru/{id}', [GuruController::class, 'edit'])->name('editguru'); //editguru
    Route::post('/updateguru/{id}', [GuruController::class, 'update'])->name('updateguru');

    Route::get('/deleteguru/{id}', [GuruController::class, 'destroy'])->name('deleteguru'); //deleteguru
    // end guru

    // kelas
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas'); //kelasview

    Route::get('/addkelas', [KelasController::class, 'create'])->name('addkelas'); //addkelas
    Route::post('/insertkelas', [KelasController::class, 'store'])->name('insertkelas');

    Route::get('/editkelas/{id}', [KelasController::class, 'edit'])->name('editkelas'); //editkelas
    Route::post('/updatekelas/{id}', [KelasController::class, 'update'])->name('updatekelas');

    Route::get('/deletekelas/{id}', [KelasController::class, 'destroy'])->name('deletekelas'); //deletekelas
    // end kelas

    // agenda
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda'); //agendaview

    Route::get('/addagenda', [AgendaController::class, 'create'])->name('addagenda'); //addagenda
    Route::post('/insertagenda', [AgendaController::class, 'store'])->name('insertagenda');

    Route::get('/editagenda/{id}', [AgendaController::class, 'edit'])->name('editagenda'); //editagenda
    Route::post('/updateagenda/{id}', [AgendaController::class, 'update'])->name('updateagenda');

    Route::get('/deleteagenda/{id}', [AgendaController::class, 'destroy'])->name('deleteagenda'); //deleteagenda
    // end agenda

    // mata pelajaran
    Route::get('/mapel', [MapelController::class, 'index'])->name('mapel'); //mapelview

    Route::get('/addmapel', [MapelController::class, 'create'])->name('addmapel'); //addmapel
    Route::post('/insertmapel', [MapelController::class, 'store'])->name('insertmapel');

    Route::get('/editmapel/{id}', [MapelController::class, 'edit'])->name('editmapel'); //editmapel
    Route::post('/updatemapel/{id}', [MapelController::class, 'update'])->name('updatemapel');

    Route::get('/deletemapel/{id}', [MapelController::class, 'destroy'])->name('deletemapel'); //deletemapel
    // end mata pelajaran

   

    });

    Route::group(['middleware' => ['auth', 'hakakses:guru']], function(){   

    // form (untuk guru)
    Route::get('/form', [FormController::class, 'index', 'create'])->name('form'); //agenda create
    Route::get('/formcreate', [FormController::class, 'create'])->name('formcreate'); //agenda create

    Route::post('/formstore', [FormController::class,'store'])->name('formstore');

    // Route::get('/formdelete/{id}', [FormController::class, 'destroy'])->name('formdelete');
    // end form

});





// login
Route::get('/', [LoginController::class, 'login'])->name('login'); //login
Route::post('/loginstore', [LoginController::class, 'logstore'])->name('loginstore');

Route::get('/register', [LoginController::class, 'register'])->name('register'); //register
Route::post('/registerstore', [LoginController::class, 'regstore'])->name('registerstore');


Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); //logout
// end login