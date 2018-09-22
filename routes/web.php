<?php

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
    return view('home');
});

//To Download the resume
Route::get('/download', function () {
  //PDF file is stored under public/resume/CV.pdf
  $file= public_path(). "/resume/Antreas Papadopoulos CV.pdf";

  $headers = array(
            'Content-Type: application/pdf',
          );

  return Response::download($file, 'AntreasPapadopoulos-CV.pdf', $headers);
});

//Display Contact page through the ContactMeController and funciton 'show'
Route::get('/contact', [
  'uses' => 'ContactMeController@show'
]);

//Display Contact page through the ContactMeController and funciton 'store'
Route::post('/contact', [
  'uses' => 'ContactMeController@store',
  'as' => 'contact.store'
]);

//Display Contact page through the IssuesController and funciton 'show'
Route::get('/issues', [
  'uses' => 'IssuesController@show'
]);
