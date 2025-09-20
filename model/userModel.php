<?php
    require_once("db.php");

    function validateUsers($id, $password)
    {
        $conn=getConnection();
        $sql="SELECT * FROM user WHERE Username='$id' AND Password='$password'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

?>