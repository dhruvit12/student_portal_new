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
  
  
</head>
<style type="text/css">
         .menu-active-support{
            color:#000000 !important;

         }
         .menu{
          color:#858585;font-size:20px;
         }
          .navbar-nav .nav-item .nav-link .menu :hover {
            color:#000000 ;
          
         }

</style>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom_style/student_recording.css">

<link rel="stylesheet" href="<?php echo base_url()?>program_assets/mastercss/bootstrap_support_header.min.css">    
<div class="navbar navbar-expand-lg navbar-white bg-white" id="navbar" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="navbar-header">
          <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"  style="background-color: black"></span><span class="icon-bar" style="background-color: black"></span><span class="icon-bar" style="background-color: black"></span></button>
          <a href="<?php echo base_url()?>dashboard" class="navbar-brand">
            <img src="<?php echo base_url()?>assets/images/logo/logo.png" alt="CoolBrand" style="width: 120px;margin-left: 40px;margin-right: 100px;margin-top: -5px;">
          </a>
        </div>

        <div class="navbar-collapse collapse" id="mobile_menu" >
          <ul class="nav navbar-nav" style="margin-top: 10px;">
            <li class="active"> <a  href="dashboard" class="nav-item nav-link menu" style="">Dashboard</a></li>
            <li> 
              <a href="course" class="nav-item nav-link menu">Courses</a></a>
            </li>
            <li>
             <a href="program_flow" class="nav-item nav-link menu">Program Flow</a></li>
            <li>
              <a href="#" class="nav-item nav-link menu" tabindex="-1">Practise</a></li>
            <li>
              <a id="menu_support" href="support" class="nav-item nav-link menu">Support</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url()?>assets/images/student_portal_icon/profile.png" width="40" height="40" class="rounded-circle"></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()?>profile" class="nav-item nav-link menu">Edit Profile</a></li>
                  <li><a href="<?php echo base_url();?>logout" class="nav-item nav-link menu"  onclick="javascript:return confirm('Are you sure you want to log out?');">Log out</a>
                  </li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
