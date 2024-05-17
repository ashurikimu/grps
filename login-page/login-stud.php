

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="styles2-stud.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <nav>
            <button class="first-back"><a href="../home-page/first.php ">Back</a></button>
        </nav>

        <div class="Center">
            <img src="CICT LOGO.jpg" alt="Logo" class="LOGO">
            <h2>Log in as Student</h2>

            
            <form action="login_check2.php" method="POST">
                <h4>
                    <?php

                    error_reporting(0);
                    session_start();
                    session_destroy();

                    echo $_SESSION['loginMessage'];

                    ?>
                </h4>
                <input type="text" class="Username" placeholder="ID number" name="username" required>
                <br>
                <input type="password" class="Password" placeholder="Password" name="password" required>
                <br>
                <input type="submit" class="log-in-button" value="Login">
                <br>
            </form>
            
        </div>
        <script src="script.js"></script>
    </body>
    
</html>