<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['sign-up'] = 'C_Users/signup';
$route['user-registration'] = 'C_Users/userRegistration';
$route['dashboard'] = 'C_Users/dashboard';


