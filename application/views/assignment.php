
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<script>
   //menu
 document.getElementById('menu_course').classList.add("menu-active");
 //icon
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';

</script>
 
  <div class="container">
      <div class="row">
        <span class="title_project">
              Assignment
        </span>
 <div class="row">
<?php
   if (!isset($_SESSION['ftip69_uid'])) {
     header('location:../auth/login.php');
     
   } 
   ?>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
     <script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap.js"></script>
<?php
   require_once 'dbcon.php';
   $user_id = $_SESSION['ftip69_uid'];
   $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
   $run = mysqli_query($con, $query);
   $row = mysqli_num_rows($run);
   $data = mysqli_fetch_assoc($run);
   
   
      $ftip69_acc_student = $data['acc_student'];
      
   
   // success
   if ($ftip69_acc_student==1) {
   // getting users credentials
   $user_id = $_SESSION['ftip69_uid'];
   }else{
   ?>
<script>
   window.history.back()
   window.location = '<?php echo base_url()?>';
</script>
<?php
   }  
   ?>
<?php
   $user_id = $_SESSION['ftip69_uid'];
   
   $query = "SELECT `student_id` FROM `user2` WHERE `id` = $user_id";
   
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow > 0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) {
            $student_id = $data['student_id'];
            } 
         } 
   
   
   $query = "SELECT `course`,`batch` FROM `student` WHERE `id` = $student_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow > 0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) {
            $batch_id = $data['batch'];
            $course = $data['course'];
            } 
         } 
      ?>
<?php
   $query = "SELECT * FROM `course_category`  WHERE `id` = $course";
   
   $runfetch = mysqli_query($con, $query);
   
   $noofrow = mysqli_num_rows($runfetch);
   
   
   $indexnumber = 1;
   if ($noofrow >0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) { 
   $student_course_name = $data['name'];
   
   }}
   ?>
<?php
   $query = "SELECT * FROM `batch`  WHERE `id` = $batch_id";
   
   $runfetch = mysqli_query($con, $query);
   
   $noofrow = mysqli_num_rows($runfetch);
   
   
   $indexnumber = 1;
   if ($noofrow >0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) { 
   $student_batch_name = $data['batch_name'];
   
   $certificate_status = $data['certificate'];
   preg_match_all('!\d+!',  $student_batch_name , $matches);
   $student_batch_name_have_number = implode(' ', $matches[0]);
   
   $acronym='';
   $word='';
   $words = preg_split("/(\s|\-|\.)/", $student_batch_name);
   foreach($words as $w) {
       $acronym .= substr($w,0,1);
   }
   $word = $word . $acronym ;
   
   $numbers = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", " ");
   $word = str_replace($numbers, '', $word);
   
   }}
   ?>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
   .jumbotron-card
   {
   height:auto; 
   border:2px;
   background-color: #ffffff;
   border-radius: 18px;
   color:white;
   font-family: Poppins;
   box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.1);
   background-size: 150px;
   box-shadow: 3px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
      }
   #course_button
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
   box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
   margin-top: 5px;
   width:140px;
   font-weight: 500;
   }
</style>
      <script>
   function prepareAssignmentDownloadModal(no1,no2,no3,no4,no5,no6,no7,no8,no9,no10){
      if(no1 == undefined){
         no1 = '';
      }else{
      var name_array = no1.split('.');
      no1_extension = name_array[1];
      no1_file_name = no1.substring(0, 20);
         
      }
      if(no2 == undefined){
         no2 = '';
      }
      else{
      var name_array = no2.split('.');
      no2_extension = name_array[1];
      no2_file_name = no2.substring(0, 20);
         
      }
      if(no3 == undefined){
         no3 = '';
      }
      else{
      var name_array = no3.split('.');
      no3_extension = name_array[1];
      no3_file_name = no3.substring(0, 20);
         
      }
      if(no4 == undefined){
         no4 = '';
      }
      else{
      var name_array = no4.split('.');
      no4_extension = name_array[1];
      no4_file_name = no4.substring(0, 20);
         
      }
      if(no5 == undefined){
         no5 = '';
      }
      else{
      var name_array = no5.split('.');
      no5_extension = name_array[1];
      no5_file_name = no5.substring(0, 20);
         
      }
      if(no6 == undefined){
         no6 = '';
      }
      else{
      var name_array = no6.split('.');
      no6_extension = name_array[1];
      no6_file_name = no6.substring(0, 20);
         
      }
      if(no7 == undefined){
         no7 = '';
      }
      else{
      var name_array = no7.split('.');
      no7_extension = name_array[1];
      no7_file_name = no7.substring(0, 20);
         
      }
      if(no8 == undefined){
         no8 = '';
      }
      else{
      var name_array = no8.split('.');
      no8_extension = name_array[1];
      no8_file_name = no8.substring(0, 20);
         
      }
      if(no9 == undefined){
         no9 = '';
      }
      else{
      var name_array = no9.split('.');
      no9_extension = name_array[1];
      no9_file_name = no9.substring(0, 20);
         
      }
      if(no10 == undefined){
         no10 = '';
      }
      else{
      var name_array = no10.split('.');
      no10_extension = name_array[1];
      no10_file_name = no10.substring(0, 20);
         
      }
   
   
      var get_assignment_download_a_tag_1 = document.getElementById('assignment_download_a_tag_1');
      var get_assignment_download_a_tag_2 = document.getElementById('assignment_download_a_tag_2');
      var get_assignment_download_a_tag_3 = document.getElementById('assignment_download_a_tag_3');
      var get_assignment_download_a_tag_4 = document.getElementById('assignment_download_a_tag_4');
      var get_assignment_download_a_tag_5 = document.getElementById('assignment_download_a_tag_5');
      var get_assignment_download_a_tag_6 = document.getElementById('assignment_download_a_tag_6');
      var get_assignment_download_a_tag_7 = document.getElementById('assignment_download_a_tag_7');
      var get_assignment_download_a_tag_8 = document.getElementById('assignment_download_a_tag_8');
      var get_assignment_download_a_tag_9 = document.getElementById('assignment_download_a_tag_9');
      var get_assignment_download_a_tag_10 = document.getElementById('assignment_download_a_tag_10');
   
      var link = 'https://fingertips.co.in/cloud/en/uploads/session/material/';
   no1 = no1.trim();
   get_assignment_download_a_tag_1.href = link+no1;
   
   no2 = no2.trim();
   get_assignment_download_a_tag_2.href = link+no2;
   no3 = no3.trim();
   get_assignment_download_a_tag_3.href = link+no3;
   no4 = no4.trim();
   get_assignment_download_a_tag_4.href = link+no4;
   no5 = no5.trim();
   get_assignment_download_a_tag_5.href = link+no5;
   no6 = no6.trim()
   get_assignment_download_a_tag_6.href = link+no6;
   no7 = no7.trim()
   get_assignment_download_a_tag_7.href = link+no7;
   no8 = no8.trim()
   get_assignment_download_a_tag_8.href = link+no8;
   no9 = no9.trim()
   get_assignment_download_a_tag_9.href = link+no9;
   no10 = no10.trim()
   get_assignment_download_a_tag_10.href = link+no10;
   
      get_assignment_download_a_tag_1.innerHTML = no1_file_name+'.'+no1_extension;
      get_assignment_download_a_tag_2.innerHTML = no2_file_name+'.'+no2_extension;
      get_assignment_download_a_tag_3.innerHTML = no3_file_name+'.'+no3_extension;
      get_assignment_download_a_tag_4.innerHTML = no4_file_name+'.'+no4_extension;
      get_assignment_download_a_tag_5.innerHTML = no5_file_name+'.'+no5_extension;
      get_assignment_download_a_tag_6.innerHTML = no6_file_name+'.'+no6_extension;
      get_assignment_download_a_tag_7.innerHTML = no7_file_name+'.'+no7_extension;
      get_assignment_download_a_tag_8.innerHTML = no8_file_name+'.'+no8_extension;
      get_assignment_download_a_tag_9.innerHTML = no9_file_name+'.'+no9_extension;
      get_assignment_download_a_tag_10.innerHTML = no10_file_name+'.'+no10_extension;
   
   }
   
   
</script>
<script>
   function projectDownloadMaterial(downloadproject) {
      var get_download_project = downloadproject;
   
   }
</script>

<?php 
                  $query = "SELECT * FROM `offline_session` WHERE `batch_id` = $batch_id AND `is_deleted` = 0;";
                  $runfetch = mysqli_query($con, $query);
                  $noofrow = mysqli_num_rows($runfetch);
                  if ($noofrow > 0 && $runfetch == TRUE) {
                     $kp=1;
                     while ($data = mysqli_fetch_assoc($runfetch)) {
                        $session_id_assignment = $data['id'];
                        $course_id=$data['course'];
                        $querys = "SELECT * FROM `course` WHERE `id` = $course_id;";
                        $runfetchs = mysqli_query($con, $querys);
                        $noofrows = mysqli_num_rows($runfetchs);
                        if ($noofrows > 0 && $runfetchs == TRUE) {
                        while ($datas = mysqli_fetch_assoc($runfetchs)) {
                              $course_name = $datas['name'];  
                              $assignment = $data['assignment'];
                              $assignment_array = explode(",", $assignment);
                              $no_of_assignment = sizeof($assignment_array);

                        for ($i = 0; $i < $no_of_assignment - 1; $i++) {
                           $assignment_id = $assignment_array[$i];
                           
                           $query10 = "SELECT * FROM `assignment_log` WHERE `given_by` = $user_id AND `batch_id` = $batch_id AND `assignment_id` = $assignment_id;";
                           $runfetch10 = mysqli_query($con, $query10);
                           $noofrow10 = mysqli_num_rows($runfetch10);
                           if ($noofrow10 == 0) {
                              
                              $query1000 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id_assignment;";
                              $runfetch1000 = mysqli_query($con, $query1000);
                              $noofrow1000 = mysqli_num_rows($runfetch1000);
                              
                              if ($noofrow1000 > 0 && $runfetch1000 == TRUE) {
                                 while ($data1000 = mysqli_fetch_assoc($runfetch1000)) {
                                 
                                 
                                    $assignment_submission = $data1000['assignment_submission'];
                                    if ($assignment_submission == "") {
                                       $date = date_create();
                                       $timestamp = date_timestamp_get($date);
                                       $assignment_submission = $timestamp;
                                       
                                    }
                                    
                                 }
                           }else{
                              $date = date_create();
                              $timestamp = date_timestamp_get($date);
                              $assignment_submission = $timestamp;
                           }
                  
                           $query100 = "SELECT * FROM `assignment` WHERE `id` = $assignment_id;";
                           $runfetch100 = mysqli_query($con, $query100);
                           $noofrow100 = mysqli_num_rows($runfetch100);
                           if ($noofrow100 > 0 && $runfetch100 == TRUE) {
                              while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                  
                              $assignment_solution = $data100['assignment_solution'];
                                 //   print_r($assignment_solution);    
                                       ?>
                                         <div class="row" >
                                             <div class="col-lg-12 mt-1" >
                                                <div class="jumbotron jumbotron-card">
                                                   <div class="row ">
                                                   <div class="col-lg-1 col-md-2 col-sm-4 col-3  mt-2">
                                                <img src="<?php echo base_url()?>assets/images/student_portal_icon/Group 59.png" id="icon" style="height: 73px;" alt="CoolBrand">
                                             </div>
                                             <div class="col-lg-10 col-md-9 col-sm-6 col-6 ">
                                                <p style="
                                                   color: #858585;
                                                   font-size: 18px;
                                                   margin-top:25px;" >
                                                   <?php echo $data100['assignment_name']; ?>
                                                
                                                </p>
                                                
                                                <div class="collapse" id="myCollapse<?php echo $kp;?>" style="margin-top: -10px !important; margin-left: 100px;">
                                               
                                                <div  style="margin-left:-50px;" >
                                                   <div class="jumbotron" style="height:auto;background-color:white;padding-top:0px;padding-bottom:0px;">
                                                      <span style="font-size:10px;color: #858585;margin-left:-50px">Course: <?php echo $course_name;?></span><br>
                                                      <span style="font-size:10px;color: #858585;margin-left:-50px"><?php
                                                   $mydate = getdate($assignment_submission);
                                                   echo "$mydate[month] $mydate[mday]";
                                                   ?>   </span>
                                                    <?php
                                                   $assignment_resource_id = $data100['assignment_resources'];
                                                   // echo $assignment_resource_id;
                                                   $query10000 = "SELECT `file_name` FROM `material` WHERE `id` = $assignment_resource_id;";
                                                   $runfetch10000 = mysqli_query($con, $query10000);
                                                   $noofrow10000 = mysqli_num_rows($runfetch10000);
                                                   $indexnumber = 1;
                                                   if ($noofrow10000 > 0 && $runfetch10000 == TRUE) {
                                                       while ($data10000 = mysqli_fetch_assoc($runfetch10000)) {
                                                           $files = $data10000['file_name'];
                                                           $files_array = explode(",", $files);
                                                           $no_of_files = sizeof($files_array);
                                                       }
                                                   }
                                                   ?>
                                                      <br>
                                                      <span style="width:180px;margin-left:-50px;margin-top:-80px; ">
                                                 <button   id="course_button" style="cursor:pointer"
                                                   data-toggle="modal"
                                                   data-target="#assignment_download_modal"
                                                   onclick="prepareAssignmentDownloadModal(
                                                   <?php
                                                      for ($j= 0;$j < $no_of_files-1 ;$j++) {
                                                         
                                                         echo "'".$files_array[$j]."'";
                                                         
                                                         if ($j != $no_of_files - 2) {
                                                            echo ',';
                                                         }
                                                      }
                                                      ?>
                                                   )"
                                                   >Download Files</button>
                                                   &nbsp;&nbsp;
                                                   <button style="display:none"> 
                                                     <form action="download-solution" method="post">
                                                   <input type="hidden" name="material_id" value="<?php echo $assignment_solution;?>">
                                                          <button class="text-default" type="submit" name="download_material" id="course_button" >Download Solution
                                                         </button>
                                                   </form>
                                                 </button>
                                                   <!-- <a href="download-solution/<?php echo $assignment_solution;?>" id="course_button" class="btn">Download Solution</a> -->
                                                  
                                                      </span>
                                                   
                                                   </div>
                                                </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-1 col-md-1 col-sm-1 col-2 mt-4">
                                            
                                             <a href="#myCollapse<?php echo  $kp;?>" data-toggle="collapse" style="font-size:24px;color:gray;" data-target="#myCollapse<?php echo  $kp;?>">
                                                <i class="fas fa-angle-down" ></i>
                                                </a>
                                                
                                             </div>
                                          </div>
                                          </div>
                                          <br>
 
                                       <?php
                                             }
                                             }
                                             }else{
                                             echo "";
                                             }$kp++;
                                             }
                                             }
                                             }
                                          } }
                                             ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>

   <script src="<?php echo base_url()?>assets/js/student-dashboard-modal-create.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   <div class="modal fade" id="assignment_download_modal">
                        <div class="modal-dialog modal-md modal-dialog-centered">
                           <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                 <h4 class="modal-title">Assignments Resources</h4>
                             
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body text-center" style="overflow-x:auto;">
                                 <div><a href="" id="assignment_download_a_tag_1" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_2" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_3" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_4" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_5" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_6" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_7" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_8" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_9" download></a></div>
                                 <div><a href="" id="assignment_download_a_tag_10" download></a></div>
                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                               <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
    