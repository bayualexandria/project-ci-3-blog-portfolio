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
$route['default_controller'] = 'website';
$route['404_override'] = '';

// Website
$route['kategorimateri']='Website/kategorimateri';
$route['materi/(:any)']='Website/materi/$1';
$route['blog']='Website/blogs';
$route['profile']='Website/profile';
$route['about']='Website/about';
$route['detail/(:any)']='Website/detail/$1';

// Auth
$route['auth']='admin/Auth';
$route['register']='admin/Auth/register';
$route['logout']='admin/Auth/logout';

// Home
$route['home']='admin/Home';
$route['profile']='admin/Home/profile';

// Blogs
$route['blogs']='admin/Content/blogs';
$route['create.blogs']='admin/Content/createblogs';
$route['edit.blogs/(:any)']='admin/Content/updateblogs/$1';
$route['delete.blogs/(:any)']='admin/Content/deleteblogs/$1';

// Materi
$route['materi']='admin/Content/materi';
$route['update.materi']='admin/Content/updatemateri';
$route['delete.materi/(:any)']='admin/Content/deletemateri/$1';


$route['translate_uri_dashes'] = FALSE;