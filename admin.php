<?php
session_start();
include("connect.php");
$username_admin =$_SESSION['admin_name'];
$tget = "SELECT * FROM admin WHERE loginId ="."'".$username_admin."'";
$tdisplay = mysqli_query($connect,$tget);
$admin_result = mysqli_fetch_assoc($tdisplay);
if($username_admin==true){
    
}
else
{
    header('location:index.php');
}
error_reporting(0);
?>
<html>
    <head>
        <title>
            AAI Login
        </title>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!-- remember, jQuery is completely optional -->
  <!-- <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script> -->
  <script type='text/javascript' src='js/jquery.particleground.js'></script>
  <script type='text/javascript' src='js/demo.js'></script>
        <style>
            #particles{
                height: 100%;
                width: 100%;
                position: absolute;
            }
            #main{
                height: 100%;
                width: 100%;
                position: absolute;
            }
            body{
                margin: 0;
            }
            #sheader{
                background-color: dodgerblue;
                width: 100%;
                height: 100px;
                padding: 0;
                display: flex;
            }
            #footer{
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: white;
            }
          .logo{
                padding: 15;
                width: auto;
            }
            .title{
                padding-left: 25px;
                height: 100px;
                width: 100%;
                text-align: center;
                font-size: 35px;
                display: block;
            }
            .content{
                height: 100px;
                display: table-cell;
                vertical-align: middle;
            }
            .body_header{
                height: 120px;
                width: 100%;
            }
            .body_footer{
                height: 100px;
                width: 100%;
            }
            .body_main{
                height: auto;
                width: 100%;
                display: block;
            }
            .box{
                padding: 5px;
                height: auto;
                width: 90%;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .box_header{
                background-color: dodgerblue;
                height: 40px;
                width: 450px;
                display: table-cell;
                vertical-align: middle;
                padding-left: 20px;
                font-size: 25px;
            }
            .box_container{
                margin-left: auto;
                margin-right: auto;
                width: 90%;
                height: auto;
                background-color: #f0f0f0cc;
            }
            input.textbox{
                height: 25px;
                width: 250px;
                font-size: 15px;
            }
            p.label{
                font-size: 15px;
            }
            button.button{
                height: 25px;
                width: 75px;
                font-size: 15px;
                font-style: oblique;
                
            }
            p.tnc{
                font-family: Arial;
                text-align: center;
                font-size: 10px;
            }
            p.new{
                font-family: Arial;
                text-align: center;
                font-size: 10px;
            }
            p.alert{
                font-family: Arial;
                text-align: center;
                font-size: 10px;
                color: red;
            }
            .space{
                height: 100px;
            }
            .welcome{
                position: absolute;
                right: 60;
                top: 30;
                font-size: 30px;
                color: #f0f0f0;
                font-family: calibri;
            }
            .user{
                position: absolute;
                top: 0;
                right: 0;
            }
            ul{
                list-style: none;
            }
            ul li:hover ul {
                display: block;
                list-style-type:none;
                list-style-position: outside;
                padding-left: 0pt;
            }
            ul li ul {
                position: absolute;
                right: 0;
                width: 100;
                display: none;
}
            ul li ul li {  
                display: block;
                color: dodgerblue;
                background: #f0f0f0;
                font-family: calibri;
                font-size: 15pt;
                padding-left: 5pt;
                padding-right: 5pt;
                padding-top: 1pt;
                padding-bottom: 1pt;
                border-radius: 10px 0px 0px 10px;
            }
            a{
                text-decoration: none;
            }
            ul li ul li:hover {
                border-radius: 10px 0px 0px 10px;
                background: #005d89;
                color: #f0f0f0;
            }
            .tab_container_row{
                height: 300px;
                width: 100%;
            }
            .tab_container{
                display: inline-block;
                width: 300px;
                height: auto;
            }
            .tab{
                height: 200px;
                width: 200px;
                background-color: dodgerblue;
                color: #f0f0f0;
                border-radius: 10px;
                margin: auto;
                
            }
        </style>
    </head>
    <body>
        <div id="particles">
        </div>
        <div id="main">
        <form action="" method="post">
        <div id="sheader">
        <div class= "logo">
            <img src="aai.png" height="70px">        
        </div>
        <div class= "title">
            <div class="content">
                <b><font face="Arial" color="white">Airport Authority of India</font></b>
            
            </div>
        <div class="welcome">
            <b>Welcome,
                <?php
                echo $admin_result['name'];
                ?>
            </b>
        </div>
        <div class="user">
            <ul>
                <li>
                <img src="user.png" height="30px" width="45px">
                <ul>
                    <li><a href="logout.php"><img src="log.png" height="15" width="15">&nbsp;Logout</a></li>
                </ul>
                </li>
            </ul>
        </div>
        </div>
    </div>
        <div id="body">
        <div class="body_header">
        </div>
        <div class="body_main">
            <div class="box">
                <font face="Calibri" color="white">
                    <div class="box_container">
                        <div class="space"></div>
                        <div class="tab_container_row">
                            <div class="tab_container">
                                <div class="tab">
                                </div>
                            </div>
                            <div class="tab_container">
                                <div class="tab">
                                </div>
                            </div>
                            <div class="tab_container">
                                <div class="tab">
                                </div>
                            </div>
                            <div class="tab_container">
                                <div class="tab">
                                </div>
                            </div>
                        </div>
                    </div>
                </font>
            </div>
        </div>
        <div class="body_footer">
        </div>
    </div>
        <div id="footer">
        <hr size="4" color="dodgerblue">
            <p class="new">&copy; Airport Authority of India</p>
            
    </div>
        </form>
        </div>
    </body>
        
</html>