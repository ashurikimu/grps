<?php

session_start();





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav-top">
        <!-- <p><?php echo $_SESSION["username"] ?></p> -->
        <img class="logo" src="CICT LOGO.jpg" alt="CICT logo">
        <h3 class="cict">COLLEGE OF INFORMATION AND COMMUNICATIONS TECHNOLOGY</h3>
        <button class="logout-btn"><a href="../home-page/first.html">Logout</a></button>
        <button class="profile"><i class="glyphicon glyphicon-user"></i></button>
        <h1 class="welcome">Welcome Admin!</h1>
    </div>
    
    <div class="filtering">

        <div class="dropdowns">
            <div class="dropdown">
                <select class="dropdown-btn">
                    <option class="option" value="0">School Year</option>
                    <option class="option" value="1">2022 - 2023</option>
                    <option class="option" value="2">2023 - 2024</option>
                </select>
            </div>

            <div class="dropdown">
                <select class="dropdown-btn">
                    <option class="option" value="0">Course</option>
                    <option class="option" value="1">Bachelor of Science in Information Technology</option>
                    <option class="option" value="2">Bachelor of Science in Computer Science</option>
                    <option class="option" value="2">Bachelor of Science in Information Systems</option>
                </select>
            </div>
    
            <div class="dropdown">
                <select class="dropdown-btn">
                    <option class="option" value="0">Year Level</option>
                    <option class="option" value="1">First Year</option>
                    <option class="option" value="2">Second Year</option>
                    <option class="option" value="3">Third Year</option>
                    <option class="option" value="4">Fourth Year</option>
                </select>
            </div>

            <div class="dropdown">
                <select class="dropdown-btn">
                    <option class="option" value="0">Semester</option>
                    <option class="option" value="1">First Semester</option>
                    <option class="option" value="2">Second Semester</option>
                </select>
            </div>

            <div class="dropdown">
                <select class="dropdown-btn">
                    <option class="option" value="0">Block</option>
                    <option class="option" value="1">Block A</option>
                    <option class="option" value="2">Block B</option>
                    <option class="option" value="3">Block C</option>
                    <option class="option" value="4">Block D</option>
                    <option class="option" value="5">Block E</option>
                </select>
            </div>
        </div>

    </div>
    <div class="filtering-studID">
        <div class="studentID-input" >
            <input class="searchBar" type="text" placeholder="Student ID..." name="search">
            <button class="searchButton" type="submit">Search</button>
        </div>
    </div>

    <div class="container">
        <div class="records">

            <div>
                <h2>Records</h2>
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Student</th>
                            <th>Student ID</th>
                            <th>School Year</th>
                            <th>Course</th>
                            <th>Year Level</th>
                            <th>Semester</th>
                            <th>Block</th>
                            <th class="grade">Midterm Grade</th>
                            <th class="grade">Final Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dela Cruz, Juan</td>
                            <td>2022-20222</td>
                            <td>2023-2024</td>
                            <td>BS Information Technology</td>
                            <td>2nd Year</td>
                            <td>1st Semester</th>
                            <td>C</th>
                            <td class="grade">1.3</td>
                            <td class="grade">1.4</td>
                        </tr> 

                        <tr>
                            <td>2</td>
                            <td>Dela Cruz, Juan</td>
                            <td>2022-20222</td>
                            <td>2023-2024</td>
                            <td>BS Information Technology</td>
                            <td>2nd Year</td>
                            <td>2nd Semester</th>
                            <td>C</th>
                            <td class="grade">1.3</td>
                            <td class="grade">1.4</td>
                        </tr> 

                        <tr>
                            <td>3</td>
                            <td>Malapag, Roberto T.</td>
                            <td>2022-22022</td>
                            <td>2023-2024</td>
                            <td>BS Information Technology</td>
                            <td>2nd Year</td>
                            <td>1st Semester</th>
                            <td>B</th>
                            <td>1.3</td>
                            <td>1.4</td>
                        </tr> 

                        <tr>
                            <td>4</td>
                            <td>Malapag, Roberto T.</td>
                            <td>2022-22022</td>
                            <td>2023-2024</td>
                            <td>BS Information Technology</td>
                            <td>2nd Year</td>
                            <td>2nd Semester</th>
                            <td>B</th>
                            <td>1.3</td>
                            <td>1.4</td>
                        </tr> 
                        
                    </tbody>
                </table>
            </div>
                
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script>
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
        </script> -->

        <script>
            var x, i, j, l, ll, selElmnt, a, b, c;
            /*look for any elements with the class "custom-select":*/
            x = document.getElementsByClassName("dropdown");
            l = x.length;
            for (i = 0; i < l; i++) {
              selElmnt = x[i].getElementsByTagName("select")[0];
              ll = selElmnt.length;
              /*for each element, create a new DIV that will act as the selected item:*/
              a = document.createElement("DIV");
              a.setAttribute("class", "select-selected");
              a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
              x[i].appendChild(a);
              /*for each element, create a new DIV that will contain the option list:*/
              b = document.createElement("DIV");
              b.setAttribute("class", "select-items select-hide");
              for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                      if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                          y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                      }
                    }
                    h.click();
                });
                b.appendChild(c);
              }
              x[i].appendChild(b);
              a.addEventListener("click", function(e) {
                  /*when the select box is clicked, close any other select boxes,
                  and open/close the current select box:*/
                  e.stopPropagation();
                  closeAllSelect(this);
                  this.nextSibling.classList.toggle("select-hide");
                  this.classList.toggle("select-arrow-active");
                });
            }
            function closeAllSelect(elmnt) {
              /*a function that will close all select boxes in the document,
              except the current select box:*/
              var x, y, i, xl, yl, arrNo = [];
              x = document.getElementsByClassName("select-items");
              y = document.getElementsByClassName("select-selected");
              xl = x.length;
              yl = y.length;
              for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                  arrNo.push(i)
                } else {
                  y[i].classList.remove("select-arrow-active");
                }
              }
              for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                  x[i].classList.add("select-hide");
                }
              }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);
            </script>
</body>
</html>


