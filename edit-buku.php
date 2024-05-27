<?php

include_once ("./connect.php");

$id = $_GET["id"];

$get_buku = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");

$buku = mysqli_fetch_assoc($get_buku);


if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];
    $penerbit = $_POST['penerbit'];

    $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit='$unit', penerbit='$penerbit' WHERE id=$id");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-75">
    <h1 class="my-4">Form edit buku</h1>

    <form class="w-75" action="" method="POST">
        <div class="mb-3">
        <label class="form-label" for="nama">Nama</label>
        <input class="form-control" type="text" id="nama" name="nama" value="<?php echo $buku['nama'] ?>">
        </div>
        <div class="mb-3">
        <label class="form-label" for="isbn">ISBN</label>
        <input class="form-control" type="text" id="isbn" name="isbn" value=<?php echo $buku['isbn'] ?>>
        </div>
        <div class="mb-3">
        <label class="form-label" for="unit">Unit</label>
        <input class="form-control" type="number" id="unit" name="unit" value=<?php echo $buku['unit'] ?>>
        </div>
        <div class="mb-3">
        <label class="form-label" for="penerbit">Penerbit</label>
        <input class="form-control" type="text" id="penerbit" name="penerbit" value=<?php echo $buku['penerbit'] ?>>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
    <a class="btn btn-warning my-2" href="buku.php">Kembali ke halaman buku</a>
    </div>
</body>

</html>