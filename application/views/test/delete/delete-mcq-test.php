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
         require_once '../../../dbcon.php';
         $user_id = $_SESSION['ftip69_uid'];
         $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
         $run = mysqli_query($con, $query);
         $row = mysqli_num_rows($run);
         $data = mysqli_fetch_assoc($run);

         
            $ftip69_acc_test = $data['acc_test'];
            

   // success
   if ($ftip69_acc_test==1) {
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

if (!empty($_GET['id'])) {
    $getid = $_GET['id'];

// update rejected lead_followup table 
$sql = "UPDATE `mcq_test` SET `is_deleted`= 1 WHERE id=$getid";







// $sql = "DELETE FROM lead_followup WHERE id=$getid";

if ($con->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  $sql2 = "UPDATE `mcq_test_questions` SET `is_deleted`= 1 WHERE `test_id`=$getid";
  $con->query($sql2);
  ?>
<script>
    var a_delete = 1;
</script>
  <?php
  
} else {
  // echo "Error deleting record: " . $con->error;
  header('location:../mcq-test-list.php');
}

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Test</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <script>
    if(a_delete == 1){
swal({
  title: "Deleted",
  text: "Test deleted successfully",
  icon: "warning",
  button: "Done",
});
setTimeout(function(){ window.location = "../mcq-test-list.php"; }, 2000);
}
else{
  window.location = "../mcq-test-list.php"; 
}



  </script>
</body>
</html>
