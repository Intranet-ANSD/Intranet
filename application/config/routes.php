<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
// (...)
$route['default_controller'] = 'site';
$route['blog'] = 'blog/index'; // l'URI 'blog' sera redirigée vers 'blog/index'
$route['(:any)'] = 'site/$1';
$route ['blog/(:any)_(:num)'] = 'blog/article/$2'; // $2 se réfère au contenu du
$route ['celcom/(:any)_(:num)'] = 'celcom/communique/$2'; // $2 se réfère au contenu du
$route ['publique/(:any)_(:num)'] = 'publique/article/$2'; // $2 se réfère au contenu du