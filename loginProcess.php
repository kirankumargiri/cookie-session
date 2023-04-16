<?php
$conn=new mysqli('localhost','root','','authentication');
if (!$conn) {
    die("connection failed!");
    # code...
} else {
    # code...
    // echo "success";
    $username=$_POST['uName'];
    $password=$_POST['pass'];

    echo $password;
    $hashed_pass=md5($password);
    echo $hashed_pass;
    // $sql="SELECT * FROM login_db WHERE 'username' = '$username' & 'password'='$hashed_pass' LIMIT 1";
    $sql =  "SELECT * FROM login_db WHERE username='$username' && password='$hashed_pass' limit 1;";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        

        echo "user exists.";
        # code...
    } else {
        # code...
        echo "user does not exists.";
    }
    

}

?>