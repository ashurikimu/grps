<?php
include("/xampp/htdocs/grps/db-conn.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedIDs = json_decode($_POST['selectedIDs']);

    foreach ($selectedIDs as $id) {
        $query = "SELECT * FROM faculty1db WHERE idnum = $idnum";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Insert record into archive table
            $insertQuery = "INSERT INTO archived_faculty1db (name, idnum, yr_level, block, semester, subject_code, units, grade, remarks) VALUES (
                '{$row['name']}', '{$row['idnum']}', {$row['yr_level']}, '{$row['block']}', '{$row['semester']}', '{$row['subject_code']}', '{$row['units']}', '{$row['grade']}', '{$row['remarks']}'
            )";
            mysqli_query($con, $insertQuery);
            // Delete record from main table
            $deleteQuery = "DELETE FROM faculty1db WHERE idnum = $idnum";
            mysqli_query($con, $deleteQuery);
        }
    }

    echo "success";
} else {
    echo "error";
}
?>
<?php
include("/xampp/htdocs/grps/db-conn.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $selectedIDs = json_decode($_POST['selectedIDs']);

    foreach ($selectedIDs as $id) {
        $query = "SELECT * FROM faculty1db WHERE idnum = $idnum";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Insert record into archive table
            $insertQuery = "INSERT INTO archived_faculty1db (name, idnum, yr_level, block, semester, subject_code, units, grade, remarks) VALUES (
                '{$row['name']}', '{$row['idnum']}', {$row['yr_level']}, '{$row['block']}', '{$row['semester']}', '{$row['subject_code']}', '{$row['units']}', '{$row['grade']}', '{$row['remarks']}'
            )";
            mysqli_query($con, $insertQuery);
            // Delete record from main table
            $deleteQuery = "DELETE FROM faculty1db WHERE idnum = $idnum";
            mysqli_query($con, $deleteQuery);
        }
    }

    echo "success";
} else {
    echo "error";
}
?>
