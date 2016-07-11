<?php

Route::group(['prefix' => 'admin'],function($router)
{
	$router->get('login','Auth\Admin\AuthController@showLoginForm');
	$router->post('login','Auth\Admin\AuthController@login');
	$router->get('logout','Auth\Admin\AuthController@logout');

	// Registration Routes...
	$router->get('register', 'Auth\Admin\AuthController@showRegistrationForm');
	$router->post('register', 'Auth\Admin\AuthController@register');
});

$router->resource('admin','Admin\AdminController');