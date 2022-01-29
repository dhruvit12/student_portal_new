<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">


<script>
   //menu
   document.getElementById('menu_editprofile').classList.add("menu-active");
   //icon
   document.getElementById('sidebar_icon_5').style.fill='#E46F0E';
   
</script>
<?php  if (!isset($_SESSION['ftip69_uid'])) {
   ?><script>window.history.back()
   window.location = '<?php echo base_url()?>';
</script><?php
   } 
   $user_id=$_SESSION['ftip69_uid'];  
   
   require 'dbcon.php';?>
<div class="row mt-5">
<div class="col-md-3"></div>
<div class="col-md-9">
   <img class="rounded-circle"  src="<?php echo base_url()?>assets/images/student_portal_icon/profile.png"
      data-holder-rendered="true" style="margin-top:40px;height:150px;width: 150px;border:3px solid #BEBEDF;" >
</div>

<form method="post" action="">

   <div class="container">

   <div class="row ">
      <span class="title_project" style="margin-top: 60px;">CHANGE PASSWORD</label>
      <div class="row ">
         <div class="col-lg-3">
            <span  style="font-size: 18px;
               color:#3A3737;
               font-weight: 500;">Current Password</span>
            <br>
         </div>
         <div class="col-lg-3">
            <input type="text" name="current_password"  style="height: 40px;">
         </div>
      </div>
      <div class="row ">
         <div class="col-lg-3">
            <span  style="font-size: 18px;
               color:#3A3737;
               font-weight: 500;">New Password </span>
         </div>
         <br>
         <div class="col-lg-3">
            <input type="text"  name="new_password" style="height: 40px;">
         </div>
      </div>
      <div class="row  ">
         <div class="col-lg-3">
            <span  style="font-size: 18px;
               color:#3A3737;
               font-weight: 500;">Conform Password </span>
         </div>
         <div class="col-lg-3">
            <input type="text"  name="repeat_password" 
               style="height: 40px;">
         </div>
      </div>
      <div class="row ">
         <div class="col-lg-4 offset-lg-5">
            <input type="submit" class="btn btn-default" value="Change Password" name="change_password" style="width:200px;
               background-color:#26266C;
               color:#ffffff;
               font-size: 15px;
               font-weight: medium;
               border-radius: 6px;
               margin-left: 80px;">
         </div>
      </div>
</form>
</div>
<?php
   if (isset($_POST['change_password'])) {



    include('dbcon.php');
    
    $query10 = "SELECT * FROM `user2` WHERE is_deleted = 0 AND id = '".$_SESSION['ftip69_uid']."';";
    $runfetch10 = mysqli_query($con, $query10);
    $noofrow10 = mysqli_num_rows($runfetch10);
    if ($noofrow10 > 0 && $runfetch10 == TRUE) { 
        while ($data10 = mysqli_fetch_assoc($runfetch10)) { 
    $password =  $data10['password'];
    
        }
    }

     
        
     $current_password = $_POST['current_password'];  
     $new_password = $_POST['new_password'];        
     $repeat_password = $_POST['repeat_password'];        
     $date = date_create();
     $timestamp = date_timestamp_get($date);
     if($current_password != $password){
        ?>

        <script>
          var element = document.getElementById("password_mismatch");
          element.classList.remove("alerttoggle");
                      
        </script>


          <?php
          


     }else if($current_password == $repeat_password){
        ?>

  <script>
    var element = document.getElementById("new_is_not_repeat");
    element.classList.remove("alerttoggle");
                
  </script>


    <?php
        

    }else{

        $query3 = "UPDATE `user2` SET `password`='$new_password' WHERE `id` = '".$_SESSION['ftip69_uid']."'";
        if ($con->query($query3) === TRUE) { 
            $last_id = mysqli_insert_id($con); 
            ?>
         <script>
                var element = document.getElementById("success");
                element.classList.remove("alerttoggle");
                            
            </script>
         <?php
         } else {
             ?>
         <script>
                var element = document.getElementById("failed");
                element.classList.remove("alerttoggle");
                            
            </script>
         <?php
         } 

    }      
    

   
    
     
   
   
       // get date function 
       // $mydate=getdate(1456);
       // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
   
       
    }
        ?>