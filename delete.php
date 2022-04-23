<?php
require 'database.php';
$id = $_GET['id'];
$syntaxQuery = "DELETE FROM tbl_027 WHERE id_027=$id";
$query = mysqli_query($database, $syntaxQuery);
if ($query) {
    header("Location: show.php?delete=delete");
}
