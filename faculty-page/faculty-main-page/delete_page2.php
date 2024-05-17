<?php
include "../../db-conn.php";

if (isset($_GET['idnum'])) {
    $idnum = $_GET['idnum'];
    
    // Sanitize the input to prevent SQL injection
    $idnum = mysqli_real_escape_string($con, $idnum);
    
    $delete = mysqli_query($con, "DELETE FROM faculty2db WHERE idnum = '$idnum'");
    
    if ($delete) {
        header("Location: faculty2_class.php?delete_msg=Record has been deleted!");
        exit();
    } else {
        die("Query failed: " . mysqli_error($con));
    }
} else {
    die("ID number not provided.");
}
?>
