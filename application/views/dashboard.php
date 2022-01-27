<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   <!-- Navbar -->
   <script>
      //menu
      document.getElementById('menu_dashboard').classList.add("menu-active");
      //icon
      document.getElementById('sidebar_icon_1').style.fill='#E46F0E';
      
   </script>
   <script type="text/javascript"> 
      $(document).ready(function(){
          document.getElementById("all-link-1").click();
       });
   </script>
   <!-- End Navbar -->
   <div class="container-fluid py-4">
   <div class="row">
      <!-- First Header start -->
      <div class="col-lg-12 col-md-12 ">
         <div class="card dashboard_header ">
            <div class="row dashboard_header_content">
               <div class="col-md-3 col-lg-2  col-3">
                  <img src="<?php echo base_url()?>assets/images/student_portal_icon/Finger Tips 01.png" class="img-fluid header_logo logo" >
               </div>
               <div class="col-md-6 col-lg-8 col-8 header_text_center" >
                  <span class="header_text1" style="font-size: clamp(12px, 1vw, 18px);">Welcome to Fingertips</span>
                  <span class="header_text2" style="font-size: clamp(12px, 3vw, 25px);">You have enrolled in Data Science Pro</span>
                  <span class="header_text3">Your Batch: <?php echo $batch_name;?></span>
               </div>
               <div class="col-md-2 col-lg-2 col-2 header_text4" style="font-size: clamp(16px, 5vw, 55px);font-family: 'Poppins' !important;margin-top: 29px;"> #191 </div>
            </div>
         </div>
      </div>
      <!-- First Header end -->
   </div>
   <!-- Secound Start -->
   <div class="row mb-4">
      <div class="row mb-4">
         <span id="activitys">Activity</span>
         <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist" style="border-bottom-style:none;width: ">
            <li class="nav-items">
               <a
                  class="nav-link tablinks active" id="all-link-1" data-toggle="tab" href="#upcoming" role="tab" aria-selected="false" data-original-title=""
                  onclick="openCity(event, 'upcomming')"
                  onmouseover="changeactivityfirstin(1)" onmouseout="changeactivityfirstout(1)" style="font-weight: 500" >Upcoming</a
                  >
            </li>
            <li class="nav-items">
               <a
                  id="video-link-1"
                  class="nav-link tablinks"
                  data-toggle="tab"
                  href="#completed"
                  role="tab"
                  aria-selected="false"
                  data-original-title=""
                  onclick="openCity(event, 'completed')"
                  onmouseover="changeactivitysecondin(1)" onmouseout="changeactivitysecondout(1)" style="font-weight: 500"></i>Completed</a
                  >
            </li>
         </ul>
         <div class="col-lg-8 col-md-12" id="mobile_view_activity_position" style="margin-top: 10px;">
            <div class="card tabcontent customScroll1" style="max-height:500px; overflow-y:auto; overflow-x:hidden;" id="upcomming">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card height-equal" >
                           <div class="card-body">
                              <div class="upcoming-event">
                                 <?php
                                    include('dbcon.php');
                                      $date = date_create();
                                      $timestamp = date_timestamp_get($date);
                                      $query = "SELECT * FROM `offline_session` WHERE `batch_id` = $batch_id AND `is_deleted` = 0";
                                      $runfetch = mysqli_query($con, $query);
                                      $noofrow = mysqli_num_rows($runfetch);
                                      
                                      if ($noofrow >0 && $runfetch == TRUE) { 
                                         while ($data = mysqli_fetch_assoc($runfetch)) {
                                        
                                      
                                      $session_id = $data['id'];
                                      $query10 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id";
                                     $runfetch10 = mysqli_query($con, $query10);
                                    
                                      $noofrow10 = mysqli_num_rows($runfetch10);
                                      if($noofrow10 == 0)
                                      {
                                           ?>
                                 <div class="col-lg-12">
                                  <div class="row">
                                        <div class="col-md-1 col-3">
                                       <img  id="upcoming_icon" src="<?php echo base_url()?>assets/images/student_portal_icon/Group 59.png">
                                   </div>
                                    <div class="col-md-7 col-7" style="padding-left: 30px; ">
                                    <span  id="upcoming_session" style="font-weight: 500;
                                                    font-size: 17px;
                                                    display: block;
                                                    font-family: 'Poppins' !important;
                                                    color: #5A5858;
                                                    ">
                                        Session : <?php echo $data['session_name']; ?></span>
                                    <span id="upcoming_course" style="color: #949393;font-size:15px;">Course: <?php echo $course_name;?></span><br>
                                    <span id="upcoming_start_at" style="color: #949393;font-size:13px;"> Starts at: <?php  $mydate=getdate($data['session_date']); echo "$mydate[month] $mydate[mday]"?></span>
                                   </div>
                                    <div class="col-md-2 col-2">
                                       <a id="completed_open_dropdown_icon" href="#myCollapse<?php echo  $com;?>" data-toggle="collapse" style="font-size:24px;color:gray;margin-left: 20px;" data-target="#myCollapse<?php echo $com;?>">
                                                <i class="fas fa-angle-down" ></i>
                                        </a>
                                   </div>

                                  </div>
                                    <div class="row">
                                  <div class="collapse" id="myCollapse<?php echo $com;?>" style="margin-top: -10px !important; margin-left: 100px;">
                                         <div class="col-md-2 col-3">
                                         </div>
                                         <div class="col-md-7 col-7" style="margin-left:-47px;margin-top: 20px; ">
                                             <a>Reading Material</a>
                                             <hr style="max-width:250px">
                                             <a>Reading Material</a>
                                             <hr style="max-width:250px">
                                             <a>Reading Material</a>
                                         </div>
                                  </div>
                                 </div>
                                    <ul class="nav">
                                       <li class="nav-item" style="cursor:pointer;"  
                                          data-toggle="modal"
                                          data-target="#reading_material_list"
                                          <?php
                                             $query100 = "SELECT * FROM `offline_session` WHERE `id` = $session_id;";
                                             print_r($query100);
                                             $runfetch100 = mysqli_query($con, $query100);
                                             $noofrow100 = mysqli_num_rows($runfetch100);
                                             $indexnumber100 = 1;
                                             if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                                while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                                   $reading_material = $data100['reading_material']; 
                                                   $reading_material_array = explode (",", $reading_material);  
                                                   $no_of_reading_material =  sizeof($reading_material_array);
                                                }
                                             }
                                             ?>
                                          onclick= "prepareReadingMaterialListModal(
                                          <?php                                                                  
                                             for($i= 0; $i < $no_of_reading_material-1; $i++){
                                                 
                                                 $anz_material_id = $reading_material_array[$i];
                                                 $query1000 = "SELECT * FROM material WHERE id = $anz_material_id";
                                                $runfetch1000 = mysqli_query($con, $query1000);
                                                $noofrow1000 = mysqli_num_rows($runfetch1000);
                                                
                                                
                                                if ($noofrow1000 >0 && $runfetch1000 == TRUE) { 
                                                   while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 
                                                      echo "'".$data1000['topic_name']."'," ;
                                                   }}
                                                   echo $reading_material_array[$i];
                                                 if($i != $no_of_reading_material - 2){
                                                    echo ',';                                                                 
                                                }
                                                }
                                                ?>
                                          )"
                                          >
                                          <button class="upcoming_mobilein_hide" id="activity_button"  style="width:160px;margin-left: 85px;"><img src="<?php echo base_url()?>assets/images/student_portal_icon/reading-material.png">&nbsp;&nbsp;
                                    Reading Material &nbsp;&nbsp;
                                          </button>
                                           <hr>
                                           </li>
                                    </ul>
                                 </div>
                                
                                 <?php
                                    }else{
                                    }
                                    }}else{
                                    }
                                    
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <div class="card tabcontent customScroll1" style="max-height:500px; overflow-y:auto; overflow-x:hidden;" id="completed" >
               <div class="row">
                  <div class="col-md-12" >
                     <div class="card height-equal" >
                        <div class="card-body">
                           <div class="upcoming-event">
                              <?php
                                 $query = "SELECT * FROM `offline_session_log` WHERE `is_completed` = 1 ";                                            
                                 $runfetch = mysqli_query($con, $query);                       
                                 $noofrow = mysqli_num_rows($runfetch);       
                                
                                 if ($noofrow > 0 && $runfetch == TRUE) { 
                                  
                                   while ($data = mysqli_fetch_assoc($runfetch)) {

                                     $session_id = $data['session_id'];
                                 $query10 = "SELECT * FROM `offline_session` WHERE `id` = $session_id  AND `is_deleted` = 0;";                                            
                                 $runfetch10 = mysqli_query($con, $query10);                       
                                 $noofrow10 = mysqli_num_rows($runfetch10);       
                                  
                                 if ($noofrow10 > 0 && $runfetch10 == TRUE) { 
                                  $com=1;
                                   while ($data10 = mysqli_fetch_assoc($runfetch10)) {
                                    if($data10['batch_Id'] == $batch_id){
                                 ?>
                                 <div class="row">
                                   <div class="col-md-1  col-3">
                                    <img  id="completed_icon" src="<?php echo base_url()?>assets/images/student_portal_icon/Group 59.png" >
                                   </div>
                                    <div class="col-md-7 col-7" style="padding-left: 30px; ">
                                      <span id="completed_session" 
                                             style="font-weight: 500;
                                                    font-size: 17px;
                                                    display: block;
                                                    font-family: 'Poppins' !important;
                                                    color: #5A5858;
                                                    ">   
                                            Offline : <?php echo $data10['session_name']; ?>
                                       </span>
                                       <span id="completed_starts_at"  style="color: #949393;font-size:15px">
                                            Starts at: <?php echo "$mydate[month] $mydate[mday]"?></span>
                                         <br>
                                       <span id="completed_course"  style="color: #949393;font-size:13px;">
                                       Course:<?php echo  $course_name;
                                          ?></span>
                                       </div>
                                    <div class="col-md-2 col-2">
                                       <a id="completed_open_dropdown_icon" href="#myCollapse<?php echo  $com;?>" data-toggle="collapse" style="font-size:24px;color:gray;margin-left: 20px;" data-target="#myCollapse<?php echo $com;?>">
                                                <i class="fas fa-angle-down" ></i>
                                        </a>
                                   </div>

                                 </div>
                                 <div class="row">
                                  <div class="collapse" id="myCollapse<?php echo $com;?>" style="margin-top: -10px !important; margin-left: 100px;">
                                         <div class="col-md-2 col-3">
                                         </div>
                                         <div class="col-md-7 col-7" style="margin-left:-47px;margin-top: 20px; ">
                                             <a>Reading Material</a>
                                             <hr style="max-width:250px">
                                             <a>Reading Material</a>
                                             <hr style="max-width:250px">
                                             <a>Reading Material</a>
                                             
                                         </div>

                                  </div>
                                 </div>
                             
                              <ul class="nav "
                                  >
                                 <li class="nav-item" style="cursor:pointer;"  
                                    data-toggle="modal"
                                    data-target="#reading_material_list"
                                    <?php
                                       $query100 = "SELECT * FROM `offline_session` WHERE `id` = $session_id;";
                                       $runfetch100 = mysqli_query($con, $query100);
                                       $noofrow100 = mysqli_num_rows($runfetch100);
                                       $indexnumber100 = 1;
                                       
                                       if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                          while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                             // use of explode 
                                             $reading_material = $data100['reading_material']; 
                                             $reading_material_array = explode (",", $reading_material);  
                                             $no_of_reading_material =  sizeof($reading_material_array);
                                          }
                                       }
                                            
                                       ?>
                                    onclick= "prepareReadingMaterialListModal(
                                    <?php                                                                  
                                       for($i= 0; $i < $no_of_reading_material-1; $i++){
                                           
                                           $anz_material_id = $reading_material_array[$i];
                                           $query1000 = "SELECT * FROM `material` WHERE `id` = $anz_material_id;";
                                          $runfetch1000 = mysqli_query($con, $query1000);
                                          $noofrow1000 = mysqli_num_rows($runfetch1000);
                                          
                                          
                                          if ($noofrow1000 >0 && $runfetch1000 == TRUE) { 
                                             while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 
                                                echo "'".$data1000['topic_name']."'," ;
                                             }}
                                             echo $reading_material_array[$i];
                                           if($i != $no_of_reading_material - 2){
                                              echo ',';                                                                 
                                              }
                                          
                                          }

                                          ?>
                                    )"
                                    >
                                    <button class="mobilein_hide" id="activity_button"  style="width:160px;margin-left: 85px;">
                                    <img src="<?php echo base_url()?>assets/images/student_portal_icon/reading-material.png">&nbsp;&nbsp;
                                    Reading Material &nbsp;&nbsp;</button>
                                 </li>
                                 <li class="nav-item" style="cursor:pointer;"  
                                    data-toggle="modal"
                                    data-target="#session_resource_list"
                                    <?php
                                       $query100 = "SELECT * FROM `offline_session` WHERE `id` = $session_id;";
                                       $runfetch100 = mysqli_query($con, $query100);
                                       $noofrow100 = mysqli_num_rows($runfetch100);
                                       $indexnumber100 = 1;
                                       
                                       if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                          while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                       
                                             // use of explode 
                                             $session_resource = $data100['session_resource']; 
                                             $session_resource_array = explode (",", $session_resource);  
                                             $no_of_session_resource =  sizeof($session_resource_array);
                                             
                                       
                                          }
                                       }
                                            
                                       ?>
                                    onclick= "prepareSessionResourceListModal(
                                    <?php                                                                  
                                       for($i= 0; $i < $no_of_session_resource-1; $i++){
                                        
                                        $anz_material_id = $session_resource_array[$i];
                                         $query1000 = "SELECT * FROM `material` WHERE `id` = $anz_material_id;";
                                       $runfetch1000 = mysqli_query($con, $query1000);
                                       $noofrow1000 = mysqli_num_rows($runfetch1000);
                                       
                                       
                                       if ($noofrow1000 >0 && $runfetch1000 == TRUE) { 
                                          while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 
                                             echo "'".$data1000['topic_name']."', " ;
                                          }}
                                        echo $session_resource_array[$i];
                                        if($i != $no_of_session_resource - 2){
                                           echo ',';                                                                 
                                       }
                                       }
                                       ?>
                                    )"
                                    >
                                    &nbsp;&nbsp; <button class="mobilein_hide" id="activity_button"><img src="<?php echo base_url()?>assets/images/student_portal_icon/page.png" style="margin-left:8px;">&nbsp;&nbsp;Session Resource &nbsp;&nbsp;&nbsp;&nbsp;</button>
                                 </li>
                                 <?php
                                    $query100 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id;";
                                    $runfetch100 = mysqli_query($con, $query100);
                                    $noofrow100 = mysqli_num_rows($runfetch100);
                                    $indexnumber100 = 1;
                                    
                                    if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                       while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                    
                                          // use of explode 
                                          $string1 = $data100['recording_files']; 
                                          $str_arr1 = explode (",", $string1);  
                                          $no_of_videos =  sizeof($str_arr1);
                                    
                                          $video_comment = $data100['video_comment'];
                                          
                                          
                                    
                                       }
                                    }
                                         
                                    ?>
                                 <?php 
                                    if($no_of_videos == 1){
                                    
                                       ?>
                                 <li class="nav-item" style="cursor:pointer;"  
                                    data-toggle="modal"
                                    data-target="#no_video_reason"
                                    onclick= "prepareNoVideoReason(
                                    <?php                                                                  
                                       echo "'".$video_comment."'";
                                       ?>
                                    )"
                                    >
                                    &nbsp; &nbsp;<button class="mobilein_hide" id="activity_button"><img src="<?php echo base_url()?>assets/images/student_portal_icon/button.png" style="margin-left:8px;" ></i>&nbsp;&nbsp;Recordings &nbsp;&nbsp;&nbsp;&nbsp;</button> 
                                 </li>
                                 <?php
                                    }else{
                                       ?>
                                 <li class="nav-item" style="cursor:pointer;"  
                                    data-toggle="modal"
                                    data-target="#video_list"
                                    onclick= "prepareVideoListModal(
                                    <?php                                                                  
                                       for($i= 0; $i < $no_of_videos-1; $i++){
                                        echo $session_id;
                                        if($i != $no_of_videos - 2){
                                           echo ',';                                                                 
                                       }
                                       }
                                       ?>
                                    )"
                                    >
                                    &nbsp; &nbsp;<button class="mobilein_hide" id="activity_button" ><img src="<?php echo base_url()?>assets/images/student_portal_icon/button.png" style="margin-left:8px;" ></i>&nbsp;&nbsp;Recordings &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> 
                                 </li>
                                
                                 <?php
                                   $com++; }
                                    ?> <hr>
                              </ul>
                              <?php
                                 } 
                                 }
                                 } 
                                 }
                                 }else{
                                    }
                                 
                                 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- ACTIVITY -->
         <br>
         <div class="col-lg-4 col-md-12 mb-md-0 mb-4 " >
            <div class="card mb-4 "  >
               <div class="card-body mobile_assignment"  >
                  <div class="row" >
                     <div class="col-lg-4 col-md-4 col-4" style="color:#5A5858;font-size:14px;font-family: 'Poppins' !important;text-align: center;display: grid;text-align: center;font-weight: 500;">
                        <span>Assignment</span>
                        <span>1</span>
                     </div>
                     <div class="col-lg-4  col-md-4 col-4" style="color:#5A5858;font-size:14px;font-family: 'Poppins' !important;text-align: center;display: grid;text-align: center;font-weight: 500;">
                        <span>Project</span>
                        <span>1</span>
                     </div>
                     <div class="col-lg-4 col-md-4 col-4"  style="color:#5A5858;font-size:14px;font-family: 'Poppins' !important;text-align: center;display: grid;text-align: center;font-weight: 500;">
                        <span>Case Study</span>
                        <span>1</span>
                        <div class="col-12">
                           <span style="font-size: 16px;color:#26266c;">  View More</span>  
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="total-attendance">
               <div class="card h-auto">
                  <div class="card-body">
                     <div class="col-lg-12 col-md-12">
                        <span style="color: #484747;font-family:Poppins;font-size: 22px;font-weight: 500;">ATTENDANCE</span>
                        <span style="color: #B1B1B1;font-size: 15px;color:#b5acac;float: right;">View All</span>  
                        <!-- attendance image  -->
                        <img src="<?php echo base_url()?>assets/attendance/85.png" alt="Nature" class="img-fluid" style="display: block;height: 225px;margin:auto;" >
                        <img src="<?php echo base_url()?>assets/images/logo/attendance.PNG" alt="Nature" style="margin-left: 19px;max-width: 82%;display: block;margin: auto;" data-original-title="" title="">
                     </div>
                  </div>
               </div>
            </a>
         </div>
      </div>
      <!-- Second ENd -->
      <div class="row" >
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-body">
               <div class="row">
                  <div class="col-3">
                     <svg version="1.1" style=";height: 61px;width: 61px;fill: #26266C;margin-top: 10px;margin-left:20px;" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 382.81 382.82" xml:space="preserve">
                        <style type="text/css">
                           .st0{fill:#FEFEFE;}
                           .st1{fill:#131313;}
                           .st2{fill:#4B4B4B;}
                           .st3{fill:#696969;}
                           .st4{fill:#D62929;}
                           .st5{fill:#FFFFFF;}
                        </style>
                        <path d="M152.35,29.13c-1.27,0.93-2.54,1.01-3.8,0C149.81,29.13,151.08,29.13,152.35,29.13z"></path>
                        <path d="M158.06,29.13c-1.27,1.01-2.54,0.93-3.8,0C155.52,29.13,156.79,29.13,158.06,29.13z"></path>
                        <path d="M146.01,29.13c-0.42,0.72-0.85,0.91-1.27,0C145.16,29.13,145.59,29.13,146.01,29.13z"></path>
                        <path d="M162.49,29.13c-0.42,0.95-0.85,0.81-1.27,0C161.65,29.13,162.07,29.13,162.49,29.13z"></path>
                        <g>
                           <path d="M277.56,141.75c-1.04-10.59-3.15-20.91-6.81-30.84c-7.4-20.06-18.96-37.35-35.15-51.51
                              c-16.01-14.01-34.31-23.29-54.98-28.14c-5.58-1.31-11.25-1.37-16.86-2.12h-1.26c-0.43,0.4-0.85,0.4-1.27,0h-3.17
                              c-1.26,0.52-2.54,0.52-3.8,0h-1.9c-1.27,0.52-2.54,0.52-3.81,0h-2.54c-0.43,0.4-0.85,0.4-1.27,0h-2.54
                              c-4.01,0.9-8.14,0.55-12.18,1.32c-12.67,2.43-24.6,6.79-35.95,12.9c-23.76,12.79-41.2,31.58-53.26,55.59
                              c-10.98,21.87-13.38,45.19-11.31,69.1c1.37,15.84,6.44,30.75,14.26,44.65c1.34,2.38,1.62,4.6,0.87,7.24
                              c-4.96,17.48-9.73,35-14.57,52.51c-0.34,1.25-1.17,2.64-0.17,3.79c0.03,0.04,0.06,0.07,0.09,0.1c0.03,0.03,0.07,0.07,0.1,0.1
                              c1.14,1.04,2.54,0.21,3.79-0.13c17.52-4.82,35.06-9.57,52.52-14.57c2.63-0.76,4.89-0.59,7.23,0.85c6.25,3.84,13.06,6.53,19.98,8.8
                              c16.33,5.36,33.04,7.56,50.27,5.96c11.24-1.04,22.16-3.3,32.68-7.25c19.85-7.43,36.86-19.05,50.79-35.12
                              c11.51-13.28,19.98-28.25,25.14-45.03C277.3,174.22,279.18,158.19,277.56,141.75z M163.38,220.29h-3.1
                              c-0.32,0.04-0.67,0.06-1.02,0.06c-0.42,0-0.86-0.03-1.31-0.06h-14.78v-20.05h20.22V220.29z M179.77,151.49
                              c-4.92,4.78-10.06,9.34-15.17,13.92c-0.97,0.87-1.56,1.75-1.76,2.89c-0.06,0.37-0.09,0.76-0.07,1.19
                              c0.13,3.48-0.03,6.97,0.07,10.45v0.18c0,1.02-0.22,1.56-1.02,1.75c-0.24,0.06-0.52,0.08-0.87,0.07c-2.49-0.05-4.98-0.07-7.47-0.07
                              c-2.57,0-5.15,0.02-7.73,0.06c-0.36,0.01-0.66-0.01-0.92-0.06h-1.55v-15.33c-0.98-6.28,3.28-11.26,9.11-15.84
                              c5.14-4.03,9.82-8.66,14.47-13.26c5.68-5.62,7.01-14.23,3.63-21.35c-3.44-7.23-11.23-11.64-19.14-10.81
                              c-7.81,0.81-14.34,6.49-16.47,14.17c-0.42,1.52,0.27,3.77-0.99,4.43c-1.42,0.74-3.48,0.32-5.26,0.33
                              c-3.49,0.03-6.98-0.13-10.45,0.06c-2.31,0.13-3.01-0.36-2.82-2.89c1.19-15.49,11.66-28.7,26.77-33.47
                              c14.71-4.65,31,0.32,40.72,12.43C195.21,115.73,193.94,137.72,179.77,151.49z"></path>
                           <path class="st0" d="M353.34,353.02c0.22,0.22,0.42,0.46,0.65,0.67c-0.42-0.18-0.84-0.36-1.26-0.54
                              c-14.41-4.04-28.87-7.87-43.18-12.22c-4.87-1.48-8.69-0.97-13.26,1.35c-50.45,25.64-112.16,6.41-139.33-43.19
                              c-0.5-0.9-0.92-1.84-1.5-3.03c38.58-1.28,71.77-14.97,98.91-42.15c27.07-27.11,40.69-60.22,41.98-98.75
                              c10.32,5.17,19.28,11.73,27.14,19.77c17.12,17.5,27.13,38.41,29.88,62.75c0.06,0.5-0.08,1.08,0.62,1.26
                              c-1.82-0.31-1.38-1.87-1.53-2.97c-2.03-14.97-6.86-28.99-14.87-41.78c-9.41-15.02-21.71-27.18-37.23-35.93
                              c-3.01-1.7-3.05-1.67-3.27,1.86c-1.25,19.4-5.75,38.01-14.36,55.46c-13.61,27.6-33.88,48.96-60.98,63.76
                              c-16.63,9.08-34.37,14.55-53.16,16.65c-3.03,0.34-6.09,0.7-9.14,0.78c-2.1,0.06-2.35,0.75-1.4,2.47
                              c3.45,6.21,7.37,12.11,12.09,17.4c17.4,19.48,38.88,31.59,64.87,35.23c19.4,2.72,38.1-0.05,56.03-7.92
                              c1.65-0.72,3.51-1.12,4.89-2.22c4.51-3.61,9.08-3.01,14.26-1.45c12.84,3.85,25.84,7.23,38.77,10.8c1.22,0.34,2.43,0.7,3.57,1.3
                              c0.2,0.1,0.38,0.23,0.54,0.37C353.17,352.85,353.26,352.93,353.34,353.02z"></path>
                           <path d="M353.99,244.03c-0.52,1.26-0.52,2.54,0,3.8v6.34c-0.39,0.35-0.31,0.82-0.33,1.26v0.03c0,0.06,0.01,0.11,0,0.17
                              c0.01,0.38-0.01,0.77,0.33,1.07v3.17c-1.03,0.29-0.65,1.2-0.74,1.84c-1.82,13.37-5.74,26.06-12.44,37.81
                              c-1.09,1.91-1.25,3.55-0.67,5.59c4.2,14.87,8.35,29.75,12.4,44.66c0.24,0.9,1.29,1.94,0.54,2.99c0.1,0.08,0.18,0.17,0.26,0.25
                              c-0.14,0.08-0.34,0.13-0.61,0.13c-14.41-4.04-28.87-7.87-43.18-12.22c-4.87-1.48-8.69-0.97-13.26,1.35
                              c-50.45,25.64-112.16,6.41-139.33-43.19c-0.5-0.9-0.92-1.84-1.5-3.03c38.58-1.28,71.77-14.97,98.91-42.15
                              c27.07-27.11,40.69-60.22,41.98-98.75c10.32,5.17,19.28,11.73,27.14,19.77c17.12,17.5,27.13,38.41,29.88,62.75
                              c0.06,0.5-0.08,1.08,0.62,1.26V244.03z"></path>
                           <path class="st0" d="M353.99,353.69c-0.42-0.18-0.84-0.36-1.26-0.54c0.15-0.13,0.26-0.25,0.35-0.38c0.1,0.08,0.18,0.17,0.26,0.25
                              C353.56,353.24,353.76,353.48,353.99,353.69z"></path>
                           <path class="st1" d="M353.99,247.83c-0.94-1.27-1-2.54,0-3.8C353.99,245.29,353.99,246.56,353.99,247.83z"></path>
                           <path class="st2" d="M353.46,255.47c-0.1-0.55-0.06-1.04,0.53-1.31c0,0.42,0,0.85,0,1.27C353.83,255.7,353.65,255.71,353.46,255.47
                              z"></path>
                           <path class="st3" d="M353.46,255.47c0.18-0.01,0.35-0.02,0.53-0.04c0,0.42,0,0.85,0,1.27
                              C353.27,256.53,353.38,255.99,353.46,255.47z"></path>
                           <path class="st4" d="M162.84,168.3v11.64c-0.1-3.48,0.06-6.97-0.07-10.45C162.75,169.06,162.77,168.67,162.84,168.3z"></path>
                           <path class="st5" d="M162.84,180.12v1.82h-1.61C162.5,181.75,162.84,181.18,162.84,180.12z"></path>
                           <rect x="143.27" y="181.65" width="19.57" height="2.62"></rect>
                        </g>
                     </svg>
                  </div>
                  <div class="col-9" style="font-size:21px;color: #5A5858;font-family: 'Poppins', sans-serif;">
                     Support <br>
                     <p style="font-size:14px;color: #949393;font-weight:500;">We are here to help. Click here <br> to reach out to us.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-body " >
               <div class="row">
                  <div class="col-md-3 col-sm-3 col-3">
                     <svg version="1.1" style="height: 50px;width: 55px;fill: #26266C; margin-top: 15px;margin-left:20px;" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 382.81 382.82" style="enable-background:new 0 0 382.81 382.82;" xml:space="preserve">
                        <style type="text/css">
                           .st0{fill:#FEFEFE;}
                           .st1{fill:#131313;}
                           .st2{fill:#4B4B4B;}
                           .st3{fill:#696969;}
                           .st4{fill:#D62929;}
                           .st5{fill:#FFFFFF;}
                        </style>
                        <g>
                           <path d="M367.07,191.19c-23.08,0.26-46.17,0.09-69.25,0.09h-4.84v-4.68c0-57.27,0-114.55-0.01-171.83
                              c0-10.45-4.28-14.76-14.73-14.76C190.28,0,102.32,0,14.35,0.01c-10.06,0-14.34,4.26-14.34,14.3C0,117.63-0.02,220.96,0.02,324.28
                              c0.01,29.24,18.31,51.96,46.3,57.45c4,0.79,8.17,1.04,12.27,1.04c88.46,0.06,176.92,0.07,265.38,0.03
                              c30.88-0.01,53.25-19.26,58.23-49.84c0.1-0.6,0.4-1.17,0.61-1.75V200.92C380.08,193.59,374.71,191.1,367.07,191.19z M60.04,93.46
                              c0.74-5.07,4.14-8.62,9.2-9.48c1.46-0.25,2.97-0.35,4.46-0.35c48.54-0.02,97.07-0.02,145.61,0c8.73,0,13.68,4.27,13.79,11.76
                              c0.11,7.15-4.45,12.02-11.8,12.12c-11.85,0.16-23.71,0.06-35.56,0.07h-39.3c-24.58-0.01-49.16,0.04-73.74-0.03
                              C63.8,107.53,58.8,101.84,60.04,93.46z M60.13,152.95c0.8-4.68,4.12-8.15,8.8-9.03c1.58-0.29,3.22-0.39,4.83-0.39
                              c48.53-0.02,97.05,0,145.58-0.03c5.15,0,9.64,1.07,12.35,6.03c3.74,6.86,0.38,18.05-11.13,17.95c-24.7-0.22-49.4-0.07-74.1-0.07
                              c-24.7,0-49.4,0.05-74.1-0.02C63.68,167.37,58.69,161.33,60.13,152.95z M221.07,227.18c-22.58,0.1-45.16,0.04-67.75,0.04h-6.73
                              c-24.83,0-49.66,0.04-74.49-0.02c-8.03-0.03-12.76-5.32-12.11-13.23c0.45-5.46,3.79-9.28,9.16-10.37c1.22-0.24,2.48-0.32,3.72-0.32
                              c49.03-0.02,98.07-0.02,147.1-0.01c6.76,0.01,10.73,2.59,12.52,7.99C235.23,219.54,229.91,227.14,221.07,227.18z M231.62,281.15
                              c-2.42,4.46-6.44,5.9-11.28,5.89c-24.57-0.02-49.15-0.01-73.73-0.01c-24.7,0-49.41,0.03-74.11-0.01
                              c-8.67-0.02-13.73-5.96-12.39-14.37c0.8-5.05,4.56-8.71,9.75-9.44c0.62-0.09,1.25-0.1,1.87-0.1c49.78-0.01,99.56-0.04,149.34,0.02
                              C230.69,263.14,236.19,272.7,231.62,281.15z M358.74,326.1c-0.07,16.36-11.59,29.6-27.38,32.18c-20.37,3.32-38.2-11.56-38.34-32.3
                              c-0.16-25.2-0.04-50.4-0.04-75.59c-0.01-10.36,0-20.71,0-31.06v-3.95h65.48c0.13,0.93,0.33,1.76,0.33,2.58
                              C358.8,254.01,358.9,290.06,358.74,326.1z"/>
                        </g>
                     </svg>
                  </div>
                  <div class="col-md-9 col-sm-6 col-9" style="font-size:21px;color: #5A5858">
                     Industry Articals<br>
                     <p style="color: #949393;font-size:14px;font-weight:500;">
                        Curated articles on latest industry development and trends.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row mb-5">
         <div class="col-lg-8 col-md-12">
            <div class="card" style="max-height: 85%;">
               <div class="card-body  " >
                  <div class="row">
                     <div class="col-lg-5 col-md-5 col-6">
                        <img src="<?php echo base_url()?>assets/images/student_portal_icon/2784128.png" class="img-fluid" >
                     </div>
                     <div class="col-lg-7 col-md-7 col-6">
                        <P class="refertoearn" style="font-size: clamp(10px, 3vw, 23px);">REFER AND EARN <br>
                        <p class="refertoearn1" style="font-size: clamp(12px,1vw, 12px);">Spread the gift of learning! Refer your friend and get rewarded.</p>
                        </P>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<div class="modal fade" id="reading_material_list" >
   <div class="modal-dialog modal-md modal-dialog-centered"  >
      <div class="modal-content">
         <div class="modal-header border-0" >
            <h4 class="modal-title">Reading Materials</h4>
         </div>
         <div class="modal-body text-center " id="readingMaterialListModalId" style="" >
         </div>
         <div class="modal-footer border-0" >
            <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="video_list">
   <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h5 class="modal-title">Class Recordings</h5>
         </div>
         <!-- Modal body -->
         <div class="modal-body text-center" id="videoListModalId">
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="no_video_reason">
   <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Class Recordings</h4>
         </div>
         <!-- Modal body -->
         <div class="modal-body text-center" id="noVideoReasonModalId" style="overflow-x:auto;">
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="session_resource_list">
<div class="modal-dialog modal-md modal-dialog-centered">
   <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
         <h4 class="modal-title">Session Resources</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center" id="sessionResourceListModalId" style="overflow-x:auto;">
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
         <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
      </div>
   </div>
</div>
<script>
   function changeactivityfirstin(get_icon_number)
   {
     document.getElementById('all-link-'+get_icon_number).style.color='#495057 !important;';
   }
   function changeactivityfirstout(get_icon_number)
   {
    document.getElementById('all-link-'+get_icon_number).style.color='#b5b3b3 !important';
   }
   function  changeactivitysecondin(get_icon_number)
   {
     document.getElementById('video-link-'+get_icon_number).style.color='#484747';
   }
   function changeactivitysecondout(get_icon_number)
   {
    document.getElementById('video-link-'+get_icon_number).style.color='#b5b3b3';
   }
</script> 
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/js/script.js"></script>
<script src="<?php echo base_url()?>assets/js/student-dashboard-modal-create.js"></script>