<?php
session_start();
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    <style>
        a{
            border: none;
            padding: 15px 25px;
            text-align: center;
            font-size: 25px;
            cursor: pointer;
            float: right;
            color: black;
            text-decoration: none;
            
        }
        a:hover{
            color: #333;
        }
        
        th,td,table{
            border: 2px solid black;
            border-collapse: collapse;
            
        }
        table{
            margin: 0 auto ;
        }
        td,th{
            padding:5px;
        }
        </style>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    
        <nav>
        <ul class="nav">
            <li><a onmouseover="this.style.color='#333'" onMouseOut="this.style.color='#FFF'" style="color:white;" href="logout.php" >LOGOUT</a></li>
            <li><a onmouseover="this.style.color='#333'" onMouseOut="this.style.color='#FFF'" style="color:white;" href="contact.html" >CONTACT</a></li>
            <li><a onmouseover="this.style.color='#333'" onMouseOut="this.style.color='#FFF'" style="color:white;" href="about.php" >ABOUT US</a></li>
            <li><a onmouseover="this.style.color='#333'" onMouseOut="this.style.color='#FFF'" style="color:white;" href="index.php">HOME</a></li></ul>
    </nav>
    <div class="body">
    <?php
    if(isset($_POST['login']) and empty($_SESSION['username']))
    {  //if user logged gets placed here

        $username = $_POST['username'];
        $password = $_POST['password'];
        $dbc = mysqli_connect('localhost','root','','dic') or die("Couldn't connect to database");

        $query = "select * from login where uname='$username' and password='$password'";
        $result = mysqli_query($dbc,$query) or die("Can't issue query");
        $row = mysqli_fetch_array($result);
        if(!empty($row['uname']) and !empty($row['password']))
        { 
            $_SESSION['username'] = $username; 
            $query1="select p_aadhar from swa1" ;
            $result1=mysqli_query($dbc,$query1)or die("couldnt issue query");?>
            <table><tr><th>Name of the Promoter</th><th>Aadhar Number</th><th>Item Name</th></tr>
            <?php
            foreach($result1 as $rows)
            {
                $aadhar=$rows['p_aadhar'];
                $query2="SELECT p_name,p_aadhar,item_name
                FROM swa1
                WHERE p_aadhar='$aadhar'";
                $result2 = mysqli_query($dbc,$query2) or die("error");
                $row1 = mysqli_fetch_array($result2);
            ?>
            <tr>
                <td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['p_name']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['p_aadhar']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['item_name']?></a></td></tr>
                
                
            
            <?php    
            }?>
            </table>
    <?php
        }
        
        else
        {
            echo "ENTER CORRECT USERNAME AND PASSWORD ";
        }
    }
    else if(!empty($_SESSION['username']))
        {
            $dbc = mysqli_connect('localhost','root','','dic') or die("Couldn't connect to database");
            $username = $_SESSION['username'];
            $query = "select * from login where uname='$username'";
            $result = mysqli_query($dbc,$query) or die("Can't issue query");
            $row = mysqli_fetch_array($result);
            $query2="select p_aadhar from swa1" ;
            $result1=mysqli_query($dbc,$query2)or die("couldnt issue query");?>
            <table><tr><th>Name of the Promoter</th><th>Aadhar Number</th><th>Item Name</th></tr>
            <?php
            foreach($result1 as $rows)
            {
                $aadhar=$rows['p_aadhar'];
                $query1="SELECT p_name,p_aadhar,item_name
                FROM swa1
                WHERE p_aadhar='$aadhar'";
                $result2 = mysqli_query($dbc,$query1) or die("error");
                $row1 = mysqli_fetch_array($result2);
            ?>
            <tr>
                <td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['p_name']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['p_aadhar']?></a></td><td><a onmouseover="this.style.color='#00F'" onMouseOut="this.style.color='#000'" href="details.php?p_aadhar=<?php echo $row1['p_aadhar']?>"><?php echo $row1['item_name']?></a></td></tr>
                
            
            <?php    
            }
            ?>
    
        </table>
    <?php    
        }
    else{
        echo "OOPS!!! YOU ARE SUPPOSED TO LOGIN";
    }
    ?>
    </div>
    </body>
</html>