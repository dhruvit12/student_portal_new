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
   require_once '../../dbcon.php';
   $user_id = $_SESSION['ftip69_uid'];
   $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
   $run = mysqli_query($con, $query);
   $row = mysqli_num_rows($run);
   $data = mysqli_fetch_assoc($run);
   
   $ftip69_acc_classes = $data['acc_classes'];

   $date = date_create();
   $timestamp_2 = date_timestamp_get($date);
   
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
   if (isset($_POST['add_assigned_to'])) {
     
   
     
   
   $assign = $_POST['assign'];
   $assign_to = $_POST['assign_to'];
   $date = date_create();
   $timestamp = date_timestamp_get($date);
   
   if (isset($_POST['assign'])) {
   foreach ($assign as $assign){
   $query3 = "UPDATE `class` SET `batch_head`=$assign_to,`timestamp`=$timestamp WHERE `id` = $assign;";
   if ($con->query($query3) === TRUE) {
   ?>
<script>
   var su = 1;
</script>
<?php
   } else {
     ?>
<script>
   var fa = 1;
    
</script>
<?php
   // echo "Error: " . $query3 . "<br>" . $con->error;
   }
   }
   } else {
   echo "<script>alert('You did not choose any lead to assign!');</script>";
   }
   
   // get date function 
   // $mydate=getdate(1456);
   // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
   
   }
   
   ?>
<?php
   if (isset($_POST['session_log'])) {
   
   
   
   
     $session_id = $_POST['session_id'];   
     
                                               
     $date = date_create();
     $timestamp = date_timestamp_get($date);
   
   
   
     $session_status_check = 0;
   
   
   
     // check if session alreay started
   
     $query = "SELECT `session_id` FROM `offline_session_log`";
   
     $runfetch = mysqli_query($con, $query);
   
     $noofrow = mysqli_num_rows($runfetch);
   
     if ($noofrow > 0 && $runfetch == TRUE) { 
       while ($data10 = mysqli_fetch_assoc($runfetch)) { 
         if($data10['session_id'] == $session_id){
           $session_status_check = 1;
         }
       }
     if($session_status_check == 1){
       ?>
<script>
   window.location = "attendance.php?id=<?php echo $session_id; ?>";
</script>
<?php
   }else{
    //   starting a new class
   
     $query3 = "INSERT INTO `offline_session_log`(`id`, `session_id`, `start_time`,`timestamp`) 
     VALUES (NULL,$session_id,$timestamp,$timestamp);";
   
   
   
   
       if ($con->query($query3) === TRUE) {                                                                                                           
         ?>
<script>
   window.location = "attendance.php?id=<?php echo $session_id; ?>";
       
     
</script>
<?php
   } else {
     ?>
<script>
   alert('Session start fail');
    
</script>
<?php
   //  echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   }
   }else{
   // starting new class
   
   $query3 = "INSERT INTO `offline_session_log`(`id`, `session_id`, `start_time`,`timestamp`) 
   VALUES (NULL,$session_id,$timestamp,$timestamp);";
   
   
   
   
   if ($con->query($query3) === TRUE) {                                                                                                           
   ?>
<script>
   window.location = "attendance.php?id=<?php echo $session_id; ?>";
       
     
</script>
<?php
   } else {
     ?>
<script>
   alert('Session start fail');
    
</script>
<?php
   //   echo "Error: " . $query3 . "<br>" . $con->error;
   }
   
   
   }
   
   
   }
   
   ?>



<?php
   if (isset($_POST['edit_session'])) {
     $i = 1;
   $session_id = $_POST['edit_session_id'];
     $batch_id = $_POST['batch_id'];    
     $assigned_to = $_POST['assigned_to'];    
      $session_name = $_POST['session_name'.$i];
      $session_date = $_POST['session_date'.$i];
      $session_date_timestamp = strtotime("$session_date");
     
     
       $start_time = $_POST['start_time'.$i];
       $start_time_timestamp = strtotime("$session_date $start_time");
       $end_time = $_POST['end_time'.$i];
       $end_time_timestamp = strtotime("$session_date $end_time");
       $course = $_POST['course'.$i];
    

      if(isset($_POST['reading_material'.$i])){
         $selected_reading_material ='';
         foreach ($_POST['reading_material'.$i] as $reading_material){
            $selected_reading_material .= $reading_material.",";
         }
      }else{
         $selected_reading_material = NULL;
      }
      
      if(isset($_POST['session_resource'.$i])){
         $selected_session_resource = '';
         foreach ($_POST['session_resource'.$i] as $session_resource)
         {
            $selected_session_resource .= $session_resource.",";
         }
      }else{
            $selected_session_resource = NULL;
      }


      if(isset($_POST['ppt'.$i])){
         $selected_ppt = '';
         foreach ($_POST['ppt'.$i] as $ppt){
            $selected_ppt .= $ppt.",";
         }
      }else{
         $selected_ppt = NULL;
      }

      if(isset($_POST['assignment'.$i])){
         $selected_assignment = '';
         foreach ($_POST['assignment'.$i] as $assignment){
            $selected_assignment .= $assignment.",";
         }        
      }else{
         $selected_assignment = NULL;
      }

      if(isset($_POST['test'.$i])){
         $selected_test = '';
         foreach ($_POST['test'.$i] as $test){
            $selected_test .= $test.",";
         }
      }else{
         $selected_test = NULL;
      }
      
       
       $date = date_create();
       $timestamp = date_timestamp_get($date);
     
       $uploadsuccess = 0;
       $uploadfail = 0;
       
       $query3 = "UPDATE `offline_session` SET 
       `batch_Id`=$batch_id,
       `session_name`='$session_name',
       `session_date`=$session_date_timestamp,
       `start_time`=$start_time_timestamp,
       `end_time`=$end_time_timestamp,
       `course`=$course,
       `reading_material`='$selected_reading_material',
       `session_resource`='$selected_session_resource',
       `ppt`='$selected_ppt',
       `assignment`='$selected_assignment',
       `test`='$selected_test',
       `assigned_to`=$assigned_to,
       `timestamp`=$timestamp WHERE `id` = $session_id;";

// print_r($query3);
       
   
   if ($con->query($query3) === TRUE) {
     $uploadsuccess = 1;
     ?>
          <script>
            var su = 1;
              
          </script>
        <?php
    } else {
     $uploadfail = 1;
   //   echo "Error: " . $query3 . "<br>" . $con->error;
     ?>
     <script>
       var fa = 1;
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
      <title>Class List | Fingertips</title>
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
         href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
         integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
         crossorigin="anonymous"
         />
         <link
         rel="stylesheet"
         type="text/css"
         href="../../assets/css/rounded-circle.css"
         />
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
         <div class="page-body" style="width:100%; overflow-x:auto;">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Class List</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item">Class</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <!-- Zero Configuration  Starts-->
                     <div class="col-sm-12">
                        <div class="card">
                        
                        <div id="success" class="alert  alert-dismissible fade show alerttoggle custom-success" role="alert"><strong>Woyee!</strong> Session Updated Successfully.
                                 <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                              </div>
                              <div id="failed" class="alert  alert-dismissible fade show alerttoggle custom-danger" role="alert"><strong>Holy!</strong> Session` Updation Failed.
                                 <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                              </div>
                              <div class="card-header">
                                 <div class="float-right">
                                    <a href="../classes/add-class.php" target="_blank" class="btn btn-link text-primary">Add Class  &nbsp;<i class="fas fa-external-link-alt"></i> </a>
                                 </div>
                                 <h5>Class List</h5>
                                 <span>All The The Classes That Have Been Created! </span>
                              </div>
                           <div class="card-body">
                           
                              <div class="table-responsive mt-4">
                                 <table id="basic-6-f" class="display">
                                    <thead>
                                       <tr>
                                          <th>Sr No</th>
                                          <!-- <th>Select</th> -->
                                          <th>ID</th>
                                          <th>Class Name</th>
                                          <th>Class Status</th>
                                          <th>Class Ratings</th>
                                          <th>Class Date</th>
                                          <th>Start Time</th>
                                          <th>End Time</th>
                                          <th>Course</th>
                                          <th>Batch Name</th>
                                          <th>Class Head</th>
                                          <th>Start Class</th>
                                          <th class="tx-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          $query = "SELECT * FROM `offline_session` WHERE `is_deleted` = 0 ORDER BY `id` DESC;";
                                          $runfetch = mysqli_query($con, $query);
                                          $noofrow = mysqli_num_rows($runfetch);
                                          $indexnumber = 1;
                                          if ($noofrow > 0 && $runfetch == TRUE) {
                                              while ($data = mysqli_fetch_assoc($runfetch)) { ?>
                                       <tr>
                                          <td><?php echo $indexnumber; ?></td>
                                          <!-- <td>
                                             <div class="custom-control custom-checkbox">
                                                &nbsp;&nbsp;
                                                <input
                                                   type="checkbox"
                                                   class="custom-control-input check-uncheck"
                                                   name="assign[]"
                                                   value="<?php echo $data['id']; ?>"
                                                   onclick="selectcall();"
                                                   id="customCheck<?php echo $indexnumber; ?>"
                                                   />
                                                <label
                                                   class="custom-control-label"
                                                   for="customCheck<?php echo $indexnumber; ?>"
                                                   ></label>
                                             </div>
                                          </td> -->
                                          <td><?php echo '#' . $data['id']; ?></td>
                                          <td><?php echo $data['session_name']; ?></td>
                                          <td >
                                             <?php  
                                                if($data['start_time'] < $timestamp_2){
                                                   echo "<span class='badge badge-pill badge-danger custom-danger'>Overdue</span>";
                                                }else{
                                                   echo "<span class='badge badge-pill badge-primary custom-warning'>Upcoming</span>";
                                                }
                                             ?>
                                          </td>
                                          <td class="text-center text-warning " style="font-weight:600;"><?php
                                          $session_id2=$data['id'];
                                          $query4="SELECT * FROM `offline_session_rating` WHERE `session_id`=$session_id2";
                                          $run4=mysqli_query($con,$query4);
                                          $noofrow4=mysqli_num_rows($run4);
                                          $rate_count = 0;
                                        
                                          while($data200=mysqli_fetch_assoc($run4)){
                                           
                                          if ($noofrow4>0) {
                                             
                                             $rate_count+=$data200['rate_count'];
                                             // echo $data200['rate_count'];
                                             // echo "no of row ".$noofrow4."<br>";
                                             // echo "rate_count ".$rate_count."<br>";
                                            
                                          }else {
                                             $rate_count=0;
                                          }
                                       }
                                       
                                       if ($noofrow4>0) {
                                          $rate_count = $rate_count/$noofrow4;
                                       }

                                       if($rate_count == 0){
                                          $rate_count = 'No Ratings';
                                       }
                                 
                                          
?>
                                          <a href="class-rating.php?id=<?php echo $data['id'];?>"><?php echo round($rate_count, 1);?></a>
                                          </td>
                                          <td><?php 
                                             $mydate = getdate($data['session_date']);
                                             echo "$mydate[mday]/$mydate[mon]/$mydate[year] ";
                                             ?></td>
                                          <td><?php 
                                             $mydate = getdate($data['start_time']);
                                             echo "$mydate[hours]:$mydate[minutes] ($mydate[weekday])";
                                             ?></td>
                                          <td><?php 
                                             $mydate = getdate($data['end_time']);
                                             echo "$mydate[hours]:$mydate[minutes] ($mydate[weekday])";
                                             ?></td>
                                          <td>
                                             <?php 
                                                $course = $data['course'];
                                                $query10 = "SELECT `name` FROM `course` WHERE id = $course;";
                                                                        
                                                $runfetch10 = mysqli_query($con, $query10);
                                                                        
                                                $noofrow10 = mysqli_num_rows($runfetch10);
                                                if ($noofrow10 >0 && $runfetch10 == TRUE) { 
                                                  while ($data10 = mysqli_fetch_assoc($runfetch10)) { 
                                                    echo $data10['name'];
                                                  }
                                                }else{
                                                  echo "Not Applied";
                                                }
                                                ?>
                                          </td>
                                          <td>
                                             <?php 
                                                $batch_id = $data['batch_Id'];
                                                $query10 = "SELECT * FROM `batch` WHERE id = $batch_id;";
                                                                        
                                                $runfetch10 = mysqli_query($con, $query10);
                                                                        
                                                $noofrow10 = mysqli_num_rows($runfetch10);
                                                if ($noofrow10 >0 && $runfetch10 == TRUE) { 
                                                  while ($data10 = mysqli_fetch_assoc($runfetch10)) { 
                                                    echo $data10['batch_name'];
                                                  }
                                                }else{
                                                  echo "Not Applied";
                                                }
                                                ?>
                                          </td>
                                          <td>
                                             <?php 
                                                $class_head = $data['assigned_to'];
                                                $query10 = "SELECT * FROM `user2` WHERE id = $class_head;";
                                                                        
                                                $runfetch10 = mysqli_query($con, $query10);
                                                                        
                                                $noofrow10 = mysqli_num_rows($runfetch10);
                                                if ($noofrow10 >0 && $runfetch10 == TRUE) { 
                                                  while ($data10 = mysqli_fetch_assoc($runfetch10)) { 
                                                    echo $data10['email'];
                                                  }
                                                }else{
                                                  echo "Not Applied";
                                                }
                                                ?>
                                          </td>
                                          <td>
                                             <form action="" method="post">  
                                                <input type="hidden" name="session_id" value="<?php echo $data['id'];?>">
                                                <button class="btn btn-primary btn-sm text-white" type="submit" name="session_log" >
                                                <i class="fas fa-play"></i>
                                                </button>
                                             </form>
                                             </a>
                                          </td>
                                          <td class="tx-center">
                                             <a
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                data-toggle="tooltip"
                                                title="Edit Session"
                                                onclick="prepareEditSession('<?php echo $data['id']; ?>',
                                                '<?php echo $data['batch_Id']; ?>',
                                                '<?php echo $data['assigned_to']; ?>',
                                                '<?php echo $data['session_name']; ?>',
                                                '<?php $session_date = $data['session_date']; 
                                                      echo date('Y-m-d',$session_date); ?>',
                                                      '<?php $start_time = $data['start_time']; 
                                                      echo date('H:i',$start_time); ?>',
                                                      '<?php $end_time = $data['end_time']; 
                                                      echo date('H:i',$end_time); ?>',
                                                
                                                '<?php echo $data['course']; ?>',
                                                '<?php echo $data['reading_material']; ?>',
                                                '<?php echo $data['session_resource']; ?>',
                                                '<?php echo $data['ppt']; ?>',
                                                '<?php echo $data['assignment']; ?>',
                                                '<?php echo $data['test']; ?>');"
                                                ><i data-toggle="modal" 
                                                data-target="#editSessionModal"
                                                data-feather="edit-2"
                                                
                                                class="wd-16 ht-16 mr-2 text-dark"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a
                                                >
                                             <a
                                                href="delete/delete-class.php?id=<?php echo $data['id']; ?>"
                                                class=""
                                                style="padding-left:5px;"
                                                data-toggle="tooltip" title="Delete User Permanently"
                                                ><i
                                                data-feather="trash"
                                                class="wd-16 ht-16 mr-2 text-danger" 
                                                style="width:16px; height:16px;"
                                                ></i
                                                ></a
                                                >
                                          </td>
                                       </tr>
                                       <?php
                                          $indexnumber++;
                                              }
                                            }
                                          ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Zero Configuration  Ends-->
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once '../elements/footer.php' ?>
         </div>
      </div>
      <!-- Edit Lead Modal -->
      <div class="modal fade" id="editSessionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="card-header" style="background:white;border-bottom:0px solid green;">
                     <h5>Edit</h5>
                     <span>Alert! Be Careful Before Editing Session.</span>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body p-5">
                  <form action="" method="post">
                  <input type="hidden" name="edit_session_id" id="edit_session_id">
                     <div class="form-layout form-layout-1">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group mg-b-10-force">
                                 <label class="control-label">
                                 Select Batch<span class="text-danger">*</span></label
                                    >
                                 <select
                                    name="batch_id"
                                    
                                    class="form-control select2 select2-hidden-accessible"
                                    id="edit_session_batch_id"
                                    required
                                    >
                                    <option value="" selected disabled hidden>Choose Batch</option>
                                    <?php
                                       $query2 = "SELECT `id`,`batch_name` FROM `batch` WHERE `is_deleted` = 0 ";
                                       $runfetch2 = mysqli_query($con, $query2);
                                       $noofrow2 = mysqli_num_rows($runfetch2);
                                       
                                       if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                           while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                       ?>
                                    <option value="<?php echo $data2['id']; ?>"><?php echo $data2['batch_name']; ?></option>
                                    <?php
                                       }
                                       }
                                       ?>  
                                 </select>
                                 <span class="font-weight text-danger"></span>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group mg-b-10-force">
                                 <label class="control-label">Session Trainer <span class="text-danger">*</span></label>
                                 <select
                                    name="assigned_to"
                                    
                                    class="form-control select2 select2-hidden-accessible"
                                    id="edit_session_assigned_to"

                                    required
                                    >
                                    <option value="" selected disabled hidden>Choose Class Head</option>
                                    <?php
                                       $query2 = "SELECT `id`,`name` FROM `user2` WHERE `role` = 'faculty' ";
                                       $runfetch2 = mysqli_query($con, $query2);
                                       $noofrow2 = mysqli_num_rows($runfetch2);
                                       
                                       if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                           while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                       ?>
                                    <option value="<?php echo $data2['id']; ?>"><?php echo $data2['name']; ?></option>
                                    <?php
                                       }
                                       }
                                       ?> 
                                 </select>
                                 <span class="font-weight text-danger"></span>
                              </div>
                           </div>
                           <!-- Batch name ends here -->
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6">
                           <label class="control-label">Session Name <span class="text-danger">*</span></label>
                           <div class="form-group"><input class="form-control " id="edit_session_session_name" type="text" placeholder="Class Name" value="Session 1" name="session_name1" required="true"></div>
                        </div>
                        <div class="col-lg-6">
                           <label class="control-label">Date <span class="text-danger">*</span></label>
                           <div class="form-group"><input class="form-control"  id="edit_session_session_date"  type="date" placeholder="Date" name="session_date1" required="true"></div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">Start Time <span class="text-danger">*</span></label>
                           <div class="form-group"><input class="form-control" id="edit_session_session_start_time" type="time" placeholder="Time" name="start_time1" required="true"></div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">End Time <span class="text-danger">*</span></label>
                           <div class="form-group"><input class="form-control rate_class" id="edit_session_session_end_time" type="time" placeholder="Time" name="end_time1" required="true"></div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">Course <span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select class="form-control number_of_pkgs_class"  id="edit_session_course" placeholder="Choose Course Name" name="course1" required="true">
                                 <option value=" " selected="selected" disabled="disabled" hidden="hidden">Course</option>
                                 <?php 
                                    $query2 = "SELECT `id`,`name` FROM `course` WHERE `is_deleted` = 0 ";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                       while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['name']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <label class="control-label">Reading Material <span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select multiple="true" id="edit_session_reading_material" value="" style="height:200px;" class="form-control" placeholder="Choose Reading Material" name="reading_material1[]">
                                 <?php 
                                    // for reading material
                                    $query2 = "SELECT `id`,`topic_name` FROM `material` WHERE `category` = 1 AND `is_deleted` = 0";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                        while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['topic_name']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <label class="control-label">Session Resource <span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select multiple="true" id="edit_session_session_resource"  style="height:200px;" class="form-control" placeholder="Session Resource" name="session_resource1[]">
                                 <?php 
                                    // for resource
                                    $query2 = "SELECT `id`,`topic_name` FROM `material` WHERE `category` = 2 AND `is_deleted` = 0";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                        while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['topic_name']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">PPT <span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select multiple="true"   id="edit_session_ppt" style="height:200px;" class="form-control" placeholder="Choose PPT" name="ppt1[]">
                                 <?php 
                                    // ppt
                                    $query2 = "SELECT `id`,`topic` FROM `ppt` WHERE `is_deleted` = 0";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                        while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['topic']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">Assignment<span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select multiple="true" id="edit_session_assignment" style="height:200px;" class="form-control" placeholder="Assignmet" name="assignment1[]">
                                 <?php 
                                    // assignment
                                    $query2 = "SELECT `id`,`topic_name` FROM `assignment` WHERE `is_deleted` = 0";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                        while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['topic_name']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-4">
                           <label class="control-label">Test<span class="text-danger">*</span></label>
                           <div class="form-group">
                              <select multiple="true" id="edit_session_test" style="height:200px;" class="form-control" placeholder="Test" name="test1[]">
                                 <?php 
                                    // test
                                    $query2 = "SELECT `id`,`topic_name` FROM `mcq_test` WHERE `is_deleted` = 0";
                                    $runfetch2 = mysqli_query($con, $query2);
                                    $noofrow2 = mysqli_num_rows($runfetch2);
                                    
                                    $index_number = 1;
                                    
                                    if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                                        while ($data2 = mysqli_fetch_assoc($runfetch2)) {
                                    ?>
                                 <option value="<?php echo $data2['id']; ?>"><?php echo $data2['topic_name']; ?></option>
                                 <?php
                                    $index_number++;
                                    }
                                    }       
                                    
                                    ?>
                              </select>
                           </div>
                        </div>
                     </div>
               </div>
               <!-- form-layout-footer -->
               <div class="modal-footer">
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="float-right">
                           <button class="btn btn-light waves-effect" data-dismiss="modal">
                              Cancel
                           </button>
                           <button
                              class="btn btn-primary waves-effect"
                              type="submit"
                              name="edit_session"
                           >
                              Edit session
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Modal -->
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
           var getassign = document.getElementById("assign");
           var getdelete = document.getElementById("delete");
         
           if (n % 2 == 0) {
             getselectall.innerHTML = "Deselect All";
             getassign.style.display = "inline";
             getdelete.style.display = "inline";
           } else {
             getselectall.innerHTML = "Select All";
             getassign.style.display = "none";
             getdelete.style.display = "none";
           }
           n++;
         }
      </script>
      <script>
         function prepareEditSession(id,batch_Id,assigned_to,session_name,session_date,start_time,end_time,course,reading_material,session_resource,ppt,assignment,test){
         

            get_edit_session_id = document.getElementById('edit_session_id');
            get_edit_session_batch_id = document.getElementById('edit_session_batch_id');
            get_edit_session_assigned_to = document.getElementById('edit_session_assigned_to');
            get_edit_session_session_name = document.getElementById('edit_session_session_name');
            get_edit_session_session_date = document.getElementById('edit_session_session_date');
            get_edit_session_session_start_time = document.getElementById('edit_session_session_start_time');
            get_edit_session_session_end_time = document.getElementById('edit_session_session_end_time');
            get_edit_session_course = document.getElementById('edit_session_course');
            get_edit_session_reading_material = document.getElementById('edit_session_reading_material');
            get_edit_session_session_resource = document.getElementById('edit_session_session_resource');
            get_edit_session_ppt = document.getElementById('edit_session_ppt');
            get_edit_session_assignment = document.getElementById('edit_session_assignment');
            get_edit_session_test = document.getElementById('edit_session_test');

            get_edit_session_id.value = id;
            get_edit_session_batch_id.value = batch_Id;
            get_edit_session_assigned_to.value = assigned_to;
            get_edit_session_session_name.value = session_name;            
            get_edit_session_session_date.value = session_date;
            get_edit_session_session_start_time.value = start_time;
            get_edit_session_session_end_time.value = end_time;
            
            get_edit_session_course.value = course;

            // reading material 
            get_edit_session_reading_material.value = reading_material;

            var reading_material_array = reading_material.split(',');
            console.log(reading_material_array);
            

            var get_edit_session_reading_material_options = get_edit_session_reading_material.getElementsByTagName("option");

            for(var i = 0; i< get_edit_session_reading_material_options.length; i++){
               if(reading_material_array.includes(get_edit_session_reading_material_options[i].value)){
                  get_edit_session_reading_material_options[i].selected = 'true';
               }
            }



            // session resources   
            get_edit_session_session_resource.value = session_resource;

            var session_resource_array = session_resource.split(',');
            console.log(session_resource_array);
            

            var get_edit_session_session_resource_options = get_edit_session_session_resource.getElementsByTagName("option");

            for(var i = 0; i< get_edit_session_session_resource_options.length; i++){
               if(session_resource_array.includes(get_edit_session_session_resource_options[i].value)){
                  get_edit_session_session_resource_options[i].selected = 'true';
               }
            }

            //ppt
            get_edit_session_ppt.value = ppt;

            var ppt_array = ppt.split(',');
            console.log(ppt_array);
            

            var get_edit_session_ppt_options = get_edit_session_ppt.getElementsByTagName("option");

            for(var i = 0; i< get_edit_session_ppt_options.length; i++){
               if(ppt_array.includes(get_edit_session_ppt_options[i].value)){
                  get_edit_session_ppt_options[i].selected = 'true';
               }
            }






            //assignment
            get_edit_session_assignment.value = assignment;


            var assignment_array = assignment.split(',');
            console.log(assignment_array);
            

            var get_edit_session_assignment_options = get_edit_session_assignment.getElementsByTagName("option");

            for(var i = 0; i< get_edit_session_assignment_options.length; i++){
               if(assignment_array.includes(get_edit_session_assignment_options[i].value)){
                  get_edit_session_assignment_options[i].selected = 'true';
               }
            }


            //test
            get_edit_session_test.value = test;


            
            var test_array = test.split(',');
            console.log(test_array);
            

            var get_edit_session_test_options = get_edit_session_test.getElementsByTagName("option");

            for(var i = 0; i< get_edit_session_test_options.length; i++){
               if(test_array.includes(get_edit_session_test_options[i].value)){
                  get_edit_session_test_options[i].selected = 'true';
               }
            }
         
         }
      </script>
      <script>
         if(su == 1){
           var element = document.getElementById("success");
                 element.classList.remove("alerttoggle");
                 console.log('su');
               }
         if(fa ==1 ){           
           var element = document.getElementById("failed");
                 element.classList.remove("alerttoggle");
                 console.log('fails');
               }
      
      </script>
<script type="text/javascript">
   $(document).ready(function() {
    $('.display').dataTable( {
        "deferRender": true
    } );
} );
</script>
   </body>
</html>

