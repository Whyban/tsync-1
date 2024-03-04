<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/homepage.blade.php', function () {
    return view('homepage');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/position', function () {
    return view('position');
});

Route::get('/kanbanboard', function () {
    return view('kanban');
});

Route::get('/compose', function () {
    return view('compose');
});

Route::get('/readmail', function () {
    return view('read-mail');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects-add', function () {
    return view('project-add');
});

Route::get('/projects-edit', function () {
    return view('project-edit');
});

Route::get('/projects-details', function () {
    return view('project-detail');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/designation', function () {
    return view('designation');
});

Route::get('/team_members', function () {
    return view('team_members');
});

Route::get('/roles', function () {
    return view('roles');
});
