<?php


session_start();

include_once("./connect.php");


if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email'];

    $password = $_POST['password'];




$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['email'] = $email;

            header("Location: index.php");

            exit;
        }else{
            echo"password salah.";
        }
    }else{
        echo"email tidak ditemukan";
    }
}


/*
    if(isset($_POST['email']) && isset($_POST['password'])){
        $sql = "SELECT * FROM users WHERE email ='email'";
        $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0){
        echo "Email sudah terdaftar.";
    }else{

        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password');
       
        if (mysqli_query($db, $sql) === TRUE {
            echo "Registreasi berhasil";
       }else {
        echo "registrasi gagal";
       } 

    }

*/
?>