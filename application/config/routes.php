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


//$route['news/(:any)'] = 'news/view/$1';
//$route['news'] = 'news';
$route['search'] = 'Search_ctrl/search';
$route['restaurantInfo/(:any)'] = 'Restaurant_ctrl/viewRes/$1';
$route['login'] = 'User_ctrl/login';
$route['logout'] = 'User_ctrl/logout';
$route['signup'] = 'User_ctrl/signup';
$route['submitReview/(:any)'] = 'Restaurant_ctrl/submitReview/$1';
$route['user/(:any)'] = 'User_ctrl/userProfile/$1';
$route['setting/(:any)'] = 'User_ctrl/setting/$1';
$route['deleteRReview/(:any)/(:any)'] = 'User_ctrl/deleteRReview/$1/$2';
$route['deleteDReview/(:any)/(:any)'] = 'User_ctrl/deleteDReview/$1/$2';
//$route['search_view'] = 'Search_ctrl/search';
//$route['users_view/login'] = 'users_ctl/login';
//$route['users_ctl'] = 'users_ctl/login';
//$route['(:any)'] = 'pages/view/$1';
//$route['default_controller'] = 'pages/view';


/* End of file routes.php */
/* Location: ./application/config/routes.php */