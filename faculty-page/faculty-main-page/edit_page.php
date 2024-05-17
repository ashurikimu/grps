<?php
include '../../db-conn.php';

if(isset($_GET['idnum'])){
    $idnum = $_GET['idnum'];
}

$query = "SELECT * FROM faculty1db WHERE idnum = '$idnum'";

$result = mysqli_query($con, $query);

if(!$result) {
    die("Query Failed: " . mysqli_error($con));
} elseif(mysqli_num_rows($result) == 0) {
    die("No records found for ID: $idnum");
} else {
    $row = mysqli_fetch_assoc($result);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="edit_page.css">
</head>
<body>
    <div class="nav-top">
            <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
            <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
    </div>


    <?php
        if(isset($_POST['edit_students'])){

            $idnum_new = $_POST['idnum_new'];

            $name = mysqli_real_escape_string($con, $_POST['name']);
            $idnum = mysqli_real_escape_string($con, $_POST['idnum']);
            $yr_level = mysqli_real_escape_string($con, $_POST['yr_level']);
            $block = mysqli_real_escape_string($con, $_POST['block']);
            $semester = mysqli_real_escape_string($con, $_POST['semester']);
            $subject_code = mysqli_real_escape_string($con, $_POST['subject_code']);
            $units = mysqli_real_escape_string($con, $_POST['units']);
            $grade = mysqli_real_escape_string($con, $_POST['grade']);

            $query = "UPDATE faculty1db SET name = '$name', idnum = '$idnum', yr_level = '$yr_level', block = '$block', semester = '$semester', subject_code = '$subject_code', units = '$units', grade = '$grade' WHERE idnum = '$idnum_new'";
            $result = mysqli_query($con, $query);

            if(!$result) {
                die("Query Failed: " . mysqli_error($con));
            } else {
                header("location: faculty1_class.php?edit_msg=Data has been updated!");
                exit(); // Exit after redirection
            }
        }
    ?>


    <div class="form">     
        <form action="edit_page.php?idnum=<?php echo $idnum ?>" method="post">
            <input type="hidden" name="idnum_new" value="<?php echo $idnum ?>">

            <label for="name">Name</label>
            <input type="text" name="name" value="<?php echo $row['name'] ?>">
            <br>
            <label for="idnum">Student ID</label>
            <input type="text" name="idnum" value="<?php echo $row['idnum'] ?>">
            <br>
            <label for="yr_level">Year Level</label>
            <input type="number" name="yr_level" value="<?php echo $row['yr_level'] ?>">
            <br>
            <label for="block">Block</label>
            <input type="text" name="block" value="<?php echo $row['block'] ?>">
            <br>
            <label for="semester">Semester</label>
            <input type="text" name="semester" value="<?php echo $row['semester'] ?>">
            <br>
            <label for="subject_code">Subject Code</label>
            <input type="text" name="subject_code" value="<?php echo $row['subject_code'] ?>">
            <br>
            <label for="units">Units</label>
            <input type="text" name="units" value="<?php echo $row['units'] ?>">
            <br>
            <label for="units">Grade</label>
            <input type="number" name="grade" step="0.0001" value="<?php echo $row['grade'] ?>">

            <input class="save" type="submit" name="edit_students" value="SAVE">
        </form>
    </div>
</body>
</html>