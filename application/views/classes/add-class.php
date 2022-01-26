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
      <title>Add Session | Fingertips </title>
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
            <div class="page-body">
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col">
                           <div class="page-header-left">
                              <h3>Add Session</h3>
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
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                        <div id="success" class="alert  alert-dismissible fade show alerttoggle custom-success" role="alert"><strong>Woyee!</strong> Data Uploaded Successfully.
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                  </div>
                  <div id="failed" class="alert  alert-dismissible fade show alerttoggle custom-danger" role="alert"><strong>Holy!</strong> Data Upload Failed.
                     <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title=""><span aria-hidden="true">×</span></button>
                  </div>
                           <div class="card-header">
                              <h5>Add Offline Session</h5>
                              <span
                                 >Please Select Batch Before Adding Sessions!</span
                                 >
                           </div>
                           <div class="card-body">
                              <form action="" method="post">
                                 <input type="hidden" name="count_number" id="count_number">
                                 <div class="form-layout form-layout-1">
                                    <!-- batch name starts here -->
                                    <div class="row">
                                       <div class="col-lg-6">
                                          <div class="form-group mg-b-10-force">
                                             <label class="control-label">
                                             Select Batch<span class="text-danger">*</span></label
                                                >
                                             <select
                                                name="batch_id"
                                                id="batch_type"
                                                class="form-control select2 select2-hidden-accessible"
                                                required
                                                >
                                                <option label="Choose Batch "></option>
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
                                                id="batch_head_id"
                                                class="form-control select2 select2-hidden-accessible"
                                                required
                                                >
                                                <option label="Choose Class Head"></option>
                                                <?php
                                                   $query2 = "SELECT `id`,`name` FROM `user2` WHERE `role` = 'faculty' AND `is_deleted` = 0";
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
                                    <hr>
                                    <!-- <div class="row  mb-3">
                                       <div class="col-lg-1 text-center">
                                          <strong>Sr No</strong>
                                       </div>
                                       <div class="col-lg-3 ">
                                          <strong>Session Name</strong>
                                       </div>
                                       <div class="col-lg-2 ">
                                          <strong>Date</strong>
                                       </div>
                                       <div class="col-lg-2 ">
                                          <strong>Start Time</strong>
                                       </div>
                                       <div class="col-lg-2 ">
                                          <strong>End Time</strong>
                                       </div>
                                       <div class="col-lg-2 ">
                                          <strong>Course</strong>
                                       </div>
                                    </div> -->
                                    <div id="all_products"></div>
                                    <div class="row ">
                                       <div class="col-md-12 p-4">
                                          <div
                                             class="btn btn-primary"
                                             style="border-radius: 100px"
                                             onclick="CreateClass();"
                                             data-toggle="tooltip" title="Add Class"
                                             >
                                             <i class="fas fa-plus"></i>
                                          </div>
                                          <div
                                             class="btn btn-danger"
                                             style="border-radius: 100px"
                                             onclick="RemoveClass();"
                                             data-toggle="tooltip" title="Remove Class"
                                             >
                                             <i class="fas fa-minus"></i>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-layout-footer mg-t-15 float-right">
                                       
                                       <div class="row">
                     <div class="col-md-12 ">
                        <div class="float-right">
                           <button class="btn btn-light waves-effect" data-dismiss="modal">
                              Cancel
                           </button>
                           <button
                              class="btn btn-primary waves-effect"
                              type="submit"
                              name="add_session"
                           >
                              Add Session
                           </button>
                        </div>
                     </div>
                  </div>
                                    </div>
                              </form>
                              <!-- //rajni ends -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br><br>
                  <br><br>
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
      <!-- creating classes -->
      <script>
         var n=1;
         function CreateClass(){
           var getmaindiv = document.getElementById('all_products');
           var rowdiv1 = document.createElement('div');
           var rowdiv2 = document.createElement('div');
           var rowdiv3 = document.createElement('div');
           var rowdiv4 = document.createElement('div');
           var rowdiv5 = document.createElement('div');
           var coldiv1 = document.createElement('div');
           var coldiv2 = document.createElement('div');
           var coldiv3 = document.createElement('div');
           var coldiv4 = document.createElement('div');
           var coldiv5 = document.createElement('div');
           var coldiv6 = document.createElement('div');
           var coldiv_extra = document.createElement('div');
           var coldiv7 = document.createElement('div');
           var coldiv8 = document.createElement('div');
           var coldiv9 = document.createElement('div');
           var coldiv10 = document.createElement('div');
           var coldiv11 = document.createElement('div');

           var coldiv12 = document.createElement('div');
           var coldiv13 = document.createElement('div');
           var coldiv14 = document.createElement('div');
           var coldiv15 = document.createElement('div');
           var coldiv16 = document.createElement('div');
           var coldiv17 = document.createElement('div');
           var coldiv18 = document.createElement('div');
           var coldiv19 = document.createElement('div');
           var coldiv20 = document.createElement('div');
           var coldiv21 = document.createElement('div');
           var coldiv22 = document.createElement('div');
           var coldiv23 = document.createElement('div');

           var hr = document.createElement('hr');
           var coldiv2_1 = document.createElement('div');
         
                   
           var formgroupdiv1 = document.createElement('div');
           var formgroupdiv2 = document.createElement('div');
           var formgroupdiv3 = document.createElement('div');
           var formgroupdiv4 = document.createElement('div');
           var formgroupdiv5 = document.createElement('div');
           var formgroupdiv6 = document.createElement('div');
           var formgroupdiv7 = document.createElement('div');
           var formgroupdiv8 = document.createElement('div');
           var formgroupdiv9 = document.createElement('div');
           var formgroupdiv10 = document.createElement('div');
           var formgroupdiv11 = document.createElement('div');
           
           var labelelm = document.createElement('label');
           var inputelm2 = document.createElement('input');
           var inputelm3 = document.createElement('input');
           var inputelm4 = document.createElement('input');
           var inputelm5 = document.createElement('input');
           var inputelm6 = document.createElement('select');
           var inputelm7 = document.createElement('select');
           var inputelm8 = document.createElement('select');
           var inputelm9 = document.createElement('select');
           var inputelm10 = document.createElement('select');
           var inputelm11 = document.createElement('select');


           var strongelement1 = document.createElement('strong');
           var strongelement2 = document.createElement('strong');
           var strongelement3 = document.createElement('strong');
           var strongelement4 = document.createElement('strong');
           var strongelement5 = document.createElement('strong');
           var strongelement6 = document.createElement('strong');
           var strongelement7 = document.createElement('strong');
           var strongelement8 = document.createElement('strong');
           var strongelement9 = document.createElement('strong');
           var strongelement10 = document.createElement('strong');
           var strongelement11 = document.createElement('strong');
           var strongelement12 = document.createElement('strong');
           var strongelement13 = document.createElement('strong');
// label anzarkhan.com
           var labeltext1 = document.createTextNode("Sr No");
           var labeltext2 = document.createTextNode("Session Name");
           var labeltext3 = document.createTextNode("Date");
           var labeltext4 = document.createTextNode("Start Time");
           var labeltext5 = document.createTextNode("End Time");
           var labeltext6 = document.createTextNode("Course");
           var labeltext7 = document.createTextNode(" ");
           var labeltext8 = document.createTextNode("PPT");
           var labeltext9 = document.createTextNode("Class Resource ");
           var labeltext10 = document.createTextNode("Reading Material");
           var labeltext11 = document.createTextNode("Assignment");
           var labeltext12 = document.createTextNode("Test");
           var labeltext13 = document.createTextNode("13");

           
           
           inputelm7.setAttribute('multiple','true');
           inputelm8.setAttribute('multiple','true');
           inputelm9.setAttribute('multiple','true');
           inputelm10.setAttribute('multiple','true');
           inputelm11.setAttribute('multiple','true');

           inputelm7.setAttribute('style','height:200px;overflow-x:auto;');
           inputelm8.setAttribute('style','height:200px;overflow-x:auto;');
           inputelm9.setAttribute('style','height:200px;overflow-x:auto;');
           inputelm10.setAttribute('style','height:200px;overflow-x:auto;');
           inputelm11.setAttribute('style','height:200px;overflow-x:auto;');
         
           var courseoption0 = document.createElement('option');
           var readingmaterial0 = document.createElement('option');
           var classresource0 = document.createElement('option');
           var ppt0 = document.createElement('option');
           var assignment0 = document.createElement('option');
           var test0 = document.createElement('option');
         
           
           courseoption0.setAttribute("label","Course");
           inputelm6.appendChild(courseoption0);
         
         
         
         
           <?php 
            $query2 = "SELECT `id`,`name` FROM `course` WHERE `is_deleted` = 0 ";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var courseoption<?php echo $index_number; ?> = document.createElement('option');          
             courseoption<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['name']; ?>");
             courseoption<?php echo $index_number; ?>.appendChild(t);
             inputelm6.appendChild(courseoption<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
         
         <?php 
            // for reading material
            $query2 = "SELECT `id`,`topic_name` FROM `material` WHERE `category` = 1 AND `is_deleted` = 0";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var readingmaterial<?php echo $index_number; ?> = document.createElement('option');
             readingmaterial<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['topic_name']; ?>");
             readingmaterial<?php echo $index_number; ?>.appendChild(t);
             inputelm7.appendChild(readingmaterial<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
         
         
         <?php 
            // for resource
            $query2 = "SELECT `id`,`topic_name` FROM `material` WHERE `category` = 2 AND `is_deleted` = 0";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var classresource<?php echo $index_number; ?> = document.createElement('option');
             classresource<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['topic_name']; ?>");
             classresource<?php echo $index_number; ?>.appendChild(t);
             inputelm8.appendChild(classresource<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
         
         
         
         <?php 
            // ppt
            $query2 = "SELECT `id`,`topic` FROM `ppt` WHERE `is_deleted` = 0";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var ppt<?php echo $index_number; ?> = document.createElement('option');
             ppt<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['topic']; ?>");
             ppt<?php echo $index_number; ?>.appendChild(t);
             inputelm9.appendChild(ppt<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
           
         
         
           
         <?php 
            // assignment
            $query2 = "SELECT `id`,`topic_name` FROM `assignment` WHERE `is_deleted` = 0";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var assignment<?php echo $index_number; ?> = document.createElement('option');
             assignment<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['topic_name']; ?>");
             assignment<?php echo $index_number; ?>.appendChild(t);
             inputelm10.appendChild(assignment<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
         
               
         <?php 
            // test
            $query2 = "SELECT `id`,`topic_name` FROM `mcq_test` WHERE `is_deleted` = 0";
            $runfetch2 = mysqli_query($con, $query2);
            $noofrow2 = mysqli_num_rows($runfetch2);
            
            $index_number = 1;
            
            if ($noofrow2 > 0 && $runfetch2 == TRUE) {                                
                while ($data2 = mysqli_fetch_assoc($runfetch2)) {
            ?>
             var test<?php echo $index_number; ?> = document.createElement('option');
             test<?php echo $index_number; ?>.setAttribute("value", "<?php echo $data2['id']; ?>");
             var t = document.createTextNode("<?php echo $data2['topic_name']; ?>");
             test<?php echo $index_number; ?>.appendChild(t);
             inputelm11.appendChild(test<?php echo $index_number; ?>);
             
             <?php
            $index_number++;
            }
            }       
            
            ?>
           
           
         
           rowdiv1.setAttribute('class','row');
           rowdiv1.setAttribute('id','rowdiv'+n);
         
           rowdiv2.setAttribute('class','row');
           rowdiv2.setAttribute('id','rowdiv2'+n);

           rowdiv3.setAttribute('class','row');
           rowdiv3.setAttribute('id','rowdiv3'+n);

           rowdiv4.setAttribute('class','row');
           rowdiv4.setAttribute('id','rowdiv4'+n);

           rowdiv5.setAttribute('class','row');
           rowdiv5.setAttribute('id','rowdiv5'+n);
           // hr.setAttribute('style','border:1px solid black')
         
           coldiv1.setAttribute('class','col-lg-1 text-center');
           coldiv2.setAttribute('class','col-lg-3');
           coldiv3.setAttribute('class','col-lg-2');
           coldiv4.setAttribute('class','col-lg-2');
           coldiv5.setAttribute('class','col-lg-2');
           coldiv6.setAttribute('class','col-lg-2');
           coldiv_extra.setAttribute('class','col-lg-1');
           coldiv7.setAttribute('class','col-lg-3');
           coldiv8.setAttribute('class','col-lg-2');
           coldiv9.setAttribute('class','col-lg-2');
           coldiv10.setAttribute('class','col-lg-2');
           coldiv11.setAttribute('class','col-lg-2');
           

           coldiv12.setAttribute('class','col-lg-1 text-center');
           coldiv13.setAttribute('class','col-lg-3');
           coldiv14.setAttribute('class','col-lg-2');
           coldiv15.setAttribute('class','col-lg-2');
           coldiv16.setAttribute('class','col-lg-2');
           coldiv17.setAttribute('class','col-lg-2');
           coldiv17.setAttribute('class','col-lg-2');
           coldiv18.setAttribute('class','col-lg-1');
           coldiv19.setAttribute('class','col-lg-3');
           coldiv20.setAttribute('class','col-lg-2');
           coldiv21.setAttribute('class','col-lg-2');
           coldiv22.setAttribute('class','col-lg-2');
           coldiv23.setAttribute('class','col-lg-2');
         
           coldiv2_1.setAttribute('class','col-lg-12')
           
         
           formgroupdiv1.setAttribute('class','form-group');
           formgroupdiv2.setAttribute('class','form-group');
           formgroupdiv3.setAttribute('class','form-group');
           formgroupdiv4.setAttribute('class','form-group');
           formgroupdiv5.setAttribute('class','form-group');
           formgroupdiv6.setAttribute('class','form-group');
           formgroupdiv7.setAttribute('class','form-group');
           formgroupdiv8.setAttribute('class','form-group');
           formgroupdiv9.setAttribute('class','form-group');
           formgroupdiv10.setAttribute('class','form-group');
           formgroupdiv11.setAttribute('class','form-group');
           
         
           labelelm.innerHTML = n;
           inputelm2.setAttribute('class','form-control ');
           inputelm3.setAttribute('class','form-control');
           inputelm4.setAttribute('class','form-control');
           inputelm5.setAttribute('class','form-control rate_class');
           inputelm6.setAttribute('class','form-control number_of_pkgs_class');
           inputelm7.setAttribute('class','form-control');
           inputelm8.setAttribute('class','form-control');
           inputelm9.setAttribute('class','form-control');
           inputelm10.setAttribute('class','form-control');
           inputelm11.setAttribute('class','form-control');
         
           
           
         
           inputelm2.setAttribute('type','text');
           inputelm3.setAttribute('type','date');
           inputelm4.setAttribute('type','time');
           inputelm5.setAttribute('type','time');
           // inputelm6.setAttribute('type','number');
           // inputelm7.setAttribute('type','number');
           // inputelm8.setAttribute('type','number');
           // inputelm9.setAttribute('type','number');
           // inputelm10.setAttribute('type','number');
           // inputelm11.setAttribute('type','number');
           
         
           inputelm2.setAttribute('Placeholder','Class Name');
           inputelm3.setAttribute('Placeholder','Date');
           inputelm4.setAttribute('Placeholder','Time');
           inputelm5.setAttribute('Placeholder','Time');
           inputelm6.setAttribute('Placeholder','Choose Course Name');
           inputelm7.setAttribute('Placeholder','Choose Reading Material');
           inputelm8.setAttribute('Placeholder','Session Resource');
           inputelm9.setAttribute('Placeholder','Choose PPT');
           inputelm10.setAttribute('Placeholder','Assignmet');
           inputelm11.setAttribute('Placeholder','Test');
         
           inputelm2.setAttribute('Value','Session '+n);
         
           inputelm2.setAttribute('name','session_name'+n);
           inputelm3.setAttribute('name','session_date'+n);
           inputelm4.setAttribute('name','start_time'+n);
           inputelm5.setAttribute('name','end_time'+n);
           inputelm6.setAttribute('name','course'+n);
           inputelm7.setAttribute('name','reading_material'+n+'[]');
           inputelm8.setAttribute('name','session_resource'+n+'[]');
           inputelm9.setAttribute('name','ppt'+n+'[]');
           inputelm10.setAttribute('name','assignment'+n+'[]');
           inputelm11.setAttribute('name','test'+n+'[]');
         

           inputelm4.setAttribute('value','08:00');
           inputelm5.setAttribute('value','10:00');

           inputelm2.setAttribute('required','true');
           inputelm3.setAttribute('required','true');
           inputelm4.setAttribute('required','true');
           inputelm5.setAttribute('required','true');
           inputelm6.setAttribute('required','true');
         //   inputelm7.setAttribute('required','false');
         //   inputelm8.setAttribute('required','false');
         //   inputelm9.setAttribute('required','false');
         //   inputelm10.setAttribute('required','false');
         //   inputelm11.setAttribute('required','false');
           
         
           
           var createrowdiv3 = getmaindiv.appendChild(rowdiv3);            
           var createrowdiv1 = getmaindiv.appendChild(rowdiv1);
           var createrowdiv4 = getmaindiv.appendChild(rowdiv4);
           var createrowdiv5 = getmaindiv.appendChild(rowdiv5);
           
           var createrowdiv2 = getmaindiv.appendChild(rowdiv2);
         
           var createcoldiv1 = createrowdiv1.appendChild(coldiv1);
           var createcoldiv2 = createrowdiv1.appendChild(coldiv2);
           var createcoldiv3 = createrowdiv1.appendChild(coldiv3);
           var createcoldiv4 = createrowdiv1.appendChild(coldiv4);
           var createcoldiv5 = createrowdiv1.appendChild(coldiv5);
           var createcoldiv6 = createrowdiv1.appendChild(coldiv6);
           var createcoldiv_extra  = createrowdiv5.appendChild(coldiv_extra);        
           var createcoldiv7 = createrowdiv5.appendChild(coldiv7);
           var createcoldiv8 = createrowdiv5.appendChild(coldiv8);
           var createcoldiv9 = createrowdiv5.appendChild(coldiv9);
           var createcoldiv10 = createrowdiv5.appendChild(coldiv10);
           var createcoldiv11 = createrowdiv5.appendChild(coldiv11);

           var createcoldiv12 = createrowdiv3.appendChild(coldiv12);
           var createcoldiv13 = createrowdiv3.appendChild(coldiv13);
           var createcoldiv14 = createrowdiv3.appendChild(coldiv14);
           var createcoldiv15 = createrowdiv3.appendChild(coldiv15);
           var createcoldiv16 = createrowdiv3.appendChild(coldiv16);
           var createcoldiv17 = createrowdiv3.appendChild(coldiv17);
           var createcoldiv18 = createrowdiv4.appendChild(coldiv18);
           var createcoldiv19 = createrowdiv4.appendChild(coldiv19);
           var createcoldiv20 = createrowdiv4.appendChild(coldiv20);
           var createcoldiv21 = createrowdiv4.appendChild(coldiv21);
           var createcoldiv22 = createrowdiv4.appendChild(coldiv22);
           var createcoldiv23 = createrowdiv4.appendChild(coldiv23);
         
           
           var createcoldiv2_1 = createrowdiv2.appendChild(coldiv2_1);
           var createhr = createcoldiv2_1.appendChild(hr);
         
         
           var createformgroupdiv1 = createcoldiv1.appendChild(formgroupdiv1);
           var createformgroupdiv2 = createcoldiv2.appendChild(formgroupdiv2);
           var createformgroupdiv3 = createcoldiv3.appendChild(formgroupdiv3);
           var createformgroupdiv4 = createcoldiv4.appendChild(formgroupdiv4);
           var createformgroupdiv5 = createcoldiv5.appendChild(formgroupdiv5);
           var createformgroupdiv6 = createcoldiv6.appendChild(formgroupdiv6);
           var createformgroupdiv7 = createcoldiv7.appendChild(formgroupdiv7);
           var createformgroupdiv8 = createcoldiv8.appendChild(formgroupdiv8);
           var createformgroupdiv9 = createcoldiv9.appendChild(formgroupdiv9);
           var createformgroupdiv10 = createcoldiv10.appendChild(formgroupdiv10);
           var createformgroupdiv11 = createcoldiv11.appendChild(formgroupdiv11);

           var createstrongelement1 = createcoldiv12.appendChild(strongelement1);
           var createstrongelement2 = createcoldiv13.appendChild(strongelement2);
           var createstrongelement3 = createcoldiv14.appendChild(strongelement3);
           var createstrongelement4 = createcoldiv15.appendChild(strongelement4);
           var createstrongelement5 = createcoldiv16.appendChild(strongelement5);
           var createstrongelement6 = createcoldiv17.appendChild(strongelement6);
           var createstrongelement7 = createcoldiv18.appendChild(strongelement7);
           var createstrongelement8 = createcoldiv19.appendChild(strongelement8);
           var createstrongelement9 = createcoldiv20.appendChild(strongelement9);
           var createstrongelement10 = createcoldiv21.appendChild(strongelement10);
           var createstrongelement11= createcoldiv22.appendChild(strongelement11);
           var createstrongelement12= createcoldiv23.appendChild(strongelement12);


           var createlabeltext1 = createstrongelement1.appendChild(labeltext1);
           var createlabeltext2 = createstrongelement2.appendChild(labeltext2);
           var createlabeltext3 = createstrongelement3.appendChild(labeltext3);
           var createlabeltext4 = createstrongelement4.appendChild(labeltext4);
           var createlabeltext5 = createstrongelement5.appendChild(labeltext5);
           var createlabeltext6 = createstrongelement6.appendChild(labeltext6);
           var createlabeltext7 = createstrongelement7.appendChild(labeltext7);
           var createlabeltext8 = createstrongelement8.appendChild(labeltext8);
           var createlabeltext9 = createstrongelement9.appendChild(labeltext9);
           var createlabeltext10 = createstrongelement10.appendChild(labeltext10);
           var createlabeltext11 = createstrongelement11.appendChild(labeltext11);
           var createlabeltext12 = createstrongelement12.appendChild(labeltext12);
           
           

         
           
         
           createformgroupdiv1.appendChild(labelelm);
           createformgroupdiv2.appendChild(inputelm2);
           createformgroupdiv3.appendChild(inputelm3);
           createformgroupdiv4.appendChild(inputelm4);
           createformgroupdiv5.appendChild(inputelm5);
           createformgroupdiv6.appendChild(inputelm6);
           createformgroupdiv7.appendChild(inputelm9);
           createformgroupdiv8.appendChild(inputelm8);
           createformgroupdiv9.appendChild(inputelm7);
           createformgroupdiv10.appendChild(inputelm10);
           createformgroupdiv11.appendChild(inputelm11);


         //   createformgroupdiv7.appendChild(inputelm7);
         //   createformgroupdiv8.appendChild(inputelm8);
         //   createformgroupdiv9.appendChild(inputelm9);
         //   createformgroupdiv10.appendChild(inputelm10);
         //   createformgroupdiv11.appendChild(inputelm11);
         
           document.getElementById('count_number').value = n;
         
           
           
           
           n++;
         }
         CreateClass();
         
         function RemoveClass(){
           console.log(n);
           n--;
           if(n<=1){
             n=1;
             console.log(n);
           }
           var myobj = document.getElementById('rowdiv'+ n);
           myobj.remove();
           
           
         
         }
         
      </script>
      <script>
         $(document).ready(function(){
           $('[data-toggle="tooltip"]').tooltip();
         });
      </script>
      <script>
         function ChangeClassesDate(){
              var getDate = document.getElementById('next_followup_date').value; 
              console.log(getDate);                               
              getDate = getDate.split("-");
              var newDate = new Date(getDate[0], getDate[1] - 1, getDate[2]);
              console.log(newDate);
              var nextfollowupdatetimestamp = newDate.getTime()/1000;
              console.log(nextfollowupdatetimestamp);
              document.getElementById('next_followup_date_hidden').value = nextfollowupdatetimestamp;
            }
      </script>
   </body>
</html>
<?php
   if (isset($_POST['add_session'])) {
     
   
     $batch_id = $_POST['batch_id'];
     $count_number = $_POST['count_number'];
     $assigned_to = $_POST['assigned_to'];
   
     for($i = 1; $i<=$count_number;$i++){
     
       $session_name = $_POST['session_name'.$i];
       $session_date = $_POST['session_date'.$i];
       $session_date_timestamp = strtotime("$session_date");
     
     
       $start_time = $_POST['start_time'.$i];
       $start_time_timestamp = strtotime("$session_date $start_time");
       $end_time = $_POST['end_time'.$i];
       $end_time_timestamp = strtotime("$session_date $end_time");
       $course = $_POST['course'.$i];
      //  $reading_material = $_POST['reading_material'.$i.'[]'];
      //  echo $reading_material;

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
       
       $query3 = "INSERT INTO `offline_session`(`id`, `batch_Id`, 
       `session_name`, `session_date`, `start_time`, `end_time`,
       `course`, `reading_material`, `session_resource`, `ppt`, 
       `assignment`, `test`,`assigned_to`,`timestamp`) VALUES (NULL,
       $batch_id,'$session_name',$session_date_timestamp,$start_time_timestamp,
       $end_time_timestamp,$course,'$selected_reading_material','$selected_session_resource','$selected_ppt',
       '$selected_assignment','$selected_test',$assigned_to,$timestamp);";

       
   
   if ($con->query($query3) === TRUE) {
     $uploadsuccess = 1;
     ?>
          <script>
            var element = document.getElementById("success");
            element.classList.remove("alerttoggle");
            console.log('su');
              
          </script>
        <?php
    } else {
     $uploadfail = 1;
   //   echo "Error: " . $query3 . "<br>" . $con->error;
     ?>
     <script>
       var element = document.getElementById("failed");
       element.classList.remove("alerttoggle");
       console.log('fails');
     </script>
   <?php
    }
   }
   }
   ?>