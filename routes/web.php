<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'allDataList']);
Route::post('/homesearch', [App\Http\Controllers\HomeController::class, 'allDataList']);

Route::get('list_bookcategory', [App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryList'])->name('bookcategory.index');
Route::get('/add_bookcategory',[App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryAdd'])->name('bookcategoryadd');
Route::post('/insert_bookcategory', [App\Http\Controllers\backend\BookcategoryController::class,'BookCategoryInsert']);
Route::get('/edit_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookEditCategory']);
Route::post('/update_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookUpdateCategory']);
Route::get('/delete_bookcategory/{id}', [App\Http\Controllers\backend\BookcategoryController::class,'BookDeleteCategory']);

Route::get('list_triplep6', [App\Http\Controllers\backend\TripleP6Controller::class,'triplep6List'])->name('triplep6.index');
Route::get('/add_triplep6/{id}',[App\Http\Controllers\backend\TripleP6Controller::class,'triplep6Add'])->name('triplep6add');
Route::post('/insert_triplep6', [App\Http\Controllers\backend\TripleP6Controller::class,'triplep6Insert']);
Route::get('/edit_triplep6/{id}', [App\Http\Controllers\backend\TripleP6Controller::class,'triplep6EditCategory']);
Route::post('/update_triplep6/{id}', [App\Http\Controllers\backend\TripleP6Controller::class,'triplep6UpdateCategory']);
Route::get('/delete_triplep6/{id}', [App\Http\Controllers\backend\TripleP6Controller::class,'triplep6DeleteCategory']);

Route::get('list_triplep24', [App\Http\Controllers\backend\TripleP24Controller::class,'triplep24List'])->name('triplep24.index');
Route::get('/add_triplep24/{id}',[App\Http\Controllers\backend\TripleP24Controller::class,'triplep24Add'])->name('triplep24add');
Route::post('/insert_triplep24', [App\Http\Controllers\backend\TripleP24Controller::class,'triplep24Insert']);
Route::get('/edit_triplep24/{id}', [App\Http\Controllers\backend\TripleP24Controller::class,'triplep24EditCategory']);
Route::post('/update_triplep24/{id}', [App\Http\Controllers\backend\TripleP24Controller::class,'triplep24UpdateCategory']);
Route::get('/delete_triplep24/{id}', [App\Http\Controllers\backend\TripleP24Controller::class,'triplep24DeleteCategory']);

Route::get('list_dspm', [App\Http\Controllers\backend\DspmController::class,'dspmList'])->name('dspm.index');
Route::get('/add_dspm/{id}',[App\Http\Controllers\backend\DspmController::class,'dspmAdd'])->name('dspmadd');
Route::post('/insert_dspm', [App\Http\Controllers\backend\DspmController::class,'dspmInsert']);
Route::get('/edit_dspm/{id}', [App\Http\Controllers\backend\DspmController::class,'dspmEditCategory']);
Route::post('/update_dspm/{id}', [App\Http\Controllers\backend\DspmController::class,'dspmUpdateCategory']);
Route::get('/delete_dspm/{id}', [App\Http\Controllers\backend\DspmController::class,'dspmDeleteCategory']);

Route::get('list_eq15', [App\Http\Controllers\backend\Eq15Controller::class,'eq15List'])->name('eq15.index');
Route::get('/add_eq15/{id}',[App\Http\Controllers\backend\Eq15Controller::class,'eq15Add'])->name('eq15add');
Route::post('/insert_eq15', [App\Http\Controllers\backend\Eq15Controller::class,'eq15Insert']);
Route::get('/edit_eq15/{id}', [App\Http\Controllers\backend\Eq15Controller::class,'eq15EditCategory']);
Route::post('/update_eq15/{id}', [App\Http\Controllers\backend\Eq15Controller::class,'eq15UpdateCategory']);
Route::get('/delete_eq15/{id}', [App\Http\Controllers\backend\Eq15Controller::class,'eq15DeleteCategory']);

Route::get('list_eq15611', [App\Http\Controllers\backend\Eq15611Controller::class,'eq15611List'])->name('eq15611.index');
Route::get('/add_eq15611/{id}',[App\Http\Controllers\backend\Eq15611Controller::class,'eq15611Add'])->name('eq15611add');
Route::post('/insert_eq15611', [App\Http\Controllers\backend\Eq15611Controller::class,'eq15611Insert']);
Route::get('/edit_eq15611/{id}', [App\Http\Controllers\backend\Eq15611Controller::class,'eq15611EditCategory']);
Route::post('/update_eq15611/{id}', [App\Http\Controllers\backend\Eq15611Controller::class,'eq15611UpdateCategory']);
Route::get('/delete_eq15811/{id}', [App\Http\Controllers\backend\Eq15611Controller::class,'eq15611DeleteCategory']);


Route::get('list_child', [App\Http\Controllers\backend\ChildController::class,'childList'])->name('child.index');
Route::get('/add_child',[App\Http\Controllers\backend\ChildController::class,'childAdd'])->name('childadd');
Route::post('/insert_child', [App\Http\Controllers\backend\ChildController::class,'childInsert']);
Route::get('/edit_child/{id}', [App\Http\Controllers\backend\ChildController::class,'childEditCategory']);
Route::post('/update_child/{id}', [App\Http\Controllers\backend\ChildController::class,'childUpdateCategory']);
Route::get('/delete_child/{id}', [App\Http\Controllers\backend\ChildController::class,'childDeleteCategory']);
Route::post('/api/fetch-amphur', [App\Http\Controllers\backend\ChildController::class, 'fetchAmphur']);
Route::post('/api/fetch-district', [App\Http\Controllers\backend\ChildController::class, 'fetchDistrict']);

Route::get('list_hospital', [App\Http\Controllers\backend\HospitalController::class,'hospitalList'])->name('hospital.index');
Route::get('/add_hospital',[App\Http\Controllers\backend\HospitalController::class,'hospitalAdd'])->name('hospitaladd');
Route::post('/insert_hospital', [App\Http\Controllers\backend\HospitalController::class,'hospitalInsert']);
Route::get('/edit_hospital/{id}', [App\Http\Controllers\backend\HospitalController::class,'hospitalEditCategory']);
Route::post('/update_hospital/{id}', [App\Http\Controllers\backend\HospitalController::class,'hospitalUpdateCategory']);
Route::get('/delete_hospital/{id}', [App\Http\Controllers\backend\HospitalController::class,'hospitalDeleteCategory']);

Route::get('list_school', [App\Http\Controllers\backend\SchoolController::class,'schoolList'])->name('school.index');
Route::get('/add_school',[App\Http\Controllers\backend\SchoolController::class,'schoolAdd'])->name('schooladd');
Route::post('/insert_school', [App\Http\Controllers\backend\SchoolController::class,'schoolInsert']);
Route::get('/edit_school/{id}', [App\Http\Controllers\backend\SchoolController::class,'schoolEditCategory']);
Route::post('/update_school/{id}', [App\Http\Controllers\backend\SchoolController::class,'schoolUpdateCategory']);
Route::get('/delete_school/{id}', [App\Http\Controllers\backend\SchoolController::class,'schoolDeleteCategory']);


Route::get('user_list', [App\Http\Controllers\backend\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/add_user', [App\Http\Controllers\backend\UsermanagementController::class,'UserAdd'])->name('useradd');
Route::get('/edit_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserDelete']);

Route::get('registration', [RegisterController::class, 'registration'])->name('register');
Route::post('/api/fetch-amphur', [RegisterController::class, 'fetchAmphur']);
Route::post('/api/fetch-district', [RegisterController::class, 'fetchDistrict']);
Route::post('/add_regis', [RegisterController::class, 'regiInsert'])->name('regiInsert');
//Route::post('registration', [RegisterController::class, 'regiInsert']);
