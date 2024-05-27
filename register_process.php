<?php

include_once("./connect.php");


if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if(isset($_POST['email']) && isset($_POST['password'])){
            $sql = "SELECT * FROM users WHERE email ='$email'";
            $result = mysqli_query($db, $sql);
        
        if (mysqli_num_rows($result) > 0){
            echo "Email sudah terdaftar.";
        }else{
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        }
        if(mysqli_query($db, $sql) === TRUE){
            echo "Registrasi berhasil silahkan <a href='login.php'>login</a> ";
       }else{
            echo "registrasi gagal";
       } 

    }

}


?>