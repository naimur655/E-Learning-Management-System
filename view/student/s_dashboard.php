
<?php
session_start();
    if (!isset($_SESSION["username"]) || $_SESSION["Role"] != 3) {
        header("Location:../login.php");
        exit;
    }

    else
    {
       
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Student Dashboard</title>
        <script src="Script.js" defer></script>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>


    <a href='../logout.php' class="logout-btn">logout</a>
    <a href="#" class="notification">notification</a>
    
    <nav class="main-menu">
        <ul>
            <li><a href="courses.php">View Available Courses</a></li>
            <li><a href="enroll.php">Enroll in a Course</a></li>
            <li><a href="assignments.php">Submit Assignment/Exam</a></li>
            <li><a href="grades.php">View Grades & Progress</a></li>
        </ul>
    </nav>
    
    <div class="content-container">
       <h3> Student Dashboard</h3>
       <?php echo "<h1>Welcome  ".$_SESSION["username"]."</h1><br>";?>
       <table class="routine-table">
            <caption>Today's Routine</caption>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09:00 AM - 10:30 AM</td>
                    <td>Math 101</td>
                </tr>
                <tr>
                    <td>11:00 AM - 12:30 PM</td>
                    <td>Physics Lab</td>
                </tr>
                <tr>
                    <td>02:00 PM - 03:30 PM</td>
                    <td>Computer Science</td>
                </tr>
            </tbody>
       </table>
    </div>
    
    </body>
</html>