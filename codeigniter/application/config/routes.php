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

/**
 * Monitoring/Public Alert Routes
 */

$route['home'] = "public_website/index";
$route['sites'] = "public_website/site_list";
$route['sites/(:any)'] = "public_website/individual_site/$1";
$route['what-we-do'] = "public_website/what_we_do";
$route['who-we-are'] = "public_website/who_we_are";
$route['where-we-work'] = "public_website/where_we_work";

$route['default_controller'] = "public_website/index";
$route['404_override'] = '';

$route['public_website/data_analysis/(:any)'] = "data_analysis_controller";

/* End of file routes.php */
/* Location: ./application/config/routes.php */