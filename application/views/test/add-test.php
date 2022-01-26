<?php
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
      <title>Add Test | Fingertip</title>
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
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <!-- Page Sidebar Ends-->
            <div class="page-body" style="background-color:#ffffff !important;margin-top:-50px !important">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Add Test</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="dashboard"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active">Test</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <!-- mcq test stats here -->
                     <div class="col-md-12">
                        <form action="" method="post">
                           <div class="card">
                              <div
                                 class="card-header d-flex align-items-center justify-content-between"
                                 >
                                 <h5 class="tx-13 mg-b-5">Create New Test</h5>
                                       <p class="tx-11 mb-0">
                                          
                                       </p>
                              </div>
                              <div class="card-body" style="padding-top: 5px">
                                 <div class="d-flex align-items-center">
                                    <div class="ml-0">
                                       
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
                                             required
                                             />
                                       </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group">
                                          <label class="control-label"
                                             >Number Of Question<span class="text-danger"
                                             >*</span
                                             ></label
                                             >
                                          <input
                                             type="number"
                                             class="form-control"
                                             placeholder="Enter number of mcq"
                                             name="number_of_mcq"
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
                                             id=""
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
                                             id=""
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
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label"
                                             >Question Type
                                          <span class="tx-danger">*</span></label
                                             >
                                          <select
                                             class="form-control select2 select2-hidden-accessible"
                                             data-placeholder="Select Question Type"
                                             tabindex="-1"
                                             aria-hidden="true"
                                             id=""
                                             name="question_type"
                                             >
                                             <option label="Choose Question Type"></option>
                                             <option value=1>MCQ</option>
                                             <option value=2>Long Answer</option>
                                             <option value=3>Short Answer</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <label class="form-control-label"
                                             >Upload Type
                                          <span class="tx-danger">*</span></label
                                             >
                                          <select
                                             class="form-control select2 select2-hidden-accessible"
                                             data-placeholder="Select Question Type"
                                             tabindex="-1"
                                             aria-hidden="true"
                                             id=""
                                             name="upload_type"
                                             >
                                             <option label="Choose Upload Type"></option>
                                             <option value=1>Fingertips - System</option>
                                             <option value=2>Manual <small>(Upload .CSV,.XLS,.XLSX)</small></option>
                                             
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
                                          max="255"
                                          name="description"
                                          ></textarea>
                                    </div>
                                    <!-- col-4 -->
                                 </div>
                                 <!-- row -->
                              </div>
                              <div class="card-footer">
                                 <div class="float-right">
                                    <button
                                       class="btn btn-primary waves-effect float-right"
                                       type="submit"
                                       name="add_mcq_test"
                                       >
                                    Add MCQ
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </form>
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
      <!-- Plugin used-->
   </body>
</html>
<?php
   if (isset($_POST['add_mcq_test'])) {
     
        
     $test_name = $_POST['test_name'];        
     $topic_name = $_POST['topic_name'];        
     $number_of_mcq = $_POST['number_of_mcq'];
     $test_duration = $_POST['test_duration'];   
     $allowed_attempt = $_POST['allowed_attempt']; 
     $course_category = $_POST['course_category']; 
     $course_name = $_POST['course_name'];
     $description = $_POST['description'];
     $question_type = $_POST['question_type'];
     $upload_type = $_POST['upload_type'];
          
     $date = date_create();
     $timestamp = date_timestamp_get($date);
   
     $added_by = $_SESSION['ftip69_uid'];
     $query3 = "INSERT INTO `mcq_test`(`id`, `test_name`, `topic_name`, 
     `number_of_mcq`,`test_duration`,`allowed_attempt`,`course_category`, `course_name`,`description`,`added_by`,`timestamp`) VALUES (NULL,
     '$test_name','$topic_name',$number_of_mcq,$test_duration,$allowed_attempt,$course_category,$course_name,'$description',$added_by,$timestamp)";
   
 
   
       if ($con->query($query3) === TRUE) { 
          $last_id =  mysqli_insert_id($con);
          if ($upload_type==1) {
            if ($question_type==1) {
               ?>
                  <script>
                     window.location = "add-mcq.php?id=<?php echo $last_id;?>&&type=<?php echo $question_type;?>";
                     var su = 1;
                     console.log("success");
                  </script>
               <?php
            }
            elseif ($question_type==2 || $question_type==3) {
               ?>
               <script>
                  window.location = "add-long-answer.php?id=<?php echo $last_id;?>&&type=<?php echo $question_type;?>";
                  var su = 1;
                  console.log("success");
               </script>
            <?php
            }
         }elseif ($upload_type==2) {?>
                  <script>
                     window.location = "upload-test-manual.php?id=<?php echo $last_id;?>&&type=<?php echo $question_type;?>";
                     var su = 1;
                     console.log("success");
                  </script>
            <?php
         }
   } else {
    // echo "Error: " . $query3 . "<br>" . $con->error;
     ?>
<script>
   var fails = 1;
   console.log("false");
</script>
<?php
      } 
   }
   
    ?>