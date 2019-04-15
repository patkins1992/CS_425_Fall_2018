<?php
$con = mysqli_connect("127.0.0.1","root" ,"","iopracticum");
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="../css/theme_account_details.css">
</head>

<body>
    <!--main container for the whole page-->
    <div class="container">
        <header class="head">
            <img class="io_img" src="../images/header_logo.jpg">
            <img class="siue_faculty" src="../images/IO-faculty-students-April-2018.jpg">
            <h1 class="io_h1">I/O Practicum Program</h1>
            <img class="siue_logo" src="../images/SIUE-Logo-RED.jpg">
        </header>

        <!-- navbar that stays at the top at all times -->
        <nav class="navbar">
            <ul>
                <li><a href="../html/admin.html">Home</a></li>
                <li><a href="../html/companies.html">Companies</a></li>
                <li><a href="../html/admin_surveys.html">Supervisor Survey</a></li>
                <li><a class="active" href="./account_detail.html">Account Details</a></li>
                <li><a href="#Manual">Administrator Manual</a></li>
                <li><a href="../html/HomeScreen.html">Logout</a></li>
            </ul>
        </nav>
        <!--end of navbar-->

        <!-- Account info div -->
        <div class="account_info">

            <!--info general info-->
            <div class="account_details_div1">
                <h1>Account Information</h1>
                <p>
                    
                    <h2>Name:</h2>
                    <p><?php  $query = mysqli_query($con,"SELECT `Name` FROM `admin`"); 
                        if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {
                         echo $row["Name"];
                                }
                        } else {
                              echo "0 results";
                        }
                        ?>
                        </p>
                    <h2>Email:</h2>
                    <p> <?php $sql = mysqli_query($con, "SELECT `email` FROM `admin` ");
                        if (mysqli_num_rows($sql) > 0) {
                            // output data of each row
                            while($column = mysqli_fetch_assoc($sql)) {
                            echo $column["email"];
                                }
                            } else {
                                echo "0 results";
                                    }   
                        ?>
                    </p>
                </p>
                <button id = "ChangeAccount" class="button">Change Account information</button>
            </div>

            

            <!-- security info-->
            <div class="account_details_div2">
                <h1>Security Information</h1>
                <p>
                    <h2>Security hint:</h2>
                    <p>What is the easiest password in the world?</p>
                    <h2>Security answer</h2>
                    <p>N/A</p>
                </p>
                <button class="button"><a href="https://oitam.isg.siue.edu/~eid/cgi-bin/e-ID"> Change Password</a> </button>
            </div>

        </div>
        <!--end of account info div-->
        <div id = "Change" class = "modal">
            <div class="modal-content">
            <span class="close">&times;</span>
            <form action = "" method = "post">
            Eid:<br>
            <input type = "text" class = "AdminEid" name = "NewEid"/><br>
            First and Last Name:<br>
            <input type ="text" class = "AdminName" name = "NewName"/><br>
            Contact Email:<br>
            <input type ="text" class = "AdminEmail" name = "NewEmail"/><br>
            <input name = "submit" type = "submit"/>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $Eid = $_POST['NewEid'];
                $name = $_POST['NewName'];
                $email = $_POST['NewEmail'];
                $deleteAdmin = "DELETE FROM `admin` WHERE 1";
                mysqli_query($con,$deleteAdmin);
                $insert = "INSERT INTO `user`(`eid`, `name`) VALUES ('$Eid','$name')";
                $adminInsert = "INSERT INTO `admin`(`AdmEid`,`email`,`Name`) VALUES ('$Eid','$email','$name')";
                mysqli_query($con,$insert);
                mysqli_query($con,$adminInsert);
               
            
            }



            ?>
            </div>
        </div>


        </div>
    </div>

    <script>
        
        var modal = document.getElementById('Change');


        var btn = document.getElementById("ChangeAccount");


        var span = document.getElementsByClassName("close")[0];

 
        btn.onclick = function() {
        modal.style.display = "block";
        }   


        span.onclick = function() {
        modal.style.display = "none";
        }


        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }

        </script>
    <!--end of main container-->
</body>

