<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
echo '

<html>
    <head>
        <title>
            AAI Login
        </title>
        <link rel=\"stylesheet\" href=\"css/style.css\" />
  <link href=\'http://fonts.googleapis.com/css?family=Montserrat:400,700\' rel=\'stylesheet\' type=\'text/css\'>
  <!-- remember, jQuery is completely optional -->
  <!-- <script type=\'text/javascript\' src=\'js/jquery-1.11.1.min.js\'></script> -->
  <script type=\'text/javascript\' src=\'../jquery.particleground.js\'></script>
  <script type=\'text/javascript\' src=\'js/demo.js\'></script>
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
            #header{
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
                height: 250px;
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
        </style>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <div id="particles">
        </div>
        <div id="main">
        <form action="http://action_page.php" target="_blank" onsubmit="try {return window.confirm(&quot;This form may not function properly due to certain security constraints.\nContinue?&quot;);} catch (e) {return false;}">
        <div id="header">
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
                        SignIn
                </div>
                </font>
                <div class="box_container">
                    <br>
                    <br>
                    <font face="Calibri" color="white">
                    <table align="center">
                        <tr>
                            <td><b><p class="label">Login ID</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="ID" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Password</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="password" name="psw" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button class="button" type="submit">Login</button>
                            </td>
                        </tr>
                    </table>
                    </font>
                    <br>
                    <hr size="2" color="dodgerblue">
                    <p class="tnc">By signing in to your account you agree to our <a href="#0.1_">Terms &amp; Privacy</a>.</p>
                    <p class="new">New User? Create account <a href="#0.1_">Sign up</a>.</p>
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

';
}
else{
    echo "connection failed";
}
?>