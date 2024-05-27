<?php

include_once ("./connect.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $query = mysqli_query($db, "INSERT INTO staff VALUES(
        NULL, '$nama', '$telepon', '$email'
    )");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form tambah data buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="telepon">Telepon</label>
        <input type="number" id="telepon" name="telepon">
        <br>
        <label for="telepon">Email</label>
        <input type="text" id="email" name="email">


        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="staff.php">Kembali ke halaman staff</a>

</body>

</html>