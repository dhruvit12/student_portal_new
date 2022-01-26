



<?php
session_start();
//  $session_id = $_SESSION['ftip69_session_id']; 

if (!empty($_GET['s'])) {
	$session_id = $_GET['s'];

}
   require '../../dbcon.php';
  

  if($_FILES['file']['name'] != ''){

  	$file_names = '';

  	$total = count($_FILES['file']['name']);

  	for($i=0; $i<$total; $i++){
  		$filename = $_FILES['file']['name'][$i]; // Get the Uploaded file Name.
  		$extension = pathinfo($filename,PATHINFO_EXTENSION); //Get the Extension of uploded file

  		$valid_extensions = array("mp4","mkv","avi");

		  if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
			$date = date_create();
            $timestamp = date_timestamp_get($date);
  			$new_name = $timestamp."class_rec".rand().".". $extension;
  			$path = "../../../resources/offline-session-recordings/" . $new_name;

  			move_uploaded_file($_FILES['file']['tmp_name'][$i], $path);

  			$file_names .= $new_name . " , ";
  		}else{
  			echo 'false';
  		}
  	}
    
    // Save uploaded video name on database
	$query4 = "UPDATE `offline_session_log` SET `recording_upload_status` = 1, recording_files = '{$file_names}'  WHERE `session_id` = $session_id;";
	if ($con->query($query4) === TRUE) {
		
// sending mail to studetns

   $query = "SELECT `batch_id`,`session_name` FROM `offline_session` WHERE `id` = $session_id";
   $runfetch = mysqli_query($con, $query);
   $noofrow = mysqli_num_rows($runfetch);
   $indexnumber = 1;
   if ($noofrow >
   0 && $runfetch == TRUE) { while ($data = mysqli_fetch_assoc($runfetch)) {
   $batch_id = $data['batch_id']; 
   $session_name = $data['session_name'];
} }

                          			 $mails = '';
                                    $query = "SELECT `email` FROM `student` WHERE is_deleted = 0 AND `batch` = $batch_id;";
                                    
                                    $runfetch = mysqli_query($con, $query);
                                    
                                    $noofrow = mysqli_num_rows($runfetch);
                                    
                                    
                                     $indexnumber = 1;
                                    if ($noofrow > 0 && $runfetch == TRUE) { while ($data =
                                    mysqli_fetch_assoc($runfetch)) {
                                    $mails .= $data['email'].',';
                                    }
									}
									
									
									// sending mails

									
ini_set('display_errors',1);
error_reporting( E_ALL );

$to = $mails; //receiver mail address
$from = 'session@fingertips.co.in';
$subject = 'Session Video Uploaded'; 
$message = 'We have uploaded '.$session_name.' videos';
$headers = "From:" . $from;

if(mail($to,$subject,$message,$headers)){
    // echo "Mail sent";
    ?>
    <script>
    window.location = '../classes/recording-upload.php?id=<?php echo $session_id; ?>';
    </script>

    <?php
}else{
    // echo "Mail not sent";
    ?>
    <script>
    window.location = '../classes/recording-upload.php?id=<?php echo $session_id; ?>';
    </script>

    <?php
}

                       


	}
	else{
		echo "Error: " . $query4 . "<br>" . $con->error;
	}
  }
?>
