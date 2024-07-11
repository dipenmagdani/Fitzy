<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitzy | My Profile</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/p_style.css" type="text/css">

</head>
<body>
    <div class="action">
        <div class="profile" onclick="menuToggle();">
            <img src="img/profile.png" alt="">
        </div>
        <div class="menu">
            <h3>Someone famous<br><span>website designer</span></h3>
            <ul>
                <li><img src="img/l_icons/profile.png"><a href="#">My Profile</a></li>
                <li><img src="img/l_icons/edit.png"><a href="#">Edit Profile</a></li>
                <li><img src="img/l_icons/settings.png"><a href="#">Settings</a></li>
                <li><img src="img/l_icons/help.png"><a href="#">Help</a></li>
                <li><img src="img/l_icons/logout.png"><a href="#">Logout</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
</body>
</html>