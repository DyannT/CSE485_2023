<?php
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['txtUser'];
        $password = $_POST['txtPassword'];
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['username'] = $username;
            header('location: index.php');
    }
}

?>