<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="styles3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>
    <body>
        <nav>
            <button class="first-back"><a href="first.html">Back</a></button>
             <ul class="menu">
                <div class="dropdown">
                    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
                    <li class="item"><a href="#">Log in as Admin</a></li>
                    <!-- <li class="item"><a href="#">Log in as Clerk</a></li> -->
                </div>
            </ul>
        </nav>

        <div class="Center">
            <img src="CICT LOGO.jpg" alt="Logo" class="LOGO">
            <br>
            <input type="text" class="Username" placeholder="Username">
            <br>
            <input type="password" class="Password" placeholder="Password">
            <br>
            <button class="log-in-button">Log in</button>
            <br>
            <a class="fp" href="#">Forgot password?</a>
            <br>
            <button class="Request">Request account creation</button>
        </div>

        <div class="Container">
            <h2>Sign Up</h2>
            <button class="xBack"><a href="../login-page/login.html"> X </a></button>
            <br>
            <hr>
            <br>
            <p>Enter your name:</p>
            <input type="text" class="centeritem" placeholder="Enter your name">
            <br>
            <p>Enter your i.d. number</p>
            <input type="text" class="centeritem" placeholder="Enter your I.D. number">
            <br>
            <p>Enter your birthday</p>
            <input type="text" class="centeritem" placeholder="This will serve as your password" onfocus="(this.type='date')">
            <br>
            <p>Enter your email</p>
            <input type="email" class="centeritem" placeholder="Enter your email">
            <br>
            <p>Front side of i.d</p>
            <input class="front-id" type="file">
            <br>
            <p class="back_back_id">Back side of i.d</p>
            <input class="back-id" type="file">
            <br>
            <button type="submit" class="Done-button"><a href="../done-page/done.html">Done</a></button>
        </div>
        <script src="script.js"></script>
    </body>
    
</html>