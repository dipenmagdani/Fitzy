<head>
  <meta charset="UTF-8">
  <meta name="description" content="Blogs">
  <meta name="keywords" content="Gym, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fitzy | Profile</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<?php
	include "connect.php";
    session_start();
    if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
        $user_id = $_SESSION['userid'];
    }
    else {
        header("Location: ./index.php");
    }
    $photo = addslashes(file_get_contents('./img/photo.jpg'));

    $sql = "UPDATE `contributor` SET `Photo`='$photo' WHERE `User_Id`='20'";
    $query = mysqli_query($conn, $sql);

    if($query) {
        echo '<b><script>if (swal("Profile Updated!", "Redirecting Now..", "success")) {setTimeout(function () { window.location.href="user_profile.php"; }, 3000); }</script></b>';
    } else {
        echo '<b><script>swal("Profile not Updated!", "Please try again leter", "error");</script></b>';
    }
?>
</body>
</html>