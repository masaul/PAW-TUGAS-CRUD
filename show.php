<?php
require 'database.php';
$syntaxQuery = "SELECT * FROM tbl_027";
$query = mysqli_query($database, $syntaxQuery);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Index</title>
</head>

<body>
    <h1 class="text-center">Data - Data Siswa</h1>
    <a class="btn btn-primary" href="tambah.php" role="button">Tambah Data Siswa</a><br><br>
    <?php if (isset($_GET['delete'])) : ?>
        <div class="alert alert-success" role="alert">
            Data berhasil dihapus!
        </div><br>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $noUrut = 1; ?>
            <?php while ($data = mysqli_fetch_array($query)) : ?>
                <tr>
                    <th scope="row"><?= $noUrut; ?></th>
                    <td><?= $data['nama_027']; ?></td>
                    <td><?= $data['email_027']; ?></td>
                    <td>
                        <a class="btn btn-primary" role="button" href="edit.php?id=<?= $data['id_027']; ?>">Edit</a>
                        |
                        <a class="btn btn-danger" role="button" href="delete.php?id=<?= $data['id_027']; ?>">Delete</a>
                    </td>
                </tr>
                <?php $noUrut++; ?>
            <?php endwhile; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>