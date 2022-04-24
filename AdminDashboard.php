<?php
require('C:\xampp\htdocs\navbar.php');
?>
<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body style="background-image: url(../img/1.jpg) ";>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            
            <h1 style="margin-left: auto;">Online Voting System</h1>  
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection" style="border-color: black; border-style: solid;">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="150" width="150" style="border-color: black; border-style: double;" ></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Scholarno: </b><?php echo $data['scholarno'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    
                </div>
                <div id="groupSection" style="border-color: black; border-style: solid;">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <img style="float: right" src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80" style="border-color: black; border-style: double;" >
                                <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                                <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br> 
                                
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div> 
    </body>
</html>