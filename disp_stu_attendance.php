<?php
session_start();
include("connect.php");
error_reporting(0);
$s_username = $_SESSION['name'];
$get = "SELECT * FROM student_data WHERE emailId ="."'".$s_username."'";
$display = mysqli_query($connect,$get);
$result = mysqli_fetch_assoc($display);
if($s_username==true){
    
}
else
{
    header('location:index.php');
}
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
            .body_main_container_data{
                font-family: calibri;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
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
            .space{
                height: 35pt;
                width: auto;
            }
            .list{
                background-color:#E7F7FE;
                color:#000;
                font-size:18px;
                border:0;
            }
            .list tr td{
                padding:5px;
                border:0;
                border-bottom:1px solid #AFE7FF;
            }
            .list tr th{
                padding:2px;
                border:0;
                width: 350px;
                background-color:dodgerblue;
                color:#f0f0f0;
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
                <a href="#"><div class="tab_s">Attendance</div></a>
                <a href="disp_stu_profile.php"><div class="tab">Profile</div></a>
            </div>
        </div>
        <div class="body_main">
            <div class="space">
            </div>
            <div class="body_main_container">
                <div class="body_main_container_heading">
                    <b>Attendance</b>
                </div>
                <hr size="2" color="dodgerblue">
                <div class="body_main_container_data">
                    <form action="" method="GET">
                        <center>
                            <table>
                                <tr>
                                    <td><b>Month:</b></td>
                                    <td>&nbsp;</td>
                                    <td><select name="month" class="textbox">
                                        <option value="na">N/A</option>
                                        <option value="jan">January</option>
                                        <option value="feb">February</option>
                                        <option value="march">March</option>
                                        <option value="april">April</option>
                                        <option value="may">May</option>
                                        <option value="june">June</option>
                                        <option value="july">July</option>
                                        <option value="aug">August</option>
                                        <option value="sept">September</option>
                                        <option value="oct">October</option>
                                        <option value="nov">November</option>
                                        <option value="dec">December</option>
                                        </select></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><b>Year:</b></td>
                                    <td>&nbsp;</td>
                                    <td><select name="year" class="textbox">
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        </select></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td><input type="submit" class="submit" name="submit"></td>
                                </tr>
                            </table>
                        </center><br><br>
                        <center>
                        <?php
                            if($_GET['submit']){
                                
                            $month = $_GET['month'];
                            $year = $_GET['year'];
                            $month_year = $month."_".$year;
                            
                            $month_name = "SELECT * FROM month;";
                            $month_query = mysqli_query($connect,$month_name);
                            
                            $disp = "SELECT * FROM attendance WHERE email='".$s_username."';";
                            $disp_query = mysqli_query($connect,$disp);
                            $disp_data = mysqli_fetch_assoc($disp_query);
                                
                            
                            
                            $days_view = "SELECT * FROM year WHERE yvalue='".$year."'";
                            $days_view_query = mysqli_query($connect,$days_view);
                            $days_disp = mysqli_fetch_assoc($days_view_query); 
                            $disp_total = mysqli_num_rows($days_view_query);
                            
                            $month_name_else = "SELECT * FROM month WHERE mname='".$month."';";
                            $month_query_else = mysqli_query($connect,$month_name_else);
                            $month_value_else = mysqli_fetch_assoc($month_query_else);
                        
                            
                            if($disp_total!==0){
                                echo '<table class=\'list\' cellpadding=\"7\">
                                    <tr>
                                        <th colspan="4"><b>'.$year.'</b></th>
                                    </tr>';
                                echo '<tr>
                                            <td><b>Month</b></td>
                                            <td><b>Present</b></td>
                                            <td><b>Working Days</b></td>
                                            <td><b>Percentage</b></td>
                                        </tr>';
                                if($month == "na"){
                                    while($month_value = mysqli_fetch_assoc($month_query)){
                                        
                                        $monthyear = $month_value['mname']."_".$year;
                                        $days_update = "SELECT * FROM attendance_days WHERE month_year='".$monthyear."'";
                                        $days_update_query = mysqli_query($connect,$days_update);
                                        $days_update_disp = mysqli_fetch_assoc($days_update_query);
                                        $working =$days_update_disp[$result['branch']];
                                        echo '<tr><td>'.$month_value['value'].'</td>';
                                        echo '<td>'.$disp_data[$monthyear].'</td>';
                                        echo '<td>'.$working.'</td>';
                                        if($working==0){
                                            $percent = 'N/A';
                                        }
                                        else{
                                            $div = $disp_data[$monthyear]/$days_update_disp[$result['branch']];
                                            $divper = $div*100;
                                            $percent = $divper."%";
                                        }
                                        echo '<td>'.$percent.'</td>';
                                        echo '</tr>';
                                    }
                                 }
                                else{
                                    $monthyear_else = $month_value_else['mname']."_".$year;
                                    $days_update1 = "SELECT * FROM attendance_days WHERE month_year='".$monthyear_else."'";
                                    $days_update_query1 = mysqli_query($connect,$days_update1);
                                    $days_update_disp1 = mysqli_fetch_assoc($days_update_query1);
                                        $working =$days_update_disp1[$result['branch']];
                                    
                                    echo '<tr><td>'.$month_value_else['value'].'</td>
                                    <td>'.$disp_data[$monthyear_else].'</td>';
                                    echo '<td>'.$working.'</td>';
                                    if($working==0){
                                            $percent = 'N/A';
                                        }
                                        else{
                                            $div = $disp_data[$monthyear_else]/$days_update_disp1[$result['branch']];
                                            $divper = $div*100;
                                            $percent = $divper."%";
                                        }
                                        echo '<td>'.$percent.'</td>';
                                    echo '</tr>';
                                }
                                echo '</table>';
                            }
                            else{
                                echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">No Such Records Found</font></center>"; 
                            }
                             
                        }
                            
                        ?>
                        </center>
                    </form>
                </div>
                <br><br>
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