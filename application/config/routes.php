<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sign-in'] 			= 'Welcome/index';
$route['auth'] 				= 'C_connexions/authentication';
$route['se_deconnecter'] 	= 'C_connexions/se_deconnecter';


$route['dashboard'] 		            = 'C_connexions/home';
$route['sign-in'] 			    		= 'Welcome/index';
$route['verif-connexion'] 			    = 'C_connexions/verif_connexion';
$route['se_deconnecter'] 			    = 'C_connexions/se_deconnecter';
$route['front-office'] 			        = 'Accueil/home';
