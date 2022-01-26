
<?php
   $con = mysqli_connect('localhost', 'root', '', 'jvfdbhhs_fingertips_portal');
   if (!$con) {
     echo "Connection Failed!";
   }
   

   if (isset($_POST['download_material'])) {
          $material_id = $_POST['material_id'];
       
          $query = "SELECT `file_name` FROM `material` WHERE `id` = $material_id";
          $runfetch = mysqli_query($con, $query);
          $noofrow = mysqli_num_rows($runfetch);
          $indexnumber = 1;
          
          if ($noofrow >0 && $runfetch == TRUE) { 
             while ($data = mysqli_fetch_assoc($runfetch)) { 
          
                // use of explode 
                $files = $data['file_name']; 
                     
                $files_array = explode (",", $files); 
                $no_of_files =  sizeof($files_array);
              
                if($files == ''){
                    ?>
<script>
   window.history.back()
window.location = '<?php echo base_url()?>course';
</script>
<?php
   }
   
   }
   }
   }
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/icofont.css"
         />
      <!-- Themify icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/themify.css"
         />
      <!-- Flag icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/flag-icon.css"
         />
      <!-- Feather icon-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/feather-icon.css"
         />
      <!-- Plugins css start-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/chartist.css"
         />
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/date-picker.css"
         />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/prism.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tour.css" />
      <!-- Plugins css Ends-->
      <!-- Bootstrap css-->
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/bootstrap.css"
         />
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
         href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
         integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
         crossorigin="anonymous"
         />
      <link
         rel="stylesheet"
         type="text/css"
         href="<?php echo base_url()?>assets/css/rounded-circle.css"
         />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
      <title>Download Material</title>
   </head>
   <body>
      <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
               <!-- Modal Header -->
               <div class="modal-header">
                  <h4 class="modal-title">Download</h4>
                  <button type="button" class="close" data-dismiss="modal" onclick="goBack();">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body text-center" >
                  <span id='download_links'>
                  </span>
               </div>
               <!-- Modal footer -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" style="background-color:#26266C;color:#ffffff" data-dismiss="modal" onclick="goBack();">Close</button>
               </div>
            </div>
         </div>
      </div>
      <button type="button" class="btn btn-info btn-lg" id="open_modal_btn" data-toggle="modal" data-target="#myModal"></button> 
   </body>
</html>
<script>

   var links = [<?php 
      for($i= 0; $i < $no_of_files-1; $i++){
         
          $file_name = trim($files_array[$i]);
          if($i == $no_of_files-2){
         
            echo "'https://fingertips.co.in/cloud/en/uploads/session/material/".$file_name."'";
          }else{  
         echo "'https://fingertips.co.in/cloud/en/uploads/session/material/".$file_name."',";
      }
          
      }?>];
   

   function downloadAll(urls) {
   var get_download_links = document.getElementById('download_links');
     for (var i = 0; i < urls.length; i++) {
       var link = document.createElement('a');
       var extension = urls[i].split('.');

   extension = extension[3];
   var link_o = 'anzarkhan.com' + urls[i];  
   var file_name = link_o.split("/"); 
   file_name = file_name[4].substring(0, 20);
   file_name += '.';
   file_name += extension;
   link.setAttribute('download',file_name);
   link.setAttribute('target', '_blank');
   link.setAttribute('class', 'download_file text-primary');
   link.setAttribute('href', urls[i]);
   
   
   
   // var t  =   document.createTextNode(extension); 
 
   
   var link_o = 'anzarkhan.com' + urls[i];  
   var file_name = link_o.split("/"); 
   file_name = file_name[4].substring(0, 20);
   file_name += '.';
   file_name += extension;
   var t  =   document.createTextNode(file_name); 


   console.log(t); 
   link.appendChild(t);
   
   link.style.display = 'block';
   get_download_links.appendChild(link);
       
       // link.click();
       if(i < urls.length-2 ){
         //   document.write('No data found');
       }
     }
   
     // document.body.removeChild(link);
   }
   
   downloadAll(links);
</script>
<script>
   function downloadcall(){
       
   
   
       var get_download_file = document.getElementsByClassName('download_file');
   for(var i = 0; i < get_download_file.length; i++){
       
       // window.history.back()
// window.location = 'https://fingertips.co.in/en/auth/login.php';
   }
   
   }
   
</script>  <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
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
      <script src="<?php echo base_url()?>assets/js/chart/chartist/chartist.js"></script>
      <script src="<?php echo base_url()?>assets/js/chart/chartjs/chart.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/chart/knob/knob.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/chart/knob/knob-chart.js"></script>
      <script src="<?php echo base_url()?>assets/js/prism/prism.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/clipboard/clipboard.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/counter/jquery.waypoints.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/counter/jquery.counterup.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/counter/counter-custom.js"></script>
      <script src="<?php echo base_url()?>assets/js/custom-card/custom-card.js"></script>
      <script src="<?php echo base_url()?>assets/js/dashboard/university-custom.js"></script>
      <script src="<?php echo base_url()?>assets/js/datepicker/date-picker/datepicker.js"></script>
      <script src="<?php echo base_url()?>assets/js/datepicker/date-picker/datepicker.en.js"></script>
      <script src="<?php echo base_url()?>assets/js/datepicker/date-picker/datepicker.custom.js"></script>
      <!-- <script src="<?php echo base_url()?>assets/js/tour/intro.js"></script> -->
      <!-- <script src="<?php echo base_url()?>assets/js/tour/intro-init.js"></script> -->
      <script src="<?php echo base_url()?>assets/js/typeahead/handlebars.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead/typeahead.custom.js"></script>
      <script src="<?php echo base_url()?>assets/js/chat-menu.js"></script>
      <script src="<?php echo base_url()?>assets/js/height-equal.js"></script>
      <script src="<?php echo base_url()?>assets/js/tooltip-init.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead-search/handlebars.js"></script>
      <script src="<?php echo base_url()?>assets/js/typeahead-search/typeahead-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url()?>assets/js/script.js"></script>
      <!-- Plugin used-->
      <!-- custom js starts -->
      <script src="<?php echo base_url()?>assets/js/student-dashboard-modal-create.js"></script>
      <!-- custom js ends -->
          <!--  -->
      <script src="<?php echo base_url()?>assets/js/chart/chartist/chartist.js"></script>
<script>
   function goBack(){
     console.log('go back call');
     window.history.back()
window.location = '<?php echo base_url()?>dashboard';
     window.location = 'dashboard';
   }
</script>

<script>
var get_open_modal_btn = document.getElementById('open_modal_btn');
get_open_modal_btn.click();
get_open_modal_btn.style.display = "none";
</script>