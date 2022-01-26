<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Test</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>
<body>
    <script>
        swal({
        title: "Test Completed",
        text: "Result will be shown in your gradebook",
        icon: "success",
        button: "Done",
        });
        setTimeout(function(){ window.location = "../../en/auth/login.php"; }, 2000);
    </script>
</body>
</html>
