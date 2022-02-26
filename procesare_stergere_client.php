<?php
session_start(); 
include "config.php";
$sql = "DELETE FROM clienti WHERE clientID='" . $_GET["clientID"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>