<?php

use \Laravel\Lumen\Routing\Router;
use App\Http\Controllers\BookController;

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
/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::get('/', [BookController::class, 'index']);



$router->get('one', function () use ($router) {
    return "Hi everyone";
});
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('books', ['uses' => 'BookController@index']);
    $router->get('books/{id}', ['uses' => 'BookController@show']);
});
