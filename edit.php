<?php
require 'database.php';
$id = $_GET['id'];
$syntaxQueryShow = "SELECT * FROM tbl_027 WHERE id_027=$id";
$query = mysqli_query($database, $syntaxQueryShow);
$data = mysqli_fetch_array($query);
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $syntaxQueryUpdate = "UPDATE tbl_027 SET nama_027='$nama', email_027='$email' WHERE id_027=$id";
    $queryData = mysqli_query($database, $syntaxQueryUpdate);
    if ($queryData) {
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
    <h2 class="text-center">Ubah Data Siswa</h2>
    <?php if (isset($alert)) : ?>
        <div class="alert alert-success" role="alert">
            Data berhasil diubah!
        </div>
    <?php endif; ?>
    <form class="row g-3" action="" method="post">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id_027']; ?>">
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_027']; ?>">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?= $data['email_027']; ?>">
        </div>
        <div class="col-md-12">
            <button class="w-100 btn btn-primary btn-lg btn-beli" type="submit" name="submit">Edit Data</button>
        </div>
        <div class="col-md-12">
            <button class="w-100 btn btn-danger btn-lg btn-beli" type="submit" name="back">Back Home</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>