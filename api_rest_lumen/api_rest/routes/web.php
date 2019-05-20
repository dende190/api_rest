<?php 

	// Traer todos los datos
	$router->get('/categories', 'CategoriesController@index');
	// Traer un dato en especifico
	$router->get('/categories/{id}', 'CategoriesController@getCategory');
	// Crear un nuevo dato
	$router->post('/categories', 'CategoriesController@createCategory');
	// Modificar dato
	$router->put('/categories/{id}', 'CategoriesController@updateCategory');
	// Eliminar dato
	$router->delete('/categories/{id}', 'CategoriesController@deleteCategory');

?>