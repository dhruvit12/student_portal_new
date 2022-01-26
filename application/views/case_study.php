
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <script>
 document.getElementById('menu_course').classList.add("menu-active");
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';

</script>
<?php
   if (!isset($_SESSION['ftip69_uid'])) {
     header('location:../auth/login.php');
     
   } 
   ?>
<?php
   require_once 'dbcon.php';
   $user_id = $_SESSION['ftip69_uid'];
   $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
   $run = mysqli_query($con, $query);
   $row = mysqli_num_rows($run);
   $data = mysqli_fetch_assoc($run);
   
      $ftip69_acc_student = $data['acc_student'];
      
   
   // success
   if ($ftip69_acc_student==1) {
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
   $user_id = $_SESSION['ftip69_uid'];
   
   $query = "SELECT `student_id` FROM `user2` WHERE `id` = $user_id";
   
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow > 0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) {
            $student_id = $data['student_id'];
            } 
         } 
   
   
   $query = "SELECT `course`,`batch` FROM `student` WHERE `id` = $student_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow > 0 && $runfetch == TRUE) { 
      while ($data = mysqli_fetch_assoc($runfetch)) {
            $batch_id = $data['batch'];
            $course = $data['course'];
            } 
         } 
      ?>
  <div class="container-fluid">
  
        <span class="title_project">
            Case Study
        </span>
 <?php
   $query13="SELECT * FROM `assign_casestudy` WHERE `batch_id`=$batch_id";
           $runfetch13=mysqli_query($con,$query13);
           $noofrow13=mysqli_num_rows($runfetch13);
           if ($noofrow13 > 0 && $runfetch13 == TRUE){
           
           while($data13=mysqli_fetch_assoc($runfetch13)){
           $casestudy_id = $data13['casestudy_id'];
   
           // let's check if project is uploaded or not 
          
           
           $query14 = "SELECT * FROM `case-study` WHERE `id` = $casestudy_id";                                          
           $runfetch14 = mysqli_query($con, $query14);                                          
           $noofrow14 = mysqli_num_rows($runfetch14);
           $indexnumber14 = 1;
           if ($noofrow14 > 0 && $runfetch14 == TRUE) { 
             while ($data14 =mysqli_fetch_assoc($runfetch14)) { 
           $casestudy_name=$data14['casestudy_name'];
           $casestudy_description=$data14['description'];
           $image= $data14['casestudy_image'];
             }
             } ?>
   <div class="row  mt-3" >
     <div class="col-lg-12 ">
                  <div class="jumbotron" id="project_card">
                    <div class="row">
                       <div class="col-xs-2 col-lg-3 col-md-4 col-sm-3 col-4  ">
                         <img src="<?php echo base_url()?>assets/images/university/python-1.png" class="img-fluid" style="height:200px">
                        
                      </div>

                      <div class="col-xs-8  col-lg-9 col-md-8 col-sm-8 col-6  mt-4" >
                       <h3 style="color:#585252;font-family: 'Poppins', sans-serif;font-weight: 500 "><?php echo $casestudy_name;?></h3>
                       <p style="color:##585252;font-size:15px;font-family: 'Poppins', sans-serif;font-weight: 500 "><?php echo $casestudy_description;?></p>
                       <span style="color:#585252;font-size: 10px;font-family: 'Poppins', sans-serif; font-weight: 500" id="sub-contect">Starts at: <?php 
                     $mydate=getdate($data14['timestamp']);
                     echo "$mydate[month] $mydate[mday]";
                     ?>    </span>
                     <br>
                             <button class="course_button">Knowledge check</button>&nbsp;&nbsp;
                     </div>
                    
              </div>
            </div>
          </div>
      </div>
  

  <?php }} ?>

</main>
<style type="text/css">
  .course_button
  {
    background-color: #26266C;
    opacity:100%;
    color:#ffffff;
    font-family: Poppins;
    font-size: 11px;;
    border-radius: 7px;
    height: 29px;
    box-shadow: 1px 3px 8px 0px rgba(0,0,0,0.1);
    border:none;
    box-shadow: 2px -0.4px 1px -0.5px #E46F0E, 2px 1px 2px 3px rgb(0 0 0 / 10%);
    margin-top:10px ;
    width:140px;
    }
</style>
