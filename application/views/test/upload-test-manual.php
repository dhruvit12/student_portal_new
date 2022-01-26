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
   $getid='';
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
      <!-- <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div> -->
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
            <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Upload Test Manual</h5>
                    <span>Upload Test Question Manual Using .CSV file</span>
                    
                  </div>
                  <div class="card-body">
                    <form action="upload-test-manual-backend.php" method="post" enctype="multipart/form-data">
                    <div class="form-layout form-layout-1">
                      <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Upload CSV <span class="text-danger">*</span></label
                            >
                            <div class="input-group">
                              <div class="custom-file">
                                <input
                                  type="file"
                                  class="custom-file-input"
                                  name="csv_file"
                                  id="csv_file" accept=".csv"
                                  placeholder = "";
                                />
                                <label class="custom-file-label" for="csv_file"
                                  >Choose file</label
                                >
                                <input type="hidden" name="id" value="<?php echo $getid;?>"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4"></div>
                      </div>
        
                      <div class="row">
                        <div class="col-12">
                          <hr class="mg-y-50" />
                          <h5 id="templatefeatures" class="mb-20">
                            CSV Upload Guideline
                          </h5>
                          <p>Please follow this rules to successfully upload data.</p>
                          <p>&nbsp;</p>
                          <ol class="list-circle">
                            <li><a href="mcq-test-questions.csv" Download>Download Sample CSV</a></li>
                            <li>
                              First and Last name should contain alphabets only (spaces
                              allowed).
                            </li>
                            <li>Email should be standard email address</li>
                            <li>
                              Mandatory columns - First name, Middle Name, Last Name,
                              Email and Phone 1.
                            </li>
                            <li>Upload Records Limit - Max: 1000, Min: 1.</li>
                          </ol>
                        </div>
                      </div>
        
                      <!-- row -->
                      <div class="form-layout-footer mg-t-15 float-right">
                        <button class="btn btn-primary waves-effect" type="submit" name="submit">Upload</button>
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
            
         </div>
      </div>
      
   </body>
       <!-- latest jquery-->
       <script src="../../assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../assets/js/bootstrap/popper.min.js"></script>
    <script src="../../assets/js/bootstrap/bootstrap.js"></script>
   <script>
// Add the following code if you want the name of the file appear on select
$("#csv_file").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</html>