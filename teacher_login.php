<?php
session_start();
include("connect.php");
error_reporting(0);
if(isset($_POST['submit']))
{
    $emailId = $_POST['temailId'];
    $password = $_POST['tpassword'];
    $t_check = "SELECT * FROM teacher_data WHERE t_email='$emailId' && t_password='$password'";
    $t_login= mysqli_query($connect,$t_check);
    $t_total = mysqli_num_rows($t_login);
    if($t_total==1)
        {
        $_SESSION['tname']=$emailId;
         header('location:disp_teacher_home.php', false, 303);
         exit();
        }
    else
        {
        $error ="Login Failed";
        }
    }
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
                height: 150px;
                width: 100%;
            }
            .body_footer{
                height: 200px;
                width: 100%;
            }
            .body_main{
                height: auto;
                width: 100%;
                display: block;
            }
            .box{
                padding: 5px;
                height: 250px;
                width: 450px;
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
                width: 450px;
                height: auto;
                background-color: #f0f0f0;
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
                height: 10px;
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
        </div>
    </div>
        <div id="body">
        <div class="body_header">
        </div>
        <div class="body_main">
            <div class="box">
                <font face="Calibri" color="white">
                <div class="box_header">
                        Teacher SignIn
                </div>
                </font>
                <div class="box_container">
                    <br>
                    <br>
                    <font face="Calibri" color="white">
                    <table align="center">
                        <tr>
                            <td><b><p class="label">Email ID</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="temailId" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Password</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="password" name="tpassword" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button class="button" type="submit" name="submit">Login</button>
                            </td>
                        </tr>
                    </table>
                    </font>
                    <br>
                    <hr size="2" color="dodgerblue">
                    <p class="tnc">By signing in to your account you agree to our <a href="#">Terms &amp; Privacy</a>.</p>
                    <p class="new">New User? Create account <a href="teacher_form.php">Sign up</a>.</p>
                    <p class="alert">
                        <?php
                            echo $error;
                        ?>
                    </p>
                    <div class="space">
                    </div>
                </div>
                
        
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