<?php
    require_once("userController.php");
    $userNameErr = "";
    $passErr = "";
    $hasErr = false;
    $username = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $userNameErr = "User name cannot be empty";
            $hasErr = true;
        } else {
            $username = $_POST["username"];
        }

        if (empty($_POST["password"])) {
            $passErr = "Password cannot be empty";
            $hasErr = true;
        } else {
            $password = $_POST["password"];
        }

        if ($hasErr) {
            header("Location:../view/login.php?userNameErr=$userNameErr&passErr=$passErr");
            exit;
        } else {
            $returnedValue = validateUser($username, $password);

            if (!$returnedValue) {
                header("Location:../view/login.php?invalidUser=Invalid User.");
                exit;
            } else {
                session_start();
                $_SESSION["username"] = $returnedValue["Username"];
                $_SESSION["Role"] = $returnedValue["Role"];

                if ($returnedValue["Role"] == 1) {
                    header("Location:../view/admin/a_dashboard.php");
                } elseif ($returnedValue["Role"] == 2) {
                    header("Location:../view/instructor/i_dashboard.php");
                } else {
                    header("Location:../view/student/s_dashboard.php");
                }
                exit;
            }
        }
    }
?>
