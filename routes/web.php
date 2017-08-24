<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

// Nairaproduct Users
	$app->get('/users', 'UserController@index');
	$app->post('/users/', 'UserController@store');
	$app->get('/users/{user_id}', 'UserController@show');
	$app->put('/users/{user_id}', 'UserController@update');
	$app->delete('/users/{user_id}', 'UserController@destroy');

// Products on Nairaproduct
	$app->get('/products','ProductController@index');
	$app->post('/posts','PostController@store');
	$app->get('/posts/{post_id}','PostController@show');
	$app->put('/posts/{post_id}', 'PostController@update');
	$app->delete('/posts/{post_id}', 'PostController@destroy');

$app->group(['prefix' => 'nairaproducts'], function () use ($app) {
    $app->get('/', function ()    {
        // Uses Auth Middleware
    });

    $app->get('user/profile', function () {
        // Uses Auth Middleware
    });
});

// Comments
$app->get('/comments', 'CommentController@index');
$app->get('/comments/{comment_id}', 'CommentController@show');
// Comments of a Post
$app->get('/posts/{post_id}/comments', 'PostCommentController@index');
$app->post('/posts/{post_id}/comments', 'PostCommentController@store');
$app->put('/posts/{post_id}/comments/{comment_id}', 'PostCommentController@update');
$app->delete('/posts/{post_id}/comments/{comment_id}', 'PostCommentController@destroy');