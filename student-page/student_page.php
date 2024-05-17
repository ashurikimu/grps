<?php

session_start();
    if(!isset ($_SESSION['username']))
    {
        header("location: ../login-page/login.php");
    }
    // elseif($_SESSION["usert_type"] == "student")
    // {
    //     header("location: ../login-page/login.php");
    // }


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
        <!-- <p><?php echo $_SESSION["username"] ?></p> -->
        <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
        <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
        <!-- <button class="logout-btn"><a href="../home-page/logout.php">Logout</a></button> -->
        <a href="../edit-student-page/student_profile_edit.html"><button class="profile"><i class="glyphicon glyphicon-user"></i></button></a>
         <!-- logout confirmation -->
    <button class="confirmation" onclick="document.getElementById('id01').style.display='block'">Logout</button>

<div id="id01" class="modal">
    <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span> -->
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
            <h1 class="profile-username">PRILA, CYRIL ALLAN T.</h1>

            <div class="year-list">
                <a href="../student-page/bsit-first-yr.php"><button class="sy"><span>1ST YEAR</span></button></a> 
                <a href="../student-page/bsit-second-yr.php"><button class="sy"><span>2ND YEAR</span></button></a> 
                <a href="#"><button class="sy"><span>3RD YEAR</span></button></a>
                <a href="#"><button class="sy"><span>4TH YEAR</span></button></a>
            </div>

        </div>
    </div>

    <div class="info-box">
        <p>Student Name: <span>PRILA, CYRIL ALLAN T.</span></p>
        <p>College Name: <span>College of Information and Communications Technology</span></p>
        <p>Academic Program: <span>Bachelor of Science in Information Technology</span></p>
    </div>

    
    <div class="container">
        <div class="academic-evaluation">
            <h1 class="ae">Academic Evaluation</h1>

            <div class="midterm">
                <h2>FIRST YEAR - FIRST SEMESTER</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Days</th>
                            <th>Units</th>
                            <th>Final Grade</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>IT SUB 1</td>
                            <td>SUBJECT 1</td>
                            <td>MTh</td>
                            <td>3.0</td>
                            <td></td>
                            <td></td>
                        </tr> 
                        <tr>
                            <td>2</td>
                            <td>IT SUB 2</td>
                            <td>SUBJECT 2</td>
                            <td>TF</td>
                            <td>3.0</td>
                            <td></td>
                            <td></td>
                        </tr> 
                        
                    </tbody>
                </table>
            </div>
                

            <div class="final">
                <h2>FIRST YEAR - SECOND SEMESTER</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Code</th>
                            <th>Course Title</th>
                            <th>Days</th>
                            <th>Units</th>
                            <th>Final Grade</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>IT SUB 3</td>
                            <td>SUBJECT 3</td>
                            <td>MTh</td>
                            <td>3.0</td>
                            <td></td>
                            <td></td>
                        </tr> 

                        <tr>
                            <td>1</td>
                            <td>IT SUB 4</td>
                            <td>SUBJECT 4</td>
                            <td>TF</td>
                            <td>3.0</td>
                            <td></td>
                            <td></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

