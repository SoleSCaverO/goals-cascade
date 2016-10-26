<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
    // Perspectives
    Route::get('perspectivas','PerspectiveController@index');
    Route::post('perspectivas/registrar','PerspectiveController@create');
    Route::post('perspectivas/editar','PerspectiveController@edit');
    Route::post('perspectivas/eliminar','PerspectiveController@delete');

    //Strategic Goals
    Route::get('objetivos-estrategicos','EnterpriseController@index');
    Route::post('objetivos-estrategicos/registrar','EnterpriseController@create');
    Route::post('objetivos-estrategicos/editar','EnterpriseController@edit');
    Route::post('objetivos-estrategicos/eliminar','EnterpriseController@delete');

    Route::get('/objetivos-estrategicos-alinear','EnterpriseController@map');
    Route::get('/objetivos-estrategicos-alineamiento/{id}','EnterpriseController@alignment');
    Route::post('objetivos-estrategicos-alinear','EnterpriseController@align');

    //Strategic IT Goals
    Route::get('objetivos-estrategicos-ti','EnterpriseItController@index');
    Route::post('objetivos-estrategicos-ti/registrar','EnterpriseItController@create');
    Route::post('objetivos-estrategicos-ti/editar','EnterpriseItController@edit');
    Route::post('objetivos-estrategicos-ti/eliminar','EnterpriseItController@delete');

    Route::get('objetivos-estrategicos-ti-alinear','EnterpriseItController@panels');
    Route::get('objetivos-estrategicos-ti/{id}','EnterpriseItController@its');
    Route::post('objetivos-estrategicos-ti-alinear','EnterpriseItController@align');

    //Cascade Goals
    Route::get('cascada-metas','CascadeController@index');
    Route::get('cascada-metas/{enterprise}/{corporative}','CascadeController@it');
    Route::get('/cascada-metas/{enterprise}/{corporative}/{it}','CascadeController@process');

    //Cascade Goals Reports
    Route::get('reporte-metas-ti','ReportController@it');
    Route::get('reporte-procesos-cobit','ReportController@process');

    //Corporatives
    Route::get('corporative/{corporative}','CorporativeController@corporative');
    Route::get('corporatives-list-id/{enterprise}','CorporativeController@corporatives_id');
    Route::get('corporatives-list-name/{enterprise}','CorporativeController@corporatives_name');
});