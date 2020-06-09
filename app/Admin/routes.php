<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/profile', ProfileController::class);
    $router->resource('/categories', CategoryController::class);
    $router->resource('/skill', SkillController::class);
    $router->resource('/actual_result', ActualResultController::class);
    $router->resource('/development', DevelopmentController::class);
});
