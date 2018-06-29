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
|	https://codeigniter.com/user_guide/general/routing.html
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

//menu
$route['home/menu'] =  "home/Configuration/menuconfig";
$route['home/menu/add'] =  "home/Configuration/menuconfig/addmenu";
$route['home/menu/add/save'] =  "home/Configuration/menuconfig/savemenu";
$route['home/menu/edit/(:any)'] =  "home/Configuration/menuconfig/editmenu/$1";
$route['home/menu/add/update'] =  "home/Configuration/menuconfig/updatemenu";
$route['home/utility/menu'] =  "home/utility/menu";

//menu
//group
$route['home/group'] =  "home/Configuration/groupconfig";
$route['home/group/add'] =  "home/Configuration/groupconfig/addgroup";
$route['home/group/edit/(:any)'] =  "home/Configuration/groupconfig/editgroup/$1";
$route['home/group/add/save'] =  "home/Configuration/groupconfig/savegroup";
$route['home/group/add/update'] =  "home/Configuration/groupconfig/updategroup";
$route['home/menu/nonactive/(:any)'] =  "api/nonactivemenu/$1";

//Utility
$route['home/utility/menu/add/(:any)'] =  "home/utility/menu/addmenuakses/$1";
$route['home/utility/menu/save'] =  "home/utility/menu/savemenuakses";
//user
$route['home/configuration/users'] =  "home/Configuration/usersconfig";
$route['home/configuration/users/add'] =  "home/Configuration/usersconfig/usersadd";
$route['home/configuration/users/save'] =  "home/Configuration/usersconfig/usersave";
$route['home/configuration/users/edit/(:any)'] =  "home/Configuration/usersconfig/edituser/$1";
$route['home/configuration/users/save/edit'] =  "home/Configuration/usersconfig/updateusers";

$route['dashboard/utility/roles/delete/(:any)'] =  "dashboard/permission/roles_perm/hapusroles/$1";
$route['dashboard/utility/menu/add'] =  "dashboard/permission/permission/addmenu";
$route['dashboard/utility/menu/actionadd'] =  "dashboard/permission/permission/actionaddmenu";
$route['dashboard/utility/menu/delete/(:any)'] =  "dashboard/permission/permission/deletemenu/$1";

//data master
$route['home/master/warga'] =  "home/warga/warga";
$route['home/master/warga/add'] =  "home/warga/warga/addwarga";
$route['home/master/warga/save'] =  "home/warga/warga/savewarga";
