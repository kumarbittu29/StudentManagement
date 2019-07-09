<?php
include("connect.php");
error_reporting(0);
ob_start();
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
                position: absolute;
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
            .body_header{
                height: 15px;
                width: 100%;
            }
            .body_footer{
                height: 20px;
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
                width: 80%;
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .box_header{
                background-color: dodgerblue;
                height: 40px;
                width: 100%;
            }
            .box_header_container{
                padding-top: 5px;
                padding-left: 20px;
            }
            .box_container{
                width: 100%;
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
            input.reset{
                height: 25px;
                width: 75px;
                font-size: 15px;
                font-style: oblique;
                
            }
            input.submit{
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
            hr{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div id="particles">
        </div>
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
    </div>
        <div id="body">
        <div class="body_header">
        </div>
        <div class="body_main">
            <div class="box">
                <font face="Calibri" color="white" size="5px">
                <div class="box_header">
                    <div class="box_header_container">
                    Student Registration Form
                    </div>
                </div>
                </font>
                <div class="box_container">
                    <br>
                    <br>
                    <font face="Calibri" color="white">
                        <form action="" method="POST" enctype="multipart/form-data">
                    <table align="center">
                        <tr>
                            <td><b><p class="label">Name</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="stname" class="textbox"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Father's Name</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="fathername" class="textbox"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Gender</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="sex">
                                <option value="MALE">Male</option>
                                <option value="FEMALE">Female</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Postal Address</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10"><input type="text" name="paddress" size="100%"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Permanent Address</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10"><input type="text" name="personaladdress" size="100%"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                         <tr>
                            <td><b><p class="label">District</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="district" class="textbox"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">City</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input name="city" type="text"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">State</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="state">
                                <?php
                                $state = "SELECT * FROM state";
                                $state_query= mysqli_query($connect,$state);
                                $total_state = mysqli_num_rows($state_query);
                                while($name = mysqli_fetch_assoc($state_query))
                                {
                                    echo "<option>".$name['states']."</option>";
                                }
                                ?>
                                </select></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Pincode</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="pincode" class="textbox"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">DOB</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="date" name="dob"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Mobile No.</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="number" length="10" name="mobileno" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Email</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="email" name="email" class="textbox"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Password</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="password" name="pwd"></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Upload Image</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="file" name="image"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">College</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10"><input type="text" name="college" size="100%"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                         <tr>
                            <td><b><p class="label">Course</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="course">
                                <option value="" selected>select..</option>
                                <option value="B.Tech">B.TECH</option>
                                <option value="MCA">MCA</option>
                                <option value="BCA">BCA</option>
                                </select></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><b><p class="label">Branch</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="branch">
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
                             <td><select name="section">
                                <option value="na">N/A</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td colspan="14" align="center">
                                <input class="reset" type="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="submit" type="submit" value="Sign Up" name="submit">
                            </td>
                        </tr>
                    </table>
                    </form>
                    </font>
                    <br>
                    <hr size="2" color="dodgerblue">
                    <p class="tnc">By signing in to your account you agree to our <a href="#0.1_">Terms &amp; Privacy</a>.</p>
                    <?php
        
        $name = $_POST['stname'];
        $fname = $_POST['fathername'];
        $paddress = $_POST['paddress'];
        $personaladdress = $_POST['personaladdress'];
        $college = $_POST['college'];
        $sex = $_POST['sex'];
        $city = $_POST['city'];
        $course = $_POST['course'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $dob = $_POST['dob'];
        $mno = $_POST['mobileno'];
        $emailId = $_POST['email'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $branch = $_POST['branch'];
        $section = $_POST['section'];
        $image_name = $_FILES["image"]["name"];
        $image_temp_name = $_FILES["image"]["tmp_name"];
        $folder = "stu_image/".$image_name;
        
        /*echo "$name<br>";
        echo "$fname<br>";
        echo "$paddress<br>";
        echo "$personaladdress<br>";
        echo "$college<br>";
        echo "$sex<br>";
        echo "$city<br>";
        echo "$course<br>";
        echo "$district<br>";
        echo "$state<br>";
        echo "$pincode<br>";
        echo "$dob<br>";
        echo "$mno<br>";
        echo "$emailId<br>";
        echo "$password<br>";*/
        
        if($_POST['submit']){
            if($name!="" && $fname!="" && $paddress!="" && $personaladdress!="" && $college!="" && $sex!="" && $city!="" && $course!="" && $district!="" && $state!="" && $pincode!="" && $dob!="" && $mno!="" && $emailId!="" && $password!="" && $image_name!=""){
                $insert = "INSERT INTO student_data VALUES('$name','$fname','$paddress','$personaladdress','$college','$sex','$city','$course','$district','$state','$pincode','$dob','$mno','$emailId','$password','$folder','$branch','$section')";
                
                $duplicate = "INSERT INTO attendance (email) VALUES('$email')";
                $attendance = mysqli_query($connect,$duplicate);
                $result = mysqli_query($connect,$insert);
                move_uploaded_file($image_temp_name,$folder);
        
                if($result){
                   echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">Data inserted. Redirecting in 3 sec... <a href=\"teacher_login.php\">Redirect now</a></font></center>";
                    header("refresh:3; url=student_login.php");
                }
                else{
                    echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">User already exist</font></center>";
                }
            }
            else{
                echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">All fields required</font></center>";
            }
        }    
    ob_end_flush();
?>
                    <br>
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