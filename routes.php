<?php

$router->get('/', 'controlers/index.php');

$router->get('/about', 'controlers/about.php');

$router->get('/contact', 'controlers/contact.php');

$router->get('/notes', 'controlers/notes/index.php');

$router->get('/note', 'controlers/notes/show.php');
$router->delete('/note', 'controlers/notes/destroy.php');
$router->delete('/note', 'controlers/notes/show.php');


$router->get('/notes/Create', 'controlers/notes/create.php');
$router->post('/notes/Create', 'controlers/notes/store.php');
