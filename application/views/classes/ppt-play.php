<?php
   session_start();
   if (!isset($_SESSION['ftip69_uid'])) {
     header('location:../auth/login.php');
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
   require '../../dbcon.php';
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
   $query = "SELECT * FROM `offline_session` WHERE `id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow >
   0 && $runfetch == TRUE) { while ($data = mysqli_fetch_assoc($runfetch)) {
   $batch_id = $data['batch_Id']; 
   
   $ppt= $data['ppt'];
   $ppt_array = explode (",", $ppt);
   $no_of_ppt =  sizeof($ppt_array);
   
   $session_resource = $data['session_resource'];
   $session_resource_array = explode (",", $session_resource);
   $no_of_session_resource =  sizeof($session_resource_array);
      }
   } ?>
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
      <title>PPT & Resources | Fingertips</title>
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
      <!-- Plugins css start-->
      <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/datatables.css"
         />
      <!-- Plugins css Ends-->
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
         <?php
         require_once '../elements/header.php' 
         ?>
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php 
            require_once '../elements/compact_sidebar_admin.php'
             ?>
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
                                echo "btn-primary";
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
                        <!-- <a href="complete-session.php?id=<?php echo $session_id; ?>">
                         -->
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
                              <h3>PPT & Resources</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active">Classes</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  for($i= 0; $i < $no_of_ppt-1; $i++){
                  ?>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <?php
                        // change ppt with resources 
                           $query = "SELECT * FROM `ppt` WHERE `is_deleted` = 0 AND `id` = $ppt_array[$i]";
                                                        
                           $runfetch = mysqli_query($con, $query);
                                                        
                           $noofrow = mysqli_num_rows($runfetch);
                                                        
                           $indexnumber = 1;
                           if ($noofrow >
                           0 && $runfetch == TRUE) { while ($data =
                           mysqli_fetch_assoc($runfetch)) { 
                              ?>
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                              <h5>PPT Play</h5>
                              <h6 class="float-right">
                                 Uploaded On:
                                 <?php
                                    $mydate=getdate($data['timestamp']);
                                    echo "$mydate[mday]/$mydate[mon]/$mydate[year]";
                                    ?>
                              </h6>
                           </div>
                           <div class="card-body">
                              <div class="row p-4 mb-5 text-center">
                                 <div class="col-md-12">
                                    <h2><?php echo $data['topic'] ?></h2>
                                 </div>
                                 <div class="col-md-12">
                                    <h5 style="color: grey">
                                       (<?php echo $data['name'] ?>)
                                    </h5>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="text-center" style="overflow-x: auto">
                                       <iframe
                                          src="<?php echo $data['ppt_url'] ?>"
                                          frameborder="0"
                                          width="960"
                                          height="569"
                                          allowfullscreen="true"
                                          mozallowfullscreen="true"
                                          webkitallowfullscreen="true"
                                          ></iframe>
                                    </div>
                                 </div>
                              </div>
                              <div class="row p-4 mb-5 mt-2">
                                 <div class="col-md-2"></div>
                                 <div class="col-md-8">
                                    <h3>Description</h3>
                                    <p class="subhead" style="font-size: 16px; color: black; text-transform: capitalize;"><?php echo $data['description'] ?></p>
                                 </div>
                                 <div class="col-md-2"></div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                     <?php
                        $indexnumber++;
                              }
                          }else{
                           //   echo $ppt_array[$i];
                           // echo "Error: " . $query . "<br>" . $con->error;
                          }
                        
                        ?>
                  </div>
                  <!-- experiment starts-->
                  
                  <!-- experiment ends -->
               </div>
               <?php
                  }
                  ?>
                  <div class="row">
                     <div class="col m-3">
                        <div class="card">
                           <div class="card-header">
                              <h5>Uploaded Resources</h5>
                              <span
                                 >All the available resources are showing here for this session.</span
                                 >
                           </div>
                           <div class="card-body">
                              <div class="table-responsive pt-1">
                                 <table id="basic-6" class="display">
                                    <thead>
                                       <tr>
                                          <th class="text-center">Sr No</th>
                                          <th class="w-75">Topic Name</th>
                                          <th class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody class="text-center">
                                       <?php
                                          for($i= 0; $i < $no_of_session_resource-1; $i++){
                                          ?>
                                       <?php
                                          $query = "SELECT * FROM `material` WHERE `id` = $session_resource_array[$i];";
                                          $runfetch = mysqli_query($con, $query);
                                          $noofrow = mysqli_num_rows($runfetch);
                                          $indexnumber = 1;
                                          
                                          if ($noofrow >0 && $runfetch == TRUE) { 
                                             while ($data = mysqli_fetch_assoc($runfetch)) { 
                                          
                                                // use of explode 
                                                // $files = $data['file_name']; 
                                                // $files_array = explode (",", $files);  
                                               
                                          ?>
                                       <tr>
                                          <td><?php echo $indexnumber;?></td>
                                          <td class="text-left">
                                             <?php echo $data['topic_name']; ?>
                                          </td>
                                          <td>
                                             <!-- <a
                                                href="../uploads/session/reading-material/<?php echo $str_arr1[0]?>"
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                data-toggle="tooltip"
                                                title="Download Resource"
                                                download="<?php echo $data['topic_name']; ?>"
                                                ><i
                                                data-feather="download"
                                                class="wd-16 ht-16 mr-2 text-primary"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a> -->
                                                <!-- <a href="../uploads/session/material/Hello_worldtopic_added1608153602s_p1041537163.sql" download>
                                                <a href="../uploads/session/material/Hello_worldtopic_added1608153602s_p1041537163.sql" download>
                                                download
                                                </a>
                                                </a> -->
                                                
                                             <!-- <form action="download-material.php" method="post">
                                                <input type="hidden" name="material_id" value="<?php echo $data['id']; ?>">
                                                <button class="btn btn-link" type="submit" name="download_material">
                                                <i
                                                   data-feather="download"
                                                   class="wd-16 ht-16 mr-2 text-primary"
                                                   style="width: 16px; height: 16px"
                                                   ></i
                                                   >
                                                </button>
                                             </form> -->

                                             <?php
                                                      $session_resource_id =$data['id'];
                                                      

       
    
                                             $query = "SELECT `file_name` FROM `material` WHERE `id` = $session_resource_id;";
                                             $runfetch = mysqli_query($con, $query);
                                             $noofrow = mysqli_num_rows($runfetch);
                                             $indexnumber = 1;
                                             
                                             if ($noofrow >0 && $runfetch == TRUE) { 
                                                while ($data = mysqli_fetch_assoc($runfetch)) { 
                                             
                                                   // use of explode 
                                                   $files = $data['file_name']; 
                                                   //  echo $files;
                                                   $files_array = explode (",", $files); 
                                                   $no_of_files =  sizeof($files_array);
                                                   //  echo 'number of file'.$no_of_files;
                                                   //  print_r($files_array);
                                                }
                                                }
                                                      ?>



<span class="text-primary" style="cursor:pointer"
                                                   data-toggle="modal"
                                                   data-target="#class_resource_download_modal"
                                                   onclick= "prepareClassResourceDownloadModal(
                                                                    <?php                                                                  
                                                                        for($j= 0; $j < $no_of_files-1; $j++){
                                                                           
                                                                         echo "'".$files_array[$j]."'";
                                                                         if($j != $no_of_files - 2){
                                                                            echo ',';                                                                 
                                                                        }
                                                                        }
                                                                        ?>
                                                                        )"
                                                   
                                                   >
                                                
                                                   <a
                                               
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                data-toggle="tooltip"
                                                title="Download Resource"
                                                download="<?php echo $data['topic_name']; ?>"
                                                ><i
                                                data-feather="download"
                                                class="wd-16 ht-16 mr-2 text-primary"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a>
                                                </span>
                                          </td>
                                       </tr>
                                       <?php
                                          }
                                          ?>
                                       <?php
                                          $indexnumber++;
                                          
                                            }}
                                            
                                          ?>
                                    </tbody>
                                 </table>
                                 <?php
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                  <div class="col m-3">
                  <div class="card">
                  <div class="card-body">
                  <form action="" method="post">
                                 <div class="form-layout-footer float-right">
                                    <button
                                       class="btn btn-light "
                                       type="submit"
                                       name="ppt_skip"
                                       >
                                    Skip
                                    </button>
                                    <button
                                       class="btn btn-primary waves-effect"
                                       type="submit"
                                       name="ppt_next"
                                       >
                                    Next
                                    </button>
                                 </div>
</form>
                  </div>
                  </div>
                  </div>
                  </div>
               <br>
               <br>
               <br>
               <br>
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


      <div class="modal fade" id="class_resource_download_modal">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                           <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                 <h4 class="modal-title">Download Class Resources</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <!-- Modal body -->
                              <div class="modal-body text-center">

                                 <div><a href="" id="class_resource_download_a_tag_1" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_2" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_3" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_4" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_5" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_6" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_7" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_8" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_9" download></a></div>
                                 <div><a href="" id="class_resource_download_a_tag_10" download></a></div>
                              

                              </div>
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                              </div>
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
      <script src="../../assets/js/counter/jquery.waypoints.min.js"></script>
      <script src="../../assets/js/counter/jquery.counterup.min.js"></script>
      <script src="../../assets/js/counter/counter-custom.js"></script>
      <script src="../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="../../assets/js/typeahead/handlebars.js"></script>
      <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
      <script src="../../assets/js/chat-menu.js"></script>
      <script src="../../assets/js/support-ticket-custom.js"></script>
      <script src="../../assets/js/tooltip-init.js"></script>
      <script src="../../assets/js/typeahead-search/handlebars.js"></script>
      <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../../assets/js/script.js"></script>
      <!-- Plugin used-->
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
<?php
   if (isset($_POST['ppt_next'])) {
   
   
    // updating ppt status
    $query4 = "UPDATE `offline_session_log` SET `ppt_status` = 1  WHERE `session_id` = $session_id;";
   
    if ($con->query($query4) === TRUE) {
      $uploadsuccess = 1;
      
    } else {
      $uploadfail = 1;
      // echo "Error: " . $query3 . "<br>" . $con->error;
    }
   
    if($uploadsuccess == 1 && $uploadfail == 0){
      ?>
<script>
   window.location = "class-assignment.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }
   }
   
   if (isset($_POST['ppt_skip'])) {
   
   
   // updating ppt status
   $query4 = "UPDATE `offline_session_log` SET `ppt_status` = 0  WHERE `session_id` = $session_id;";
   
   if ($con->query($query4) === TRUE) {
    $uploadsuccess = 1;
    
   } else {
    $uploadfail = 1;
   //  echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   if($uploadsuccess == 1 && $uploadfail == 0){
    ?>
<script>
   window.location = "class-assignment.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }
   }
    
     ?>



<script>

function prepareClassResourceDownloadModal(no1,no2,no3,no4,no5,no6,no7,no8,no9,no10){

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

   
   var get_class_resource_download_a_tag_1 = document.getElementById('class_resource_download_a_tag_1');
   var get_class_resource_download_a_tag_2 = document.getElementById('class_resource_download_a_tag_2');
   var get_class_resource_download_a_tag_3 = document.getElementById('class_resource_download_a_tag_3');
   var get_class_resource_download_a_tag_4 = document.getElementById('class_resource_download_a_tag_4');
   var get_class_resource_download_a_tag_5 = document.getElementById('class_resource_download_a_tag_5');
   var get_class_resource_download_a_tag_6 = document.getElementById('class_resource_download_a_tag_6');
   var get_class_resource_download_a_tag_7 = document.getElementById('class_resource_download_a_tag_7');
   var get_class_resource_download_a_tag_8 = document.getElementById('class_resource_download_a_tag_8');
   var get_class_resource_download_a_tag_9 = document.getElementById('class_resource_download_a_tag_9');
   var get_class_resource_download_a_tag_10 = document.getElementById('class_resource_download_a_tag_10');

   var link = '../uploads/session/material/';
   no1 = no1.trim();
   get_class_resource_download_a_tag_1.href = link+no1;
   no2 = no2.trim();
   get_class_resource_download_a_tag_2.href = link+no2;
   no3 = no3.trim();
   get_class_resource_download_a_tag_3.href = link+no3;
   no4 = no4.trim();
   get_class_resource_download_a_tag_4.href = link+no4;
   no5 = no5.trim();
   get_class_resource_download_a_tag_5.href = link+no5;
   no6 = no6.trim()
   get_class_resource_download_a_tag_6.href = link+no6;
   no7 = no7.trim()
   get_class_resource_download_a_tag_7.href = link+no7;
   no8 = no8.trim()
   get_class_resource_download_a_tag_8.href = link+no8;
   no9 = no9.trim()
   get_class_resource_download_a_tag_9.href = link+no9;
   no10 = no10.trim()
   get_class_resource_download_a_tag_10.href = link+no10;

   get_class_resource_download_a_tag_1.innerHTML = no1_file_name+'.'+no1_extension;
   get_class_resource_download_a_tag_2.innerHTML = no2_file_name+'.'+no2_extension;
   get_class_resource_download_a_tag_3.innerHTML = no3_file_name+'.'+no3_extension;
   get_class_resource_download_a_tag_4.innerHTML = no4_file_name+'.'+no4_extension;
   get_class_resource_download_a_tag_5.innerHTML = no5_file_name+'.'+no5_extension;
   get_class_resource_download_a_tag_6.innerHTML = no6_file_name+'.'+no6_extension;
   get_class_resource_download_a_tag_7.innerHTML = no7_file_name+'.'+no7_extension;
   get_class_resource_download_a_tag_8.innerHTML = no8_file_name+'.'+no8_extension;
   get_class_resource_download_a_tag_9.innerHTML = no9_file_name+'.'+no9_extension;
   get_class_resource_download_a_tag_10.innerHTML = no10_file_name+'.'+no10_extension;



   

}


</script>


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