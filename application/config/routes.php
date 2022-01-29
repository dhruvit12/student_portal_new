<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['total-attendance']='total_attendance';


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

// edit_profile
$route['profile']='student/edit_profile';

