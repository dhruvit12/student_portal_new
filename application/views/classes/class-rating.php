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

   $date = date_create();
   $timestamp_2 = date_timestamp_get($date);
   
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
if (isset($_GET['id'])) {
    $session_id=$_GET['id'];
   
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
      <title>Class List | Fingertips</title>
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
      <!-- <div class="loader-wrapper">
         <div class="loader bg-white">
            <div class="whirly-loader"></div>
         </div>
      </div> -->
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
            <div class="page-body" style="width:100%; overflow-x:auto;">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <div class="page-header-left">
                                    <h3>Class Ratings</h3>
                                    <br/>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../auth/login.php"><i data-feather="home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">Class Ratings</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                    <div class="row">
                    <div class="col-md-8">
                        <?php
                         $query2="SELECT * FROM `offline_session_rating` WHERE `session_id`=$session_id";
                         $run2=mysqli_query($con,$query2);
                         $noofrow2=mysqli_num_rows($run2);
                        while ($data2=mysqli_fetch_assoc($run2)) {
                            $student_id=$data2['rate_by'];
                            $query3="SELECT * FROM `student` WHERE `id`=$student_id"; 
                            $run3=mysqli_query($con,$query3);
                            $data3=mysqli_fetch_assoc($run3);
                            $student_first_name=$data3['first_name'];
                            $student_last_name=$data3['last_name'];
                            
                            $date = date_create();
                            $timestamp = date_timestamp_get($date);
                        ?>
                        
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title"><?php echo $student_first_name;?> <?php echo $student_last_name;?><span class="float-right" style="font-size:15px;"><?php $mydate = getdate($data2['timestamp']);
                                             echo "$mydate[wday]-$mydate[month]";?></span></h4>
                                </div>
                                
                                <div class="card-body pt-2">
                                    <h5 class="card-title">
                                    <?php 
                                    if ($data2['rate_count']==5) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    <?php
                                    }elseif ($data2['rate_count']==4) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }elseif ($data2['rate_count']==3) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }elseif ($data2['rate_count']==2) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }elseif ($data2['rate_count']==1) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }
                                    ?>
                                    </h5>
                                    <p class="card-text"><?php echo $data2['rate_description']?></p>
                                </div>
                            </div>
                        
                        <?php
                        }
                        ?>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                <?php
                                $query4="SELECT * FROM `offline_session` WHERE `is_deleted` = 0 AND `id`=$session_id";
                                $run4=mysqli_query($con,$query4);
                                $data4=mysqli_fetch_assoc($run4);
                                ?>
                                    <h1><?php echo $data4['session_name']?></h1>
                                    <?php  
                                    $query5="SELECT * FROM `offline_session_rating` WHERE `session_id`=$session_id";
                                    $run5=mysqli_query($con,$query5);
                                    $noofrow5=mysqli_num_rows($run5);
                                    $rate_count = 0;
                                    while($data5=mysqli_fetch_assoc($run5)){
                                        if ($noofrow5>0) {
                                            $rate_count+=$data5['rate_count'];
                                        }else {
                                            $rate_count=0;
                                        }
                                    }
                                    if ($noofrow5>0) {
                                        $rate_count = $rate_count/$noofrow5;
                                     }
                                     if($rate_count == 0){
                                        $rate_count = 'No Ratings';
                                     }

                                    ?>
                                    <h2><?php 
                                    if ($rate_count==1) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }elseif ($rate_count>1 && $rate_count<2) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                    }elseif ($rate_count==2) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count>2 && $rate_count<3) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count==3) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count>3 && $rate_count<4) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star-half-alt text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count==4) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count>4 && $rate_count<5) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star-half-alt text-warning"></i>
                                    <?php
                                        # code...
                                    }elseif ($rate_count==5) {?>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    <?php
                                        # code...
                                    }echo round($rate_count, 1);   // 520.34?></h2>
                                    <p>Session id:<?php echo $data4['id']?></p>
                                    <?php

                                    ?>
                                    <p>Session Date: <?php $mydate2 = getdate($data4['session_date']);
                                    echo "$mydate2[mday]/$mydate2[mon]/$mydate2[year]";?></p>
                                    <?php
                                    $course_id=$data4['course'];
                                    $query8="SELECT `name` FROM `course` WHERE id = $course_id";
                                    $run8=mysqli_query($con,$query8);
                                    $data8=mysqli_fetch_assoc($run8);
                                    $course=$data8['name']
                                    ?>
                                    <p>Course: <?php echo $course?></p>
                                    <?php
                                        $batch_id=$data4['batch_Id'];
                                        $query6="SELECT `batch_name` FROM `batch` WHERE `id`=$batch_id";
                                        $run6=mysqli_query($con,$query6);
                                        $data6=mysqli_fetch_assoc($run6);
                                        $batch_name=$data6['batch_name'];
                                    ?>
                                    <p>Batch Name: <?php echo $batch_name?></p>
                                    <?php
                                        $assigned_to=$data4['assigned_to'];
                                        $query7="SELECT * FROM `user2` WHERE `id`=$assigned_to";
                                        $run7=mysqli_query($con,$query7);
                                        $data7=mysqli_fetch_assoc($run7);


                                    ?>
                                    <p>Class Head: <?php echo $data7['name']?></p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>
</body>
</html>