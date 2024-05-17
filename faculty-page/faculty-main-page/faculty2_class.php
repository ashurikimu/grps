
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
    if(!isset ($_SESSION['username']))
    {
        header("location: ../../login-page/login.php");
        exit();
    }

    include("/xampp/htdocs/grps/db-conn.php");

    // Fetching user's name
    $username = $_SESSION['username'];
    $query = "SELECT name FROM login WHERE username = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_name = $stmt->get_result();
    
    if ($result_name->num_rows == 1) {
        $row_name = $result_name->fetch_assoc();
        $name = $row_name['name'];
    } else {
        $name = "User not found";
    }

    //fetching data
    $query = "select * from faculty2db WHERE block = 'B' ";
    $result = mysqli_query($con,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav-top">
        <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
        <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
        <!-- <button class="profile"><i class="glyphicon glyphicon-user"></i></button> -->
        


        <!-- logout confirmation -->
    <button class="confirmation" onclick="document.getElementById('id01').style.display='block'">Logout</button>

    <div id="id01" class="modal">
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">×</span> -->
        <form class="modal-content">
            <div class="container">
                <p class="msg">Are you sure you want to logout of your account?</p>
                
                <div class="clearfix">
                    <button class="confirmation cancel" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <a href="../../home-page/logout.php"><button class="confirmation logout" type="button" onclick="document.getElementById('id01').style.display='none'" class="logoutbtn">Logout</button></a>
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
                <?php
                    echo $name;
                ?>    
            </h1>
            <div class="scrollable-nav">
    
                <div class="sy">
                    <button class="dropdown-btn">2022 - 2023
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
    
                <div class="sy">
                    <button class="dropdown-btn">2023 - 2024
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#" name="">BSIT - 2A (1st Sem)</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-box">
        <p>Schoo Year: <span>2023 - 2024</span></p>
        <p>Course: <span>Bachelor of Science in Information Technology</span></p>
    </div>
    <div class="container">
        <div class="academic-evaluation">
            <h1 class="ae">Academic Evaluation</h1>

                <!-- ADD STUDENT -->
                
                <button class="button add" onclick="document.getElementById('id02').style.display='block'">Add Student +</button>

                <?php

                    if(isset($_GET['message'])){
                        echo "<h6>".$_GET['message']."</h6>";
                    }
                ?>

                <?php
                    if(isset($_GET['insert_msg'])){
                        echo "<h5>".$_GET['insert_msg']."</h5>";
                    }                                           
                ?>

                <?php
                    if(isset($_GET['edit_msg'])){
                        echo "<h5>".$_GET['edit_msg']."</h5>";
                    }                                           
                ?>

                <?php
                    if(isset($_GET['delete_msg'])){
                        echo "<h5>".$_GET['delete_msg']."</h5>";
                    }                                           
                ?>

                <div id="id02" class="modal1">
                    
                    <form class="modal1-content" action="insert_data2.php" method="post">
                        <div class="container2">
                            <p class="msg">ADD STUDENT</p>
                            <form >
                                
                                    <label for="name">Name</label>
                                    <input type="text" name="name">
                                    <br>
                                    <label for="idnum">Student ID</label>
                                    <input type="text" name="idnum">
                                    <br>
                                    <label for="yr_level">Year Level</label>
                                    <input type="number" name="yr_level">
                                    <br>
                                    <label for="block">Block</label>
                                    <input type="text" name="block">
                                    <br>
                                    <label for="semester">Semester</label>
                                    <input type="text" name="semester">
                                    <br>
                                    <label for="subject_code">Subject Code</label>
                                    <input type="text" name="subject_code">
                                    <br>
                                    <label for="units">Units</label>
                                    <input type="text" name="units">
                                

                                    <div class="clearfix2">
                                    <button class="addstud cancelbtn" type="button" onclick="document.getElementById('id02').style.display='none'" >Cancel</button>
                                    <input type="submit" name="add_students" value="Save" class="addstud savebtn" onclick="document.getElementById('id02').style.display='none'">
                            </div>
                            </form>
                            

                        </div>
                    </form>
                </div>

                <script>
                // Get the modal
                var modal1 = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal1) {
                    modal1.style.display = "none";
                }
                }
                </script>
                <!-- ADD STUDENT -->

            <div class="final-grade">
            <div class="customization-btn">
            </div>   
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Student ID</th>
                            <th>Year Level</th>
                            <th>Block</th>
                            <th>Semester</th>
                            <th>Subject Code</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <?php

                            while($row = mysqli_fetch_assoc($result))
                            {

                            ?>
                                <td> <?php echo $row['name'] ?> </td>
                                <td> <?php echo $row['idnum'] ?> </td>
                                <td> <?php echo $row['yr_level'] ?> </td>
                                <td> <?php echo $row['block'] ?> </td>
                                <td> <?php echo $row['semester'] ?> </td>
                                <td> <?php echo $row['subject_code'] ?> </td>
                                <td> <?php echo $row['units'] ?> </td>
                                <td> <?php echo $row['grade'] ?> </td>
                                <th><a href="edit_page.php?idnum=<?php echo $row['idnum'] ?>"><i class="fa fa-edit"></i></a></th>
                                <th><a href="delete_page2.php?idnum=<?php echo htmlspecialchars($row['idnum']); ?>"><i class="fa fa-trash-o" style="color:red;"></i></a></th>

                            </tr>

                            <?php
                            }

                            ?>
                        
                    </tbody>
                </table>




            </div>
        </div>
    </div>


    



        <script>
            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;
            
            for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                } else {
                dropdownContent.style.display = "block";
                }
            });
            }
        </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

