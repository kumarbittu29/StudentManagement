<?php
session_start();
include("connect.php");
$s_username = $_SESSION['name'];
$get = "SELECT * FROM student_data WHERE emailId ="."'".$s_username."'";
$display = mysqli_query($connect,$get);
$result = mysqli_fetch_assoc($display);
include("connect.php");
error_reporting(0);
ob_start();
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
            .body_header{
                height: 75px;
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
            option.select-hr { 
                border-bottom: 1px dotted #000;
                color: dodgerblue;
                    
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
                    Student Edit Details
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
                            <td><input type="text" name="stname" class="textbox" 
                                       
                                       <?php
                                            echo 'value="'.$result['name'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Father's Name</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="fathername" class="textbox" 
                                       
                                       <?php
                                            echo 'value="'.$result['fname'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Gender</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="sex"> 
                                       
                                <?php
                                
                                if($result['sex']=="MALE"){
                                    echo "<option value='MALE' selected>Male</option>
                                    <option value='FEMALE'>Female</option>";
                                }
                                else{
                                    echo "<option value='MALE' selected>Male</option>
                                    <option value='FEMALE' selected>Female</option>";
                                }
                                    
                                ?>
                                </select>
                                </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Postal Address</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10"><input type="text" name="paddress" size="100%" 
                                       
                                       <?php
                                            echo 'value="'.$result['paddress'].'"';
                                       ?>
                                       
                                       ></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><b><p class="label">Permanent Address</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td colspan="10"><input type="text" name="personaladdress" size="100%" 
                                       
                                       <?php
                                            echo 'value="'.$result['personaladdress'].'"';
                                       ?>
                                       
                                       ></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                         <tr>
                            <td><b><p class="label">District</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="text" name="district" class="textbox" 
                                       
                                       <?php
                                            echo 'value="'.$result['district'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">City</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input name="city" type="text" 
                                       
                                       <?php
                                            echo 'value="'.$result['city'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">State</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><select name="state">
                                <?php
                                $state = "SELECT * FROM state";
                                $state_query= mysqli_query($connect,$state);
                                $total_state = mysqli_num_rows($state_query);
                                echo "<option class=\"select-hr\" selected>".$result['state']."</option>";
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
                            <td><input type="text" name="pincode" class="textbox" 
                                       
                                       <?php
                                            echo 'value="'.$result['pincode'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">DOB</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="date" name="dob" 
                                       
                                       <?php
                                            echo 'value="'.$result['dob'].'"';
                                       ?>
                                       
                                       ></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><b><p class="label">Mobile No.</p></b></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="number" length="10" name="mobileno" class="textbox" 
                                       
                                       <?php
                                            echo 'value="'.$result['mno'].'"';
                                       ?>
                                       
                                       ></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                       
                        <tr>
                            <td colspan="14" align="center">
                                <input class="reset" type="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input class="submit" type="submit" value="Update" name="update">
                            </td>
                        </tr>
                    </table>
                    </form>
                    </font>
                    <br>
                    <hr size="2" color="dodgerblue">
                    <p class="tnc">Update you details.</p>
                    <?php
        
        $name = $_POST['stname'];
        $fname = $_POST['fathername'];
        $paddress = $_POST['paddress'];
        $personaladdress = $_POST['personaladdress'];
        $sex = $_POST['sex'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $dob = $_POST['dob'];
        $mno = $_POST['mobileno'];
        
        /*echo "$name<br>";
        echo "$fname<br>";
        echo "$paddress<br>";
        echo "$personaladdress<br>";
        echo "$sex<br>";
        echo "$city<br>";
        echo "$district<br>";
        echo "$state<br>";
        echo "$pincode<br>";
        echo "$dob<br>";
        echo "$mno<br>";*/
        
        if($_POST['update']){
            if($name!="" && $fname!="" && $paddress!="" && $personaladdress!="" && $sex!="" && $city!="" && $district!="" && $state!="" && $pincode!="" && $dob!="" && $mno!=""){
                $update = "UPDATE student_data SET name='".$name."', fname='".$fname."', paddress='".$paddress."', personaladdress='".$personaladdress."', sex='".$sex."', city='".$city."', district='".$district."', state='".$state."', pincode='".$pincode."', dob='".$dob."', mno='".$mno."' WHERE emailId='".$s_username."';";
                //echo $update;
                
                $result_update = mysqli_query($connect,$update);
                echo $result_update;
        
                if($result_update){
                    header("refresh:0.001");
                   echo "<center><font face=\"calibri\" size=\"2px\" color=\"red\">Data updated. Redirecting in 3 sec... <a href=\"teacher_login.php\">Redirect now</a></font></center>";
                    header("refresh:3; url=disp_stu_profile.php");
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