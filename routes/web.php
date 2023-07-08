<?php

    use App\Http\Controllers\SeriesController;
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
    return to_route('series.index');
//    return redirect('/series');
//    return redirect()->('series.index'); ///antes do laravel 9
});

//Route::delete('/series/destroy/{serie}',[SeriesController::class, 'destroy'])->name('series.destroy');
Route::resource('/series', SeriesController::class); ///Neste formato se tiver com os nomes da documentação
    /// a rota já verifica conforme abaixo

//Colocando as rotas em um grupo

//    Route::controller(SeriesController::class)->group(
//        function (){
//            Route::get('/series','index')->name('series.index');
//            Route::get('/series/create','create')->name('series.create');
//            Route::post('/series','store')->name('series.store');
//        }
//    );

//Route::get('/series' , [SeriesController::class, 'index']);
//Route::get('/series/create' , [SeriesController::class, 'create']);
//Route::post('/series/save' , [SeriesController::class, 'store']);


