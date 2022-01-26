  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">

     
      </div>
    </nav>
  <script>
   //menu
 document.getElementById('menu_dashboard').classList.add("menu-active");
 //icon
 document.getElementById('sidebar_icon_1').style.fill='#E46F0E';

</script>

<?php include('dbcon.php'); ?>

<?php
   // session_start();
   // print_R($_SESSION['ftip69_uid']);exit;
   if (!isset($_SESSION['ftip69_uid'])) {
     header('location:login');
   } else{
    $user_id = $_SESSION['ftip69_uid'];
   if($user_id == 99){
      ?>
<script>
   window.history.back()
window.location = 'https://fingertips.co.in/en/auth/login.php';
</script>
<?php
   }
   } 
   ?>
<?php
   include('dbcon.php');
   $user_id = $_SESSION['ftip69_uid'];
   $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
   $run = mysqli_query($con, $query);
   $row = mysqli_num_rows($run);
   $data = mysqli_fetch_assoc($run);
   
   $ftip69_acc_classes = $data['acc_classes'];
   $ftip69_acc_student = $data['acc_student'];
   // print_r($ftip69_acc_classes);exit;
   
   // success
   if ($ftip69_acc_classes==1||$ftip69_acc_student==1) {
   // getting users credentials
   $user_id = $_SESSION['ftip69_uid'];
   }else{
   ?>
<script>
   window.history.back()
window.location = 'https://fingertips.co.in/en/auth/login.php';
</script>
<?php
   }  
   ?>
<?php
   if (isset($_POST['session_id'])) {
       $session_id = $_POST['session_id'];
       // echo "<script>alert($session_id);</script>";
      } else{
        ?>
<script>
   window.history.back()
window.location = 'https://fingertips.co.in/en/auth/login.php';
</script>
<?php
   }
   ?>
<?php
  $con = mysqli_connect('localhost', 'root', '', 'jvfdbhhs_fingertips_portal');
  if (!$con) {
    echo "Connection Failed!";
  }
   ?>
      <link
         rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
         integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
         crossorigin="anonymous"
         />
         <link rel="stylesheet" href="https://players.brightcove.net/videojs-overlay/2/videojs-overlay.css">
      <!-- video js files starts -->
      <link href="<?php echo base_url()?>assets/css/video/video-js.css" rel="stylesheet" />
      <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
      <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
      <!-- video js files ends oncontextmenu="return false" -->
   </head>
   <body >
   <?php
                                             $query = "SELECT * FROM `user2` where `id` = $user_id";
                                             
                                             $runfetch = mysqli_query($con, $query);
                                             
                                             $noofrow = mysqli_num_rows($runfetch);
                                             
                                             
                                             $indexnumber = 1;
                                             if ($noofrow >
                                             0 && $runfetch == TRUE) { while ($data =
                                             mysqli_fetch_assoc($runfetch)) { 
                                                $student_id = $data['student_id'];
                                             }}
                                             $query = "SELECT * FROM `student` where `id` = $student_id";
                                             
                                             $runfetch = mysqli_query($con, $query);
                                             
                                             $noofrow = mysqli_num_rows($runfetch);
                                             
                                             
                                             $indexnumber = 1;
                                             if ($noofrow >
                                             0 && $runfetch == TRUE) { while ($data =
                                             mysqli_fetch_assoc($runfetch)) { 
                                                $phone1 = $data['phone1'];
                                             }}
                                             ?>
   <div id="show_user_id_over_video" style="position:absolute; height:20px; color:black; opacity:0.5; z-index:100000; top:40px; righ:50px;"><?php $date = date_create();
      $timestamp = date_timestamp_get($date); echo '  &nbsp;'.$phone1;?> | <?php echo $user_id.' &nbsp ';?> </div>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper">
         <!--change compact-wrapper-->
         <!-- Page Body Start-->
         <script>
            var getheader = document.getElementById('header_row');
               getheader.classList.add("open");
               
               var get_sidebar_btn = document.getElementById('sidebar_btn');
               get_sidebar_btn.style.display = "none";
               
               var get_brand_logo_top_header = document.getElementById('brand_logo_top_header');
               get_brand_logo_top_header.style.display = "block";
            
         </script>
                             <?php
                                 $query100 = "SELECT * FROM `offline_session` WHERE `id` = $session_id;";
                                 $runfetch100 = mysqli_query($con, $query100);
                                 $noofrow100 = mysqli_num_rows($runfetch100);
                                 $indexnumber100 = 1;
                                 
                                 if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                    while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                 
                                      $session_date = $data100['session_date'];
                                      $assigned_to = $data100['assigned_to'];
                                      $course_id= $data100['course'];
                                      $mydate=getdate($data100['session_date']);
                                    }
                                  }
                                  $query1010 = "SELECT * FROM `course` WHERE `id` = $course_id;";
                                  $runfetch1010 = mysqli_query($con, $query1010);
                                  $noofrow1010 = mysqli_num_rows($runfetch1010);
                                  $indexnumber1010 = 1;
                                  
                                  if ($noofrow1010 >0 && $runfetch1010 == TRUE) { 
                                    while ($data1010 = mysqli_fetch_assoc($runfetch1010)) { 
                                  
                                       $course_name = $data1010['name'];
                                     }
                                   }
 
  
                                   
                                 
                                 ?>
                        <?php
                           $user_id = $_SESSION['ftip69_uid'];
                           $query = "SELECT `faculty_id` FROM `user2` WHERE `id` = $assigned_to";
                           $runfetch = mysqli_query($con, $query);
                           $noofrow = mysqli_num_rows($runfetch);
                           $indexnumber = 1;
                           if ($noofrow > 0 && $runfetch == TRUE) { 
                              while ($data = mysqli_fetch_assoc($runfetch)) {
                                    $faculty_id = $data['faculty_id'];
                                    } 
                                 } 
                              $user_id = $_SESSION['ftip69_uid'];
                              $query = "SELECT * FROM `faculty` WHERE `id` = $faculty_id";
                              $runfetch = mysqli_query($con, $query);
                              $noofrow = mysqli_num_rows($runfetch);
                              $indexnumber = 1;
                              if ($noofrow > 0 && $runfetch == TRUE) { 
                                 while ($data = mysqli_fetch_assoc($runfetch)) {
                                       $first_name = $data['first_name'];
                                       $last_name = $data['last_name'];
                                       
                                       } 
                                    } 
                                 ?>
          
          <div class="container-fluid" style="margin-top: -40px !important; ">
         <div class="row ">
              <div class="col-md-2 col-lg-1 col-sm-2 col-xs-2">
                 <img src="<?php echo base_url() ?>assets/images/student_portal_icon/play.png" height="101px" width="101px" alt="CoolBrand">
              </div>
              <div class="col-md-8 col-lg-8 col-sm-10 col-xs-10">
                <div class="row">
                     <div class="col-md-12 ">
                        <span id="playclass_class">PLAY CLASS RECORDING</span>
                     </div>
                 </div>
                        <div class="row">
                             <div class="col-md-12  ">
                                <span id="second2">This class has been completed but you can learn from video.</span>
                             </div>
                        </div>
                </div>
             </div>
              <div class="col-lg-12 col-md-12 " >
                <div class="row">
                     <div class="col-md-8 col-lg-8 col-sm-12 col-xs-10 ">
                        <span id="intro">Introduction of <?php echo $course_name; ?> by Mr.
                         <?php echo $first_name .' '.$last_name; ?></span>
                        <br>
                      <span id="intro1">Course: <?php echo $course_name; ?></span> 
                        <br>
                        <span id="intro2">Starts at: <?php echo "$mydate[month] $mydate[mday] " ?></span>
                     </div>
                     <!-- <div class="col-lg-2 offset-lg-1">
                        <span id="intro3">Other Lectures</span>
                     </div> -->
                 </div>
               </div>
                </div>
                <div class="container-fluid">
                <div class="row">
             <div class="col-lg-7">
                           <div class="card-body">
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
                                 
                                       for($i= 0; $i < $no_of_videos-1; $i++){
                                         // echo $str_arrgit 1[$i];
                                       
                                 ?>
                                 </div>
                              <div style="height:0px; overflow:hidden;" id="<?php echo "div-my-video-large".$i ?>">
                              <span id="video_location_span_tag"></span>

                                 <video-js 
                                    id="<?php echo "my-video-large".$i ?>"
                                    class="video-js vjs-big-play-centered"
                                    controlsList="nodownload"
                                    onclick="changeMa`inVideo(<?php echo $i; ?>);"
                                    data-setup="{}"
                                   >
                                    <track
                                       kind="captions"
                                       src="//example.com/path/to/captions.vtt"
                                       srclang="en"
                                       label="English"
                                       default
                                       />
                                    <p class="vjs-no-js">
                                       To view this video please enable JavaScript, and
                                       consider upgrading to a web browser that
                                       <a
                                          href="https://videojs.com/html5-video-support/"
                                          target="_blank"
                                          >supports HTML5 video</a
                                          >
                                    </p>
                                 </video-js>
                              </div>
                              <?php
                                 }
                                 
                                 }
                                 }
                                 
                                 ?>
                           </div>
                           
                     <div class="col-md-4 m-4" id="right-sidebar">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="mb-4"><strong>Session Details</strong></h5>
                              <div class="row">
                                 <div class="col-lg-12 pb-3">
                                    <strong>Session Date</strong> <span><?php
                                    $mydate=getdate($session_date);
                                                   echo "$mydate[mday]/$mydate[mon]/$mydate[year]";
                                    ?></span>
                                 </div>
                                 <div class="col-lg-12 pb-3">
                                    <strong>Faculty Name</strong>
                                    <span><?php 
                                    echo $first_name.' '.$last_name;
                                     ?></span>
                                 </div>
                              </div>
                           </div>
                          </div>
                           <div class="card">
                              <div class="card-body">
                                 
                                 <h5 class="mt-2"><strong>Recordings</strong></h5>
                                 <span
                                    >This class has been completed but you can learn from
                                 videos.</span
                                    >
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
                                    
                                          for($i= 0; $i < $no_of_videos-1; $i++){
                                            // echo $str_arr1[$i];
                                          
                                    ?>
                                    <div class="p-2 bg-light m-2" id="<?php echo "my-video0".$i ?>" onclick="changeMainVideo(<?php echo $i; ?>);">
                                            <span class="text-primary">Video <?php echo $i+1; ?></span>
                                    </div>
                                <!--  <video-js
                                    id="<?php echo "my-video".$i ?>"
                                    class="video-js vjs-big-play-centered"
                                    controlsList="nodownload"
                                    onclick="changeMainVideo(<?php echo $i; ?>);"
                                    data-setup="{}"
                                    >
                                    <track
                                       kind="captions"
                                       src="//example.com/path/to/captions.vtt"
                                       srclang="en"
                                       label="English"
                                       default
                                       />
                                    <p class="vjs-no-js">
                                       To view this video please enable JavaScript, and
                                       consider upgrading to a web browser that
                                       <a
                                          href="https://videojs.com/html5-video-support/"
                                          target="_blank"
                                          >supports HTML5 video</a
                                          >
                                    </p>
                                 </video-js>  -->
                                 <?php
                                    }
                                    
                                    }
                                    }
                                    
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Container-fluid Ends-->
               </div>
               <!-- footer start-->
               
            </div>
            
         </div>
         
      </div>

      
      <!-- latest jquery-->
      <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url()?>assets/js/bootstrap/popper.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url()?>assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url()?>assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url()?>assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="<?php echo base_url()?>assets/js/typeahead/handlebars.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead/typeahead.custom.js"></script>
      <script src="<?php echo base_url()?>assets/js/chat-menu.js"></script>
      <script src="<?php echo base_url()?>assets/js/tooltip-init.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead-search/handlebars.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead-search/typeahead-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url()?>assets/js/script.js"></script>
      <!-- videjs  -->
      <script src="https://vjs.zencdn.net/7.10.2/video.js"></script>
      <script src="https://cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
      <script src="https://players.brightcove.net/videojs-overlay/2/videojs-overlay.min.js"></script>
      <!-- Plugin used-->
      
      <script>
         var js_str_arr1 = <?php echo json_encode($str_arr1); ?>;
         function changeMainVideo(i){
           console.log(i);
         
           // // console.log(js_str_arr1.length);
           for(var j = 0; j < js_str_arr1.length-1; j++){
             document.getElementById('div-my-video-large'+j).style.height = "0px";
             }
              document.getElementById('div-my-video-large'+i).style.height = "100%";
         
         }
         
         changeMainVideo(0);
      </script>
      <?php
         // large value 
         $i_max_value = $i;
         
         for($j = 0; $j <= $i_max_value; $j++){
           
           ?>
      <?php 
         // echo $str_arr1[$j];
         
         ?>
      <script>
         videojs("<?php echo "my-video-large".$j ?>", {
           
           // autoplay: "muted",
           controls: true,
           fluid: true,
           
         
           playbackRates: [0.5, 1, 1.5, 2],
           loop: false,
         
           plugins: {
             hotkeys: {
               enableModifiersForNumbers: false,
             },
           },
         
           sources: [
             {
               src: "https://fingertips.co.in/resources/offline-session-recordings/<?php $string_yoo = preg_replace('/\s+/', '', $str_arr1[$j]); echo $string_yoo; ?>",
               type: "video/mp4",
             },
           ],
         });
      </script>
      <?php
         }
         
         ?>
      <?php
         $i_max_value = $i;
         
         
         for($j = 0; $j <= $i_max_value; $j++){
         
           ?>
      <script>
         videojs("<?php echo "my-video".$j ?>", {
           // autoplay: "muted",
           controls: true,
           fluid: true,
         
           playbackRates: [0.5, 1, 1.5, 2],
           loop: false,
         
           plugins: {
             hotkeys: {
               enableModifiersForNumbers: false,
             },
           },
         
           sources: [
             {
               src: "https://fingertips.co.in/resources/offline-session-recordings/<?php $string_yoo = preg_replace('/\s+/', '', $str_arr1[$j]); echo $string_yoo; ?>",
               type: "video/mp4",
             },
           ],
         });
      </script>
      <?php
         }
         
         ?>
     
   </body>
</html>
<script>
  
</script>


<script>
function changePosition(){
   
 
 var get_video_location_span_tag_top_position = $('#video_location_span_tag').offset().top;
 var get_video_location_span_tag_left_position = $('#video_location_span_tag').offset().left;
 var get_show_user_id_over_video =  document.getElementById('show_user_id_over_video');
 var random1 = Math.floor((Math.random() * 300) + 1);
 var random2 = Math.floor((Math.random() * 200) + 1);
 get_show_user_id_over_video.style.top = get_video_location_span_tag_top_position+random1+'px';
 get_show_user_id_over_video.style.left = get_video_location_span_tag_left_position+random2+'px';

 console.log(get_video_location_span_tag_top_position);
 console.log(get_video_location_span_tag_left_position);
 console.log('aza');
 changePosition2();
}

function changePosition2(){
   setTimeout(function(){changePosition(); }, 10000);
}
changePosition();
</script>

