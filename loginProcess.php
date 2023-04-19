<?php
$conn=new mysqli('localhost','root','','ob');
if (!$conn) {
    die("connection failed!");
    # code...
} else {
    # code...
    // echo "success";
    $username=$_POST['uName'];
    $password=$_POST['pass'];

    $hashed_pass=md5($password);

    // $sql="SELECT * FROM login_db WHERE 'username' = '$username' & 'password'='$hashed_pass' LIMIT 1";
    $sql =  "SELECT * FROM login_db WHERE username='$username' && password='$hashed_pass' limit 1;";
    $result=$conn->query($sql);
    if ($result->num_rows>0) {
        

        session_start();//init the session
        $_SESSION["LOGGEDIN"]=true;
        header("location:hidden.php");
        # code...
    } else {
        # code...
        echo "user does not exists.";
    }
    

}

?>