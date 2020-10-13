<?php

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

#pagina predefinita delle rotte, qui passo tramite il metodo statico get, il nome dei file della cartella view, come secondo argomento
#passo il controller@nomeFunzione, poi il name elemento facilmente manipolabile.

Route::get('/','NomeController@home')->name('Nome.home');
Route::get('/chisiamo','NomeController@chisiamo')->name('Nome.chisiamo');
Route::get('/studenti/','StudentsController@studenti')->name('Students.studenti');
// creo una rotta specifica in base all'id (chiave) dell'elemento selezionato ***
Route::get('/studenti{id}','StudentsController@show')->name('Students.show');
#Route::get('/studenti/{slug}','StudentsController@slug')->name('Students.show');
#*** la chiave è semplicemente l'indice dell'array associativo che fa riferimento a quella collezione di valori!