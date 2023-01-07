<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\KMAUserManager\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */

#use OCP\AppFramework\Http\Route\Route;
return [
//     'routes' => [
        
// 	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
// 	   ['name' => 'page#add', 'url' => '/add', 'verb' => 'GET'],
// 	   ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST']
// //	   ['root' => '/cloud', 'name' => 'Canbo#getCanbo', 'url' => '/kma_canbo_users', 'verb' => 'GET']
//     ],

    'ocs' => [
        // apis
		['root' => '/cloud1', 'name' => 'Canbo#getCanbo', 'url' => '/kma_canbo_users', 'verb' => 'GET'],
        // [
		// 	'name' => 'user#users',
		// 	'url' => '/api/v1/users/',
		// 	'verb' => 'POST',
		// 	'requirements' => [
		// 		'path' => '.*',
		// 	]
		// ],
        // [
		// 	'name' => 'user#users',
		// 	'url' => '/api/v1/users/',
		// 	'verb' => 'PUT',
		// 	'requirements' => [
		// 		'path' => '.*',
		// 	]
		// ],
        // [
		// 	'name' => 'user#users',
		// 	'url' => '/api/v1/users/',
		// 	'verb' => 'DELETE',
		// 	'requirements' => [
		// 		'path' => '.*',
		// 	]
		// ],
    ]
];
