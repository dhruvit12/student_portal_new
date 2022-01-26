<?php
// print_r($_SESSION);exit;
   if (!isset($_SESSION['ftip69_uid'])) {
      ?>
<script>
   window.history.back()
window.location = '<?php echo base_url()?>';
</script>
<?php
   } 
   ?>

<?php
        $con = mysqli_connect('localhost', 'root', '', 'jvfdbhhs_fingertips_portal');
        if (!$con) {
          echo "Connection Failed!";
        }
         $user_id = $_SESSION['ftip69_uid'];
         $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
         $run = mysqli_query($con, $query);
         $row = mysqli_num_rows($run);
         $data = mysqli_fetch_assoc($run);

         
            $ftip69_acc_test = $data['acc_test'];
            
//  print_r($ftip69_acc_test);exit;
   // success
   if ($ftip69_acc_test==1) {
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
         href="<?php echo base_url()?>assets/images/favicon.png"
         type="image/x-icon"
         />
      <link
         rel="shortcut icon"
         href="<?php echo base_url()?>assets/images/favicon.png"
         type="image/x-icon"
         />
      <title>MCQ Test List | Fingertips</title>
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
         href="<?php echo base_url()?>assets/css/fontawesome.css"
         />
      <!-- ico-font-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/icofont.css"
         />
      <!-- Themify icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/themify.css"
         />
      <!-- Flag icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/flag-icon.css"
         />
      <!-- Feather icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/feather-icon.css"
         />
      <!-- Plugins css start-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/datatables.css"
         />
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/bootstrap.css"
         />
      <!-- App css-->
      <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" /> -->
      <link
         id="color"
         rel="stylesheet"
         href="<?php echo base_url()?>assets/css/light-1.css"
         media="screen"
         />
      <!-- Responsive css-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/responsive.css"
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
         href="<?php echo base_url()?>assets/css/rounded-circle.css"
         />
   </head>

   <?php
      if (isset($_POST['start_test']) ||isset($_POST['start_test2'])) {  

         
         
         unset($_SESSION['ftip69_test_id']);

      
         $test_id  = $_POST['test_id'];
         $_SESSION['ftip69_test_id'] = $test_id;
         
         $date = date_create();
         $timestamp = date_timestamp_get($date);   
         $test_start_time = $_SESSION['ftip69_test_start_time'] = $timestamp;
         $user_id = $_SESSION['ftip69_uid'];


         //allowed attempt
         $query100 = "SELECT `allowed_attempt` FROM `mcq_test` WHERE `id` = $test_id"; 
          $runfetch100 = mysqli_query($con, $query100);
          $noofrow100 = mysqli_num_rows($runfetch100);
          $attempt_count = 0;
        if ($noofrow100 >0 && $runfetch100 == TRUE) { 
          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
             $allowed_attempt = $data100['allowed_attempt'];
             
          }
          
          }

         // check for attempt
         $query100 = "SELECT * FROM `mcq_test_log` WHERE `test_id` = $test_id AND `given_by` = $user_id"; 
          $runfetch100 = mysqli_query($con, $query100);
          $noofrow100 = mysqli_num_rows($runfetch100);
          $attempt_count = 0;
        if ($noofrow100 >0 && $runfetch100 == TRUE) { 
          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
             $attempt_count++;
             
          }
         //  echo "<script>alert($attempt_count);</script>";
          }

          if($attempt_count > $allowed_attempt){
            echo "<script>alert('You have used your $allowed_attempt attempt for this test!');</script>";
             
          }else{

                  // derive student id
          $query100 = "SELECT `student_id` FROM `user2` WHERE `id` = $user_id"; 
          $runfetch100 = mysqli_query($con, $query100);
          $noofrow100 = mysqli_num_rows($runfetch100);
          $indexnumber10 = 1;
        if ($noofrow100 >0 && $runfetch100 == TRUE) { 
          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
             $student_id = $data100['student_id'];
          }
          }

          $query3 = "INSERT INTO `mcq_test_log`(`id`, `test_id`, `test_start_time`, `given_by`,`student_id`,`test_status`) VALUES (NULL,$test_id,$test_start_time,$user_id,$student_id,'incomplete')";
          
      
          if ($con->query($query3) === TRUE) { 
             $last_id = mysqli_insert_id($con); 
             $_SESSION['ftip69_mcq_test_log_id'] = $last_id;
             insertMcqTestQuestionLog($test_id);
               ?>
            <script>
               // redirect to test question page 
               // window.location = "mcq-test-view.php?q=1";
               
            </script>
            <?php
               } else {
                  // echo "Error: " . $query3 . "<br>" . $con->error;

               ?>
               
            <script>
               alert('Fail to log this test');
               if ( window.history.replaceState ) {
               window.history.replaceState( null, null, window.location.href );
               }
            </script>
            <?php
               } 
         
          }
            }
            function insertMcqTestQuestionLog($test_id){
               $con = mysqli_connect('localhost', 'root', '', 'jvfdbhhs_fingertips_portal');
               if (!$con) {
                 echo "Connection Failed!";
               }
               // derive data from mcq question table
          $query100 = "SELECT `id` FROM `mcq_test_questions` WHERE `test_id` = $test_id"; 
         //  print_r($query100);
          $runfetch100 = mysqli_query($con, $query100);
          $noofrow100 = mysqli_num_rows($runfetch100);
          $indexnumber10 = 0;
        if ($noofrow100 > 0 && $runfetch100 == TRUE) { 
          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
             $mcq_test_question_id = $data100['id'];
               

             $mcq_test_log_id = $_SESSION['ftip69_mcq_test_log_id'];

               // inserting data into the question log of mcq test 
             $query3 = "INSERT INTO `mcq_test_questions_log`(`id`, 
             `mcq_test_log_id`, `mcq_test_question_id`) VALUES (NULL,$mcq_test_log_id,$mcq_test_question_id)";
              
               
               if($con->query($query3)){

                 if (isset($_POST['start_test'])) {?>
                  <script>
                     window.location = "mcq-test/1";
                  </script>
               <?php
                 }else if (isset($_POST['start_test2'])) {?>
                  <script>
                     window.location = "long-test-view.php?q=1";
                  </script>
               <?php
                 }
               }else{
                  // echo "<script>alert('Question log entry not done!');</script>";
                  echo "Error: " . $query3 . "<br>" . $con->error;
               }

             $indexnumber10++;
          }
          }else{
             echo "<script>No Question Found For This Test!</script>";
          }
            }
         ?>
   <?php
      if (isset($_POST['edit_test'])) {
        
      
        $test_id2 = $_POST['test_id'];        
        $test_name = $_POST['test_name'];        
        $topic_name = $_POST['topic_name'];        
        $number_of_mcq = $_POST['number_of_mcq'];
        $test_duration = $_POST['test_duration'];   
        $allowed_attempt = $_POST['allowed_attempt']; 
        $course_category = $_POST['course_category']; 
        $course_name = $_POST['course_name']; 
        $description = $_POST['description'];   
             
        $date = date_create();
        $timestamp = date_timestamp_get($date);   
        
      
        $query3 = "UPDATE `mcq_test` SET `test_name`='$test_name',
        `topic_name`='$topic_name',
        `number_of_mcq`=$number_of_mcq,
        `course_category`= $course_category,
        `course_name`= $course_name,
        `test_duration`=$test_duration,
        `allowed_attempt`=$allowed_attempt,
        `description`='$description',
        `timestamp`=$timestamp WHERE `id` = $test_id2";
      
      
          // get date function 
          // $mydate=getdate(1456);
          // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
      
          if ($con->query($query3) === TRUE) { $last_id =
              mysqli_insert_id($con); 
              ?>
            <script>
               //  window.location = "add-mcq.php?id=<?php echo $last_id; ?>";
               var su = 1;
               console.log("success");
            </script>
            <?php
               } else {
               ?>
            <script>
               var fails = 1;
               console.log("false");
            </script>
            <?php
               } 
               }
               ?>
   <body>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper compact-wrapper">
         <!--change compact-wrapper-->
        
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <!-- Page Sidebar Ends-->
            <div class="page-body" style="width:100%; overflow-x:auto;background-color:#ffffff !important;margin-top:-50px !important">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Test List(MCQ)</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="<?php echo base_url()?>dashboard"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item">Test</li>
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
                           <div id="success" class="alert  alert-dismissible fade show alerttoggle custom-success" role="alert"><strong>Woyee!</strong> Data Uploaded Successfully.
                              <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                           </div>
                           <div id="failed" class="alert  alert-dismissible fade show alerttoggle custom-danger" role="alert"><strong>Holy!</strong> Data Upload Failed.
                              <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                           </div>
                           <div class="card-header">
                              <div class="float-right">
                                 <a
                                    href="add-test"
                                    target="_blank"
                                    class="btn btn-link text-primary"
                                    data-original-title=""
                                    title=""
                                    >Add Test &nbsp;<i
                                    class="fas fa-external-link-alt"
                                    ></i>
                                 </a>
                              </div>
                              <h5>Test List(MCQ)</h5>
                              <span>All MCQ Test List! </span>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive" >
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Test ID</th>
                                          <th>Test Name</th>
                                          <th>Tes Topic</th>
                                          <th>Number Of MCQ</th>
                                          <th>Course Category</th>
                                          <th>Course Name</th>
                                          <th>Test Duration</th>
                                          <th>Allowed Attempt</th>
                                          <th>Description</th>
                                          <th>Start Test</th>
                                          <th>Added By</th>
                                          <th class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          $query = "SELECT * FROM `mcq_test` WHERE is_deleted = 0";
                                                               
                                          $runfetch = mysqli_query($con, $query);
                                                               
                                          $noofrow = mysqli_num_rows($runfetch);
                                                               
                                                               
                                          $indexnumber = 1;
                                          if ($noofrow >0 && $runfetch == TRUE)
                                          { while ($data = mysqli_fetch_assoc($runfetch)) {

                                             $testid=$data['id'];
                                             $query4="SELECT * FROM `mcq_test_questions` WHERE test_id='$testid'";
                                             $runfetch3=mysqli_query($con,$query4);
                                             
                                          ?>
                                       <tr>
                                          <td><?php echo '#'.$data['id']; ?></td>
                                          <td><?php echo $data['test_name']; ?></td>
                                          <td><?php echo $data['topic_name']; ?></td>
                                          <td><?php echo $data['number_of_mcq']; ?></td>
                                          <td>
                                             <?php                     
                                                $course_category = $data['course_category']; 
                                                
                                                $query2 = "SELECT `name` FROM `course_category` WHERE `id` = $course_category;";
                                                $runfetch2 = mysqli_query($con, $query2);
                                                $noofrow2 = mysqli_num_rows($runfetch2);
                                                
                                                if ($noofrow2 >0 && $runfetch2 == TRUE) {
                                                   while ($data2 = mysqli_fetch_assoc($runfetch2)) { 
                                                     echo $data2['name']; } } 
                                                    ?>
                                          </td>
                                          <td>
                                             <?php                     
                                                $course_name = $data['number_of_mcq']; 
                                                
                                                $query2 = "SELECT `name` FROM `course` WHERE `id` = $course_name;";
                                                $runfetch2 = mysqli_query($con, $query2);
                                                $noofrow2 = mysqli_num_rows($runfetch2);
                                                
                                                if ($noofrow2 >
                                                0 && $runfetch2 == TRUE) { while ($data2 =
                                                mysqli_fetch_assoc($runfetch2)) { echo
                                                $data2['name']; } } ?>
                                          </td>
                                          <td><?php echo $data['test_duration'].' Min'; ?></td>
                                          <td><?php echo $data['allowed_attempt']; ?></td>
                                          <td><?php echo $data['description']; ?></td>
                                          <td><?php 
                                                $data3=mysqli_fetch_assoc($runfetch3);
                                                $question_type=$data3['question_type'];
                                                if ($question_type==1) {?>
                                                   <form action="" method="post">
                                                      <input type="hidden" name="test_id" value="<?php echo $data['id']; ?>">
                                                      <button class="btn btn-link btn-sm text-white" type="submit" name="start_test">
                                                      <i class="fas fa-play text-primary"></i>
                                                      </button>
                                                   </form>
                                                <?php
                                                }elseif ($question_type==2 || $question_type==3) {?>
                                                   <form action="" method="post">
                                                      <input type="hidden" name="test_id" value="<?php echo $data['id']; ?>">
                                                      <button class="btn btn-link btn-sm text-white" type="submit" name="start_test2">
                                                      <i class="fas fa-play text-primary"></i>
                                                      </button>
                                                   </form>
                                                <?php }
                                          ?>
                                             
                                             <!-- <a
                                                class="btn btn-primary btn-sm text-white"
                                                href="mcq-test-view.php?id=<?php echo $data['id'];?>"
                                                >
                                                <i class="fas fa-play"></i>
                                                </a> -->
                                          </td>
                                          <td>
                                             <?php                     
                                                $added_by = $data['added_by']; 
                                                
                                                $query2 = "SELECT `email` FROM `user2` WHERE `id` = $added_by;";
                                                $runfetch2 = mysqli_query($con, $query2);
                                                $noofrow2 = mysqli_num_rows($runfetch2);
                                                
                                                if ($noofrow2 >0 && $runfetch2 == TRUE) {
                                                   while ($data2 = mysqli_fetch_assoc($runfetch2)) { 
                                                     echo $data2['email']; 
                                                    
                                                    } } 
                                                    ?>
                                          </td>
                                          <td class="tx-center">
                                             <a
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                data-toggle="tooltip"
                                                title="Edit Test"
                                                ><i
                                                data-toggle="modal" 
                                                data-target="#editTestModal"
                                                data-feather="edit-2"
                                                onclick = "prepareEditTestModal('<?php echo $data['id']; ?>',
                                                '<?php echo $data['test_name']; ?>',
                                                '<?php echo $data['topic_name']; ?>',
                                                '<?php echo $data['number_of_mcq']; ?>',
                                                '<?php echo $data['test_duration']; ?>',
                                                '<?php echo $data['allowed_attempt']; ?>',
                                                '<?php echo $data['course_category']; ?>',
                                                '<?php echo $data['course_name']; ?>',
                                                '<?php echo $data['description']; ?>')"
                                                class="wd-16 ht-16 mr-2 text-dark"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a
                                                >
                                             <a
                                                href="delete/delete-mcq-test.php?id=<?php echo $data['id'];?>"
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer  " 
                                                data-toggle="tooltip"
                                                title="Delete Test"
                                                ><i
                                                data-feather="trash"
                                                class="wd-16 ht-16 mr-2 text-danger"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a>
                                             <div class="dropdown">
                                             </div>
                              </div>
                              </td>
                              </tr>
                              <?php
                                 }}
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
            <br>
            <br>
            <br>
            <br>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
      </div>
      </div>
      <!-- Modal -->
      <div
         class="modal fade"
         id="assignmodal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="ModalComponents"
         aria-hidden="true"
         >
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="ModalComponents">Assign</h5>
                  <button
                     type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close"
                     >
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body p-5">
                  <form class="needs-validation" novalidate="">
                     <div class="form-row">
                        <label for="">Assign to: </label>
                        <select class="custom-select" required="">
                           <option value="" disabled="" selected="">
                              Select Month
                           </option>
                           <option value="1">Name1</option>
                           <option value="2">Name3</option>
                           <option value="3">Name2</option>
                        </select>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button
                     type="button"
                     class="btn btn-secondary waves-effect"
                     data-dismiss="modal"
                     >
                  Close
                  </button>
                  <button type="button" class="btn btn-primary waves-effect">
                  Assign
                  </button>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- Edit Lead Modal -->
      <div class="modal fade" id="editTestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="card-header" style="background:white;border-bottom:0px solid green;">
                     <h5>Edit Test</h5>
                     <span>Alert! Be Careful Before Editing Test Data</span>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body p-5">
                  <form action="" method="post">
                     <div class="form-layout form-layout-1">
                        <div class="row">
                           <div class="col-lg-4">
                              <div class="form-group mg-b-10-force">
                                 <label class="form-control-label"
                                    >Test ID
                                 <span class="text-danger">*</span></label
                                    >
                                 <input
                                    class="form-control form-control-sm"
                                    value=""
                                    disabled=""
                                    type="text"
                                    id="edit_test_test_id_input"
                                    />
                                 <input type="hidden" name="test_id" id="edit_test_test_id_input_hidden" value="" >
                              </div>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label class="control-label"
                                    >Test Name<span class="text-danger"
                                    >*</span
                                    ></label
                                    >
                                 <input
                                    type="text"
                                    class="form-control hasDatepicker"
                                    placeholder="Enter Test Name"
                                    name="test_name"
                                    id="test_name_input"
                                    required
                                    />
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label class="control-label"
                                    >Topic Name<span class="text-danger"
                                    >*</span
                                    ></label
                                    >
                                 <input
                                    type="text"
                                    class="form-control hasDatepicker"
                                    placeholder="Enter Test Topic"
                                    name="topic_name"
                                    id="topic_name_input"
                                    required
                                    />
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label class="control-label"
                                    >Number Of MCQ<span class="text-danger"
                                    >*</span
                                    ></label
                                    >
                                 <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Enter number of mcq"
                                    name="number_of_mcq"
                                    id="number_of_mcq_input"
                                    required
                                    />
                              </div>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="control-label"
                                    >Test Duration(minutes)<span class="text-danger"
                                    >*</span
                                    ></label
                                    >
                                 <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Enter Test Duration In Minutes"
                                    name="test_duration"
                                    id="test_duration_input"
                                    required
                                    />
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="control-label"
                                    >Allowed Attempt<span class="text-danger"
                                    >*</span
                                    ></label
                                    >
                                 <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Enter Number Of Allowed Attempts"
                                    name="allowed_attempt"
                                    id="allowed_attempt_input"
                                    required
                                    />
                              </div>
                           </div>
                        </div>
                        <div class="row mt-3">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="form-control-label"
                                    >Course Category
                                 <span class="tx-danger">*</span></label
                                    >
                                 <select
                                    class="form-control select2 select2-hidden-accessible"
                                    data-placeholder="Number Of MCQ"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    id="course_category_input"
                                    name="course_category"
                                    >
                                    <option
                                       value="0"
                                       label="Choose Course Category"
                                       ></option>
                                    <?php
                                       $query2 = "SELECT `id`,`name` FROM `course_category` ";
                                       $runfetch2 = mysqli_query($con, $query2);
                                       $noofrow2 = mysqli_num_rows($runfetch2);
                                       
                                       if ($noofrow2 >
                                       0 && $runfetch2 == TRUE) { while ($data2 =
                                       mysqli_fetch_assoc($runfetch2)) { ?>
                                    <option value="<?php echo $data2['id']; ?>">
                                       <?php echo $data2['name']; ?>
                                    </option>
                                    <?php
                                       }
                                       }
                                       ?>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="form-control-label"
                                    >Course Name
                                 <span class="tx-danger">*</span></label
                                    >
                                 <select
                                    class="form-control select2 select2-hidden-accessible"
                                    data-placeholder="Number Of MCQ"
                                    tabindex="-1"
                                    aria-hidden="true"
                                    id="course_name_input"
                                    name="course_name"
                                    >
                                    <option value="0" label="Choose Course"></option>
                                    <?php
                                       $query2 = "SELECT `id`,`name` FROM `course` ";
                                       $runfetch2 = mysqli_query($con, $query2);
                                       $noofrow2 = mysqli_num_rows($runfetch2);
                                       
                                       if ($noofrow2 >
                                       0 && $runfetch2 == TRUE) { while ($data2 =
                                       mysqli_fetch_assoc($runfetch2)) { ?>
                                    <option value="<?php echo $data2['id']; ?>">
                                       <?php echo $data2['name']; ?>
                                    </option>
                                    <?php
                                       }
                                       }
                                       ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg mt-2">
                              <label>Test Description</label>
                              <textarea
                                 rows="3"
                                 class="form-control"
                                 placeholder="Type something here..."
                                 maxlength="255"
                                 name="description"
                                 value=""
                                 id="description_input"
                                 ></textarea>
                           </div>
                           <!-- col-4 -->
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
                  name="edit_test"
                  >
               Edit Test
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
      <script src="<?php echo base_url()?>assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/datatable/datatables/datatable.custom.js"></script>
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
         function prepareEditTestModal(test_id,test_name,topic_name,number_of_mcq,test_duration,allowed_attempt,course_category,course_name,description){
         
           get_edit_test_test_id_input = document.getElementById('edit_test_test_id_input');
           get_edit_test_test_id_input_hidden = document.getElementById('edit_test_test_id_input_hidden');
           get_test_name_input = document.getElementById('test_name_input');
           get_topic_name_input = document.getElementById('topic_name_input');
           get_number_of_mcq_input = document.getElementById('number_of_mcq_input');
           get_test_duration_input = document.getElementById('test_duration_input');
           get_allowed_attempt_input = document.getElementById('allowed_attempt_input');
           get_course_category_input = document.getElementById('course_category_input');
           get_course_name_input = document.getElementById('course_name_input');
           get_description_input = document.getElementById('description_input');
         
         
         
           get_edit_test_test_id_input.value = test_id;
           get_edit_test_test_id_input_hidden.value = test_id;
           get_test_name_input.value = test_name;
           get_topic_name_input.value = topic_name;
           get_number_of_mcq_input.value = number_of_mcq;
           get_test_duration_input.value = test_duration;
           get_allowed_attempt_input.value = allowed_attempt;
           get_course_category_input.value = course_category;
           get_course_name_input.value = course_name;
           get_description_input.value = description;
         
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
   </body>
</html>