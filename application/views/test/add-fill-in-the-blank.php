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
    <title>Fingertips Webportal by anzarkhan.com</title>
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
                    <h3>Add Fill In The Blank </h3>
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
                    <h5 class="mb-5">Add Fill In The Blank</h5>

                    <div class="form-layout form-layout-1">
                      <!-- single question starts here -->
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
        
                      <!-- single question ends here -->
        
        
                      <!-- delete between this comment in backend -->
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <h5 class="pb-3">Question 1</h5>
                      <div class="row">
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Question: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
        
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="firstname"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <input
                              class="form-control"
                              type="text"
                              name="Question part 3"
                              placeholder="Enter firstname"
                            />
                          </div>
                        </div>
                        <div class="col-lg-2 text-center">
                          <div class="form-group">
                            <label class="form-control-label active">&nbsp;</label>
                            <div class="align-bottom">
                              <u style="line-height: 50px"
                                >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Blank
                                3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- option row -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 1: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 2: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct Answer Blank 3: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="lastname"
                              value=""
                              placeholder="Option A"
                            />
                          </div>
                        </div>
                      </div>
                      <!-- option row ends here -->
        
                      
        
                      <!-- correct answer and mark -->
                      <div class="row">
                        <!-- col-4 -->
                        <div class="col-lg-8">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Correct answer description:
                              <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              placeholder="Enter email address"
                            />
                          </div>
                        </div>
                        <!-- col-4 -->
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label active"
                              >Marks: <span class="tx-danger">*</span></label
                            >
                            <input
                              class="form-control"
                              type="text"
                              name="email"
                              value=""
                              placeholder="MCQ Mark"
                            />
                          </div>
                        </div>
        
                        <!-- correct answer and marks ends here  -->
                      </div>
                      <!-- note starts here -->
        
                      <div class="row">
                        <div class="col-lg mg-t-10 mg-lg-t-0">
                          <label>Note</label>
                          <textarea
                            rows="3"
                            class="form-control"
                            placeholder="Type something here..."
                          ></textarea>
                        </div>
                        <!-- col-4 -->
                      </div>
                      <!-- notes ends here -->
                      <hr class="mg-b-5 mg-t-20" />
                      <hr class="mg-b-20 mg-t-5" />
                      <!-- Delete betwween this comment in backend ends here -->
        
        
                
        
                      <!-- row -->
                      <div class="form-layout-footer mg-t-15 float-right">
                        <button class="btn btn-primary waves-effect">Submit</button>
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
