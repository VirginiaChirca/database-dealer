<?php
session_start(); 
include "config.php";
$sql = "DELETE FROM masini WHERE masinaID='" . $_GET["masinaID"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>