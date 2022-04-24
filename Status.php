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
    <body  style="background-image: url(../img/1.jpg) ";>
        
            <center>
            <div id="headerSection">
            <a href="../"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            
            <h1>Online Voting System</h1>  
            </div>
            </center>
            <hr>
              
               <div id="mainSection" >
                <div id="profileSection" style="border-color: black; border-style: solid; margin-left: 70vh;">
                    <center><img src="../uploads/<?php echo $data['photo']?>" height="150" width="150" style="border-color: black; border-style: double;"></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <b>Scholarno : </b><?php echo $data['scholarno'] ?><br><br>
                    <b>Address : </b><?php echo $data['address'] ?><br><br>
                    <b>Status : </b><?php echo $status ?>
                </div>
           
            
            </div>
      </body>
</html>





