
<?php

session_start();
    if(!isset ($_SESSION['username']))
    {
        header("location: ../login-page/login.php");
    }

    include("/xampp/htdocs/grps/db-conn.php");

    // Fetching user's name and course 
    $username = $_SESSION['username'];
    $query = "SELECT name, course FROM login WHERE username = '$username'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // Fetching the first row's data
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $course = $row['course'];
    } else {
        // No rows returned, handle accordingly
        $name = "User not found";
        $course = "Course not found";
    }

    // Fetching data from faculty1db using the username (1st sem)
    $query_faculty = "SELECT * FROM faculty1db WHERE yr_level = '4' AND idnum = '$username' AND semester = '1st'
                        UNION 
                        SELECT * FROM faculty2db WHERE yr_level = '4' AND idnum = '$username' AND semester = '1st'";
    $result_faculty = $con->query($query_faculty);

    // Array to store fetched data
    $faculty_data = array();

    if ($result_faculty) {
        while ($row_faculty = $result_faculty->fetch_assoc()) {
            $faculty_data[] = $row_faculty;
        }
    } else {
        echo "Error fetching data from faculty1db: " . $con->error;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav-top">
        <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
        <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
        
         <!-- logout confirmation -->
    <button class="confirmation" onclick="document.getElementById('id01').style.display='block'">Logout</button>

<div id="id01" class="modal">
    <form class="modal-content">
        <div class="container">
            <p class="msg">Are you sure you want to logout of your account?</p>
            
            <div class="clearfix">
                <button class="confirmation cancel" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <a href="../home-page/logout.php"><button class="confirmation logout" type="button" onclick="document.getElementById('id01').style.display='none'" class="logoutbtn">Logout</button></a>
            </div>
        </div>
    </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>
<!-- logout confirmation -->

        
    </div>
    <div class="sidebar-container">
        <div class="sidebar">
            <div class="profilepic-container">
                <img src="profile-user-icon.jpg" alt="profile-user-icon">
            </div>
            <h1 class="profile-username">
                <?php echo $name ?>
                
            </h1>

            <div class="year-list">
                <a href="../student-page/bsit-first-yr.php"><button class="sy"><span>1ST YEAR</span></button></a> 
                <a href="../student-page/bsit-second-yr.php"><button class="sy"><span>2ND YEAR</span></button></a> 
                <a href="../student-page/bsit-third-yr.php"><button class="sy"><span>3RD YEAR</span></button></a>
                <a href="../student-page/bsit-fourth-yr.php"><button class="sy"><span>4TH YEAR</span></button></a>
            </div>

        </div>
    </div>

    <div class="info-box">
        <p>Student Name: <span> <?php echo $name ?> </span></p>
        <p>College Name: <span>College of Information and Communications Technology</span></p>
        <p>Academic Program: <span> <?php echo $course ?> </span></p>
    </div>

    
    <div class="container">
        <div class="academic-evaluation">
            <h1 class="ae">Academic Evaluation</h1>

            <div class="midterm">
                <h2>FOURTH YEAR - FIRST SEMESTER</h2>

                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>IDnum</th>
                            <th>Year Level</th>
                            <th>Subject Code</th>
                            <th>Units</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($faculty_data as $data) : ?>
                            <tr>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['idnum']; ?></td>
                                <td><?php echo $data['yr_level']; ?></td>
                                <td><?php echo $data['subject_code']; ?></td>
                                <td><?php echo $data['units']; ?></td>
                                <td><?php echo $data['grade']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>

            </div>
                

            <div class="final">
                <h2>FOURTH YEAR - SECOND SEMESTER</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>IDnum</th>
                            <th>Year Level</th>
                            <th>Course Code</th>
                            <th>Units</th>
                            <th>Grade</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($faculty1_data as $data) : ?>
                            <tr>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['idnum']; ?></td>
                                <td><?php echo $data['yr_level']; ?></td>
                                <td><?php echo $data['subject_code']; ?></td>
                                <td><?php echo $data['units']; ?></td>
                                <td><?php echo $data['grade']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

