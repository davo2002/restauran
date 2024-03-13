<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/pag';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin']='Usuario/panel';
$route['pag']='welcome/pag';
$route['carrito']='welcome/carrito';
$route['gua']='Usuario/gua';
$route['pedidos']='Usuario/pedidos';


$route['login/admin']= 'login/login';

$route['login/veri']= 'login/veri';

$route['login/cerrar']= 'login/cerrar';


$route['pedid']='welcome/pedid';
$route['gestionar_productos/eliminar_productos/(:num)'] = 'Usuario/eliminar_productos/$1';
$route['gestionar_productos/eliminar_productos1/(:num)'] = 'Usuario/eliminar_productos1/$1';

$route['productos']='Usuario/productos';
$route ['datos_personas']="Usuario/datos_personas";
$route ['envi']="Usuario/envi";
$route ['crea']="Usuario/crea";
$route ['session']="Usuario/session";
$route ['gestion_eliminar']="Usuario/gestion_eliminar";
$route ['mas']="welcome/mas";
$route ['crear']="Usuario/crear";



