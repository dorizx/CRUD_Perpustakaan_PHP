<?php

include_once ("./connect.php");

$query = mysqli_query($db, "SELECT * FROM staff");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Staff</title>
</head>

<body>
    

    <div class="container">
    <h1 class="my-4">Daftar Staff</h1>
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Telpon</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
    <tbody>
        <?php foreach ($query as $staff) { ?>
            <tr>
                <td><?php echo $staff["nama"] ?></td>
                <td><?php echo $staff["telepon"] ?></td>
                <td><?php echo $staff["email"] ?></td>
                <td><a class="btn btn-warning" href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>Edit</a>
                    <a class="btn btn-danger" href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>Hapus</a>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>


    <a class="btn btn-primary" href="tambah-staff.php">Tambah staff</a>
    <a class="btn btn-danger" href="index.php">Kembali ke halaman utama</a>
    </div>
</body>

</html>