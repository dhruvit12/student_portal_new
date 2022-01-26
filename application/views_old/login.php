
<?php

  require('dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <meta name="author" content="anzarkhan.com" />
    <meta http-equiv="refresh" content="600;url=../auth/logout.php" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon" />
    <link
      rel="shortcut icon"
      href="<?php echo base_url()?>assets/images/favicon.png"
      type="image/x-icon"
    />
    <title>Login | Fingertips</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/icofont.css" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/themify.css" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flag-icon.css" />
    <!-- Feather icon-->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php echo base_url()?>assets/css/feather-icon.css"
    />
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
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
         type="text/css"
         href="<?php echo base_url()?>assets/css/rounded-circle.css"
         />
         <script src='https://www.google.com/recaptcha/api.js' async defer></script>
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
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main">
          <div class="row">
            <div class="col-md-12">
              <div class="auth-innerright">
                <div class="authentication-box">

                  <div class="text-center">
                    <img src="<?php echo base_url()?>assets/images/logo/fingertip-logo.png" alt="" class="w-50" style="color:#26266c;"/>
                  </div>
                  
                  <div class="card mt-4">
                  <div
                  id="login_success_alert"
                  class="alert custom-success alert-dismissible fade show alerttoggle"
                  role="alert"
                >
                  <strong>Woyee!</strong> Login Successfully.
                  <button
                    class="close"
                    type="button"
                    data-dismiss="alert"
                    aria-label="Close"
                    data-original-title=""
                    title=""
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div
                  id="login_failed_alert"
                  class="alert custom-danger alert-dismissible fade show alerttoggle  "
                  role="alert"
                >
                  <strong>Holy!</strong> No User Found.
                  <button
                    class="close"
                    type="button"
                    data-dismiss="alert"
                    aria-label="Close"
                    data-original-title=""
                    title=""
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>


                
                <div
                  id="disabled_alert"
                  class="alert custom-danger alert-dismissible fade show alerttoggle "
                  role="alert"
                >
                  <strong>Holy!</strong> You May Disabled! Contact Admin.
                  <button
                    class="close"
                    type="button"
                    data-dismiss="alert"
                    aria-label="Close"
                    data-original-title=""
                    title=""
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div
                  id="deleted_alert"
                  class="alert custom-danger alert-dismissible fade show alerttoggle "
                  role="alert"
                >
                  <strong>Holy!</strong> You May Deleted! Contact Admin.
                  <button
                    class="close"
                    type="button"
                    data-dismiss="alert"
                    aria-label="Close"
                    data-original-title=""
                    title=""
                  >
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                    
                    <div class="card-body">
                      <!--alert front end  -->
               

                <!-- alert backend -->
                      <div class="text-center">
                        <h4 style="color:#26266c;">LOGIN</h4>
                        <h6 style="color:#26266c;">Enter your Username and Password</h6>
                      </div>
                      <form class="theme-form" action="" method="POST">
                        <div class="form-group">
                          <label class="col-form-label pt-0" style="color:#26266c;">Your Email</label>
                          <input class="form-control" type="email" name="email" required="" placeholder="Enter your email" />
                        </div>

                        

                        <div class="form-group">


                       

                          <label class="col-form-label" style="color:#26266c;">Password</label>
                          <input
                            class="form-control"
                            type="password"
                            name="password"
                            id="loginPassword"
                            placeholder="Enter Password"
                            required=""
                          />
                        </div>

                        <div class="custom-control custom-checkbox" >
                          <input  onclick="showPassword();" type="checkbox" class="custom-control-input" id="customCheck" name="remember_me" value=1>
                          <label class="custom-control-label" for="customCheck" style="color:#26266c;">Show Password</label>
                        </div>
                          <br>
                        <!-- <div class="g-recaptcha" data-sitekey="6LdoItMaAAAAAFrw0twMdmBXfPCyeIL_J85Zy3iu" data-type="image"></div> -->
                        <div class="form-group form-row mt-3 mb-0">
                          <button
                            class="btn btn-default btn-block"
                            type="submit"
                            name="login"
                           style="background-color:#26266c;color:#ffffff;">
                            Login
                          </button>
                        </div>                        
                      </form>
                      <div class="text-center">
                        <a href="forgot_password" class="btn btn-link" style="color:#26266c;">
                      Forgot Password
                      </a>
                      </div>
                      <script>
                      function showPassword(){

                        var x = document.getElementById("loginPassword");
                            if (x.type === "password") {
                              x.type = "text";
                            } else {
                              x.type = "password";
                            }
                      }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
    <!-- Plugin used-->
  </body>
</html>

<?php 



      if (isset($_POST['login'])) {


          $email = $_POST['email'];
          $email = htmlspecialchars($email , ENT_QUOTES, "UTF-8");
          $email = mysqli_real_escape_string($con,$email);

          $password = $_POST['password'];          
          $password = htmlspecialchars($password , ENT_QUOTES, "UTF-8");          
          $password = mysqli_real_escape_string($con,$password);
  
          // $remember_me = $_POST['remember_me'];
  
          // if($remember_me == 1){
          //   $cookie_name = "fingertips_kl90_e";
          //   $cookie_value = "$email";
          //   setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/"); 
  
          //   $cookie_name = "fingertips_kl90_p";
          //   $cookie_value = "$password";
          //   setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");
          // }
        
  
  
  
          $query = "SELECT * FROM `user2` WHERE `email` = '$email' AND `password` = '$password';";
  
          $run = mysqli_query($con, $query);
  
          $row = mysqli_num_rows($run);
          
          // echo "Error: " . $query . "<br>" . $con->error;
  
  
          if ($row < 1) {
  
            ?>
              <script>
               var element = document.getElementById("login_failed_alert");
              element.classList.remove("alerttoggle");
              console.log('su');
                
              </script>
            <?php
  
            } else {
              
              $data = mysqli_fetch_assoc($run);
              $user_id = $data['id'];
              $role = $data['role'];
              $name = $data['name'];
              $is_deleted = $data['is_deleted'];
              $is_disabled = $data['is_disabled'];
  
              
  
              if($is_disabled != 1){             
                if($is_deleted != 1){
  
                   
                    $_SESSION['ftip69_uid'] = $user_id;
                    $_SESSION['ftip69_role'] = $role;
                    $_SESSION['ftip69_name'] = $name;
                   
                   defineHomePage();
                                  
                } else{
                  ?>
  
              <script>
                var element = document.getElementById("deleted_alert");
                element.classList.remove("alerttoggle");
                console.log('su');                
              </script>
                <?php
                }
              }else{
                ?>
  
              <script>
                var element = document.getElementById("disabled_alert");
                element.classList.remove("alerttoggle");
                console.log('su');                
              </script>
  
  
                <?php
              }
                
  
  
                    
          }

        }

      
      
      ?>

      <?php
function defineHomePage() {

  if($_SESSION['ftip69_role']=='student'){
    ?>
            <script>
                    var element = document.getElementById("login_success_alert");
                    element.classList.remove("alerttoggle");
                    console.log('su');
                     window.location = "dashboard";
            </script> 
<?php            
  }
  else
  {
    echo "<script>alert('Record Not Found')</script>";
  } 
  
}

?>