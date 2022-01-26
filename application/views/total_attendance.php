  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i> 
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo base_url();?>assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo base_url();?>assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <script>
   //menu
 document.getElementById('menu_dashboard').classList.add("menu-active");
 //icon
 document.getElementById('sidebar_icon_1').style.fill='#E46F0E';


</script>
<style>
    #present {
    background-color: #8AEC8E;
    width: 145px;
    height: 32px;
    border-radius: 17px;
    text-align: center;
    padding: 5px;
}

                 #present{
                    text-align: center;
                    align-content: center;
                     background-color:#8AEC8E;
                     width:145px;
                     height:35px;
                     border-radius:17px;
                 }

                 #absent{
                    text-align: center;
                    align-content: center;
                     background-color:#FF5E5E;
                     width:145px;
                     height:35px;
                     border-radius:17px;
               
                    }
                 
    body{font-family: 'Poppins', sans-serif;}
</style>           
<?php require_once 'dbcon.php'; ?>
          <div class="container-fluid py-4">
      <div class="row mb-4">
              <div class="col-lg-12 col-md-12 mb-xl-2 mb-4" style="overflow-y: auto;overflow-x: auto;height: 100%;">
                  <span  style="margin-left:0px;font-size: 40px;color:#858585;"><b>Total Attendance</b></span>
                <BR>
               
                                 <table class="table table-hover text-left " >
                                    <thead>
                                       <tr>
                                          <th>Session</th>
                                          <th>Date</th>
                                          <th>Attendance</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       foreach($attendance as $data){?>
                                         
                                       <tr >
                                        <?php 
                                       foreach($session_name as $datas){?>
                                     <td style="width:50%">
                                           <?php echo "<pre>";print_r($datas->session_name); ?>
                                          </td>
                                        <?php } ?>
                                          <td style="width:20%"><?php
                                                $mydate=getdate($data->timestamp);
                                                echo "$mydate[mday]/$mydate[mon]/$mydate[year]";
                                                ?></td>
                                          <td style="width:20%">
                                            <?php
                                            if($data->attendance == 'present'){
                                                ?>
                                                  <button class="btn btn-default" id="present"><p style="font-size:15px;color:#ffffff;margin-top:-2px;">Present</p></button>
                                                <?php
                                            }else if($data->attendance == 'absent'){
                                                ?>
                                                  <button class="btn btn-danger" id="absent" ><p style="font-size:15px;color:#ffffff;margin-top:-2px;">Absent</p></button>
                                                <?php   }
                                            ?>
                                          
                                      
                                        </td>
                                       </tr>

                                       <?php
                                          }
                                          ?>
                                          
                                        </tbody>

                                 </table>
               <!-- Container-fluid Ends-->
            </div>
                </div>

          </div>
      
