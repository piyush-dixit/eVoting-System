<?php
require('C:\xampp\htdocs\navbar.php');
?>
<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body style="background-image : url(../img/1.jpg) ; color: whitesmoke; ">
        <center>
            <div id="headerSection" style=" margin-right:50vh ;">
            <h1>Online Voting System</h1>  
            </div>
            <hr style="margin-top:-2.5px;">
             <div id="form" style="background-color: black; width: 650px; opacity: 95%; height: 600; margin-top: -2vh; padding-bottom: 4px;">
                 <h2 style="color:red">Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data" >
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="text" name="mob" placeholder="Scholarno" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%" >
                       Upload image:<input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    <span style="color:whitesmoke;">Already user? <a href="../">Login here</a></span>
                </form>
             </div>
            
            </center>
    </body>
</html>