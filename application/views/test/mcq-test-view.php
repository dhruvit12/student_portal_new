<script>
 document.getElementById('menu_course').classList.add("menu-active");
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';

</script>
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
         $ftip69_acc_student = $data['acc_student'];            

   // success
   if ($ftip69_acc_test==1 || $ftip69_acc_student==1 ) {
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
    if (isset($id)) {
    $question_number = $id;
   
    if($question_number <= 0){
      ?>
<script>
   window.history.back()
window.location = '<?php echo base_url()?>';
</script>
<?php
   }  
   
   
   
   

   if(!isset($_SESSION['ftip69_test_id'])){
     ?>
      <script>
        window.location = "<?php echo base_url()?>"
      </script>
     <?php
   }else{
      // echo 'session'.$_SESSION['ftip69_test_id'].'<br>';
    $test_id = $_SESSION['ftip69_test_id'];
    if($test_id == ''){
      // echo 'test_id'.$test_id;
       ?>
<script>
window.location = "<?php echo base_url()?>"
</script>
       <?php
    }else{
      //  echo 'not null<br>';
    }
   }
   $test_id = $_SESSION['ftip69_test_id'];
   $mcq_test_log_id = $_SESSION['ftip69_mcq_test_log_id'];
   $test_start_time = $_SESSION['ftip69_test_start_time'];
   $user_id = $_SESSION['ftip69_uid']; 
   
   // echo 'test id'.$test_id.'<br>';
  
   
   
   
      // send user back if the requested questin number is more then total questinos 
      $query100 = "SELECT * FROM `mcq_test` WHERE `id` = $test_id"; 
      $runfetch100 = mysqli_query($con, $query100);
      $noofrow100 = mysqli_num_rows($runfetch100);
      
      if ($noofrow100 >0 && $runfetch100 == TRUE) { 
      while ($data100 = mysqli_fetch_assoc($runfetch100)) {
       
        $number_of_mcq = $data100['number_of_mcq'];
      }
      }
      
      // $question_number > $number_of_mcq
   if($question_number > $number_of_mcq ){
   ?>
<script>
   window.location = "<?php echo base_url()?>mcq-test/1";
</script>
<?php
   }
   
      
      
     }else{
      
    
   
       ?>
<script>
   window.history.back()
window.location = '<?php echo base_url()?>';
</script>
<?php
   }
   ?>


<!-- updating questino log table  -->
<?php 





if (isset($_POST['cancel_test'])) {
  $date = date_create();
     $timestamp = date_timestamp_get($date);

  $query3 = "UPDATE `mcq_test_log` SET `test_status`='cancel',`test_end_time`=$timestamp WHERE `test_id` = $test_id AND `id` = $mcq_test_log_id;";
  unset($_SESSION['ftip69_test_id']);
  if ($con->query($query3)){
   unset($_SESSION['ftip69_test_id']);
   unset($_SESSION['ftip69_mcq_test_log_id']);
   unset($_SESSION['ftip69_test_start_time']);
    ?>
<script>
window.location = "<?php echo base_url()?>quiz" ;
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
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/card/2.5.4/card.css"> -->
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
      
   <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div>
      <!-- Loader ends-->
      <div class="page-wrapper compact-wrapper">
         <!--change compact-wrapper-->
         <?php 
         $this->load->view('elements/header'); 
         ?>
         <!-- Page Body Start-->
         <div class="page-body-wrapper ">
            <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php 
            // require_once '../elements/compact_sidebar_admin.php' 
            ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Test</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="<?php echo base_url()?>dashboard"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active">Test</li>
                              </ol>
                           </div>
                        </div>
                        <div class="col">
                           <div class="pull-right">
                           
                              <form action="" method="post">
                              <input type="submit" name="cancel_test" value="Cancel Test" class="btn btn-primary btn-sm waves-effect" style="padding: 5px 10px;">
                              
                              
                              </form>
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
                                       <strong>Time Left: &nbsp;</strong>    
                                       <span id="test_timer"></span>
                                       <!-- 29:29 -->
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <h4>
                                       <?php
                                          // derive data from mcq test question table and counting total marks 
                                          $offset = $question_number-1;
                                          $query100 = "SELECT * FROM `mcq_test_questions` WHERE `test_id` = $test_id ORDER BY `id` DESC LIMIT 1 OFFSET $offset"; 
                                          $runfetch100 = mysqli_query($con, $query100);
                                          $noofrow100 = mysqli_num_rows($runfetch100);
                                          
                                          
                                          if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                          
                                             
                                          $mcq_test_question_id = $data100['id'];
                                          $marks = $data100['marks'];
                                          $mcq_question = $data100['mcq_question'];
                                          $option_a = $data100['option_a'];
                                          $option_b = $data100['option_b'];
                                          $option_c = $data100['option_c'];
                                          $option_d = $data100['option_d'];
                                          
                                          $note = $data100['note'];
                                          $answer_hint = $data100['answer_hint'];
                                       }
                                          }else{
                                             // echo "Error: " . $query100 . "<br>" . $con->error;
                                          }
                                          
                                          ?>
                                       <strong>Question <?php echo $question_number; ?> </strong
                                          >
                                          <script>
                                           console.log(<?php echo $mcq_question; ?>);
                                          </script>
                                          <small
                                          ><span class="float-right">Mark: <?php echo $marks; ?></span></small
                                          >
                                    </h4>
                                    <h5><?php echo $mcq_question; ?></h5>
                                    
                                   <form action="" method="post">
                                   <?php
                                    // derive data from mcq test table
                                    $query100 = "SELECT `selected_option` FROM `mcq_test_questions_log` WHERE `mcq_test_log_id` = $mcq_test_log_id AND `mcq_test_question_id` = $mcq_test_question_id"; 
                                    $runfetch100 = mysqli_query($con, $query100);
                                    $noofrow100 = mysqli_num_rows($runfetch100);
                                    $indexnumber10 = 1;
                                     if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                    while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                      $selected_option = $data100['selected_option'];
                                      }
                                    }
                                    ?>
                                    <div class="row pt-2">
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_a"
                                                name="selected_option"
                                                value="a"
                                                <?php

                                                if($selected_option == 'a'){
                                                  echo 'checked';
                                                }

                                                ?>
                                                />
                                             <label class="custom-control-label" for="option_a"
                                                ><?php echo $option_a; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_b"
                                                name="selected_option"
                                                value="b"
                                                <?php

                                                if($selected_option == 'b'){
                                                  echo 'checked';
                                                }

                                                ?>
                                                />
                                             <label class="custom-control-label" for="option_b"
                                                ><?php echo $option_b; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_c"
                                                name="selected_option"
                                                value="c"
                                                <?php

                                                if($selected_option == 'c'){
                                                  echo 'checked';
                                                }

                                                ?>
                                                />
                                             <label class="custom-control-label" for="option_c"
                                                ><?php echo $option_c; ?></label
                                                >
                                          </div>
                                       </div>
                                       <div class="col-md-12 pt-2">
                                          <div class="custom-control custom-radio">
                                             <input
                                                type="radio"
                                                class="custom-control-input"
                                                id="option_d"
                                                name="selected_option"
                                                value="d"
                                                <?php

                                                if($selected_option == 'd'){
                                                  echo 'checked';
                                                }

                                                ?>
                                                />
                                             <label class="custom-control-label" for="option_d"
                                                ><?php echo $option_d; ?></label
                                                >
                                          </div>
                                       </div>
                                    </div>
                                    <?php 
                                       if($note != ''){
                                         ?>
                                    <div class="row mt-3">
                                       <div class="col-md-12">
                                          <strong>Note:</strong>
                                          <?php echo $note; ?>
                                       </div>
                                    </div>
                                    <?php
                                       }
                                       
                                       ?>
                                    <?php 
                                       if($answer_hint != ''){
                                         ?>
                                    <div class="row pt-3">
                                       <div class="col-12">
                                          <div
                                             class="btn btn-link float-right"
                                             onclick="hintDisplay();"
                                             id="hint_btn"
                                             >
                                             Show Hint
                                          </div>
                                       </div>
                                       <div
                                          class="col-12"
                                          style="display: none"
                                          id="hint_col"
                                          >
                                          <p>
                                             <?php 
                                                echo $answer_hint; 
                                                
                                                ?>
                                          </p>
                                       </div>
                                    </div>
                                    <?php
                                       }
                                       
                                       ?>
                                 </div>
                                 <div class="card-footer">
                                    
                                   
                                   <a href="<?php echo base_url()?>mcq-test/<?php echo $question_number+1; ?>"><div class="btn btn-light">Skip </div></a>

                                   
                                   <input type="submit" class="btn btn-primary" name="mark_for_review" value="Mark For Review">
                                   <input type="submit" class="btn btn-success float-right" name="mark_completed" value="Save & Next">
                                   
                
                                   
                                   </form>
                                    
                                    
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
                                    <h5 class="mt-2 mb-4">
                                       <strong>Question Matrix</strong>
                                    </h5>
                                    <div class="row pl-1">
                                       <?php
                                          // generating questio matrix 
                                          $query100 = "SELECT * FROM `mcq_test_questions_log` WHERE `mcq_test_log_id` = $mcq_test_log_id ORDER BY `mcq_test_question_id` DESC "; 
                                          $runfetch100 = mysqli_query($con, $query100);
                                          $noofrow100 = mysqli_num_rows($runfetch100);
                                          $matrix_question_number = 1;
                                          
                                          if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                          while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                          
                                            ?>
                                       <div class="col-2 text-center p-1">
                                          <a href="<?php echo base_url()?>mcq-test/<?php echo $matrix_question_number; ?>">
                                             <div
                                                style="
                                                width: 100%;
                                                height: 100%;
                                                border-radius: 4px;
                                                "
                                                class="pt-2 pb-2 
                                                <?php
                                                   if($data100['question_status']=='completed'){
                                                     if($question_number == $matrix_question_number){
                                                       echo 'btn btn-success hover-white custom-success';
                                                     }else{
                                                      echo 'custom-success';
                                                     }
                                                     
                                                   }else if($data100['question_status']=='review'){
                                                    if($question_number == $matrix_question_number){
                                                      echo 'btn btn-primary hover-white custom-primary';
                                                    }else{
                                                     echo 'custom-primary';
                                                    }
                                                   }else if($data100['question_status']=='incomplete'){
                                                    if($question_number == $matrix_question_number){
                                                      echo 'btn btn-danger hover-white custom-danger';
                                                    }else{
                                                     echo 'custom-danger';
                                                    }
                                                   }
                                                   
                                                   ?>
                                                "
                                                >
                                                <?php echo $matrix_question_number; ?>
                                             </div>

                                          </a>
                                       </div>
                                       <?php 
                                          $matrix_question_number++;                         
                                          }
                                          }
                                          ?>
                                    </div>
                                    <form action="" method="post">
                                       <div class="form-layout form-layout-1">
                                          <div class="form-layout-footer mt-3">
                                             <a
                                                href = "<?php echo base_url()?>mcq-test-result/<?php echo $test_id ?>"
                                                class="btn btn-primary waves-effect btn-block btn-lg"
                                                type="submit"
                                                name="complete_test"
                                                >
                                                <!-- <i class="fas fa-plus-circle"></i> -->
                                                Complete Test
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
         var hintDisplayCount = 0;
         function hintDisplay() {
           var get_hint_btn = document.getElementById(
             "hint_btn"
           );
           var get_hint_col = document.getElementById(
             "hint_col"
           );
           if (hintDisplayCount % 2 != 0) {
             // show
             get_hint_btn.innerHTML = "Hide Hint";
             get_hint_col.style.display = "block";
           } else {
             // hide
             get_hint_btn.innerHTML = "Show Hint";
             get_hint_col.style.display = "none";
           }
           hintDisplayCount++;
         }
      </script>
      <script>
         var get_test_timer = document.getElementById('test_timer');
         var test_start_time = <?php echo $test_start_time; ?>;
         var test_duration_minutes = <?php echo $test_duration; ?>;
         var test_duration_seconds = test_duration_minutes * 60;
         
         function getTimerUpdate(){
         var current_time = Math.floor(Date.now()/1000);
         
         var time_left = (test_start_time+test_duration_seconds) - current_time;
         
         var timer_minutes = Math.floor(time_left / 60);
         var timer_seconds = time_left - (timer_minutes * 60);
         
         if(timer_minutes <= 9){
           timer_minutes = '0'+timer_minutes;
         }
         if(timer_seconds <= 9){
           timer_seconds = '0'+timer_seconds;
         }
         
         if (time_left < 0){
           console.log('exam timeout');
           window.location = "<?php echo base_url()?>mcq-test-result/<?php echo $test_id ?>"
         }
         get_test_timer.innerHTML = timer_minutes +':'+timer_seconds;
         getTimerUpdatePair();
         }
         function getTimerUpdatePair(){
         setTimeout(function(){ getTimerUpdate(); }, 1000);  
         }
         getTimerUpdatePair();
         
      </script>
   </body>
</html>

<?php

if (isset($_POST['mark_completed'])) {

   $selected_option = $_POST['selected_option'];  
 
   $query3 = "UPDATE `mcq_test_questions_log` SET `selected_option` = '$selected_option',`question_status`='completed' WHERE `mcq_test_log_id` = $mcq_test_log_id AND `mcq_test_question_id` = $mcq_test_question_id;";
   if ($con->query($query3)){
     ?>
 <script>
 window.location = "<?php echo base_url()?>mcq-test/<?php echo $question_number+1;  ?>";
 </script>
     <?php
     
   }else{
      ?>
      <script>
      window.history.back()
window.location = '<?php echo base_url()?>';
      </script>
          <?php
      
   }
 
 }


 if (isset($_POST['mark_for_review'])) {

   $query3 = "UPDATE `mcq_test_questions_log` SET `question_status`='review' WHERE `mcq_test_log_id` = $mcq_test_log_id AND `mcq_test_question_id` = $mcq_test_question_id;";
   if ($con->query($query3)){
     ?>
 <script>
 window.location = "<?php echo base_url()?>mcq-test/<?php echo $question_number+1;  ?>";
 </script>
     <?php
     
   }else{
    //   echo $query3.'<br>'.$con->error;
   }
 
 }
 
 
?>