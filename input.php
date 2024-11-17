<?php 
require "koneksi.php";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["number"];  
$message = $_POST["message"];

$query_sql = "INSERT INTO contact (firstname, lastname, email, number, message)
              VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

if (mysqli_query($koneksi, $query_sql)) {
    echo "Anda berhasil mengirim data.";
    header("Location: index.php");  
    exit();  
} else {
    echo "Terjadi sebuah error: " . mysqli_error($koneksi);
}
?>