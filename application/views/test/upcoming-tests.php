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
    <title>Endless - Premium Admin Template</title>
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
    <div class="page-wrapper compact-wrapper"> <!--change compact-wrapper-->
         <?php require_once '../elements/header.php' ?>
         <!-- Page Body Start-->
         <div class="page-body-wrapper sidebar-icon"> <!-- sidebar-icon -->
            <!-- Page Sidebar Start-->
            <?php require_once '../elements/compact_sidebar_admin.php' ?>
            <!-- Page Sidebar Ends-->
       
        <!-- Right sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col">
                  <div class="page-header-left">
                    <h3>Upcoming Test</h3>
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="../auth/login.php"><i data-feather="home"></i></a>
                      </li>
                      <li class="breadcrumb-item">Test</li>
                      
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
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="mb-1">Upcoming Test</h5>
                    
                  </div>
                  <div class="card-body">

                    <p class="float-right">
                      <a
                        id="select-all"
                        onclick="checkuncheckfunction();"
                        style="color: #5c76fb; cursor: pointer"
                        >Select All</a
                      >
        
                      <a
                        id="assign"
                        style="color: #5c76fb; display: none; cursor: pointer"
                        data-toggle="modal"
                        data-target="#assignmodal"
                        >| Assign</a
                      >
        
                      <a
                        id="delete"
                        style="color: #5c76fb; display: none; cursor: pointer"
                        data-toggle="modal"
                        data-target="#deletemodal"
                        >| Delete</a
                      >
                    </p>
                    <div class="table-responsive">
                      <table
                id="basic-1"
                class="display"
              >

              <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Select</th>
                    <th>ID</th>
                    <th>Exam Date</th>
                    <th>Exam Time</th>
                    <th>Class Type</th>
                    <th>Total Time</th>
                    <th>Total Marks</th>
                    <th>Number Of Questions</th>
                    <th>Batch</th>
                    <th>Assign to</th>
                    <th>Course</th>
                    
                    <th class="tx-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">1</a></td>
                    <td>
                      <div class="custom-control custom-checkbox">
                        &nbsp;&nbsp;
                        <input
                          type="checkbox"
                          class="custom-control-input check-uncheck"
                          id="customCheck1"
                        />
                        <label
                          class="custom-control-label"
                          for="customCheck1"
                        ></label>
                      </div>
                    </td>

                    <td>#96574</td>
                    <td>30/12/20</td>
                    <td>5:10 AM</td>
                    <td>MCQ Test</td>
                    <td>3 hours</td>
                    <td>50 Marks</td>
                    <td>50 </td>
                    <td>Batch1</td>

                    <td>gin</td>
                    <td>Python</td>
                    <td class="tx-center">
                      <div class="dropdown">
                        <a href="#" class="" data-toggle="dropdown"
                          ><i
                            data-feather="more-horizontal"
                            class="wd-16 ht-16"
                          ></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          
                          <a href="#" class="dropdown-item"
                            ><i
                              data-feather="edit-2"
                              class="wd-16 ht-16 mr-2"
                            ></i
                            >Edit</a
                          >
                          <a href="#" class="dropdown-item"
                            ><i
                              data-feather="trash"
                              class="wd-16 ht-16 mr-2"
                            ></i
                            >Delete</a
                          >
                         
                          
                          <a href="#" class="dropdown-item"
                            ><i
                              data-feather="user-plus"
                              class="wd-16 ht-16 mr-2"
                            ></i
                            >Assign</a
                          >
                          <a href="#" class="dropdown-item"
                            ><i
                              data-feather="flag"
                              class="wd-16 ht-16 mr-2"
                            ></i
                            >Mark Completed</a
                          >
                        </div>
                      </div>
                    </td>
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
  </body>

</html>
