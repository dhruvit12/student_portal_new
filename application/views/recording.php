<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<script>
 document.getElementById('menu_course').classList.add("menu-active");
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';

</script>
<style type="text/css">
 
</style>
  <div class="container-fluid">
        <span class="title_course">
          Python Sessions
        </span>
      <div class="row mt-3">
  <?php 
  require_once 'dbcon.php';
      if(!empty($session_list)){
                        foreach($session_list as $session_data)
                        {
                    ?>
                      <?php
                  $query100 = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_data->id;";
                  $runfetch100 = mysqli_query($con, $query100);
                  $noofrow100 = mysqli_num_rows($runfetch100);
                  $indexnumber100 = 1;
                  if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                  while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                   
                      // use of explode 
                      $string1 = $data100['recording_files']; 
                      $str_arr1 = explode (",", $string1);  
                      $no_of_videos =  sizeof($str_arr1);
                      $video_comment = $data100['video_comment'];
                   }
                  }
                  ?>
               <?php 
               if($no_of_videos == 1){

                ?>
                <div class="col-lg-12  mt-4 ">
                  <div class="jumbotron" id="course_session">
                    <div class="row">
                      <div class="col-lg-1 col-md-2 col-sm-2 col-xl-1 col-xxl-1 col-2">
                       <span class="nav-item" data-toggle="modal" data-target="#video_list"  onclick= "prepareNoVideoReason(
                        <?php                                                                  
                        echo "'".$video_comment."'";
                        ?>
                        )"
                        >
                        <img src="<?php echo base_url();?>assets/images/student_portal_icon/play.png" id="icon" class="course_video_icon" alt="CoolBrand">

                      </span>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-7 col-xl-6 col-xxl-5 mt-3 col-6" style="
                    display: grid !important;
                    margin-left: initial !important;
                    padding-left: 51px !important;
                    ">
                    <span class="session_name"><?php print_r($session_data->session_name);?> </span>
                    <span class="course_name">Course:<?php print_r(ucwords($course_name[0]->name));?><br>
                    Starts at:  <?php 
                  $mydate = getdate($session_data->session_date);
                  echo "$mydate[mday]/$mydate[mon]/$mydate[year], ";
                  
                  $mydate = getdate($session_data->start_time);
                  echo "$mydate[hours]:$mydate[minutes] ($mydate[weekday]),";
                  
                  $mydate = getdate($session_data->end_time);
                  echo "$mydate[hours]:$mydate[minutes] ($mydate[weekday])";
                  ?>   </span>
                    
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-3 col-xl-3 col-4 " style="display: flex;align-items: center;">

                    <span class="nav-item" style="cursor:pointer;">
                    &nbsp;&nbsp;&nbsp;&nbsp; <form method="post" action="#"> <button id="course_button">Knowledge check</button></form>
                    &nbsp;&nbsp;
                  </span>
                  
                    <span class="nav-item" style="cursor:pointer;" data-toggle="modal" data-target="#reading_material_list"   <?php   
                                                      $query100 = "SELECT * FROM `offline_session` WHERE `id` =$session_data->id;";
                                                      $runfetch100 = mysqli_query($con, $query100);
                                                      $noofrow100 = mysqli_num_rows($runfetch100);
                                                      $indexnumber100 = 1;
                                                      if ($noofrow100 >0 && $runfetch100 == TRUE) { 
                                                         while ($data100 = mysqli_fetch_assoc($runfetch100)) { 
                                                      
                                                            // use of explode 
                                                            $reading_material = $data100['reading_material']; 
                                                            $reading_material_array = explode (",", $reading_material);  
                                                            $no_of_reading_material =  sizeof($reading_material_array);
                                                         }
                                                      }
                                                      ?>  onclick= "prepareReadingMaterialListModal(
                                                     <?php  for($i= 0; $i < $no_of_reading_material-1; $i++){
                                                         
                                                         $anz_material_id = $reading_material_array[$i];
                                                         $query1000 = "SELECT * FROM `material` WHERE `id` = $anz_material_id";
                                                         $runfetch1000 = mysqli_query($con, $query1000);
                                                         $noofrow1000 = mysqli_num_rows($runfetch1000);
                                                         
                                                         
                                                         if ($noofrow1000 > 0 && $runfetch1000 == TRUE) { 
                                                            while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 

                                                               echo "'".$data1000['topic_name']."'," ;

                                                            }}
                                                            echo $reading_material_array[$i];
                                                         if($i != $no_of_reading_material - 2){
                                                            echo ',';                                                                 
                                                         }
                                                         
                                                         }
                                                         ?>
                                                   )">
                    &nbsp;&nbsp;&nbsp;&nbsp; 
 <?php  for($i= 0; $i < $no_of_reading_material-1; $i++){
                                                         
                                                         $anz_material_id = $reading_material_array[$i];
                                                         $query1000 = "SELECT * FROM `material` WHERE `id` = $anz_material_id";
                                                         $runfetch1000 = mysqli_query($con, $query1000);
                                                         $noofrow1000 = mysqli_num_rows($runfetch1000);
                                                         
                                                         
                                                         if ($noofrow1000 > 0 && $runfetch1000 == TRUE) { 
                                                            while ($data1000 = mysqli_fetch_assoc($runfetch1000)) { 
                                                              ?>
                                                               <button id="course_button">Reading Material
                                                               </button>
                                                              <?php
                                                               
                                                            }}
                                                         if($i != $no_of_reading_material - 2){
                                                         }
                                                         
                                                         }
                                                         ?>
                   &nbsp;&nbsp;
                  </span>
                <!--   <span class="nav-item" style="cursor:pointer;">
                  &nbsp;&nbsp;&nbsp;&nbsp; 
                  <button id="course_button">Reading Material </button>&nbsp;&nbsp;
                </span> -->
                <!-- <button id="course_button">Reading Material </button>&nbsp; -->
              </div>
            </div>
          </div>
        </div>   

      <?php } } }?>


</div>





</div>
<div class="modal fade" id="reading_material_list" >
                        <div class="modal-dialog modal-md modal-dialog-centered"  >
                           <div class="modal-content">
                              <div class="modal-header border-0" >
                                 <h4 class="modal-title">Reading Materials</h4>
                              </div>
                              <div class="modal-body text-center " id="readingMaterialListModalId" style="" >
                              </div>
                              <div class="modal-footer border-0" >
                                 <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
<div class="modal fade" id="video_list">
   <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Class Recordings</h4>
         </div>
         <div class="modal-body text-center" id="videoListModalId">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="no_video_reason" style="z-index:999999">
   <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title">Class Recordings</h4>
         </div>
         <div class="modal-body text-center" id="noVideoReasonModalId" style="overflow-x:auto;">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
</main>
<script src="<?php echo base_url()?>assets/js/student-dashboard-modal-create.js"></script>
<script src="<?php echo base_url()?>assets/js/chart/chartist/chartist.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap/bootstrap.js"></script>
<script>
