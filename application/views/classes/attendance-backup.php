<?php
   session_start();
   if (!isset($_SESSION['ftip69_uid'])) {
     header('location:../auth/login.php');
   } 
   ?>
<?php
   require_once '../../dbcon.php';
   $user_id = $_SESSION['ftip69_uid'];
   $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
   $run = mysqli_query($con, $query);
   $row = mysqli_num_rows($run);
   $data = mysqli_fetch_assoc($run);
   
   $ftip69_acc_classes = $data['acc_classes'];
   
   
   // success
   if ($ftip69_acc_classes==1) {
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
   require '../../dbcon.php';
   ?>
<?php
   if (!empty($_GET['id'])) {
     $session_id = $_GET['id'];
   // echo "<script>alert('$session_id');</script>";
   
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
   $query = "SELECT `batch_id` FROM `offline_session` WHERE `id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow >
   0 && $runfetch == TRUE) { while ($data = mysqli_fetch_assoc($runfetch)) {
   $batch_id = $data['batch_id']; } } ?>
<?php
   // retriving session data fromt the sesstino log 
      $query = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id LIMIT 1";
      $runfetch = mysqli_query($con, $query);
      $noofrow = mysqli_num_rows($runfetch);
      
      if ($noofrow >0 && $runfetch == TRUE) { 
            while ($data = mysqli_fetch_assoc($runfetch)) {
               $start_time = $data['start_time'];
               $complete_time = $data['complete_time'];
               $attendance_status = $data['attendance_status'];
               $ppt_status = $data['ppt_status'];
               $assignment_stauts = $data['assignment_stauts'];
               $test_status = $data['test_status'];
               $recording_upload_status = $data['recording_upload_status'];
               $is_completed = $data['is_completed'];            
         } 
      } 
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta
         name="description"
         content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
         />
      <meta
         name="keywords"
         content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app"
         />
      <meta name="author" content="pixelstrap" />
      <link
         rel="icon"
         href="../../assets/images/favicon.png"
         type="image/x-icon"
         />
      <link
         rel="shortcut icon"
         href="../../assets/images/favicon.png"
         type="image/x-icon"
         />
      <title>Attendance | Fingertip Portal</title>
      <!-- Google font-->
      <link
         href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
         rel="stylesheet"
         />
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet"
         />
      <link
         href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet"
         />
      <!-- Font Awesome-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/fontawesome.css"
         />
      <!-- ico-font-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/icofont.css"
         />
      <!-- Themify icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/themify.css"
         />
      <!-- Flag icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/flag-icon.css"
         />
      <!-- Feather icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/feather-icon.css"
         />
      <!-- Plugins css start-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/datatables.css"
         />
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/bootstrap.css"
         />
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
      <link
         id="color"
         rel="stylesheet"
         href="../../assets/css/light-1.css"
         media="screen"
         />
      <!-- Responsive css-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/responsive.css"
         />
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/progress-menu.css"
         />
      <link
         rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
         integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
         crossorigin="anonymous"
         />
      <style></style>
   </head>
   <body>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper compact-wrapper">
         <!--change compact-wrapper-->
         <?php require_once '../elements/header.php' ?>
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php require_once '../elements/compact_sidebar_admin.php' ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body" style="padding: 0px">
               <nav
                  class="navbar navbar-expand-sm navbar-light"
                  style="background: white; padding-left: 0px"
                  >
                  <ul class="navbar-nav">
                     <li class="p-3">
                        <a href="attendance.php?id=<?php echo $session_id;?>">
                           <div class="btn <?php 
                              if($attendance_status == 1){
                                 echo "btn-primary";
                              }else{
                                echo "btn-outline-primary";
                              }
                              ?> btn-sm">
                              <?php 
                                 if($attendance_status == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              Attendance
                           </div>
                        </a>
                     </li>
                     <li class="p-3">
                        <a href="ppt-play.php?id=<?php echo $session_id; ?>" >
                           <div class="btn <?php 
                              if($ppt_status == 1){
                                 echo "btn-primary";
                              }else{
                                echo "btn-outline-primary";
                              }
                              ?> btn-sm ">
                              <?php 
                                 if($ppt_status == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              PPT & Resources
                           </div>
                        </a>
                     </li>
                     <li class="p-3">
                        <a href="class-assignment.php?id=<?php echo $session_id; ?>">
                           <div class="btn  <?php 
                              if($assignment_stauts == 1){
                                 echo "btn-primary";
                              }else{
                                echo "btn-outline-primary";
                              }
                              ?> btn-sm ">
                              <?php 
                                 if($assignment_stauts == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              Assignment
                           </div>
                        </a>
                     </li>
                     <li class="p-3">
                        <a href="class-test.php?id=<?php echo $session_id; ?>">
                           <div class="btn <?php 
                              if($test_status == 1){
                                 echo "btn-primary";
                              }else{
                                echo "btn-outline-primary";
                              }
                              ?> btn-sm ">
                              <?php 
                                 if($test_status == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              Test
                           </div>
                        </a>
                     </li>
                     <li class="p-3">
                        <a href="recording-upload.php?id=<?php echo $session_id; ?>">
                           <div class="btn <?php 
                              if($recording_upload_status == 1){
                                 echo "btn-primary";
                              }else{
                                echo "btn-outline-primary";
                              }
                              ?> btn-sm ">
                              <?php 
                                 if($recording_upload_status == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              Recording Upload
                           </div>
                        </a>
                     </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                     <li class="p-3">
                        <div id="session_timer_show">
                           <?php echo $start_time;?>
                        </div>
                     </li>
                     <li class="p-3 float-right">
                        <?php
                           $mails = '';
                                    $query = "SELECT `email` FROM `student` WHERE is_deleted = 0 AND `batch` = $batch_id;";
                                    
                                    $runfetch = mysqli_query($con, $query);
                                    
                                    $noofrow = mysqli_num_rows($runfetch);
                                    
                                    
                                     $indexnumber = 1;
                                    if ($noofrow > 0 && $runfetch == TRUE) { while ($data =
                                    mysqli_fetch_assoc($runfetch)) {
                                    $mails .= $data['email'].',';
                                    }
                                    } 
                                    ?>
                        <a onclick="createMailModal(
                           '<?php echo $mails; ?>'
                           )">
                           <div class="btn btn-link btn-sm" style="padding-right:0px;padding-left:0px;"  
                              data-toggle="modal" 
                              data-target="#mailModal">
                              <i data-feather="mail"></i>
                           </div>
                        </a>
                     </li>
                     <li class="p-3 float-right">
                        <a href="complete-session.php?id=<?php echo $session_id; ?>">
                           <div class="btn btn-success btn-sm ">
                              <?php 
                                 if($is_completed == 1){
                                    echo "<i class='fas fa-check'></i>";
                                 }
                                 ?>
                              Complete
                           </div>
                        </a>
                     </li>
                  </ul>
               </nav>
               <div class="container-fluid" style="padding: 0px 15px">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Attendance</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item">Classes</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div
                     id="success"
                     class="alert alert-success alert-dismissible fade show alerttoggle"
                     role="alert"
                     >
                     <strong>Woyee!</strong> Data Upldated Successfully.
                     <button
                        class="close"
                        type="button"
                        data-dismiss="alert"
                        aria-label="Close"
                        data-original-title=""
                        title=""
                        >
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div
                     id="failed"
                     class="alert alert-danger alert-dismissible fade show alerttoggle"
                     role="alert"
                     >
                     <strong>Holy!</strong> Data Updation Failed.
                     <button
                        class="close"
                        type="button"
                        data-dismiss="alert"
                        aria-label="Close"
                        data-original-title=""
                        title=""
                        >
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <form action="" method="post">
                     <div class="row">
                        <!-- Zero Configuration  Starts-->
                        <div class="col-sm-12">
                           <div class="card">
                              <!-- <div class="card-header">
                                 <h5 class="mb-1">Attendance</h5>
                                 </div> -->
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table id="basic-1" class="display">
                                       <thead>
                                          <tr>
                                             <th>Sr No</th>
                                             <th>Student ID</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Attendance</th>
                                             <th>Comment</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php
                                             $query = "SELECT * FROM `student` WHERE is_deleted = 0 AND `batch` = $batch_id;";
                                             
                                             $runfetch = mysqli_query($con, $query);
                                             
                                             $noofrow = mysqli_num_rows($runfetch);
                                             
                                             
                                              $indexnumber = 1;
                                             if ($noofrow >
                                             0 && $runfetch == TRUE) { while ($data =
                                             mysqli_fetch_assoc($runfetch)) { ?>
                                          <tr>
                                             <td><?php echo $indexnumber;?></td>
                                             <td><?php echo '#'.$data['id']; ?></td>
                                             <td>
                                                <?php echo $data['first_name'].' '.$data['last_name']; ?>
                                             </td>
                                             <td><?php echo $data['email']; ?></td>
                                             <td>
                                                <input
                                                   type="hidden"
                                                   name="student_id<?php echo $indexnumber; ?>"
                                                   value="<?php echo $data['id']; ?>"
                                                   />
                                                <select
                                                   class="custom-select"
                                                   name="attendance<?php echo $indexnumber ?>"
                                                   required
                                                   >
                                                   <?php
                                                      if($attendance_status==1){

                                                         $student_id = $data['id'];
                                                         $query10 = "SELECT * FROM `attendance` WHERE `batch_id` = $batch_id AND `session_id` = $session_id AND `student_id` = $student_id;";
                                             
                                                         $runfetch10 = mysqli_query($con, $query10);
                                                         
                                                         $noofrow10 = mysqli_num_rows($runfetch10);
                                                         
                                                         
                                                          $indexnumber = 1;
                                                         if ($noofrow10 >
                                                         0 && $runfetch10 == TRUE) { while ($data10 =
                                                         mysqli_fetch_assoc($runfetch10)) {

                                                            $student_attendance_status=$data10['attendance'];


                                                         }}


                                                         ?>
                                                          <option value="present" <?php if($student_attendance_status=="present"){ echo "selected";} ?>>
                                                            Present
                                                            </option>
                                                            <option value="absent" <?php if($student_attendance_status=="absent"){ echo "selected";} ?>>Absent</option>
                                                         <?php
                                                         

                                                      }else{
                                                         ?>
                                                          <option value="present" selected>
                                                            Present
                                                            </option>
                                                            <option value="absent">Absent</option>
                                                         <?php                                                         
                                                      }
                                                   ?>

                                                   <!-- <option value="present" selected>
                                                      Present
                                                   </option>
                                                   <option value="absent">Absent</option> -->
                                                </select>
                                             </td>
                                             <td>
                                                <textarea
                                                   rows="1"
                                                   class="form-control"
                                                   placeholder="Type something here..."
                                                   name="comment<?php echo $indexnumber; ?>"
                                                   ></textarea>
                                             </td>
                                          </tr>
                                          <?php
                                             $indexnumber++;
                                               }}
                                             
                                               
                                               
                                             ?>
                                       </tbody>
                                    </table>
                                 </div>
                                 <!-- ppt -->
                                 <div class="form-layout-footer mt-5 float-right">
                                    <button
                                       class="btn btn-light "
                                       type="submit"
                                       name="add_attendance_skip"
                                       >
                                    Skip
                                    </button>
                                    <button
                                       class="btn btn-primary waves-effect"
                                       type="submit"
                                       name="add_attendance"
                                       >
                                    Next
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Zero Configuration  Ends-->
                     </div>
                  </form>
                  <!-- Modal -->
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once '../elements/footer.php' ?>
         </div>
      </div>
      <div class="modal fade" id="mailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="card-header" style="background:white;border-bottom:0px solid green;">
                     <h5>Mail To Batch</h5>
                     <span>Wooye! Approach Students Via Mail.</span>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body p-5">
                  <form action="../utility/send-mail.php" method="POST" >
                     <div class="row mt-2">
                     <div class="col-lg-12">
                           <div class="form-group">
                              <label class="form-control-label active"
                                 >From
                              <span class="text-danger">*</span></label
                                 >
                              <input
                                 class="form-control"
                                 type="email"
                                 name="from"
                                 id="email_input_from"
                                 placeholder="Your email"
                                 required
                                 />
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label class="form-control-label active"
                                 >Students Email
                              <span class="text-danger">*</span></label
                                 >
                              <input
                                 class="form-control"
                                 type="text"
                                 name="email"
                                 id="email_input"
                                 placeholder="User Email"
                                 required
                                 />
                           </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-12">
                           <div class="form-group">
                              <label class="form-control-label active"
                                 >Subject
                              <span class="text-danger">*</span></label
                                 >
                              <input
                                 class="form-control txtOnly"
                                 type="text"
                                 name="subject"
                                 id="subject_input"
                                 placeholder="Enter Mail Subject"
                                 required
                                 />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                           <label>Message<span class="text-danger">*</span></label>
                           <textarea
                              rows="6"
                              class="form-control"
                              placeholder="Type something here..."
                              maxLength="2000"
                              id="message_input"
                              name="message"
                              required
                              ></textarea>
                        </div>
                        <!-- col-4 -->
                     </div>
                     <!-- row -->
                     <!-- form-layout-footer -->
               </div>
               <div class="modal-footer">
               <div class="row">
               <div class="col-md-12 pt-0">
               <div class=" float-right">
               <button
                  class="btn btn-light waves-effect"
                  data-dismiss="modal"
                  >
               Cancel
               </button>
               <button
                  class="btn btn-primary waves-effect"
                  type="submit"
                  name="send_mail"
                  >
               Send
               </button>
               </div>
               </div>
               </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         function createMailModal(mails){

            var get_email_input_from = document.getElementById('email_input_from');
         
            var get_email_input = document.getElementById('email_input');
            var get_subject_input = document.getElementById('subject_input');
         var get_message_input = document.getElementById('message_input');
         
         console.log(mails);
         get_email_input_from.value = "session@fingertips.co.in";
         // var subject = 'Message From <?php $session_id; ?>'
         get_email_input.value = mails;
         get_subject_input.value = '[IMP]';
         get_message_input.value = "Hello I'm <?php echo $_SESSION['ftip69_name'];?>\n\n\n Your message here...";         
         
         }
      </script>
      <!-- latest jquery-->
      <script src="../../assets/js/jquery-3.2.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../../assets/js/bootstrap/popper.min.js"></script>
      <script src="../../assets/js/bootstrap/bootstrap.js"></script>
      <!-- feather icon js-->
      <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="../../assets/js/sidebar-menu.js"></script>
      <script src="../../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="../../assets/js/datatable/datatables/datatable.custom.js"></script>
      <script src="../../assets/js/typeahead/handlebars.js"></script>
      <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
      <script src="../../assets/js/chat-menu.js"></script>
      <script src="../../assets/js/tooltip-init.js"></script>
      <script src="../../assets/js/typeahead-search/handlebars.js"></script>
      <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../../assets/js/script.js"></script>
      <!-- Plugin used-->
      <script>
         var n = 0;
         function checkuncheckfunction() {
           var getcheckbox = document.getElementsByClassName("check-uncheck");
           for (var i = 0; i < getcheckbox.length; i++) {
             getcheckbox[i].click();
           }
           var getselectall = document.getElementById("select-all");
           // var getassign = document.getElementById("assign");
           // var getdelete = document.getElementById("delete");
         
           if (n % 2 == 0) {
             getselectall.innerHTML = "Deselect All";
           } else {
             getselectall.innerHTML = "Select All";
           }
           n++;
         }
         function selectcall() {
           console.log("nzar");
           var getassign = document.getElementById("assign");
           getassign.style.display = "inline";
         }
      </script>
      <script>
         // session timer
         
         var is_completed = <?php echo $is_completed; ?>;
         
         var start_time = <?php echo $start_time; ?>;
         // var current_time = <?php $t=time(); echo $t; ?>;
         // var time_differ =    (current_time - start_time);
         // var d = new Date(<?php echo ($t - $start_time);?>);
         function sessionTimer(){
         
            var current_time = Math.floor(Date.now()/1000);
            console.log(current_time);
            if(is_completed == 1){
               current_time = <?php echo $complete_time;?>;
            }
            
         
            var time_differ = (current_time - start_time);
         
            var time_differ_use = time_differ;
         
            
            
            
            var time_differ_day = Math.floor(time_differ_use/86400);
            time_differ_use = (time_differ_use) -(time_differ_day*86400);
            var time_differ_hour = Math.floor(time_differ_use/3600);
            time_differ_use = (time_differ_use) -(time_differ_hour*3600);
            var time_differ_minutes = Math.floor(time_differ_use/60);
            time_differ_use = (time_differ_use) -(time_differ_minutes*60);
            var time_differ_seconds = Math.floor(time_differ_use);
         
            if(time_differ_hour<=9){
               time_differ_hour = "0"+time_differ_hour;
            }
            
            if(time_differ_minutes<=9){
               time_differ_minutes = "0"+time_differ_minutes;
            }
         
            if(time_differ_seconds<=9){
               time_differ_seconds = "0"+time_differ_seconds;
            }
         
         
         
            
         
            var get_session_timer_show = document.getElementById('session_timer_show');
            get_session_timer_show.innerHTML = time_differ_hour+' : '+time_differ_minutes+' : '+time_differ_seconds;
            console.log(time_differ+'time_differ');
            
            sessionTimerPair();
         
         }
         
         function sessionTimerPair(){
            if(is_completed == 0){
         
            setTimeout(function(){ sessionTimer(); }, 1000);
            }
         
         }
         sessionTimer();
         
      </script>
      
   </body>
</html>
<?php
   if (isset($_POST['add_attendance'])) {
   
      $count_number = $indexnumber-1; 
      $batch_id = $batch_id;
      $session_id = $session_id;
      
      
    
      for($i = 1; $i<=$count_number;$i++){
    
      $student_id = $_POST['student_id'.$i];
      $attendance = $_POST['attendance'.$i];
      $comment = $_POST['comment'.$i];  
      $date = date_create();
      $timestamp = date_timestamp_get($date);
    
      $uploadsuccess = 0;
      $uploadfail = 0;
      
      $query3 = "INSERT INTO `attendance`(`id`, `batch_id`, `session_id`,
       `student_id`, `attendance`, `comment`, `timestamp`) 
       VALUES (NULL,$batch_id,$session_id,$student_id,'$attendance',
       '$comment',$timestamp);";
    
        if ($con->query($query3) === TRUE) {
          $uploadsuccess = 1;
          
        } else {
          $uploadfail = 1;
         //  echo "Error: " . $query3 . "<br>" . $con->error;
        }
    
       // updating attendance status
        $query4 = "UPDATE `offline_session_log` SET `attendance_status` = 1  WHERE `session_id` = $session_id;";
    
        if ($con->query($query4) === TRUE) {
          $uploadsuccess = 1;
          
        } else {
          $uploadfail = 1;
         //  echo "Error: " . $query3 . "<br>" . $con->error;
        }
    
        if($uploadsuccess == 1 && $uploadfail == 0){
          ?>
<script>
   window.location = "ppt-play.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }
   
   }
   
   
   }
   
   if (isset($_POST['add_attendance_skip'])) {
   
   $count_number = $indexnumber-1; 
   $batch_id = $batch_id;
   $session_id = $session_id;
   
   
   
   for($i = 1; $i<=$count_number;$i++){
   
   $student_id = $_POST['student_id'.$i];
   $attendance = 'present';
   $comment = NULL;  
   $date = date_create();
   $timestamp = date_timestamp_get($date);
   
   $uploadsuccess = 0;
   $uploadfail = 0;
   
   $query3 = "INSERT INTO `attendance`(`id`, `batch_id`, `session_id`,
   `student_id`, `attendance`, `comment`, `timestamp`) 
   VALUES (NULL,$batch_id,$session_id,$student_id,'$attendance',
   '$comment',$timestamp);";
   
   if ($con->query($query3) === TRUE) {
     $uploadsuccess = 1;
     
   } else {
     $uploadfail = 1;
   //   echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   // updating attendance status
   $query4 = "UPDATE `offline_session_log` SET `attendance_status` = 0  WHERE `session_id` = $session_id;";
   
   if ($con->query($query4) === TRUE) {
     $uploadsuccess = 1;
     
   } else {
     $uploadfail = 1;
   //   echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   if($uploadsuccess == 1 && $uploadfail == 0){
     ?>
<script>
   window.location = "ppt-play.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }
   
   }
   
   
   }
   ?>