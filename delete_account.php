<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    include("connect.php");
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

    if($role == 'contributor') {
        $sql = "SELECT * FROM `contributor` WHERE `User_Id` = '$user_id'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query);

        $Contributor_Id = $result['Contributor_Id'];

        $sql1 = "DELETE FROM `contributor_articles` WHERE `Contributor_Id` = '$Contributor_Id'";
        $query1 = mysqli_query($conn, $sql1);

        $sql2 = "DELETE FROM `contributor` WHERE `User_Id` = '$user_id'";
        $query2 = mysqli_query($conn, $sql2);

        $sql3 = "DELETE FROM $table WHERE `User_Id` = '$user_id'";
        $query3 = mysqli_query($conn, $sql3);
        
        $sql4 = "DELETE FROM `user_master` WHERE `User_Id` = '$user_id'";
        $query4 = mysqli_query($conn, $sql4);
        
        if ($query1 && $query2 && $query3 && $query4) {
            session_unset();
            session_destroy();
            header("Location: index.php?action=account_deleted");
        } else {
            echo "Error in deleting data: " . mysqli_error($conn);
        }
    } else {
        $sql1 = "DELETE FROM $table WHERE `User_Id` = '$user_id'";
        $query1 = mysqli_query($conn, $sql1);
        
        $sql2 = "DELETE FROM `user_master` WHERE `User_Id` = '$user_id'";
        $query2 = mysqli_query($conn, $sql2);
        
        if ($query1 && $query2) {
            session_unset();
            session_destroy();
            header("Location: index.php?action=account_deleted");
        } else {
            echo "Error in deleting data: " . mysqli_error($conn);
        }
    }
} else {
    echo '<script type="text/javascript"> window.location.href = "./login.php"; </script>';
}
?>