<?php  require_once('dbcon.php');
   if (!isset($_SESSION['ftip69_uid'])) {
       ?><script>window.history.back()
   window.location = '<?php echo base_url()?>';
</script><?php
   } 
   ?>
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
   window.location = 'https://fingertips.co.in/en/auth/login.php';
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
<?php
   if (isset($_POST['start_test']) ||isset($_POST['start_test2'])) {
      print_r("hi");
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
         //mark calculation first
                                        $query100 = "SELECT `marks` FROM `mcq_test_questions` WHERE `test_id` = $test_id"; 
                                       $runfetch100 = mysqli_query($con, $query100);
                                       $noofrow100 = mysqli_num_rows($runfetch100);
                                       $test_total_marks = 0;
                                        if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                         while ($data100 = mysqli_fetch_assoc($runfetch100)) {
                                           $test_total_marks += $data100['marks'];
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
</script>
<?php
   } 
   
   }
   }
   function insertMcqTestQuestionLog($test_id){
   require 'dbcon.php';
   // derive data from mcq question table
   $query100 = "SELECT `id` FROM `mcq_test_questions` WHERE `test_id` = $test_id"; 
   $runfetch100 = mysqli_query($con, $query100);
   $noofrow100 = mysqli_num_rows($runfetch100);
   $indexnumber10 = 0;
   if ($noofrow100 >0 && $runfetch100 == TRUE) { 
   while ($data100 = mysqli_fetch_assoc($runfetch100)) {
   $mcq_test_question_id = $data100['id'];
   
   
   $mcq_test_log_id = $_SESSION['ftip69_mcq_test_log_id'];
   
   // inserting data into the question log of mcq test 
   $query3 = "INSERT INTO `mcq_test_questions_log`(`id`, 
   `mcq_test_log_id`, `mcq_test_question_id`) VALUES (NULL,$mcq_test_log_id,$mcq_test_question_id)";
   
   
   if($con->query($query3)){
      if (isset($_POST['start_test'])) {?>
<script>
   //../test/mcq-test-view.php?q=1
   window.location = "mcq-test/1";
</script>
<?php
   }else if (isset($_POST['start_test2'])) {?>
<script>
   window.location = "../test/long-test-view.php?q=1";
</script>
<?php
   }
   ?>
<?php
   }else{
      echo "<script>alert('Question log entry not done!');</script>";
   }
   
   $indexnumber10++;
   }
   }
   }
   ?>
<?php
   $assignment_incomplete_no_data_found = 0;
   $assignment_complete_no_data_found = 0;
   $test_incomplete_no_data_found = 0;
   $test_complete_no_data_found = 0;
   
   
   ?>
<?php
   if (isset($_POST['add_ratings'])) {
     
   $session_id = $_POST['session_id'];
     $rate_count = $_POST['rate_count'];
     $rate_description = $_POST['rate_description'];
     $rate_by = $student_id;
     
     $date = date_create();
     $timestamp = date_timestamp_get($date);
   
      $sql = "DELETE FROM `offline_session_rating` WHERE `session_id`=$session_id AND `rate_by` = $rate_by";
   
      if ($con->query($sql) === TRUE) {
   
      }
   
     $query3 = "INSERT INTO `offline_session_rating`(`id`, `session_id`, `rate_count`, `rate_description`, `rate_by`, `timestamp`) 
     VALUES (NULL,$session_id,$rate_count,'$rate_description',$rate_by,$timestamp)";
   
   
      // get date function 
      // $mydate=getdate(1456);
      // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
   
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
   echo "Error: " . $query3 . "<br>" . $con->error;
   }
   }
   
   
   
   ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<script>
   document.getElementById('menu_course').classList.add("menu-active");
   document.getElementById('sidebar_icon_2').style.fill='#E46F0E';
   
</script>
<style type="text/css">
</style>
<div class="container-fluid ">
      <span class="title_course">
      Quiz
      </span>
   <script>
      //menu
      document.getElementById('menu_course').classList.add("menu-active");
      //icon
      document.getElementById('sidebar_icon_2').style.fill='#E46F0E';
      
   </script>
</div>
<div class="container">
<div class="row mt-3">
   <div class="col-lg-12 ">
      <?php     
         $query = "SELECT * FROM `offline_session` WHERE `batch_id` = $batch_id AND `is_deleted` = 0;";
         $runfetch = mysqli_query($con, $query);
         $noofrow = mysqli_num_rows($runfetch);
         $indexnumber = 1;
         $datano=1;
         if ($noofrow >0 && $runfetch == TRUE) { 
            while ($data = mysqli_fetch_assoc($runfetch)) { 
               $session_id_test = $data['id'];
            $test = $data['test']; 
               $test_array = explode (",", $test);  
               $no_of_test =  sizeof($test_array);
               for($i= 0; $i < $no_of_test-1; $i++){
                   $query10 = "SELECT * FROM `mcq_test_log` WHERE `given_by` = $user_id AND `test_id` = $test_array[$i];";
                  $runfetch10 = mysqli_query($con, $query10);
                  $noofrow10 = mysqli_num_rows($runfetch10);
               if ($noofrow10 != 0){
               $query1000 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id_test;";
               $runfetch1000 = mysqli_query($con, $query1000);
               $noofrow1000 = mysqli_num_rows($runfetch1000);
               $indexnumber1000 = 1;
               if ($noofrow1000 > 0 && $runfetch1000 == TRUE) { 
                  while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 
                     $test_submission = $data1000['test_submission'];
                     if($test_submission == ""){
                        $date = date_create();
                        $timestamp = date_timestamp_get($date);
         
                        $test_submission = $timestamp;
                     }
                  }
               }else{
                  continue;
               }
                     $query100 = "SELECT * FROM `mcq_test` WHERE `id` = $test_array[$i];";
                  $runfetch100 = mysqli_query($con, $query100);
                  $noofrow100 = mysqli_num_rows($runfetch100);
                  $indexnumber = 1;
                  
                  if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                     while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                     ?>
      <div class="row ">
         <div class="col-lg-8 mt-3 jumbotron">
               <div class="row">
                  <div class="col-lg-4 col-md-4">
                     <img  src="<?php echo base_url()?>assets/images/university/python-1.png"  class="img-fluid">
                  </div>
                  <div class="col-lg-4 col-md-3 mt-3"> 
                     <span style="font-size: clamp(10px, 5vw, 17px);"><?php echo $data100['test_name']; ?></span>
                     <br>
                     <span style="font-size: clamp(10px, 5vw, 11px);">Course: <?php echo $course_name; ?></span>
                     <br>
                     <span  style="font-size: clamp(10px, 3vw, 11px);">Starts at:   <?php 
                        $mydate=getdate($test_submission);
                        echo "$mydate[month] $mydate[mday]";
                        ?> 
                     </span>
                  </div>
                  <div class="col-lg-2 col-md-2">
                  <?php
                     $test_id100=$data100['id'];
                     $query4="SELECT * FROM `mcq_test_questions` WHERE test_id=$test_id100";
                     $run4=mysqli_query($con,$query4);
                     $data4=mysqli_fetch_assoc($run4);
                     $question_type=$data4['question_type'];
                     if ($question_type==1) {?>
                     <form action="" method="post">
                        <input type="hidden" name="test_id" value="<?php echo $data100['id'];?>">
                        <button class="course_button" type="submit" name="start_test">
                        Start Test 
                        </button>
                     </form>
                     <?php
                        }elseif ($question_type==2 || $question_type==3) {
                           ?>
                     <form action="" method="post">
                        <input type="hidden" name="test_id" value="<?php echo $data100['id'];?>">
                        <button class="course_button" type="submit" name="start_test2">
                        Restart Test Again
                        </button>
                     </form>
                  </div>
                  <?php
                     }
                     ?>
               </div>
             </div> </div>
               <div class="col-lg-2 mt-4" >
                  <div onclick="myFunction1(<?php echo $datano;?>)" >
                     <div id="open<?php echo $datano;?>" class="quiz-mark-show">
                        <i class="fa fa-arrow-right text-red ml-5" aria-hidden="true" style="font-size: 2em;margin-top:58px;margin-left:50px;color:#000"></i>
                     </div>
                  </div>
                  <div onclick="myFunction2(<?php echo $datano;?>)">
                     <div  id="close<?php echo $datano;?>" class="quiz-mark-hide"   >
                        <i class="fa fa-arrow-left text-red m-5" aria-hidden="true" style="font-size: 2em;margin-top:50px !important;margin-left:150px !important;color:#000"></i>
                        <span id="score_id" style="color:#fff"></span>
                     </div>
                  
             
            </div>
        
      </div>
      <?php $datano++?>
   </div>
   <?php
      }}
      }else{
      
         if($test_complete_no_data_found != 1){
            
         }
         $test_complete_no_data_found = 1;
         
      }                                                     
      }
      
      
      }
      }
      
      
      
      ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
   $('#close'+get_icon_number).hide();
      function myFunction1(get_icon_number) {
          $('#open'+get_icon_number).hide();
          $('#close'+get_icon_number).show();
       }
       function myFunction2(get_icon_number) {
          $('#open'+get_icon_number).show();
          $('#close'+get_icon_number).hide();
       
       }
   
</script>
<script>
   // var get_test_timer = document.getElementById('score_id');
   //  get_test_timer.innerHTML = "<?php echo $score."/".$test_total_marks."(".(($score/$test_total_marks)*100)."%)"; ?>";
   
</script>