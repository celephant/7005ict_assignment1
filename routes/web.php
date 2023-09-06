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
    $posts = DB::select('SELECT * FROM posts ORDER BY date DESC');
    return view('home', ['posts' => $posts]);
});

Route::post('/create-post', function () {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $message = $_POST['message'];
    $date = date('d/m/Y H:i:s');

    DB::insert('INSERT INTO posts (title, author, message, date) VALUES (?, ?, ?, ?)', [$title, $author, $message, $date]);
    return redirect('/');

});

Route::get('/post/{id}', function ($id) {
    $post = DB::select('SELECT * FROM posts WHERE id = ?', [$id]);
    $comments = DB::select('SELECT * FROM comments WHERE post_id = ? ORDER BY date DESC', [$id]);
    return view('postdetail', ['post' => $post[0], 'comments' => $comments]);
});

Route::post('/post/{id}', function ($id) {
    $author = $_POST['author'];
    $message = $_POST['message'];
    $date = date('d/m/Y H:i:s');

    DB::insert('INSERT INTO comments (post_id, author, message, date) VALUES (?, ?, ?, ?)', [$id, $author, $message, $date]);

    return redirect("/post/$id");
});



Route::get('/edit/{id}', function ($id) {
    $post = DB::select('SELECT * FROM posts WHERE id = ?', [$id]);
    $comments = DB::select('SELECT * FROM comments WHERE post_id = ? ORDER BY date DESC', [$id]);
    return view('editpost', ['post' => $post[0], 'comments' => $comments]);
});

Route::post('/edit/{id}', function ($id) {
    $title = $_POST['title'];
    $message = $_POST['message'];
    $date = date('d/m/Y H:i:s');

    DB::update('UPDATE posts SET title = ?, message = ?, date = ? WHERE id = ?', [$title, $message, $date, $id]);

    return redirect("/post/$id");
});


Route::post('/delete-post/{id}', function ($id) {
    DB::delete('DELETE FROM comments WHERE post_id = ?', [$id]);

    DB::delete('DELETE FROM posts WHERE id = ?', [$id]);
    return redirect('/');
    
});
