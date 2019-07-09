<?php
include('display.php');
error_reporting(0);
?>
<html>
    <head>
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
            #header{
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
                height: 40px;
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
                top: 20;
                right: 0;
            }
            .body_header{
                height: 35px;
                width: 100%;
                background-color: #f0f0f0;
            }
            .body_header_container{
                position: absolute;
                right: 20px;
            }
            .space{
                height: 25pt;
                width: auto;
            }
            .body_footer{
                height: 20px;
                width: 100%;
            }
            .body_main{
                height: auto;
                width: 100%;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .tab{
                display: inline-block;
                color: dodgerblue;
                padding-top: 5px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 20px;
                font-family: calibri;
            }
            .tab_s{
                display: inline-block;
                background: dodgerblue;
                color: #f0f0f0;
                padding-top: 5px;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 20px;
                font-family: calibri;
            }
            .tab:hover{
                color: #f0f0f0;
                background: dodgerblue;
            }            
            p.new{
                font-family: Arial;
                text-align: center;
                font-size: 10px;
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
            .body_main_container{
                background: #f0f0f0cc;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }
            .body_main_container_heading{
                padding-left: 10pt;
                padding-top: 10pt;
                color: dodgerblue;
                font-size: 30pt;
                font-family: calibri;
            }
            .body_main_container_email{
                padding-bottom: 10pt;
                padding-left: 15pt;
                font-size: 15pt;
                font-family: calibri;
            }
            .dp{
                position:absolute;
                margin: 15pt;
                right: 85;
            }
            .dp img{
                display: block;
                margin: 0 0;
                height: 100pt;
                width: 100pt;
                margin: 0 0 0 0;
                border-radius: 50%;
                border: 3px solid dodgerblue;
            }
            .edit{
                position:absolute;
                margin-top: 130pt;
                margin-right: 20pt;
                right: 85;
                font-family: calibri;
            }
            .edit a{
                display: block;
                padding: 10;
                background: dodgerblue;
                color: #f0f0f0;
                text-decoration: none;
                border-radius: 10px 10px 10px 10px;
            }
            .table{
                padding: 20;
            }
            .table tr td{
                font-family: calibri;
                font-size: 20;
            }
        </style>
    </head>
    <body>
        <div id="particles"></div>
        <div id="main">
<div id="header">
        <div class= "logo">
            <img src="aai.png" height="70px">        
        </div>
        <div class= "title">
            <div class="content">
                <b><font face="Arial" color="white">Airport Authority of India</font></b>
            </div>
        </div>
        <div class="welcome">
            <b>Welcome,
                <?php
                 
                echo $result['name'];
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
        <div id="body">
        <div class="body_header">
            <div class="body_header_container">
                <a href="disp_stu_home.php"><div class="tab">Home</div></a>
                <a href="disp_stu_attendance.php"><div class="tab">Attendance</div></a>
                <a href="#"><div class="tab_s">Profile</div></a>
            </div>
        </div>
            <div class="space">
            </div>
        <div class="body_main">
            <div class="body_main_container">
                <div class="body_main_container_heading">
                    <b>
                        <?php
                 
                echo $result['name'];
            ?>
                    </b>
                </div>
                <div class="body_main_container_email">
                    <?php
                 
                echo $result['emailId'];
            ?>
                </div>
                <hr size="2" color="dodgerblue">
                <div class="body_main_container_data">
                     <div class="dp">
                        <img src="
                                  <?php
                                     
                                    echo $result['s_image'];
                                    ?>
                                  "height="100" width="100">
                    </div>
                    <div class="edit"><center><b>
                        <a href="stu_edit_details.php">Edit Details</a><br>
                        <a href="#">Change Password</a></b></center>
                    </div>
                    <div class="table">
                    <table>
                        <tr>
                            <td><b>Father's Name:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['fname'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>Postal Address:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10">
                                <?php
                                     
                                    echo $result['paddress'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>Personal Address:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10">
                                <?php
                                     
                                    echo $result['personaladdress'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>College:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10">
                                <?php
                                     
                                    echo $result['college'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>Sex:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['sex'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>City:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['city'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>District:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['district'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>State:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['state'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>Pincode:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['pincode'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>Course:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['course'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>Branch:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['branch'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>Section:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['section'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b>D.O.B.:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['dob'];
                                ?>
                            </td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b>Mobile No.:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <?php
                                     
                                    echo $result['mno'];
                                ?>
                            </td>
                        </tr>
                    </table>
                    </div>
                </div>
                <div class="space">
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
        </div> 
</body>
</html>