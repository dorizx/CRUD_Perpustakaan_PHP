<?php

include_once ("./connect.php");

$id = $_GET['id'];

$get_staff = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");

$staff = mysqli_fetch_assoc($get_staff);


if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telepon='$telepon', email='$email' WHERE id=$id");

}


?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <div class="container w-75">
            <h1 class="my-4">Form edit staff</h1>

            <form class= "w-75" action="" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input class="form-control" type="text"id="nama" name="nama" value="<?php echo $staff['nama'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Telepon</label>
                    <input class="form-control" type="number" id="telepon" name="telepon" value=<?php echo $staff['telepon'] ?>>
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Email</label>
                    <input class="form-control" type="email" id="email" name="email" value=<?php echo $staff['email'] ?>>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <a class="btn btn-primary my-2"  href="staff.php">Kembali ke halaman staff</a>
        </div>
    </body>

</html>