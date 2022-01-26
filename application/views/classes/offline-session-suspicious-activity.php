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
  require '../../dbcon.php';
?> 

<?php
if (!empty($_GET['r'])) {
    $get_reason = $_GET['r'];
    $user_id = $_SESSION['ftip69_uid'];
    $offline_session_id = 5;
    $date = date_create();
    $timestamp = date_timestamp_get($date);

    $sql = "INSERT INTO `offline_session_suspicious_log`(`id`, 
    `user_id`, `offline_session_id`, `reason`, `timestamp`) 
    VALUES (NULL,$user_id,$offline_session_id,'$get_reason',$timestamp)";

if ($con->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  ?>
<script>
    var a_delete = 1;
</script>
  <?php
  
} else {
  // echo "Error deleting record: " . $con->error;
  header('location:../auth/login.php');
}

} else{
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offline Session Suspicious Activity</title> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <script>
    if(a_delete == 1){
swal({
  title: "Alert",
  text: "Your Action Recorded!",
  icon: "warning",
  button: "Okay",
});
setTimeout(function(){ window.location = "../auth/login.php"; }, 2000);
}
else{
  window.location = "../auth/login.php"; 
}



  </script>
</body>
</html>
