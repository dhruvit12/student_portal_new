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
   
   
      $ftip69_acc_test = $data['acc_test'];
      
   
   // success
   if ($ftip69_acc_test==1) {
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
   if (isset($_GET['id'])) {
       $id=$_GET['id'];
      
       
       $query100 = "SELECT * FROM `mcq_test_questions` WHERE `id` = $id"; 
       $runfetch100 = mysqli_query($con, $query100);
       $noofrow100 = mysqli_num_rows($runfetch100);
       $attempt_count = 0;
      if ($noofrow100 >0 && $runfetch100 == TRUE) { 
       while ($data100 = mysqli_fetch_assoc($runfetch100)) {
          $mcq_question = $data100['mcq_question'];
          $option_a = $data100['option_a'];
          $option_b = $data100['option_b'];
          $option_c = $data100['option_c'];
          $option_d = $data100['option_d'];
          $correct_option = $data100['correct_option'];
          $correct_answer_description = $data100['correct_answer_description'];
          $answer_hint = $data100['answer_hint'];
          $marks = $data100['marks'];
          $note = $data100['note'];
          
          
       }
       
       }
   }
          
   ?>
<?php
   if (isset($_POST['edit_mcq_question'])) {
      
     $mcq_question = $_POST['mcq_question'];
     $mcq_question = nl2br(htmlspecialchars($mcq_question, ENT_QUOTES, "UTF-8"));
    //  $mcq_question = htmlspecialchars($mcq_question, ENT_HTML5, "UTF-8");
   
   
     
   
    //  echo "mcq question".$mcq_question."<br>";
    
   
     $option_a = $_POST['option_a'];
     $option_a = htmlspecialchars($option_a, ENT_QUOTES, "UTF-8");
    //  $option_a = htmlspecialchars($option_a, ENT_HTML5, "UTF-8");
   
     $option_b = $_POST['option_b'];
     $option_b = htmlspecialchars($option_b, ENT_QUOTES, "UTF-8");
    //  $option_b = htmlspecialchars($option_b, ENT_HTML5, "UTF-8");
   
     $option_c = $_POST['option_c'];
     $option_c = htmlspecialchars($option_c, ENT_QUOTES, "UTF-8");
    //  $option_c = htmlspecialchars($option_c, ENT_HTML5, "UTF-8");
   
     $option_d = $_POST['option_d'];
     $option_d = htmlspecialchars($option_d, ENT_QUOTES, "UTF-8");
    //  $option_d = htmlspecialchars($option_d, ENT_HTML5, "UTF-8");
   
     $correct_option = $_POST['correct_option'];
   
     $correct_answer_description = $_POST['correct_answer_description'];
     $correct_answer_description = htmlspecialchars($correct_answer_description, ENT_QUOTES, "UTF-8");
   
     $answer_hint = $_POST['answer_hint'];       
     $answer_hint = htmlspecialchars($answer_hint, ENT_QUOTES, "UTF-8");
   
     $marks = $_POST['marks'];
     $note = $_POST['note'];
     $note = htmlspecialchars($note, ENT_QUOTES, "UTF-8");
    //  $note = htmlspecialchars($note, ENT_HTML5, "UTF-8");
   
   
   
      $query3="UPDATE `mcq_test_questions` SET `mcq_question`='$mcq_question',`option_a`='$option_a',`option_b`='$option_b',
      `option_c`='$option_c',`option_d`='$option_d',`correct_option`='$correct_option',
      `correct_answer_description`='$correct_answer_description',`answer_hint`='$answer_hint',`marks`=$marks,`note`='$note' WHERE `id`=$id";
      $run3=mysqli_query($con,$query3);
      if ($con->query($query3) === TRUE) {
          ?>
<script>
   window.location.href="question-test-list.php";
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
            <div class="page-body" style="width:100%; overflow-x:auto;">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Edit Test Question</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item">Edit Question</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <form action="" method="POST">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header">
                              <h5>Question</h5>
                              <span>Edit Question</span>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >MCQ Question
                                       <span class="text-danger">*</span></label
                                          >
                                       <textarea 
                                          class="form-control"
                                          name="mcq_question" 
                                          id="mcq_question_input"  
                                          rows="3" 
                                          placeholder="Enter MCQ Question"
                                          value=""
                                          required
                                          ><?php echo $mcq_question; ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <!-- option row -->
                              <div class="row">
                                 <!-- col-4 -->
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Option A <span class="text-danger">*</span></label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="option_a"
                                          value="<?php echo $option_a; ?>"
                                          placeholder="Option A"
                                          required
                                          />
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Option B <span class="text-danger">*</span></label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="option_b"
                                          value="<?php echo $option_b; ?>" 
                                          placeholder="Option B"
                                          required
                                          />
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Option C <span class="text-danger">*</span></label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="option_c"
                                          value="<?php echo $option_c; ?>" 
                                          placeholder="Option C"
                                          required
                                          />
                                    </div>
                                 </div>
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Option D <span class="text-danger">*</span></label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="option_d"
                                          value="<?php echo $option_d; ?>"
                                          placeholder="Option D"
                                          required
                                          />
                                    </div>
                                 </div>
                              </div>
                              <!-- option row ends here -->
                              <div class="row">
                                 <div class="col-lg-6 mg-t-10 mg-b-20">
                                    <label
                                       >Correct Option<span class="text-danger"
                                       >*</span
                                       ></label
                                       >
                                    <br />
                                    <div
                                       class="custom-control custom-radio"
                                       style="display: inline-block"
                                       >
                                       <input
                                          name="correct_option"
                                          type="radio"
                                          class="custom-control-input"
                                          id="radio1"
                                          value='a'
                                          <?php if($correct_option == 'a'){
                                             echo 'checked';
                                             } ?>
                                          required
                                          />
                                       <label class="custom-control-label" for="radio1"
                                          >A</label
                                          >
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div
                                       class="custom-control custom-radio"
                                       style="display: inline-block"
                                       >
                                       <input
                                          name="correct_option"
                                          type="radio"
                                          class="custom-control-input"
                                          value='b'
                                          id="radio2"
                                          <?php if($correct_option == 'b'){
                                             echo 'checked';
                                             } ?>
                                          required
                                          />
                                       <label class="custom-control-label" for="radio2"
                                          >B</label
                                          >
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div
                                       class="custom-control custom-radio"
                                       style="display: inline-block"
                                       >
                                       <input
                                          name="correct_option"
                                          type="radio"
                                          class="custom-control-input"
                                          id="radio3"
                                          value='c'
                                          <?php if($correct_option == 'c'){
                                             echo 'checked';
                                             } ?>
                                          required
                                          />
                                       <label class="custom-control-label" for="radio3"
                                          >C</label
                                          >
                                    </div>
                                    &nbsp;&nbsp;&nbsp;
                                    <div
                                       class="custom-control custom-radio"
                                       style="display: inline-block"
                                       >
                                       <input
                                          name="correct_option"
                                          type="radio"
                                          class="custom-control-input"
                                          id="radio4"
                                          value='d'
                                          <?php if($correct_option == 'd'){
                                             echo 'checked';
                                             } ?>
                                          required
                                          />
                                       <label class="custom-control-label" for="radio4"
                                          >D</label
                                          >
                                    </div>
                                 </div>
                              </div>
                              <!-- correct answer and mark -->
                              <div class="row mt-3">
                                 <!-- col-4 -->
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Correct answer description
                                       </label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="correct_answer_description"
                                          placeholder="Enter reason"
                                          value="<?php echo $correct_answer_description; ?>"
                                          />
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Answer Hint
                                       </label
                                          >
                                       <input
                                          class="form-control"
                                          type="text"
                                          name="answer_hint"
                                          value="<?php echo $answer_hint; ?>"
                                          placeholder="Enter email address"
                                          />
                                    </div>
                                 </div>
                                 <!-- col-4 -->
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                       <label class="form-control-label active"
                                          >Marks <span class="text-danger">*</span></label
                                          >
                                       <input
                                          class="form-control"
                                          type="number"
                                          name="marks"
                                          value="<?php echo $marks; ?>"
                                          placeholder="MCQ Mark"
                                          required
                                          />
                                    </div>
                                 </div>
                                 <!-- correct answer and marks ends here  -->
                              </div>
                              <!-- note starts here -->
                              <div class="row mb-3">
                                 <div class="col-lg mg-t-10 mg-lg-t-0">
                                    <label>Note</label>
                                    <textarea
                                       rows="3"
                                       name="note"
                                       class="form-control"
                                       placeholder="Type something here..."
                                       >
                                    <?php echo $note; ?>
                                    </textarea>
                                 </div>
                                 <!-- col-4 -->
                              </div>
                              <!-- notes ends here -->
                              <button class="btn btn-primary float-right" type="submit" name="edit_mcq_question">Edit Question</button>
                              <!-- single mcq ends here -->
                           </div>
                        </div>
                     </div>
                  </div>
                  </form>
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
         <?php require_once '../elements/footer.php' ?>
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
      <!-- Modal -->
      <div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="card-header" style="background:white;border-bottom:0px solid green;">
                     <h5>Edit</h5>
                     <span>Alert! Be Careful Before Editing Lead Data</span>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body p-5">
                  <form action="" method="post">
                     <div class="form-layout form-layout-1">
                        <div class="row">
                           <input type="hidden" name="question_id" id="edit_question_id_input">
                           <div class="col-lg mt-2">
                              <label>Test Question</label>
                              <textarea
                                 rows="3"
                                 class="form-control"
                                 placeholder="Type something here..."
                                 maxlength="255"
                                 name="description"
                                 value=""
                                 id="test_question"
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
                  name="edit_lead"
                  >
               Edit Lead
               </button>
               </div>
               </div>
               </div>
               </div>
               </form>
            </div>
         </div>
      </div>
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
      <script>
         function prepareEditQuestion(id,question){
           
           var get_edit_question_id_input = document.getElementById('edit_question_id_input');
           var get_test_question = document.getElementById('test_question');
         
           console.log(id);
           console.log(question);
           get_edit_question_id_input.value = id;
           get_test_question.value = question;       
          
         
         
         }
      </script>
   </body>
</html>