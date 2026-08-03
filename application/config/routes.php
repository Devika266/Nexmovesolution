<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['settings'] = 'admin/settings';
$route['seo'] = 'admin/seo';
$route['service'] = 'admin/service';
$route['service/(:num)'] = 'welcome/service/$1';
$route['portfolio'] = 'admin/portfolio';
$route['portfolio/(:num)'] = 'welcome/portfolio/$1';
$route['blog'] = 'admin/blog';
$route['add-service'] = 'admin/edit';
$route['add-portfolio'] = 'admin/editportfolio';
$route['add-blog'] = 'admin/editblog';
$route['admin/editing/(:num)'] = 'admin/editing/$1';
$route['website/contact'] = 'welcome/contact';
$route['website/blog'] = 'welcome/blog';
$route['website/home'] = 'welcome/home';
$route['website/about'] = 'welcome/about';
$route['blogdetail/(:num)'] = 'welcome/blogdetail/$1';
$route['portfoliomain'] = 'welcome/portfoliomain';
$route['website/privacy'] = 'welcome/privacy';
$route['website/cookies'] = 'welcome/cookies';
$route['website/refund'] = 'welcome/refund';
$route['website/term'] = 'welcome/term';
$route['website/thank-you'] = 'welcome/thank_you';