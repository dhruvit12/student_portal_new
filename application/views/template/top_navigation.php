<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<body>
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom_style/course.css">
 <div class="container-fluid py-4">
    <div class="row mb-4">
      <div class="col-lg-7  offset-3 col-sm-9 ">
        <div class="card course_header_new">
          <div class="row">
                   <div class="col-lg-2 col-md-3 col-sm-3" id="header-text">
                     <a href="<?php echo base_url()?>course" id="course">Recording</a>
                      <?php if($this->uri->segment(1)=='course'){
                        ?>
                        <div id="line" style="margin-left:40px;">
                        </div>
                        <script>document.getElementById('course').style.color='#5A4242';</script>
                      <?php
                      } ?>
                   </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 " id="header-text">
                     <a href="<?php echo base_url()?>project" id="project">Project</a>
                      <?php if($this->uri->segment(1)=='project'){
                        ?>
                       <div id="line" style="margin-left:40px;">
                        </div>
                        <script>document.getElementById('project').style.color='#5A4242';</script>
                      <?php
                      } ?>
                   </div>
                    <div class="col-lg-2 col-md-3 col-sm-3" id="header-text">
                     <a href="<?php echo base_url()?>assignment" id="assignment">Assignment</a>
                      <?php if($this->uri->segment(1)=='assignment'){
                        ?>
                        <div id="line" style="margin-left:40px;">
                        </div>
                        <script>document.getElementById('assignment').style.color='#5A4242';</script>
                      <?php
                      } ?>
                   </div>
                    <div class="col-lg-2 col-md-3 col-sm-3" id="header-text">
                     <a href="<?php echo base_url()?>case_study" id="case study">Case Study</a>
                      <?php if($this->uri->segment(1)=='case_study'){
                        ?>
                        <div id="line" style="margin-left:40px;">
                        </div>
                        <script>document.getElementById('case study').style.color='#5A4242';</script>
                      <?php
                      } ?>
                   </div>
                    <div class="col-lg-2 col-md-3 col-sm-3" id="header-text" >
                     <a href="<?php echo base_url()?>quiz" id="quiz">Quiz</a>
                     <?php if($this->uri->segment(1)=='quiz' || $this->uri->segment(1)=='mcq-test' || $this->uri->segment(1)=='mcq-test-result'){
                        ?>
                        <div id="line_last"  style="margin-left:40px;">
                        </div>
                        <script>document.getElementById('quiz').style.color='#5A4242';</script>
                      <?php
                      } ?>
                   </div>
                </div>               
          </div>
           <div class="dropdown course_card_drop_down_mobile" style="display: none;">
                    <select class="card course_dropdown_list" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                      <option value="<?php echo base_url()?>course" selected="selected"> Recording</option>
                      <option value="<?php echo base_url()?>project"><a href="<?php echo base_url()?>project" id="project">Project</a></option>
                      <option value="<?php echo base_url()?>assignment"><a href="<?php echo base_url()?>assignment" id="assignment">Assignment</a></option>
                      <option value="<?php echo base_url()?>case_study"><a href="<?php echo base_url()?>case_study" id="case study">Case Study</a></option>
                      <option value="<?php echo base_url()?>quiz"><a href="<?php echo base_url()?>quiz" id="quiz">Quiz</a></option>
                    </select>

            
          </div>
       </div> 
    </div>
</div>		
</div>
</div>

