
<?php

session_start();
    if(!isset ($_SESSION['username']))
    {
        header("location: ../../login-page/login.php");
        exit();
    }
    // elseif($_SESSION["usert_type"] == "student")
    // {
    //     header("location: ../../login-page/login.php");
    // }


    include("/xampp/htdocs/grps/db-conn.php");

    // Fetching user's name
    $username = $_SESSION['username'];
    $query = "SELECT name FROM login WHERE username = '$username'";
    $result_name = $con->query($query);
    if ($result_name) {
        if ($result_name->num_rows == 1) {
            $row_name = $result_name->fetch_assoc();
            $name = $row_name['name'];
        } else {
            $name = "User not found";
        }
    } else {
        $name = "Error: " . $con->error;
    }


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
    <link rel="stylesheet" href="center.css">
</head>
<body>
    <div class="nav-top">
        <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
        <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
        
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
                        <a href="faculty2_class.php">BSCOMSCI - 1B (1st Sem)</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="center">
        <p></p>
        <p></p>
        <p></p>
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
</body>
</html>

