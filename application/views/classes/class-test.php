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
   $query = "SELECT `batch_id`,`start_time`,`end_time` FROM `offline_session` WHERE `id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow >
   0 && $runfetch == TRUE) { while ($data = mysqli_fetch_assoc($runfetch)) {
   $batch_id = $data['batch_id']; 
   $session_start_time = $data['start_time'];
   $session_end_time = $data['end_time'];
   $actual_session_time_should_be = ($session_end_time - $session_start_time);
   } } ?>
<?php
   $query = "SELECT `batch_id`,`test` FROM `offline_session` WHERE `id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow >
   0 && $runfetch == TRUE) { while ($data = mysqli_fetch_assoc($runfetch)) {
   $batch_id = $data['batch_id']; 
   $test= $data['test'];
   $test_array = explode (",", $test);
   $no_of_test =  sizeof($test_array);
      } 
   } 
   ?>


     
<?php

if (isset($_POST['assign_test'])) {

   $test_submission = $_POST['test_submission'];
   $test_submission_timestamp = strtotime($test_submission);
   $test_comment = $_POST['test_comment'];

    // updating ppt status
    $query4 = "UPDATE `offline_session_log` SET `test_status` = 1, `test_submission` = $test_submission_timestamp,`test_comment` = '$test_comment'  WHERE `session_id` = $session_id;";
   
    if ($con->query($query4) === TRUE) {
      $uploadsuccess = 1;
      ?>
<script>
         $('#content1 .anzar-alert').hide();         
         $('#content1').append('<div id="success" class="alert  alert-dismissible fade show  custom-success anzar-alert" role="alert"><strong>Woyee!</strong> Assigne assignment  successfully.<button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button></div>');
</script>
      <?php
      
      
    } else {
      
      $uploadfail = 1;
      ?>
<script>
         $('#content1 .anzar-alert').hide();         
         $('#content1').append('<div id="failed" class="alert  alert-dismissible fade show  custom-danger anzar-alert" role="alert"><strong>Holy!</strong> Assigne  assignment failed.<button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button></div>');
</script>
      <?php
      // echo "Error: " . $query3 . "<br>" . $con->error;
    }
   


}

?>
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
               $test_comment = $data['test_comment'];
               $recording_upload_status = $data['recording_upload_status'];
               $is_completed = $data['is_completed'];            
         } 
      } 
   ?>


<?php
   if (isset($_POST['class_test_next'])) {
   
     
    $uploadsuccess = 0;
    $uploadfail = 0;
   
   
    // updating ppt status
    $query4 = "UPDATE `offline_session_log` SET `test_status` = 1  WHERE `session_id` = $session_id;";
   
    if ($con->query($query4) === TRUE) {
      $uploadsuccess = 1;
      
      
    } else {
      
      $uploadfail = 1;
      // echo "Error: " . $query3 . "<br>" . $con->error;
    }
   
    if($uploadsuccess == 1 && $uploadfail == 0){
      ?>
<script>
   window.location = "recording-upload.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }
   }
   
   if (isset($_POST['class_test_skip'])) {
   
     
    $uploadsuccess = 0;
    $uploadfail = 0;
   
   
   // updating ppt status
   $query4 = "UPDATE `offline_session_log` SET `test_status` = 0  WHERE `session_id` = $session_id;";
   
   if ($con->query($query4) === TRUE) {
    $uploadsuccess = 1;
    
   } else {
    $uploadfail = 1;
   //  echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   if($uploadsuccess == 1 && $uploadfail == 0){
    ?>
<script>
   window.location = "recording-upload.php?id=<?php echo $session_id; ?>";
</script>
<?php
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
      <title>Test | Fingertip Portal</title>
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
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <style>
         .swal-modal .swal-text {
    text-align: center;
}
         </style>
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
                              ?>  btn-sm ">
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
                                echo "btn-primary";
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
                                    $query = "SELECT `id`,`email` FROM `student` WHERE is_deleted = 0 AND `batch` = $batch_id;";
                                    
                                    $runfetch = mysqli_query($con, $query);
                                    
                                    $noofrow = mysqli_num_rows($runfetch);
                                    
                                    
                                     $indexnumber = 1;
                                    if ($noofrow > 0 && $runfetch == TRUE) { while ($data =
                                    mysqli_fetch_assoc($runfetch)) {
                                       $student_id = $data['id'];

                                       $query2 = "SELECT `id` FROM `user2` WHERE `is_disabled` = 0 AND `is_deleted` = 0 AND `student_id` = $student_id"; 
                                       $runfetch2 = mysqli_query($con, $query2);
                                       $noofrow2 = mysqli_num_rows($runfetch2);
                                       $indexnumber2 = 1;
                                       if ($noofrow2 >0 && $runfetch2 == TRUE) { 
                                         while ($data2 = mysqli_fetch_assoc($runfetch2)) { 

                                          $mails .= $data['email'].',';
                                         }}
                                       
                                    
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
                        <!-- <a href="complete-session.php?id=<?php echo $session_id; ?>"> -->
                        <a onclick="completeFunction(<?php echo $session_id; ?>);">
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
                              <h3>Test</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active">Class</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div id="success" class="alert alert-success alert-dismissible fade show alerttoggle" role="alert"><strong>Woyee!</strong> Data Uploaded Successfully.
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                  </div>
                  <div id="failed" class="alert alert-danger alert-dismissible fade show alerttoggle" role="alert"><strong>Holy!</strong> Data Upload Failed.
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                  </div>
                  <div class="row">
                  <div class="col-md-8">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card">
                                 <div class="card-body">
                                 <div class="pt-1">
                                       <h5 class="mb-5"><strong>Session Test</strong></h5>
                                    </div>
                                    <div class="table-responsive" >
                                 <table class="display" id="basic-6">
                                    <thead>
                                       <tr>
                                          <th>Test ID</th>
                                          <th>Test Name</th>
                                          <th>Test Topic</th>
                                        
                                          <th>Course Name</th>

                                          <th>Test Duration</th>
                                          
                                          
                                          
                                          
                                          <th>Description
                                          </th>
                                          <th>Submission Date</th>
                                          <th>Comment</th>
                                          <!-- <th class="text-center">Action</th> -->
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    
                                                for($i= 0; $i < $no_of_test-1; $i++){
                                                   
                                                ?>
                                       <?php
                                          $query = "SELECT * FROM `mcq_test` WHERE is_deleted = 0 AND `id` = $test_array[$i];";                                                               
                                          $runfetch = mysqli_query($con, $query);                                                               
                                          $noofrow = mysqli_num_rows($runfetch);
                                          $indexnumber = 1;
                                          if ($noofrow >0 && $runfetch == TRUE)
                                          { while ($data = mysqli_fetch_assoc($runfetch)) { 
                                       ?>
                                       <tr>
                                          <td><?php echo '#'.$data['id']; ?></td>
                                          <td><?php echo $data['test_name']; ?></td>
                                          <td><?php echo $data['topic_name']; ?></td>
                                          
                                          <td>
                                             <?php                     
                                                $course_name = $data['course_name']; 
                                                
                                                $query2 = "SELECT `name` FROM `course` WHERE `id` = $course_name;";
                                                $runfetch2 = mysqli_query($con, $query2);
                                                $noofrow2 = mysqli_num_rows($runfetch2);
                                                
                                                if ($noofrow2 >0 && $runfetch2 == TRUE) {
                                                   while ($data2 = mysqli_fetch_assoc($runfetch2)) { 
                                                     echo $data2['name']; } } else{
                                                        echo "Not Applied";
                                                     }
                                                    ?>
                                          </td>
                                          <td>
                                          <?php echo $data['test_duration'].' min';?>
                                          </td>
                                         
                                         
                                   
                                          <td><?php echo $data['description']; 
                                          if($data['description'] == ''){
                                             echo 'Not Available';
                                          }
                                          
                                          ?></td>
                                          <td>

                                          <?php
                                                         $query100 = "SELECT `test_submission` FROM `offline_session_log` WHERE `session_id` = $session_id";
                                                                              
                                                         $runfetch100 = mysqli_query($con, $query100);
                                                                              
                                                         $noofrow100 = mysqli_num_rows($runfetch100);
                                                                              
                                                                              
                                                         $indexnumber100 = 1;
                                                         if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                                           while ($data100 = mysqli_fetch_assoc($runfetch100)) 
                                                           { 

                                                            if($data100['test_submission'] == ""){
                                                               echo "Not Applied";
                                                            }else{
                                                               $mydate=getdate($data100['test_submission']);
                                                            echo "$mydate[mday]/$mydate[mon]/$mydate[year]";

                                                            }
                                                            
                                                            
                                                         }
                                                         }else{
                                                            echo "Not Applied";
                                                         }
                                                         
                                                         
                                                         ?>
                                          
                                          </td>

                                          <td>

                                          <?php
                                                         echo $test_comment;
                                                         
                                                         ?>
                                          
                                          </td>
                                          
                              </tr>
                              <?php
                                 }
                              }
                           }
                                 ?>
                              </tbody>
                              </table>
                           </div>
                                    <form action="" method="post">
                                       <div class="form-layout-footer mt-5 float-right">
                                          <button
                                             class="btn btn-light "
                                             type="submit"
                                             name="class_test_skip"
                                             >
                                          Skip
                                          </button>
                                          <button
                                             class="btn btn-primary waves-effect"
                                             type="submit"
                                             name="class_test_next"
                                             >
                                          Next
                                          </button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card">
                              <div id="content1" class="pb-3"></div>
                                 <div class="card-body">
                                    
                                    <form action="" method="post">
                                       <div class="form-layout form-layout-1">
                                          <!-- event title -->
                                          <div class="row">
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label class="form-control-label active"
                                                      >Submission Date
                                                   <span class="text-danger">*</span></label
                                                      >
                                                   <input
                                                      class="form-control"
                                                      type="date"
                                                      name="test_submission"
                                                      placeholder="Enter Submission Date"
                                                      required
                                                      />
                                                </div>
                                             </div>
                                             <!-- email -->
                                             <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label class="form-control-label active"
                                                      >Comment
                                                   <span class="text-danger">*</span></label
                                                      >
                                                   <textarea
                                                      rows="1"
                                                      name="test_comment"
                                                      class="form-control"
                                                      placeholder="Type something here..."
                                                      ></textarea>
                                                </div>
                                             </div>
                                             <!-- Role -->
                                             <!-- <div class="col-lg-12">
                                                <div class="form-group">
                                                   <label class="form-control-label active"
                                                      >Select Test
                                                   <span class="text-danger">*</span></label
                                                      >
                                                   <select
                                                      class="form-control select2 select2-hidden-accessible"
                                                      data-placeholder="Role"
                                                      tabindex="-1"
                                                      aria-hidden="true"
                                                      id=""
                                                      name="role"
                                                      required
                                                      >
                                                      <option label="Choose Test"></option>
                                                      <?php
                                                         $query = "SELECT * FROM `mcq_test` WHERE is_deleted = 0";
                                                                              
                                                         $runfetch = mysqli_query($con, $query);
                                                                              
                                                         $noofrow = mysqli_num_rows($runfetch);
                                                                              
                                                                              
                                                         $indexnumber = 1;
                                                         if ($noofrow >0 && $runfetch == TRUE) { 
                                                           while ($data = mysqli_fetch_assoc($runfetch)) 
                                                           { ?>
                                                      <option value="<?php echo $data['id'];?>"><?php echo $data['test_name'];?></option>
                                                      <?php
                                                         }
                                                         }
                                                         
                                                         
                                                         ?>
                                                   </select>
                                                </div>
                                             </div> -->
                                          </div>
                                          <!-- row -->
                                          <div class="form-layout-footer mt-3 ">
                                             <button
                                                class="btn btn-primary waves-effect btn-lg btn-block"
                                                type="submit"
                                                name="assign_test"
                                                >
                                             Assign Test
                                             </button>
                                             
                                          </div>
                                          <!-- form-layout-footer -->
                                       </div>
                                       </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <br>
                        <br>
                        <br>
                        <br>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once '../elements/footer.php' ?>
         </div>
      </div>
      <!-- Modal -->

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
         if(su == 1){
           var element = document.getElementById("success");
                 element.classList.remove("alerttoggle");
                 console.log('su');
         }
         if(fails ==1 ){
           
           var element = document.getElementById("failed");
                 element.classList.remove("alerttoggle");
                 console.log('fails');
         }
      </script>
      <script>
         // session timer
         
         var is_completed = <?php echo $is_completed; ?>;
         
         var start_time = <?php echo $start_time; ?>;
         // var current_time = <?php $t=time(); echo $t; ?>;
         // var time_differ =    (current_time - start_time);
         // var d = new Date(<?php echo ($t - $start_time);?>);
         var session_time_differ_global = 0;
         function sessionTimer(){
         
            var current_time = Math.floor(Date.now()/1000);
            // console.log(current_time);
            if(is_completed == 1){
               current_time = <?php echo $complete_time;?>;
            }
            
         
            var time_differ = (current_time - start_time);
            session_time_differ_global = time_differ;
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
            // console.log(time_differ+'time_differ');
            
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

<script>
         function completeFunction(n){
           console.log(n);
           var actual_session_time_should_be = <?php echo $actual_session_time_should_be; ?>;
           
           console.log('time_differ'+session_time_differ_global);
           
           console.log('actual_time'+actual_session_time_should_be);
           if(actual_session_time_should_be > session_time_differ_global){
            
            
            actual_session_hour_should_be = (actual_session_time_should_be / 3600); 
            actual_session_hour_should_be = Math.floor(actual_session_hour_should_be);
            // actual_session_hour_should_be   = actual_session_hour_should_be .toFixed(2);
            message = "Session not completed of "+ actual_session_hour_should_be +" hrs, Are you sure want to complete anyways?";
           }else{
            message ="Are you sure want to complete this session?";

           }

           
           swal({
                 title: "Complete Session",
                 text: message,
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
               })
               .then((willDelete) => {
                 if (willDelete) {
                   // swal("Poof! Your camera has been deleted!", {
                   //   icon: "success",
                   // });
                   window.location = 'complete-session.php?id='+n;
                 } 
                 // else {
                 //   swal("Your cameris safe!");
                 // }
               });
         }
      </script>