<?php
$conn=new mysqli ('localhost','root','','ob');
if (!$conn) {
    die("connection failed !");
    # code...
} else {
    # code...
    // echo "success";
    $username=$_POST['uName'];
    $password=$_POST['pass'];
    $hashed_pass=md5($password);
    $sql="INSERT INTO login_db (id,username,password) VALUES(null,'$username','$hashed_pass')";
    $result=$conn->query($sql);
    if ($result===TRUE) {
        header('location:login.php');
        # code...
    } else {
        # code...
    }
    
}

?>