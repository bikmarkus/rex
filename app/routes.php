<?php
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('inbox', 'InboxController@index');
$router->post('inbox', 'InboxController@store');
$router->post('inbox-del', 'InboxController@delete');

$router->get('projects', 'ProjectsController@index');
$router->post('projects', 'ProjectsController@store');
$router->post('projects-del', 'ProjectsController@delete');

$router->post('project-card', 'ProjectCardController@index');
$router->get('project-card', 'ProjectCardController@index');
$router->post('next-add', 'ProjectCardController@storeNext');
$router->post('next-del', 'ProjectCardController@deleteNext');

?>