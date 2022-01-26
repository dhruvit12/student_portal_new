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
   if (!empty($_GET['id']) && !empty($_GET['type'])) {
    $getid = $_GET['id'];
    $question_type=$_GET['type'];
   
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
      <title>Add Test | Fingertips</title>
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
      <div class="page-wrapper compact-wrapper"> <!--change compact-wrapper-->
         <?php require_once '../elements/header.php' ?>
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon"> <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php require_once '../elements/compact_sidebar_admin.php' ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Add Long Answer</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item active">Test</li>
                              </ol>
                           </div>
                        </div>
                        <!-- Bookmark Start-->
                        <!-- <div class="col">
                           <div class="bookmark pull-right">
                             <ul>
                               <li>
                                 <a
                                   href="#"
                                   data-container="body"
                                   data-toggle="popover"
                                   data-placement="top"
                                   title=""
                                   data-original-title="Calendar"
                                   ><i data-feather="calendar"></i
                                 ></a>
                               </li>
                               <li>
                                 <a
                                   href="#"
                                   data-container="body"
                                   data-toggle="popover"
                                   data-placement="top"
                                   title=""
                                   data-original-title="Mail"
                                   ><i data-feather="mail"></i
                                 ></a>
                               </li>
                               <li>
                                 <a
                                   href="#"
                                   data-container="body"
                                   data-toggle="popover"
                                   data-placement="top"
                                   title=""
                                   data-original-title="Chat"
                                   ><i data-feather="message-square"></i
                                 ></a>
                               </li>
                               <li>
                                 <a href="#"
                                   ><i class="bookmark-search" data-feather="star"></i
                                 ></a>
                                 <form class="form-inline search-form">
                                   <div class="form-group form-control-search">
                                     <input type="text" placeholder="Search.." />
                                   </div>
                                 </form>
                               </li>
                             </ul>
                           </div>
                           </div> -->
                        <!-- Bookmark Ends-->
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <!-- <div class="card-header">
                              <h5>Add Enquiry</h5>
                              <span
                                >lorem ipsum dolor sit amet, consectetur adipisicing
                                elit</span
                              >
                              </div> -->
                           <div class="card-body">
                              <h5 class="mb-5">Add Questions</h5>
                              <form action="" method="post">
                                 <div class="form-layout form-layout-1">
                                    <?php
                                       $query10 = "SELECT * FROM `mcq_test` WHERE id = $getid";
                                       $runfetch10 = mysqli_query($con, $query10);
                                       $noofrow10 = mysqli_num_rows($runfetch10);
                                         while ($data10 = mysqli_fetch_array($runfetch10)) {
                                           $count = $data10['number_of_mcq'];
                                           for ($index_number = 1; $index_number <= $count; $index_number++) {
                                             // echo "The number is: $index_number <br>";
                                           
                                       ?>
                                    <!-- single mcq starts here -->
                                    <h6 class="pb-3"><strong>Question <?php echo $index_number; ?></strong></h6>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <label class="form-control-label active"
                                                >Question
                                             <span class="text-danger">*</span></label
                                                >
                                             <!-- <input
                                                class="form-control"
                                                type="text"
                                                name="mcq_question<?php echo $index_number; ?>"
                                                placeholder="Enter MCQ Question"
                                                
                                                /> -->
                                                <textarea 
                                                class="form-control"
                                                name="mcq_question<?php echo $index_number; ?>" 
                                                id="mcq_question_input"  
                                                rows="3" 
                                                placeholder="Enter Question"
                                                required
                                                ></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    
                                    <!-- correct answer and mark -->
                                    <div class="row mt-3">
                                       <!-- col-4 -->
                                       
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label class="form-control-label active"
                                                >Answer Hint
                                             </label
                                                >
                                             <input
                                                class="form-control"
                                                type="text"
                                                name="answer_hint<?php echo $index_number; ?>"
                                                placeholder="Enter Answer Hint"
                                                />
                                          </div>
                                       </div>
                                       <!-- col-4 -->
                                       <div class="col-lg-6">
                                          <div class="form-group">
                                             <label class="form-control-label active"
                                                >Marks <span class="text-danger">*</span></label
                                                >
                                             <input
                                                class="form-control"
                                                type="number"
                                                name="marks<?php echo $index_number; ?>"
                                                value=""
                                                placeholder="Enter Mark"
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
                                             name="note<?php echo $index_number; ?>"
                                             class="form-control"
                                             placeholder="Type something here..."
                                             ></textarea>
                                       </div>
                                       <!-- col-4 -->
                                    </div>
                                    <!-- notes ends here -->
                                    <hr class="mt-3" >
                                    <!-- single mcq ends here -->
                                    <?php
                                       }}
                                       ?>
                                    <!-- row -->
                                    <div class="form-layout-footer mg-t-15 float-right">
                                       <button class="btn btn-primary waves-effect" name="upload_mcq" type="submit">
                                       Submit
                                       </button>
                                       <button
                                          class="btn btn-secondary waves-effect"
                                          onclick="window.history.back()
onclick="window.history.back()
window.location = 'https://fingertips.co.in/cloud/en/auth/login.php';"
                                          >
                                       Back
                                       </button>
                                    </div>
                                    <!-- form-layout-footer -->
                                 </div>
                              </form>
                           </div>
                           
                        </div>
                        <br>
                           <br>
                           <br>
                           <br>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once '../elements/footer.php' ?>
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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Plugin used-->
      <script>
      document.getElementById('mcq_question_input').addEventListener('keydown', function(e) {
      if (e.key == 'Tab') {
      e.preventDefault();
      var start = this.selectionStart;
      var end = this.selectionEnd;

    // set textarea value to: text before caret + tab + text after caret
    this.value = this.value.substring(0, start) +
      "\t" + this.value.substring(end);

    // put caret at right position again
    this.selectionStart =
      this.selectionEnd = start + 1;
  }
});
      </script>
   </body>
</html>
<?php
if (isset($_POST['upload_mcq'])) {
  $uploadsuccess = 0;
  $uploadfail = 0;
   $test_id = $getid;
   
   for ($index_number = 1; $index_number <= $count; $index_number++) {
   
       $mcq_question = $_POST['mcq_question'.$index_number];
       $mcq_question = nl2br(htmlspecialchars($mcq_question, ENT_QUOTES, "UTF-8"));
      //  $mcq_question = htmlspecialchars($mcq_question, ENT_HTML5, "UTF-8");


       

      //  echo "mcq question".$mcq_question."<br>";
      

       $option_a = $_POST['option_a'.$index_number];
       $option_a = htmlspecialchars($option_a, ENT_QUOTES, "UTF-8");
      //  $option_a = htmlspecialchars($option_a, ENT_HTML5, "UTF-8");

       $option_b = $_POST['option_b'.$index_number];
       $option_b = htmlspecialchars($option_b, ENT_QUOTES, "UTF-8");
      //  $option_b = htmlspecialchars($option_b, ENT_HTML5, "UTF-8");

       $option_c = $_POST['option_c'.$index_number];
       $option_c = htmlspecialchars($option_c, ENT_QUOTES, "UTF-8");
      //  $option_c = htmlspecialchars($option_c, ENT_HTML5, "UTF-8");

       $option_d = $_POST['option_d'.$index_number];
       $option_d = htmlspecialchars($option_d, ENT_QUOTES, "UTF-8");
      //  $option_d = htmlspecialchars($option_d, ENT_HTML5, "UTF-8");

       $correct_option = $_POST['correct_option'.$index_number];

       $correct_answer_description = $_POST['correct_answer_description'.$index_number];
       $correct_answer_description = htmlspecialchars($correct_answer_description, ENT_QUOTES, "UTF-8");

       $answer_hint = $_POST['answer_hint'.$index_number];       
       $answer_hint = htmlspecialchars($answer_hint, ENT_QUOTES, "UTF-8");

       $marks = $_POST['marks'.$index_number];
       $note = $_POST['note'.$index_number];
       $note = htmlspecialchars($note, ENT_QUOTES, "UTF-8");
      //  $note = htmlspecialchars($note, ENT_HTML5, "UTF-8");

       $date = date_create();
       $timestamp = date_timestamp_get($date);
   
       
       $query3 = "INSERT INTO `mcq_test_questions`(`id`, `test_id`, `mcq_question`, 
       `question_type`,`correct_answer_description`, `answer_hint`, `marks`, `note`, 
       `timestamp`) VALUES (NULL,$test_id,'$mcq_question','$question_type','$correct_answer_description','$answer_hint',
        $marks,'$note',$timestamp)";
   
       if ($con->query($query3) === TRUE) {
         $uploadsuccess = 1;
         
       } else {
         $uploadfail = 1;
         echo "Error: " . $query3 . "<br>" . $con->error;
       }
   
       if($uploadsuccess == 1 && $uploadfail == 0){
         ?>
<script>
   // window.location = '../test/mcq-test-list.php';
   swal({
  title: "Question Added",
  text: "Long Answer added successfully!",
  icon: "success",
  button: "Done",
});
setTimeout(function(){ window.location = "../test/mcq-test-list.php"; }, 2000);
</script>
<?php
}
}
}?>