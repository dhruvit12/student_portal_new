<style type="text/css">
   .header-text{
   margin-top: 3px;
   font-size: 50px;
   color:#858585;
   font-weight: bold;
   }
   input[type=checkbox]{
   visibility: hidden;
   }
   label {
   cursor: pointer;
   text-indent: -9999px;
   width: 50%;
   height: 41px;
   padding: 0px;
   margin-top: 0px;
   background: #E4E4E4;
   display: block;
   border-radius: 15px;
   position: relative;
   }
   label:after {
   content: '';
   position: absolute;
   top: 5px;
   left: 0px;
   margin-top: -5px;
   width: 50%;
   height: 41px;
   background: #ffffff;
   border-radius: 15px;
   transition: 0.9s;
   box-shadow: 0px 1px 2px 0px #000000;
   border-color: #707070;
   border-bottom: orange;
   opacity: 100%;
   }
   input:checked + label {
   background: #26266C;
   }
   input:checked + label:after {
   left: calc(100% - 0px);
   transform: translateX(-100%);
   }
   label:active:after {
   width: 130px;
   }
   /* body {
   display: flex;
   justify-content: center;
   align-items: center;
   }*/
   	#course_card
   {
   border-radius: 38px;
   box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.1);
   border:#707070;
   width: auto;
   height: 450px;
   }
   #content{
   /* DON'T USE DISPLAY NONE/BLOCK! Instead: */
   background: #cf5;
   padding: 10px;
   position: absolute;
   visibility: hidden;
   opacity: 0;
   transition: 0.6s;
   -webkit-transition: 0.6s;
   transform: translateX(-100%);
   -webkit-transform: translateX(-100%);
   }
   #content.appear{
   visibility: visible;
   opacity: 1;
   transform: translateX(0);
   -webkit-transform: translateX(0);
   }
   .btn{
   border-radius: 10px;
   }
</style>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<script>
   document.getElementById('menu_support').classList.add("menu-active-support");
</script>
<style type="text/css">
   .Self_Paced_Course_tab
   {
   width: 200px;
   height: 60px;
   border: none;
   background: #ffffff;
   border-radius: 15px;
   transition: 0.9s;
   box-shadow: 0.2px 3px 3px #808080;
   border-color: #707070;
   border-bottom: orange;
   opacity: 100%;
  
   }
   button#defaultOpen {
   /*color: white;*/
   width: 200px;
   height: 60px;
   border: none;
   background: gray;
   border-radius: 15px;
   transition: 0.9s;
   box-shadow: 0.2px 3px 3px #808080;
   border-color: #707070;
   border-bottom: orange;
   opacity: 100%;
   
   }
   button.tablink.Self_Paced_Course_tab {
   background: #808080;
   
   }
</style>
<script type="text/javascript">
          $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
});
       </script>   
<div class="container">
<div class="row ">
<div class="col-md-5 ">
   <span class="header-text">Support</span>
</div>
<div class="row" >
<div class="col-md-12 ">
   <button class="tablink Live_Course_tab" id="defaultOpen" style="margin-right: 0px;box-shadow: rgb(128, 128, 128) 0.2px 3px 11px;font-size:18px;color:#000 !important; " onclick="openPage('Live_Course', this, '#ffffff','#000000')">Tool Installation</button>
   <button class="tablink Self_Paced_Course_tab" style="margin-left: -20px; font-size:18px; box-shadow: rgb(128, 128, 128) 0.2px 3px 11px;color:#000 !important" onclick="openPage('Self_Paced_Course', this, '#ffffff','#000000')" >Need Assistance</button>
   <br>
   <input type="checkbox" id="switch" />
   <div class="container tabcontent " id="Live_Course" >
      <div class="row mt-4">
         <?php 
            $i = 0;
            foreach ($installation_tips_data as $key => $value) {
            ?>
         <div class="col-md-4">
               <div id="myModal_<?php echo $i;?>" class="modal fade">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title"><?php echo $value->title; ?> </h5>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                           <div class="embed-responsive embed-responsive-16by9">
                              <iframe id="cartoonVideo" class="embed-responsive-item" width="auto"  style="width:-webkit-fill-available" height="315" src="<?php echo $value->video_url;  ?>" allowfullscreen></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <img href="#myModal_<?php echo $i;?>"  data-toggle="modal" src="<?php echo base_url()?>assets/images/student_portal_icon/<?php echo $value->image;?>"   onerror="this.onerror=null;this.src='<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png';" alt="Card image" style="width: auto" class="img-fluid">
               <div class="card card-body">
                  <div class="col-md-11 offset-md-1">
                     <h4 class="card-title" style="color: #535252;"><?php echo $value->title; ?></h4>
                     <p class="card-text" style="color: #535252;"><?php echo $value->description;?></p>
                     <center
                        ><a href="<?php echo strtolower(str_replace(" ","_",$value->installation_tips_url));?>" target="_blank"  class="btn btn-deafult" style="background-color: #26266c;color: #ffffff;width: 200px" value="Installation Tips">Installation Tips</a></center>
                  </div>
               </div>
            </div>
         </div>
         <?php
            $i ++;
            }
            ?>
      </div>
   </div>
   <br>
   <div class="container tabcontent " id="Self_Paced_Course" >
   	<?php if($this->session->flashdata('success')){ ?>
           <div class="alert alert-success">
			  <strong><?php echo $this->session->flashdata('success'); ?></strong>
			</div>  
   	<?php } ?>
      <form action="<?php echo base_url()?>Support/add_assistance" method="post">
         <div class="row">
            <div class="col-lg-6">
               Category <span class="danger">*</span>
               <select class="form-control select2 select2-hidden-accessible"  required="" name="category"  >
                  <option label="--Select--"></option>
                  <option value="2">Authentication Error</option>
               </select>
            </div>
            <div class="col-lg-6">
               Priority <span>*</span>
               <select class="form-control select2 select2-hidden-accessible" required="" name="priority"  >
                  <option label="--Select--"></option>
                  <option value="High">High</option>
                  <option value="Medium">Medium</option>
                  <option value="Low">Low</option>
               </select>
            </div>
            <div class="col-lg-12 ">Comment <span>*</span>
               <textarea class="form-control" name="comment" rows="15"></textarea>
               <br>
               <input type="submit" class="btn btn-deafult" style="float:right;background-color: #26266c;color: #ffffff;width: 200px" value="Submit">
            </div>
         </div>
      </form>
   </div>
   <br>
</div>
<script>
   function openPage(pageName,elmnt,color,textcolor) {
     var i, tabcontent, tablinks;
     tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
       tabcontent[i].style.display = "none";

     }
     tablinks = document.getElementsByClassName("tablink");
     for (i = 0; i < tablinks.length; i++) {
       tablinks[i].style.backgroundColor = "";
     }
     document.getElementById(pageName).style.display = "block";

     elmnt.style.backgroundColor = color;
     textcolor.style.Color = red;

   }
   document.getElementById("defaultOpen").click();
  
</script>
