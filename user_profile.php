<!DOCTYPE html>
<html lang="en">

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
  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/flaticon.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/barfiller.css" type="text/css">
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="shortcut icon" type="image/png" href="./favicon.png">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Profile CSS -->
  <style>
    body {
      margin-top: 20px;
      color: #1a202c;
      font-family: sans-serif;
      text-align: left;
      background-color: #151515;
    }

    .main-body {
      padding: 15px;
    }

    .card-profile {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }

    .card-profile {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 0 solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
    }

    .card-body {
      flex: 1 1 auto;
      min-height: 1px;
      padding: 1rem;
    }

    .gutters-sm {
      margin-right: -8px;
      margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*="col-"] {
      padding-right: 8px;
      padding-left: 8px;
    }

    .mb-3,
    .my-3 {
      margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
      background-color: #e2e8f0;
    }

    .h-100 {
      height: 100% !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }
  </style>

</head>

<body>
  <?php
  include "connect.php";
  include "header.php";

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
        $name = $row['Name'];
        $gender = $row['Gender'];
        $dob = $row['Birth_Date'];
        $age = $row['Age'];
        $contact = $row['Contact_No'];
        // $height = $row['Height'];
        // $weight = $row['Weight'];
        // $handicap = $row['Physicaly_Handicap'];
        // $disease = $row['Disease_Check'];
        $pincode = $row['Pincode'];
        $local_place = $row['Local_Place'];
        $city = $row['City'];
        $state = $row['State'];
        $country = $row['Country'];
        $profile = $row['Photo'];
        if ($role == "trainer" || $role == "dietician") {
          $experience = $row['Experience'];
        }
  ?>
        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                  <h2>Your Profile</h2>
                  <div class="bt-option">
                    <a href="./index.php">Home</a>
                    <a href="#">Other</a>
                    <span>My Profile</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Breadcrumb Section End -->

        <?php
        if ($role == "customer" || $role == "admin" || $role == "contributor") {
        ?>
          <div class="container">
            <div class="main-body">

              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card-profile">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php if (!empty($profile)) {
                                    echo "data:image/jpg;charset=utf8;base64," . base64_encode($profile);
                                  } else {
                                    echo "https://bootdey.com/img/Content/avatar/avatar7.png";
                                  } ?>" alt="Profile" class="rounded-circle" width="150" />
                        <div class="mt-3">
                          <h4><?= $name ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $name ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $_SESSION['email'] ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $gender ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date of Birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $dob ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $age ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $contact ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Near Place</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $local_place ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $city ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">State</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $state ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $country ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Pincode</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $pincode ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info" href="./edit_profile.php">Edit</a>
                          <a class="btn btn-danger " href="javascript:del_acc('<?php echo "./delete_account.php"; ?>');">Delete Account</a>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        <?php
        } else if ($role == 'trainer' || $role == "dietician") {
        ?>
          <div class="container">
            <div class="main-body">

              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card-profile">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php if (!empty($profile)) {
                                    echo "data:image/jpg;charset=utf8;base64," . base64_encode($profile);
                                  } else {
                                    echo "https://bootdey.com/img/Content/avatar/avatar7.png";
                                  } ?>" alt="Profile" class="rounded-circle" width="150" />
                        <div class="mt-3">
                          <h4><?= $name ?></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $name ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $_SESSION['email'] ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $gender ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Date of Birth</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $dob ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Age</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $age ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $contact ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Experience</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?= $experience ?></div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Near Place</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $local_place ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">City</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $city ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">State</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $state ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $country ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Pincode</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?= $pincode ?>
                        </div>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info" href="./edit_profile.php">Edit</a>
                          <a class="btn btn-danger " href="javascript:del_acc('<?php echo "./delete_account.php"; ?>');">Delete Account</a>
                        </div>
                      </div>

                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
        <?php
        }
        ?>
        <script type="text/javascript">
          function del_acc(newurl) {
            if (confirm("Are you sure you want to delete your account?")) {
              document.location = newurl;
            }
          }
        </script>
  <?php
        include "footer.php";
      }
    } else {
      echo '<b><script>if (swal("Error!", "Your Profile is either deleted or you don\'t have an Account!", "error")) {setTimeout(function () { window.location.href="./index.php"; }, 3000); }</script></b>';
    }
  }

  ?>


</body>

</html>