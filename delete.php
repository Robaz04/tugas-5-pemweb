<?php

include "connection.php";
//hapus data
$npm = $_GET['id'];
$sql = "delete from identitas where npm='$npm'";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
