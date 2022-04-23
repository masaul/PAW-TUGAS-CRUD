<?php
require 'database.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $syntaxQuery = "INSERT INTO tbl_027 VALUES ('', '$nama', '$email')";
    $query = mysqli_query($database, $syntaxQuery);
    if ($query) {
        $alert = true;
    } else {
        echo '<script> alert("Data Gagal Ditambahkan") </script>';
    }
}
if (isset($_POST['back'])) {
    header('Location: show.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <h2 class="text-center">FORM untuk menambahkan data siswa</h2> <br>
    <?php if (isset($alert)) : ?>
        <div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
        </div>
    <?php endif; ?>
    <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" require>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" require>
        </div>
        <div class="col-md-12">
            <button class="w-100 btn btn-primary btn-lg btn-beli" type="submit" name="submit">Tambah Data</button>
        </div>
        <div class="col-md-12">
            <button class="w-100 btn btn-danger btn-lg btn-beli" type="submit" name="back">Back Home</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>