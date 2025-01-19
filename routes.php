<?php

$router->get('/', 'controlers/index.php');

$router->get('/about', 'controlers/about.php');

$router->get('/contact', 'controlers/contact.php');

$router->get('/notes', 'controlers/notes/index.php');

$router->get('/note', 'controlers/notes/show.php');
$router->delete('/note', 'controlers/notes/destroy.php');
$router->delete('/note', 'controlers/notes/show.php');
$router->patch('/note', 'controlers/notes/update.php');


$router->get('/notes/Create', 'controlers/notes/create.php');
$router->post('/notes/Create', 'controlers/notes/store.php');

$router->get('/notes/edit', 'controlers/notes/edit.php');


$router->get('/register','controlers/registertion/create.php');
$router->post('/register','controlers/registertion/store.php');