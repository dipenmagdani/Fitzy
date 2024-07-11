<?php
include "connect.php";
if (!isset($_SESSION)) {
    session_start();
}


$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$url = end($url);
$url = substr($url, 0, strpos($url, "."));
if ($url == '') {
    $ind = "active";
} elseif ($url == 'index') {
    $ind = "active";
} elseif ($url == 'activities') {
    $act = "active";
} elseif ($url == 'diet') {
    $dt = "active";
} elseif ($url == 'blog') {
    $bg = "active";
} elseif ($url == 'blog-details') {
    $bg = "active";
} elseif ($url == 'dashboard') {
    $dash = "active";
} else {
    $ot = "active";
}
?>

<!-- Offcanvas Menu Section Begin -->

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
        <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./about-us.html">About Us</a></li>
            <li><a href="./classes.html">Classes</a></li>
            <li><a href="./services.html">Services</a></li>
            <li><a href="./team.html">Our Team</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./about-us.html">About us</a></li>
                    <li><a href="./class-timetable.html">Classes timetable</a></li>
                    <li><a href="./bmi-calculator.html">Bmi calculate</a></li>
                    <li><a href="./team.html">Our team</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./blog.html">Our blog</a></li>
                    <li><a href="./404.html">404</a></li>
                </ul>
            </li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="./index.php">
                        <img src="img/logo.png" width="160px" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="<?php if (isset($ind)) {
                                        echo $ind;
                                    } ?>"><a href="./index.php">Home</a></li>
                        <li class="<?php if (isset($act)) {
                                        echo $act;
                                    } ?>"><a href="./activities.php">Activities</a></li>
                        <li class="<?php if (isset($dt)) {
                                        echo $dt;
                                    } ?>"><a href="./diet.php">Diet</a></li>
                        <li class="<?php if (isset($bg)) {
                                        echo $bg;
                                    } ?>"><a href="./blog.php">Blog</a></li>
                        <li class="<?php if (isset($dash)) {
                                        echo $dash;
                                    } ?>"><a href="./gym/index.php">Dashboard</a></li>
                        <li class="<?php if (isset($ot)) {
                                        echo $ot;
                                    } ?>"><a href="#">Other</a>
                            <ul class="dropdown">
                                <li><a href="./about-us.php">About us</a></li>
                                <li><a href="./contact.php">Contact Us</a></li>
                                <li><a href="./feedback.php">Feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <?php
            if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                $role = $_SESSION['role'];
                $user_id = $_SESSION['userid'];

                switch ($role) {
                    case "trainer":
                        $table = "trainer";
                        break;
                    case "dietician":
                        $table = "dietician";
                        break;
                    case "contributor":
                        $table = "customer";
                        break;
                    case "admin":
                        $table = "admin";
                        break;
                    default:
                        $table = "customer";
                }

                $sql = "SELECT * FROM $table WHERE `User_Id` = '$user_id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $profile = $row['Photo'];
            ?>
                            <div class="col-lg-3">
                                <div class="top-option">
                                    <div class="to-search search-switch">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <div class="action">
                                        <div class="profile" onclick="menuToggle();">
                                            <img src="<?php if (!empty($profile)) {
                                                            echo "data:image/jpg;charset=utf8;base64," . base64_encode($profile);
                                                        } else {
                                                            echo "img/profile.png";
                                                        } ?>" alt="">
                                        </div>
                                        <div class="menu">
                                            <!-- <h3>Someone famous<br><span>website designer</span></h3> -->
                                            <ul>
                                                <li><img src="img/l_icons/profile.png"><a href="./user_profile.php">My Profile</a></li>
                                                <?php
                                                if ($role == 'contributor' || $role == 'admin') {
                                                ?><li><img src="img/l_icons/file.png"><a href="./my_posts.php">My Posts</a></li>
                                                    <li><img src="img/l_icons/add.png"><a href="./add_blog.php">Add Post</a></li><?php
                                                                                                                                }
                                                                                                                                    ?>
                                                <li><img src="img/l_icons/logout.png"><a href="./logout.php">Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
            } else {
                ?>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="action">
                            <div class="profile" onclick="menuToggle();">
                                <img src="img/profile.png" alt="">
                            </div>
                            <div class="menu">
                                <!-- <h3>Someone famous<br><span>website designer</span></h3> -->
                                <ul>
                                    <li><img src="img/l_icons/add-user.png"><a href="./signup.php">Signup</a></li>
                                    <li><img src="img/l_icons/login.png"><a href="./login.php">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                }
            <?php
            }

            ?>

        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Profile Dropdown Begin -->
<script>
    function menuToggle() {
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active')
    }
</script>
<!-- Profile Dropdown End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '.nav-menu ul li', function() {
        $(this).addClass('active').siblings().removeClass('active')
    })
</script>

<script type="text/javascript">
    function del_acc(newurl) {
        if (confirm("Are you sure you want to delete your account?")) {
            document.location = newurl;
        }
    }
</script>