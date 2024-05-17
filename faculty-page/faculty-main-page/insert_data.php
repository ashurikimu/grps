<?php
include '../../db-conn.php';

if(isset($_POST['add_students'])) {
    $name = $_POST['name'];
    $idnum = $_POST['idnum'];
    $year_level = $_POST['yr_level'];
    $block = $_POST['block'];
    $semester = $_POST['semester'];
    $subject_code = $_POST['subject_code'];
    $units = $_POST['units'];

    // Validate inputs
    if(empty($name) || empty($idnum) || empty($year_level) || empty($block) || empty($semester) || empty($subject_code) || empty($units)) {
        header('location:faculty1_class.php?message=Error!! You need to input ALL the NEEDED information!');
        exit; 
    }
    
    // SQL Injection Prevention: Use prepared statements
    $query = "INSERT INTO faculty1db (name, idnum, yr_level, block, semester, subject_code, units) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $idnum, $year_level, $block, $semester, $subject_code, $units);

    // Execute the statement
    $success = mysqli_stmt_execute($stmt);

    if(!$success) {
        die("Query Failed: " . mysqli_error($con));
    } else {
        header('location: faculty1_class.php?insert_msg=Data has been added successfully!');
    }

    mysqli_stmt_close($stmt);
}
?>
