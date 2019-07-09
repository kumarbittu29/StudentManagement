<?php
session_start();
ob_start();
include("connect.php");
error_reporting(0);
$username =$_SESSION['tname'];
$tget = "SELECT * FROM teacher_data WHERE t_email ="."'".$username."'";
$tdisplay = mysqli_query($connect,$tget);
$tresult = mysqli_fetch_assoc($tdisplay);
if($username==true){
    
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
            .body_footer{
                height: 20px;
                width: 100%;
            }
            .body_main{
                height: auto;
                width: 90%;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .box{
                font-family: calibri;
                width: 90%;
                background: #f0f0f0cc;
                margin-left: auto;
                margin-right: auto;
            }
            .box_heading{
                padding: 15px;
                color: dodgerblue;
                font-size: 30px;
            }
            .textbox{
                font-size: 15px;
                width: 100px;
            }
            .box_main table{
                font-size: 18px;
            }
            .box_main{
                padding-top: 20px;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }
            .space{
                height: 30pt;
                width: auto;
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
            hr{
                margin: 0;
            }
            .submit{
                background: dodgerblue;
                color: #f0f0f0;
                padding: 5px;
                text-decoration: none;
                border-radius: 10px 10px 10px 10px;
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
                padding:5px;
                border:0;
                width: 350px;
                background-color:dodgerblue;
                color:#f0f0f0;
            }
            .total{
                padding:5px;
                border:0;
                background-color: #3c4ba7;
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
                echo $tresult['t_name'];
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
                <a href="disp_teacher_home.php"><div class="tab">Home</div></a>
                <a href="#"><div class="tab_s">Update Attendance</div></a>
                <a href="disp_teacher_student.php"><div class="tab">Student</div></a>
                <a href="disp_teacher_profile.php"><div class="tab">Profile</div></a>
            </div>
        </div>
        <div class="body_main">
            <div class="space">
            </div>
            <div class="box">
                <div class="box_heading">
                    <b>Update Marks</b>
                </div>
                <hr size="2" color="dodgerblue">
                <div class="box_main">
                    <form action="" method="GET">
                    <table cellpadding="5">
                        <tr>
                            <td><b>Sort By:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>Course</td>
                            <td>&nbsp;</td>
                            <td><select name="course" class="textbox">
                                <option value="" selected>select..</option>
                                <option value="B.Tech">B.TECH</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>
                                <option value="BCA">BCA</option>
                                </select></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>College</td>
                            <td>&nbsp;</td>
                            <td><select name="college" class="textbox">
                                <?php
                                $college = "SELECT DISTINCT college FROM student_data";
                                $college_query= mysqli_query($connect,$college);
                                $total_college = mysqli_num_rows($college_query);
                                while($college_name = mysqli_fetch_assoc($college_query))
                                {
                                    echo "<option>".$college_name['college']."</option>";
                                }
                                ?>
                                </select></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>Branch</td>
                            <td>&nbsp;</td>
                            <td><select name="branch" class="textbox">
                                <option value="na">N/A</option>
                                <option value="cse">CSE</option>
                                <option value="ece">ECE</option>
                                <option value="it">IT</option>
                                <option value="en">EN</option>
                                <option value="civil">CIVIL</option>
                                <option value="me">ME</option>
                                <option value="eee">EEE</option>
                                <option value="ei">EI</option>
                                </select></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>Section</td>
                            <td>&nbsp;</td>
                            <td><select name="section" class="textbox">
                                <option value="na">N/A</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><b>Display data:</b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>Month</td>
                            <td>&nbsp;</td>
                            <td><select name="month" class="textbox">
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
                            <td>Year</td>
                            <td>&nbsp;</td>
                            <td><select name="year" class="textbox">
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                </select></td>
                        </tr>
                    </table>
                        <center><input type="submit" name="submit" class="submit"></center>
                    </form>
                    
                    <form action="" method="POST">
                        <center>
                            <?php
                            
                            if($_GET['submit']){
                                $course = $_GET['course'];
                                $college = $_GET['college'];
                                $branch =$_GET['branch'];
                                $section =$_GET['section'];
                                $month = $_GET['month'];
                                $year = $_GET['year'];
                                $monthyear = $month."_".$year;
                                $name = "SELECT * FROM student_data WHERE course='".$course."'"." AND college='".$college."' AND branch='".$branch."' AND section='".$section."' ORDER BY name ;";
                                $name_query= mysqli_query($connect,$name);
                                $total_name = mysqli_num_rows($name_query);
                                if($total_name!==0){
                                    
                                    $month_name = "SELECT * FROM month WHERE mname='".$month."';";
                                    $month_query = mysqli_query($connect,$month_name);
                                    $month_value = mysqli_fetch_assoc($month_query);
                                    
                                    echo "<table class='list' cellpadding=\"10\">
                                            <tr>
                                                <th><b>S.No.</b></th>
                                                <th><b>Name</b></th>
                                                <th><b>Email</b></th>
                                                <th><b>".$month_value['value']." ".$year." Attendance</b></th>
                                            </tr>";
                                    $a = 1;
                                    
                                    $days = "SELECT * FROM attendance_days WHERE month_year='".$monthyear."';";
                                    $days_query = mysqli_query($connect,$days);
                                    $days_disp = mysqli_fetch_assoc($days_query);
                                    
                                    $total_value = $_POST['total'];
                                            
                                    $att = "SELECT MAX($monthyear) FROM attendance;";
                                    $att_query = mysqli_query($connect,$att);
                                    $att_disp = mysqli_fetch_assoc($att_query);
                                    $string=implode(",",$att_disp);
                                    
                                    $error_check = "";
                                    
                                    while($stu_name = mysqli_fetch_assoc($name_query))
                                    {   
                                        $attendance = "SELECT * FROM attendance WHERE email='".$stu_name['emailId']."'";
                                        #echo $name;
                                        $attendance_query = mysqli_query($connect,$attendance);
                                        $attendace_disp = mysqli_fetch_assoc($attendance_query);
                                        $val = "marks".$a;
                                        $new = $_POST[$val];
                                        $updated = $attendace_disp[$monthyear];
                                        echo "<tr><td>".$a."</td>";
                                        echo "<td>".$stu_name['name']."</td>";
                                        echo "<td>".$stu_name['emailId']."</td>";
                                        echo "  <td>
                                                    <input type=\"number\" name=\"marks".$a."\"  value=\"".$updated."\">
                                                </td>";
                                       
                                        /*echo "<td>A".$new."</td>";
                                        echo "<td>B".$attendace_disp[$monthyear]."</td>";*/
                                        //echo "<td>".$upd."</td>";
                                        /*echo "<td>
                                                <a href='update.php?name=$stu_name[name]&email=$stu_name[emailId]'>Edit</a>
                                            </td>";*/
                                        echo "</tr>";
                                        if($_POST['update']){
                                            
                                            if($total_value > $string){
                                            
                                            if($new!==$attendace_disp[$monthyear] || $total_value!==$days_update[$branch]){
                                            $upd = "UPDATE attendance SET ".$monthyear."='".$new ."' WHERE email='".$stu_name['emailId']."'";
                                            $update_query = mysqli_query($connect,$upd);
                                            $attendace_disp = mysqli_fetch_assoc($upd_query);
                                            
                                            $days_update = "UPDATE attendance_days SET ".$branch."='".$total_value ."' WHERE month_year='".$monthyear."'";
                                            $days_update_query = mysqli_query($connect,$days_update);
                                            $days_update_disp = mysqli_fetch_assoc($days_update_query);
                                            
                                            
                                            header("refresh:0.001");
                                            
                                            }
                                            else{
                                                
                                                }
                                            }
                                            else{
                                                
                                                $error_check ="<center><font face=\"calibri\" size=\"2px\" color=\"red\">Working days can't be less than number of present days</font></center>";
                                                #echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\"><br>Working days can't be less than number of present days<br></font></center>";
                                            }
                                        }
                                        
                                        ++$a;
                                        /*if($_POST['update']){
                                            echo $new_value;
                                        }*/
                                    }
                                    echo "<tr>
                                            <td class='total' colspan='3'>Total Working Days</td>
                                            <td class='total'><input type='number' name='total' value='".$days_disp[$branch]."'></td>
                                          </tr>";
                                    echo "</table><br><br>";
                                    
                                    echo $error_check."<br>";
                                    
                                    echo "<input type=\"submit\" name=\"update\" class=\"submit\" value=\"Update\">";
                                    
                                    
                                    
                                }
                                else{
                                     echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">No Such Records Found</font></center>";
                                }
                                
                                
                                
                            }
                            else{
                            }
                            
                            
                            ?>
                        
                    
                    </center>
                    </form>
                    <div class="space">
            </div>
                </div>
            </div>
            <div class="space">
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
<?php
ob_end_flush();
?>