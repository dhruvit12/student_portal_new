<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
      <title>
         Student Dashboard | Fingertips
      </title>
      <link href="<?php echo base_url();?>assets/css/nucleo-icons.css" rel="stylesheet" />
      <link href="<?php echo base_url();?>assets/css/custom_style/style.css" rel="stylesheet" />
      <link href="<?php echo base_url();?>assets/css/custom_style/media.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
      <link id="pagestyle" href="<?php echo base_url();?>assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> -->
      <style type="text/css">
         body{
         font-family: 'Poppins', sans-serif;
         }
         /*dashboard */
         .header_text1{
         font:bold !important;
         }
         .header_text2
         {
         display: block !important;
         font-weight:500;
         }
         .header_text3
         {
         font-size: 12px !important;
         font-weight: normal !important;
         display: block !important;
         color: #FFFFFF;
         }
         a#menu_dashboard.nav-link.menu-active {
         box-shadow: 4px -0.4px 1px -0.5px #e46f0e, 2px 1px 2px 3px rgb(0 0 0 / 10%) !important;
         color: white !important;
         }
         a#menu_course.nav-link.menu-active {
         box-shadow: 4px -0.4px 1px -0.5px #e46f0e, 2px 1px 2px 3px rgb(0 0 0 / 10%) !important;
         color: white !important;
         }a#menu_course.nav-link.menu-active {
         box-shadow: 4px -0.4px 1px -0.5px #e46f0e, 2px 1px 2px 3px rgb(0 0 0 / 10%) !important;
         color: white !important;
         }
         .bg-gray-200 {
         background-color: #ffffff !important;
         }
         .user_profile_image
         {
         max-width: 100%;
         max-height: 11rem !important;
         }
         .sidebar_logo
         {
         text-align: -webkit-center !important;
         }
         a.nav-link.text-white.active.bg-gradient-primary {
         /* color: red; */
         background: #26266C;
         background-color: #26266C !important;
         box-shadow: 4px -0.4px 1px -0.5px #e46f0e, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         }
         li.nav-item :hover{
         /* color: red; */
         background: #26266C;
         background-color: #26266C !important;
         box-shadow: 4px -0.4px 1px -0.5px #e46f0e, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         color:#ffffff !important;
         /*box-shadow:0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);*/
         }
         a.nav-link.text-white{
         /* color: red; */
         /*background: #26266C;*/
         /*background-color: #26266C !important;*/
         }
         .navbar .nav-link {
         color: #858585 !important;
         font-size: 16px;
         }
         .text-white.text-center.me-2.d-flex.align-items-center.justify-content-center {
         color: #83868b !important;
         }
         aside#sidenav-main {
         box-shadow: 0 1px 5px 1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);
         margin-top:  40px !important;
         }
         .dashboard_header {
         border-radius: 30px;
         box-shadow: 8px 0.4px 1px -0.6px #e46f0e, 0px 3px 6px rgb(0 0 0 / 16%);
         height: 155px;
         background-color: #26266C;
         max-width: 90%;
         }
         .dashboard_header_content
         {
         color: #ffffff;
         }
         .card {
         border-radius: 29px !important;
         }
         .refer_Card.card-body.px-0 {
         height: 200px!important;
         /*width: 837px !important;*/
         border-radius: 38px;
         box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%);
         }
         .card.course_header_new {
         width: auto;
         /height: 62px;/
         /padding-bottom: 30px;/
         padding-bottom: 0px;
         padding-top: 93px;
         padding-top: 17px;
         font-size: 25px;
         /* align-self: center; */
         text-align: center;
         }
         /*a:hover {
         color: #344767;
         text-decoration: none;
         }*/
         .course_class {
         height: 157px;
         }
         #course_button {
         background-color: #26266C;
         opacity: 100%;
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 29px;
         box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         margin-top: 30px;
         width: 140px;
         }
         #session {
         box-shadow: 10px  -0px 1px -0.5px #f0750b,2px 1px 2px 3px rgba(0,0,0,0.1);
         background-color: #ffffff;
         border-radius: 26px;
         height: 157px;
         width: auto;
         /* margin-left: 0px; */
         /* max-width: initial; */
         /* max-height: 100%; */
         }
         .scrollbar-hidden::-webkit-scrollbar {
         display: none;
         }
         /* Hide scrollbar for IE, Edge add Firefox */
         .scrollbar-hidden {
         -ms-overflow-style: none;
         scrollbar-width: none; /* Firefox */
         }
         div#upcomming {
         height: 543px;
         }
         div#completed {
         height: 543px;
         }
         #old_course_session {
         box-shadow: 10px  -0px 1px -0.5px #f0750b,2px 1px 2px 3px rgba(0,0,0,0.1);
         background-color: #ffffff;
         border-radius: 26px;
         height: 157px;
         width: auto;
         margin-right: 80px;
         margin-left: 40px;
         /* max-height: 100% !important; */
         }
         #project_course_button {
         background-color: #26266C;
         opacity: 100%;
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 35px;
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         width: 190px;
         padding-top: 8px;
         padding-bottom: 8px;
         padding-left: 18px;
         padding-right: 38px;
         margin-bottom: 36px;
         }
         #assignment_session {
         box-shadow: 4px 0px 1px -0.5px #f0750b, 1px 1px 10px 5px rgb(0 0 0 / 10%);
         background-color: #ffffff;
         border-radius: 26px;
         height: auto;
         width: auto;
         margin-right: 80px;
         margin-left: 40px;
         /* max-height: 100% !important; */
         }
         #assignment_button {
         background-color: #26266C;
         /* opacity: 100%; */
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 29px;
         box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         margin-top: auto;
         width: 140px;
         top: 55px;
         }
         /*anil css*/
         #old_course_session {
         box-shadow: 10px  -0px 1px -0.5px #f0750b,2px 1px 2px 3px rgba(0,0,0,0.1);
         background-color: #ffffff;
         border-radius: 26px;
         height: 157px;
         width: auto;
         margin-right: 80px;
         margin-left: 40px;
         /* max-height: 100% !important; */
         }
         #course_button {
         background-color: #26266C;
         opacity: 100%;
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 29px;
         box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         margin-top: 10px;
         width: 110px;
         }
         #project_course_button {
         background-color: #26266C;
         opacity: 100%;
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 35px;
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         width: 190px;
         padding-top: 8px;
         padding-bottom: 8px;
         padding-left: 18px;
         padding-right: 38px;
         margin-bottom: 36px;
         }
         #course_session {
         box-shadow: 10px 0px 0px -1.5px #f0750b, 2px 0px 10px 5px rgb(0 0 0 / 10%);
         border-radius: 26px;
         }
         #project_card
         {
         box-shadow: 10px 0px 0px -1.5px #f0750b, 4px 7px 5px -3px rgb(0 0 0 / 10%);
         border-radius: 26px;
         }
         #quiz_card
         {
         box-shadow:  4px 7px 5px -3px rgb(0 0 0 / 10%);
         border-radius: 20px;
         }
         #project_session {
         box-shadow: 10px 0px 0px -0.5px #f0750b, 2px 0px 10px 5px rgb(0 0 0 / 10%);
         background-color: #ffffff;
         border-radius: 26px;
         /* max-height: 100% !important; */
         }
         #assignment_session {
         box-shadow: 4px 0px 1px -0.5px #f0750b, 1px 1px 10px 5px rgb(0 0 0 / 10%);
         background-color: #ffffff;
         border-radius: 26px;
         height: auto;
         width: auto;
         margin-right: 80px;
         margin-left: 40px;
         /* max-height: 100% !important; */
         }
         #assignment_button {
         background-color: #26266C;
         /* opacity: 100%; */
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
         font-size: 11px;
         border-radius: 7px;
         height: 29px;
         box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
         border: none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
         margin-top: auto;
         width: 140px;
         top: 55px;
         }
         .session_name{
         color: #858585;
         font-size: 23px;
         font-weight:500;
         }
         .course_name
         {
         color:#949393 ;
         font-size: 15px;
         font-weight:500 ;
         margin-top: -10px;
         }
         .title_course
         {
         color: #535252;
         margin-bottom: 30px;
         font-family: 'Poppins' !important;
         font-size: 40px !important;
         font-weight: bold;
         }
         .title_project
         {
         color: #535252;
         margin-bottom: 30px;
         font-family: 'Poppins' !important;
         font-size: 40px !important;
         font-weight: bold;
         }
         .course_video_icon
         {
         height: auto;display: flex;width: auto;height: auto;padding: 24px !important;
         }
         .customScroll1::-webkit-scrollbar-track
         {
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
         border-radius: 10px;
         background-color: #F5F5F5;
         }
         .customScroll1::-webkit-scrollbar
         {
         width: 5px;
         background-color: #F5F5F5;
         }
         .customScroll1::-webkit-scrollbar-thumb
         {
         border-radius: 10px;
         -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
         background-color: #ababab;
         }
         .header_logo
         {
         width: 200px;
         height: 184px;
         }
         .image{
         margin-top: -33px;
         margin-left:-34px;
         border-radius: 27px;
         width: 250px;
         }
         .background
         {
         border-radius: 18px;
         box-shadow:0px 3px 6px 0px rgb(0 0 0 / 10%);
         margin-left:-20px;
         }
         .open {
         width: 1px;
         height: 168px;
         background: green;
         transition-property: width;
         transition-duration: 5s;
         z-index: -1;
         }
         .open:hover {
         width: 400px;
         background:.E42416;
         }
         .open1 {
         width: 1px;
         height: 168px;
         background: green;
         transition-property: width;
         transition-duration: 5s;
         z-index: -1;
         }
         .open1:hover {
         width: 400px;
         background:#E42416;
         }
         .course_button
         {
         background-color: #26266C;
         opacity:100%;
         color:#ffffff;
         font-family: Poppins;
         font-size: 11px;;
         border-radius: 7px;
         height: 29px;
         box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
         border:none;
         box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 1px 1px 2px 3px rgb(0 0 0 / 10%);
         margin-top:1 0px !important ;
         width:140px;
         }
         .quiz-mark-show{
         margin-left:-70px;
         border-radius:20px;
         background:green;
         width:80px;
         height:155px;
         }
         .quiz-mark-hide{
         margin-left:-70px;
         border-radius:20px;
         background:red;
         height:155px;
         width:180px;
         display:none;
         }
         @media (min-width: 480px) and (max-width: 767px) {
         .mobile_assignment{
         display:none;
         }
         #activity_button{
         margin-left:60px;
         margin-top:10px;
         width:164px;
         }
         }
         @media (min-width: 320px) and (max-width: 479px) {
         .mobile_assignment{
         display:none;
         }
         #activity_button{
         margin-left:60px;
         margin-top:10px;
         width:164px;
         }

         }
         @media screen and (max-width: 1500px) { 
         .course_header_new
         {
         display: none !important;
         }
         .course_card_drop_down_mobile{
         display: block !important;
         }
         .mobile_drop_down{
         text-align: -webkit-center;
         }
         }select.course_dropdown_list {
         width: 73%;
         border: none;
         height: 30px;
         box-shadow: 0px -2px 1px 0px rgb(0 0 0 / 10%), 4px 6px 0px -4px rgb(0 0 0 / 6%);
         padding-left: 30px;
         padding-right: 30px;
         align-items: flex-end;
         align-items: center !important;
         color: gray;
         font-size: 13px;
         margin-bottom: -48px;
         }
      </style>
   </head>
   <script>
      function  changeSidebarIconColor(get_icon_number)
      {
        document.getElementById('sidebar_icon_'+get_icon_number).style.fill='#E46F0E';
      }
      function changeSidebarIconColorOut(get_icon_number)
      {
       document.getElementById('sidebar_icon_'+get_icon_number).style.fill='#808080';
      }
      function  changeSidebarIconColorfa(get_icon_number)
      {
        document.getElementById('sidebar_icon_'+get_icon_number).style.color='#E46F0E';
      }
      function changeSidebarIconColorOutfa(get_icon_number)
      {
       document.getElementById('sidebar_icon_'+get_icon_number).style.color='#808080';
      }
   </script>
   <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
         <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <ul class="navbar-nav  justify-content-end">
               <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                  <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                     <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i> 
                        <i class="sidenav-toggler-line"></i>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <!-- Navbar -->