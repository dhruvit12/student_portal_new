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
   
   
      $ftip69_acc_video_share = $data['acc_video_share'];
      
   
   // success
   if ($ftip69_acc_video_share==1) {
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
      if (isset($_POST['share_session_videos'])) {
        
      
        $session_id = $_POST['session_id'];
        $shared_with = $_POST['shared_with'];
        $shared_by = $_SESSION['ftip69_uid'];
        $date = date_create();
        $timestamp = date_timestamp_get($date);

      $user_id = $_SESSION['ftip69_uid'];
      $query = "SELECT * FROM `share_session_videos` WHERE `offline_session_log_id` = $session_id AND `shared_with` = $shared_with;";
      $run = mysqli_query($con, $query);
      $row = mysqli_num_rows($run);
      $data = mysqli_fetch_assoc($run);
      if($row < 1){

        $query3 = "INSERT INTO `share_session_videos`(`id`, `offline_session_log_id`, `shared_with`, `shared_by`, `timestamp`) 
        VALUES (NULL,$session_id,$shared_with,$shared_by,$timestamp)";
    
      
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

      }else{
        echo "<script>alert('Video Already Shared');</script>";
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
      <title>Video List | Fingertip Portal</title>
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
                              <h3>Video List</h3>
                              <ol class="breadcrumb">
                                 <li class="breadcrumb-item">
                                    <a href="../auth/login.php"><i data-feather="home"></i></a>
                                 </li>
                                 <li class="breadcrumb-item">Video List</li>
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
                           <div class="card-header">
                              <h5 class="mb-1">Video List</h5>
                              <span>All the videos uploaded in sessions. </span>
                           </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table
                                    id="basic-1"
                                    class="display"
                                    >
                                    <thead>
                                       <tr>
                                          <th>Sr No</th>
                                          <th>Session ID</th>
                                          <th>Session Name</th>
                                          

                                          <th class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          $query = "SELECT * FROM `offline_session_log` WHERE `is_completed` = 1";
                                          
                                          $runfetch = mysqli_query($con, $query);
                                          
                                          $noofrow = mysqli_num_rows($runfetch);
                                          
                                          
                                           $indexnumber = 1;
                                          if ($noofrow > 0 && $runfetch == TRUE) { 
                                              while ($data = mysqli_fetch_assoc($runfetch)) { 



                                                $string1 = $data['recording_files']; 
                                                $str_arr1 = explode (",", $string1);  
                                                $no_of_videos =  sizeof($str_arr1);

                                          
                                        ?>
                                       <tr>
                                          <td><?php echo $indexnumber;?></td>
                                          <td><?php echo '#'.$data['session_id']; ?></td>
                                          
                                          
                                          <td>
                                          <?php
                                          $session_id = $data['session_id'];
                                          $query10 = "SELECT * FROM `offline_session` WHERE `id` = $session_id";
                                          
                                          $runfetch10 = mysqli_query($con, $query10);
                                          
                                          $noofrow10 = mysqli_num_rows($runfetch10);
                                          
                                          
                                           
                                          if ($noofrow10 > 0 && $runfetch10 == TRUE) { 
                                              while ($data10 = mysqli_fetch_assoc($runfetch10)) { 
                                                  echo $data10['session_name'];
                                              }
                                            }
                                        ?>
                                          </td>
                                          <td class="text-center">
                                             <a
                                                href="../sharing-center/play-class-recording.php?id=<?php echo $session_id; ?>"
                                                data-toggle="tooltip"
                                                title="Play Video"
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                ><i
                                                data-feather="play"
                                                class="wd-16 ht-16 mr-2 text-primary"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a
                                                >
                                             
                                             <a
                                                class=""
                                                style="padding-left:5px; display: inline-block; cursor:pointer"
                                                data-toggle="tooltip"
                                                title="Share Session Videos"
                                                ><i
                                                data-toggle="modal" 
                                                data-target="#sharePPTModal"
                                                data-feather="share-2"
                                                onclick="prepareSharePPT('<?php echo $data['id']; ?>');"
                                                class="wd-16 ht-16 mr-2 text-dark"
                                                style="width: 16px; height: 16px"
                                                ></i
                                                ></a
                                                >
                                          </td>
                                          <?php
                                             $indexnumber++;
                                          }
                                                   }
                                                 
                                             ?>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Zero Configuration  Ends-->
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php require_once '../elements/footer.php' ?>
         </div>
      </div>
      <!-- Modal -->
      <div
         class="modal fade"
         id="sharePPTModal"
         tabindex="-1"
         role="dialog"
         aria-labelledby="ModalComponents"
         aria-hidden="true"
         >
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="ModalComponents">Share Session Videos</h5>
                  <button
                     type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close"
                     >
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <form action="" method="post">
               <div class="modal-body p-5">
                  <div class="form-group">
                     <label class="form-control-label active"
                        >Session ID
                     <span class="text-danger">*</span></label
                        >
                     <input
                        class="form-control txtOnly"
                        type="text"
                        name="session_id"
                        id="share_ppt_ppt_id"
                        placeholder="Enter PPT ID"
                        required readonly
                        />
                  </div>
                  <div class="form-group">
                     <label for="">Share To </label>
                     <select class="custom-select" name="shared_with" required>
                        <option label="--Select--">Select User</option>
                        <?php
                           $query = "SELECT * FROM `user2` WHERE is_deleted = 0";
                           
                           $runfetch = mysqli_query($con, $query);
                           
                           $noofrow = mysqli_num_rows($runfetch);
                           
                           
                           $indexnumber = 1;
                           if ($noofrow >
                           0 && $runfetch == TRUE) { while ($data =
                           mysqli_fetch_assoc($runfetch)) { ?>
                        <option value="<?php echo $data['id']; ?>"><?php echo $data['email'];?></option>
                        <?php
                           }}
                           ?>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <div class="row">
                     <div class="col-md-12 pt-0">
                        <div class=" float-right">
                           <button
                              class="btn btn-light waves-effect"
                              data-dismiss="modal"
                              >
                           Cancel
                           </button>
                           <button
                              class="btn btn-primary waves-effect"
                              type="submit"
                              name="share_session_videos"
                              >
                           Share 
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- delete modal -->
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
         function prepareSharePPT(id){
           var get_share_ppt_ppt_id = document.getElementById('share_ppt_ppt_id');
           get_share_ppt_ppt_id.value = id;
         }
      </script>
   </body>
</html>