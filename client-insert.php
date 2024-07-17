<?php
include 'dbcon.php';

if (isset($_POST["add_client"])) {
    $f_name = $_POST['f_name'];
    $f_iig = $_POST['f_iig'];
    $f_ggc = $_POST['f_ggc'];
    $f_fna = $_POST['f_fna'];
    $f_cdn = $_POST['f_cdn'];
    $f_nix = $_POST['f_nix'];
	$f_note = $_POST['f_note'];
    $f_ac_date = $_POST['f_ac_date'];
    
    
    if ($f_name == "" || empty($f_name)) {
        header('location:index.php?message=You need to fill in the client name!');
        exit(); // It's a good practice to exit after redirecting
    }
    
    $query = "INSERT INTO clients (name, iig, ggc, fna, cdn, nix, note, ac_date)
              VALUES ('$f_name', '$f_iig', '$f_ggc', '$f_fna', '$f_cdn', '$f_nix', '$f_note', '$f_ac_date' )";

    $result = mysqli_query($link, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($link));
    } else {
        header('location:index.php?insert_msg=Your Data Has Been Added Successfully');
        exit(); // It's a good practice to exit after redirecting
    }
} else {
    header('location:index.php');
    exit(); // It's a good practice to exit after redirecting
}
?>
