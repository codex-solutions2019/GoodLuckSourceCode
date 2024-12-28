<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Immigration';
$route['index2'] = 'Immigration/index2';
$route['new'] = 'Immigration';
$route['privacy_policy'] = 'Immigration/privacy_policy';
$route['universities'] = 'Immigration/universities';
$route['gallery'] = 'Immigration/gallery';
$route['blog/(:any)'] = 'Immigration/blog';
$route['terms'] = 'Immigration/terms';
$route['about'] = 'Immigration/about_us';
$route['services'] = 'Immigration/services';
$route['contact_us'] = 'Immigration/contact_us';
$route['faq'] = 'Immigration/faq';
$route['Admin'] = 'Admin/index';
$route['logout'] = 'AdminLogin/logout_admin';

$route['admin'] = 'AdminLogin';
$route['(:any)'] = 'Immigration/country_details';
$route['Services/(:any)'] = 'Immigration/service_details';
$route['404_override'] = 'Immigration';
$route['translate_uri_dashes'] = FALSE;
