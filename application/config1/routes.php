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

$route['default_controller'] = 'Login';
$route['dashboard']='student/dashboard';
$route['course']='course';
$route['read']='student/read';
$route['live_course']='student/live_course';
$route['self_course']='student/self_course';
$route['record']='student/record';
$route['forgot_password']='Forgot/forgot_password';
$route['project']='project';
$route['test']='test';
$route['logout']='student/logout';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['assignment']='assignment';
$route['case_study']='casestudy';
$route['quiz']='quiz';
$route['edit_profile']='student/edit_profile';
$route['program_flow']='program_flow';
$route['support']='support';
$route['total_attendance']='total_attendance';

//download material 
$route['download_material']='Reading_material/download_material';
$route['download-solution']='Reading_material/download_solution';
$route['mcq-test/(:num)']='Quiz/mcq_test/$1';
$route['mcq-test-result/(:num)']='Quiz/mcq_test_result/$1';
// $route['mcq-test-list']='quiz/mcq_test_list';
// $route['add-test']='quiz/add_test';

//video play
$route['video-play']='Video/play';
$route['data_science_pro']='Installation_pro/data_science_pro';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
