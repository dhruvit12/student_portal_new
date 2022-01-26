
<script>
   //menu
 document.getElementById('menu_course').classList.add("menu-active");
 //icon
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';

</script><?php
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
            $ftip69_acc_student = $data['acc_student'];
            

   // success
   if ($ftip69_acc_test==1 || $ftip69_acc_student==1) {
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
   // to check if parameters are provided
    if (!empty($id)) {
    $test_id = $id;
   
    }else{
      ?>
<script>
   window.history.back()
window.location = '<?php echo base_url()?>';
</script>
<?php
   }  
   
   
   $user_id = $_SESSION['ftip69_uid']; 
   
   
   
   
   
      // send user back if the requested questin number is more then total questinos 
      $query100 = "SELECT * FROM `mcq_test` WHERE `id` = $test_id"; 
      $runfetch100 = mysqli_query($con, $query100);
      $noofrow100 = mysqli_num_rows($runfetch100);
      
      if ($noofrow100 >0 && $runfetch100 == TRUE) { 
      while ($data100 = mysqli_fetch_assoc($runfetch100)) {
       
        $number_of_mcq = $data100['number_of_mcq'];
      }
      }
   ?>
<?php
   $query100 = "SELECT `id` FROM `mcq_test_log` WHERE `test_id` = $test_id AND `given_by` = $user_id";
   $runfetch100 = mysqli_query($con, $query100);
   $noofrow100 = mysqli_num_rows($runfetch100);
   
   if ($noofrow100 >0 && $runfetch100 == TRUE) { 
     while ($data100 = mysqli_fetch_assoc($runfetch100)) {
      
       $mcq_test_log_id = $data100['id'];
       
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
         href="<?php echo base_url()?>assets/images/favicon.png"
         type="image/x-icon"
         />
      <link
         rel="shortcut icon"
         href="<?php echo base_url()?>assets/images/favicon.png"
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
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
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
   <body>
      <!-- Loader starts-->
      <!-- <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div> -->
      <div class="page-wrapper">
         <div class="page-body-wrapper ">
          <?php 
       $this->load->view('elements/header.php'); 
         ?>
         <div class="page-body-wrapper sidebar-icon">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php 
            // $this->load->view('elements/compact_sidebar_admin.php'); 
            ?>
            <div class="page-body" >
              
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Test</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="<?php echo base_url()?>"><i data-feather="home"></i></a>
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
                     <div class="col-md-7">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card">
                                 <?php
                                    // derive data from mcq test table
                                    $query100 = "SELECT * FROM `mcq_test` WHERE `id` = $test_id"; 
                                    $runfetch100 = mysqli_query($con, $query100);
                                    $noofrow100 = mysqli_num_rows($runfetch100);
                                    $indexnumber10 = 1;
                                     if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                    while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                      $test_duration = $data100['test_duration'];
                                      $number_of_mcq = $data100['number_of_mcq'];
                                      $description = $data100['description'];
                                      $test_name = $data100['test_name'];
                                      $topic_name = $data100['topic_name'];
                                      
                                      
                                    }
                                    }
                                    ?>
                                 <div class="card-header bg-primary">
                                    <h4><?php echo $test_name; ?></h4>
                                    <p><strong>Topic: </strong><?php echo $topic_name; ?></p>
                                    <div class="pull-right">
                                    <h3>
                                       <strong>Score: &nbsp;</strong>    
                                       <span id="score_id"></span>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    
                                       <?php
                                          // derive data from mcq test question table and counting total marks 
                                          $query10 = "SELECT * FROM `mcq_test_questions` WHERE `test_id` = $test_id"; 
                                          $runfetch10 = mysqli_query($con, $query10);
                                          $noofrow10 = mysqli_num_rows($runfetch10);
                                          
                                          $indexnumber10 = 1;
                                          $radio_id_count = 0;
                                          $score = 0;
                                          if ($noofrow10 >0 && $runfetch10 == TRUE) { 
                                          while ($data10 = mysqli_fetch_assoc($runfetch10)) {
                                          
                                          
                                          
                                          
                                          $marks = $data10['marks'];
                                          $mcq_question = $data10['mcq_question'];
                                          $option_a = $data10['option_a'];
                                          $option_b = $data10['option_b'];
                                          $option_c = $data10['option_c'];
                                          $option_d = $data10['option_d'];
                                          $correct_option = $data10['correct_option'];
                                          
                                          $note = $data10['note'];
                                          $answer_hint = $data10['answer_hint'];


                                          // for below loop of finding added option in log table
                                          $mcq_test_question_id = $data10['id'];
                                          $correct_answer_description = $data10['correct_answer_description'];
                                          
                                          ?>
                                          <?php
                                       // derive data from mcq test table
                                       $query100 = "SELECT `selected_option` FROM `mcq_test_questions_log` WHERE `mcq_test_log_id` = $mcq_test_log_id AND `mcq_test_question_id` = $mcq_test_question_id"; 
                                       $runfetch100 = mysqli_query($con, $query100);
                                       $noofrow100 = mysqli_num_rows($runfetch100);
                                      
                                        if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                       while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                          $selected_option = $data100['selected_option'];                                        
                                         }
                                       }
                                       ?>
                                          <h4>
                                       <strong>Question <?php echo $indexnumber10; ?> </strong>
                                       <small><span class="float-right">Mark: <?php if($correct_option==$selected_option){echo $marks; $score += $marks;}else{echo "0";} ?></span></small>
                                    </h4>
                                    <h5><?php echo $mcq_question; ?></h5>
                                    
                                    <div class="row pt-2">
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_a<?php echo $radio_id_count; ?>"
                                                name="selected_option<?php echo $indexnumber10; ?>"
                                                value="a"
                                                disabled
                                                <?php
                                                   if($selected_option == 'a'){
                                                     echo 'checked';
                                                     
                                                   }
                                                   
                                                   ?>
                                                />
                                             <label class="custom-control-label  <?php if($selected_option == 'a'){if($correct_option==$selected_option){echo "text-success"; }else{echo "text-danger";} }?>" for="option_a<?php echo $radio_id_count; $radio_id_count++; ?>"><?php echo $option_a; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_b<?php echo $radio_id_count; ?>"
                                                name="selected_option<?php echo $indexnumber10; ?>"
                                                value="b"
                                                disabled
                                                <?php
                                                   if($selected_option == 'b'){
                                                     echo 'checked';
                                                   }
                                                   
                                                   ?>
                                                />
                                             <label class="custom-control-label  <?php if($selected_option == 'b'){if($correct_option==$selected_option){echo "text-success"; }else{echo "text-danger";} }?>" for="option_b<?php echo $radio_id_count; $radio_id_count++; ?>"
                                                ><?php echo $option_b; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_c<?php echo $radio_id_count; ?>"
                                                name="selected_option<?php echo $indexnumber10; ?>"
                                                value="c"
                                                disabled
                                                <?php
                                                   if($selected_option == 'c'){
                                                     echo 'checked';
                                                   }
                                                   
                                                   ?>
                                                />
                                             <label class="custom-control-label  <?php if($selected_option == 'c'){if($correct_option==$selected_option){echo "text-success"; }else{echo "text-danger";} }?>" for="option_c<?php echo $radio_id_count; $radio_id_count++; ?>"
                                                ><?php echo $option_c; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_d<?php echo $radio_id_count; ?>"
                                                name="selected_option<?php echo $indexnumber10; ?>"
                                                value="d"
                                                disabled
                                                <?php
                                                   if($selected_option == 'd'){
                                                     echo 'checked';
                                                   }
                                                   
                                                   ?>
                                                />
                                             <label class="custom-control-label  <?php if($selected_option == 'd'){if($correct_option==$selected_option){echo "text-success"; }else{echo "text-danger";} }?>" for="option_d<?php echo $radio_id_count; $radio_id_count++; ?>"
                                                ><?php echo $option_d; ?></label
                                                >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col">
                                          <h6 class="text-success mt-3">
                                             <?php 
                                             
                                             echo "(".$correct_option.")";
                                             if($correct_option == 'a'){
                                                echo " ".$option_a;
                                             }else if($correct_option == 'b'){
                                                echo " ".$option_b;
                                             }else if($correct_option == 'c'){
                                                echo " ".$option_c;
                                             }else if($correct_option == 'd'){
                                                echo " ".$option_d;
                                             }

                                             ?>
                                             <p class="text-dark mt-1"><?php echo $correct_answer_description; ?></p>
                                          </h6>
                                       </div>
                                    </div>
                                    <br><hr><br>
                                    <?php
                                       $indexnumber10++;
                                             }
                                          }
                                       ?>
                                 </div>
                                 <div class="card-footer">
                                    <div class="float-right">
                                       <button class="btn btn-light waves-effect" data-dismiss="modal" data-original-title="" title="">
                                       Back
                                       </button>
                                       <!-- <button class="btn btn-primary waves-effect" type="submit" name="add_admission" data-original-title="" title="">
                                          Go To Test List
                                          </button> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="card">
                                 <?php
                                    // derive data from mcq test question table and counting total marks 
                                    $query100 = "SELECT `marks` FROM `mcq_test_questions` WHERE `test_id` = $test_id"; 
                                    $runfetch100 = mysqli_query($con, $query100);
                                    $noofrow100 = mysqli_num_rows($runfetch100);
                                    $test_total_marks = 0;
                                    
                                     if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                    while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                      $test_total_marks += $data100['marks'];
                                      }
                                    }
                                    
                                    
                                    
                                    
                                    // derive data from mcq test question log table and counting total incomplete complete and in review question  
                                    $query100 = "SELECT * FROM `mcq_test_questions_log` WHERE `mcq_test_log_id` = $mcq_test_log_id"; 
                                    $runfetch100 = mysqli_query($con, $query100);
                                    $noofrow100 = mysqli_num_rows($runfetch100);
                                    $completed_question = 0;
                                    $review_question = 0;
                                    $incomplete_question = 0;
                                     if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                    while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                    
                                      if($data100['question_status'] == 'completed'){
                                        $completed_question++;
                                      }else if($data100['question_status'] == 'review'){
                                        $review_question++;
                                      }else if($data100['question_status'] == 'incomplete'){
                                        $incomplete_question++;
                                      }else{
                                        $completed_question = 0;
                                        $review_question = 0;
                                        $incomplete_question = 0;
                                        
                                      }
                                    }
                                    }
                                    
                                    
                                    ?>
                                 <div class="card-body">
                                    <h5 class="mb-5"><strong>Test Info</strong></h5>
                                    <div class="row">
                                       <div class="col-lg-12 pb-3">
                                          <strong>Test Duration:</strong> <span><?php echo $test_duration; ?> Minutes</span>
                                       </div>
                                       <div class="col-lg-12 pb-3">
                                          <strong>Total Question:</strong>
                                          <span><?php echo $number_of_mcq; ?></span>
                                       </div>
                                       <div class="col-lg-12 pb-3">
                                          <strong>Total Mark:</strong> <span><?php echo $test_total_marks; ?></span>
                                       </div>
                                       <div class="col-lg-12 pb-3">
                                          <strong>Description:</strong>
                                          <span
                                             >
                                          <?php echo $description; ?>
                                          </span
                                             >
                                       </div>
                                    </div>
                                    <div class="row pb-3">
                                       <div class="col-lg-4 p-1">
                                          <div
                                             class="btn btn-success btn-block custom-success hover-white"
                                             >
                                             <?php echo $completed_question; ?> <br />
                                             <small> Completed</small>
                                          </div>
                                       </div>
                                       <div class="col-lg-4 p-1">
                                          <div
                                             class="btn btn-info btn-block custom-primary hover-white"
                                             >
                                             <?php echo $review_question; ?> <br />
                                             <small> Review</small>
                                          </div>
                                       </div>
                                       <div class="col-lg-4 p-1">
                                          <div
                                             class="btn btn-danger btn-block custom-danger hover-white"
                                             >
                                             <?php echo $incomplete_question; ?> <br />
                                             <small> Incomplete</small>
                                          </div>
                                       </div>
                                    </div>
                                    <hr />
                                    
                                    <div class="form-layout form-layout-1">
                                       <div class="form-layout-footer mt-3">
                                          <a
                                          href="<?php echo base_url()?>dashboard"
                                             class="btn btn-primary waves-effect btn-block btn-lg"
                                             type="submit"
                                             name="add_degree"
                                             >
                                             <!-- <i class="fas fa-plus-circle"></i> -->
                                             View Progress
                                          </a>
                                          <!-- <button
                                             class="btn btn-secondary waves-effect"
                                             onclick="window.history.back()
onclick="window.history.back()
window.location = 'https://fingertips.co.in/cloud/en/auth/login.php';"
                                             >
                                             Back
                                             </button> -->
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
         if (su == 1) {
           var element = document.getElementById("success");
           element.classList.remove("alerttoggle");
           console.log("su");
         }
         if (fails == 1) {
           var element = document.getElementById("failed");
           element.classList.remove("alerttoggle");
           console.log("fails");
         }
      </script>
     
      <script>
         var get_test_timer = document.getElementById('score_id');
        get_test_timer.innerHTML = "<?php echo $score."/".$test_total_marks."(".(($score/$test_total_marks)*100)."%)"; ?>";
         
      </script>
   </body>
</html>