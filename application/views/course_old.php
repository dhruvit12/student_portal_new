  
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<script>
 document.getElementById('menu_course').classList.add("menu-active");
 document.getElementById('sidebar_icon_2').style.fill='#E46F0E';


</script>

<style type="text/css">

.fa-unlock{
	color: #5e5a5a !important;  
}
	
img.card-img-top {
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);
    border-radius: 40px;
}

.access_course
{
background: transparent;opacity: 70%;
} 

.Live_Course_tab
{
	width: 160px;
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


.Live_Course_tab
{
	width: 160px;
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
.Self_Paced_Course_tab
{
	width: 160px;
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
    width: 160px;
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
   	<div class="container-fluid">
        <span class="title_project">
               Courses
         </span>
     <div class="row  mt-3" >
     <div class="col-lg-12 ">

<button class="tablink Live_Course_tab" id="defaultOpen" style="margin-right: -11px; z-index: 2147483647; position: sticky; box-shadow: rgb(128, 128, 128) 0.2px 3px 11px;" onclick="openPage('Live_Course', this, '#ffffff')">Live Course</button>
<button class="tablink Self_Paced_Course_tab" style="margin-right: -11px; z-index: 2147483647; position: sticky; box-shadow: rgb(128, 128, 128) 0.2px 3px 11px;" onclick="openPage('Self_Paced_Course', this, '#ffffff')" >Self PacedCourse</button>



      <input type="checkbox" id="switch" />
      <!-- <label for="switch">
		  TEST
	   </label> -->
      <div class="container tabcontent " id="Live_Course" >
      	<div class="row mt-5">
      		<div class="col-md-4">
      	       <div class="card" id="course_card">
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python</h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: #5e5a5a;"><i class="fa fa-unlock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		  <br>
      		</div>
      		<div class="col-md-4 ">
      	       <div class="card access_course" id="course_card">
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python</h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: darkgray;"><i class="fa fa-lock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		  <br>
      		</div>
      		<div class="col-md-4 access_course">
      	       <div class="card " id="course_card" >
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python</h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: darkgray;"><i class="fa fa-lock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		 
      		</div>
      		
		  </div>
		  <br>
      		</div>
      		
		  <br>
      		</div>

      	</div>
      	      <div class="container tabcontent " id="Self_Paced_Course" >
      	<div class="row mt-5">
      		<div class="col-md-4">
      	       <div class="card" id="course_card" >
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python (self paced) </h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: darkgray;"><i class="fa fa-unlock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		  <br>
      		</div>
      		<div class="col-md-4">
      	       <div class="card access_course" id="course_card">
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python (self paced)</h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: darkgray;"><i class="fa fa-lock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		  <br>
      		</div>
      		<div class="col-md-4 ">
      	       <div class="card " id="course_card" >
		       <img class="card-img-top" src="<?php echo base_url()?>assets/images/student_portal_icon/cource_image.png" class="img-fluid" alt="course image" >
		    <div class="container">
		      <h4 class="card-title">Python (self paced)</h4>
		      <p class="card-text" style="color:#858585">Contrary to popular belief, Lorem 
				Ipsum is not simply random text. 
				It has roots</p>
				<div class="row mt-3 mb-3" style="text-align: right; color: darkgray;"><i class="fa fa-unlock" aria-hidden="true" style="font-size:30px" ></i>
				</div>
		    </div>
		  </div>
		  <br>
      		</div>
      		</div>
      		
			</div>

      	</div>

          <br>
     </div>


     <script>
function openPage(pageName,elmnt,color) {
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
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>