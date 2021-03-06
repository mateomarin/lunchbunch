<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "/Users/index";
$route['index'] = "/Users/index";
$route['validate_password'] = "/Users/validate_password";
$route['register'] = "/Users/register";
$route['new_user'] = "/Users/new_user";
$route['login'] = "/Users/login_page";
$route['logout'] = "/Users/logout";
$route['success'] = "/Users/success";
$route['profile_view'] = "/Users/profile_view";
$route['add_new_ride/(:any)'] = "/Rides/add_new_ride/$1";
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
