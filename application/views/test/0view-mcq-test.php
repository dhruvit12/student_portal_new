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
   if (!empty($_GET['id'])) {
     $getid = $_GET['id'];}else{
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
      <title>View MCQ | Fingertips</title>
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
                              <h3>View MCQ</h3>
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
                              <h5 class="mb-5">View MCQ</h5>
                              <form action="" method="post">
                                 <div class="form-layout form-layout-1">
                                    <?php
                                       $query10 = "SELECT * FROM `mcq_test_questions` WHERE `test_id` = $getid";
                                       $runfetch10 = mysqli_query($con, $query10);
                                       $noofrow10 = mysqli_num_rows($runfetch10);
                                       $index_number = 1;
                                         while ($data10 = mysqli_fetch_array($runfetch10)) {
                                           
                                           
                                           
                                       ?>
                                    <!-- single mcq starts here -->
                                    <h6 class="pb-3"><strong>MCQ <?php echo $index_number; ?></strong></h6>
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="form-group">
                                             <div class="row">
                                             <div class="col-md-12 "><div class="float-right"><p style="font-size:16px;"><strong>Marks: </strong><?php echo $data10['marks'];?></p></div></div>
                                             </div>
                                             <p style="font-size:20px;"><strong>Question :</strong><?php echo $data10['mcq_question'];?></p>
                                             <div class="row mt-2">
                                                <div class="col-md-3"><p style="font-size:16px;"><strong>A) </strong><?php echo $data10['option_a'];?></p></div>
                                                <div class="col-md-3"><p style="font-size:16px;"><strong>B) </strong><?php echo $data10['option_b'];?></p></div>
                                                <div class="col-md-3"><p style="font-size:16px;"><strong>C) </strong><?php echo $data10['option_c'];?></p></div>
                                                <div class="col-md-3"><p style="font-size:16px;"><strong>D) </strong><?php echo $data10['option_d'];?></p></div>
                                             </div>
                                             <div class="row mt-4">
                                                <div class="col-md-4"><p style="font-size:16px;"><strong>Correct Option: </strong><?php echo $data10['correct_option'];?></p></div>
                                                
                                                
                                             </div>   
                                             <div class="row ">
                                                <div class="col-md-12 mt-2"><p style="font-size:16px;"><strong>Answer Hint: </strong><?php echo $data10['answer_hint'];?></p></div>
                                                <div class="col-md-12 mt-2"><p style="font-size:16px;"><strong>Answer Description: </strong><?php echo $data10['correct_answer_description'];?></p></div>
                                             </div>  
                                             <div class="row mt-2">
                                                <div class="col-md-12"><p style="font-size:16px;"><strong>Note: </strong><?php echo $data10['note'];?></p></div>
                                             </div>   

                                            
                                          </div>
                                       </div>
                                    </div>
                                  
                                  
                                   
                                    
                                    <!-- notes ends here -->
                                    <hr class="mt-3" >
                                    <!-- single mcq ends here -->
                                    <?php
                                       }
                                       $index_number++;
                                       ?>
                                    <!-- row -->
                                    <div class="form-layout-footer mg-t-15 float-right">
                                       <!-- <button class="btn btn-primary waves-effect" name="upload_mcq" type="submit">
                                       Submit
                                       </button> -->
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
      <!-- Plugin used-->
   </body>
</html>
<?php
if (isset($_POST['upload_mcq'])) {
  $uploadsuccess = 0;
  $uploadfail = 0;
   $test_id = $getid;
   
   for ($index_number = 1; $index_number <= $count; $index_number++) {
   
       $mcq_question = $_POST['mcq_question'.$index_number];
       $option_a = $_POST['option_a'.$index_number];
       $option_b = $_POST['option_b'.$index_number];
       $option_c = $_POST['option_c'.$index_number];
       $option_d = $_POST['option_d'.$index_number];
       $correct_option = $_POST['correct_option'.$index_number];
       $correct_answer_description = $_POST['correct_answer_description'.$index_number];
       $answer_hint = $_POST['answer_hint'.$index_number];
       $marks = $_POST['marks'.$index_number];
       $note = $_POST['note'.$index_number];
       $date = date_create();
       $timestamp = date_timestamp_get($date);
   
       
       $query3 = "INSERT INTO `mcq_test_questions`(`id`, `test_id`, `mcq_question`, 
       `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, 
       `correct_answer_description`, `answer_hint`, `marks`, `note`, 
       `timestamp`) VALUES (NULL,$test_id,'$mcq_question','$option_a',
        '$option_b','$option_c','$option_d','$correct_option','$correct_answer_description','$answer_hint',
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
   window.location = 'print-invoice.php?id=<?php echo $invoice_id; ?>';
</script>
<?php
}
}
}?>