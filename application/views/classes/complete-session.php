<?php
session_start();
if (!isset($_SESSION['ftip69_uid'])) {
  header('location:../auth/login.php');
} else{
  $user_id = $_SESSION['ftip69_uid'];

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
         $ftip69_acc_faculty = $data['acc_faculty'];


   // success
   if ($ftip69_acc_classes==1 || $ftip69_acc_faculty ==1) {
    // getting users credentials
    $user_id = $_SESSION['ftip69_uid'];
   }else{
   ?>
<script>
   window.history.back();
</script>
<?php
   }  
   ?>
<?php

if (!empty($_GET['id'])) {
    $session_id = $_GET['id'];
    $message = '';
    ?>
    <script>
    var success = 0;
    </script>
    <?php 

   $query = "SELECT * FROM `offline_session_log` WHERE `session_id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow > 0 && $runfetch == TRUE) { 
       while ($data = mysqli_fetch_assoc($runfetch)) {
        $attendance_status = $data['attendance_status']; 
        $ppt_status = $data['ppt_status']; 
        $assignment_stauts = $data['assignment_stauts']; 
        $test_status = $data['test_status']; 
        $recording_upload_status = $data['recording_upload_status']; 
        if($attendance_status == 0){
            $message = "Please Complete Attendance";
        }else if($ppt_status == 0){
            $message = "Please Complete PPT";
        }else if($assignment_stauts==0){
            $message = "Please Assign Assignment";
        }else if($test_status == 0){
            $message = "Please Assign Test";

        }else if($recording_upload_status == 0){
            $message = "Please Complete Recording Upload";
        }else {
             // update rejected lead table 
             $date = date_create();
   $timestamp = date_timestamp_get($date);
    $sql = "UPDATE `offline_session_log` SET `is_completed`= 1,`complete_time` = $timestamp WHERE `session_id` = $session_id";
    
// $sql = "DELETE FROM lead WHERE id=$getid";

if ($con->query($sql) === TRUE) {
    
    ?>
  <script>
      var success = 1;
  </script>
    <?php
    
  } else {
      ?>
  <script>
     success = 0;
  </script>
    <?php
    echo "Error deleting record: " . $con->error;
    ?>
  <script>
  window.history.back();
  </script>
    <?php
  }
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
  <title>Complete Session</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <script>
 
    if(success != 1){
swal({
  title: "Warning",
  text: "<?php echo $message; ?>",
  icon: "warning",
  button: "Done",
});
setTimeout(function(){ 
  window.history.back();
  }, 2000);
}
else{
    swal({
  title: "Success",
  text: "Session Completed Successfully",
  icon: "success",
  button: "Done",
});
setTimeout(function(){ 
  window.location = '../auth/login.php';
  }, 2000);
}



  </script>
</body>
</html>