<?php
session_start();
if (!isset($_SESSION['ftip69_uid'])) {
  header('location:../auth/login.php');
} 
?>

<?php
         require_once '../../dbcon.php';
         $user_id = $_SESSION['ftip69_uid'];
         $query = "SELECT * FROM `user2` WHERE `id` = $user_id;";
         $run = mysqli_query($con, $query);
         $row = mysqli_num_rows($run);
         $data = mysqli_fetch_assoc($run);

         
            $ftip69_acc_settings = $data['acc_settings'];
            

   // success
   if ($ftip69_acc_settings==1) {
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
  require '../../dbcon.php';
?>
<?php
if(isset($_POST['submit'])){
$get_id=$_POST['id'];

  // update rejected lead table 
$sql = "DELETE FROM  `mcq_test_questions` WHERE `id`=$get_id";

// $sql = "DELETE FROM lead WHERE id=$getid";

if ($con->query($sql) === TRUE) {
  // echo "Record deleted successfully";
}
else{
  
}




   $uploadsuccess= 0;
   $uploadfail = 0;
   $target_dir = "../uploads/lead/";
   $target_file = $target_dir . basename($_FILES["csv_file"]["name"]);

   $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   $uploadOk = 1;
   if($imageFileType != "csv" ) {
     $uploadOk = 0;
   }

   if ($uploadOk != 0) {
      if (move_uploaded_file($_FILES["csv_file"]["tmp_name"], $target_dir.'csv_file.csv')) {

        // Checking file exists or not
        $target_file = $target_dir . 'csv_file.csv';
        $fileexists = 0;
        if (file_exists($target_file)) {
           $fileexists = 1;
        }
        if ($fileexists == 1 ) {

           // Reading file
           $file = fopen($target_file,"r");
           $i = 0;

           $importData_arr = array();
                       
           while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($data);

             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = mysqli_real_escape_string($con, $data[$c]);
             }
             $i++;
           }
           fclose($file);

           $skip = 0;
           // insert import data
           foreach($importData_arr as $data){
              if($skip != 0){
                //  $username = $data[0];
                //  $fname = $data[1];
                //  $lname = $data[2];
                //  $email = $data[3];     

                $mcq_question = $data[0];
                $mcq_question = nl2br(htmlspecialchars($mcq_question, ENT_QUOTES, "UTF-8"));
                $question_type= $data[1];
                $option_a= $data[2];
       $option_a = htmlspecialchars($option_a, ENT_QUOTES, "UTF-8");

                $option_b= $data[3];
       $option_b = htmlspecialchars($option_b, ENT_QUOTES, "UTF-8");

                $option_c= $data[4];
       $option_c = htmlspecialchars($option_c, ENT_QUOTES, "UTF-8");

                $option_d= $data[5];
       $option_d = htmlspecialchars($option_d, ENT_QUOTES, "UTF-8");

                $correct_option=$data[6];
                $correct_answer_description=$data[7];
                $correct_answer_description = htmlspecialchars($correct_answer_description, ENT_QUOTES, "UTF-8");
                $answer_hint=$data[8];
                $answer_hint = htmlspecialchars($answer_hint, ENT_QUOTES, "UTF-8");
                $marks=$data[9];
                $note=$data[10];
                $note = htmlspecialchars($note, ENT_QUOTES, "UTF-8");
                $date = date_create();
                $timestamp = date_timestamp_get($date);
              
              
             
                // Checking duplicate entry
                //  $sql = "select count(*) as allcount from mcq_test_questions where 'test_id='.$get_id.',mcq_question='.$mcq_question.',question_type='.$question_type.',option_a'.$option_a.',option_b='.$option_b.',option_c='.$option_c.',option_d='.$option_d.',correct_option='.$correct_option.',correct_answer_description='.$correct_answer_description.',answer_hint='.$answer_hint.',marks='.$marks.',note='.$note.',timestamp'.$timestamp.'";
                 
                //  $retrieve_data = mysqli_query($con,$sql);
                 
                //  $row = mysqli_fetch_array($retrieve_data);
                 
                 
                //  $count = $row['allcount'];

                //  remove this to chck for duplication
                 $count = 0;
                 if($count == 0){
                   
                    // Insert record
                    $insert_query = "INSERT INTO `mcq_test_questions`(`id`, `test_id`, `mcq_question`, `question_type`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`, `correct_answer_description`, `answer_hint`, `marks`, `note`, `timestamp`) VALUES (NULL,$get_id,'$mcq_question',$question_type,'$option_a','$option_b','$option_c','$option_d','$correct_option','$correct_answer_description','$answer_hint',$marks,'$note',$timestamp)";
                    // mysqli_query($con,$insert_query);
                    if ($con->query($insert_query) === TRUE) {
                        
                        $uploadsuccess = 1;
                        } else {
                         $uploadfail = 1;
                          echo "Error in insert_query: " . $insert_query . "<br>" . $con->error;
                        }
                 }else {
                   # code...
                 }
              }else{
               
              }
              $skip ++;
           }

           if($uploadsuccess == 1 && $uploadfail == 0 ){

            echo "<!DOCTYPE html>
      <html lang='en'>
      <head>
  
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Interview Questions Upload</title>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
      </head>
      <body>
        <script>
          
      swal({
        title: 'Uploaded',
        text: 'Data has been uploaded successfully',
        icon: 'success',
        button: 'Okay',
      });
      setTimeout(function(){ 
        window.location = '../test/question-test-list.php'; }, 2000);
      
      </script>
      </body>
      </html>";

           }
           else{
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
  
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>Delete Lead</title>
              <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
            </head>
            <body>
              <script>
                
            swal({
              title: 'Error',
              text: 'Erorr uploading data',
              icon: 'warning',
              button: 'Okay',
            });
            setTimeout(function(){ window.location = '../test/upload-test-manual.php'; }, 2000);
            
            </script>
            </body>
            </html>";

           }
           $newtargetfile = $target_file;
           if (file_exists($newtargetfile)) {
              unlink($newtargetfile);
           }
         }

      }
   }
   else{
      echo "<!DOCTYPE html>
      <html lang='en'>
      <head>
  
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Delete Lead</title>
        <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
      </head>
      <body>
        <script>
          
      swal({
        title: 'Error',
        text: 'Erorr uploading data',
        icon: 'warning',
        button: 'Okay',
      });
      setTimeout(function(){ window.location = '../test/upload-test-manual.php'; }, 2000000);
      
      </script>
      </body>
      </html>";
   }

  
}
?>


