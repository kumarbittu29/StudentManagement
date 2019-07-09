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
                height: 80px;
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
            .body_main_container{
                height: 400px;
                width: 70%;
                margin-left: auto;
                margin-right: auto;
                background: #f0f0f0cc;
            }
            .body_main_container_heading{
                font-family: calibri;
                padding: 20px;
                color: dodgerblue;
                font-size: 30px;
            }
            hr{
                margin: 0;
            }
            .body_main_container_content{
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
            .body_main_container_content_area{
                display: inline-block;
                padding-top: 50px;
                margin-left: auto;
                margin-right: auto;
                width: 49%;
            }
            .body_main_container_content_tab a{
                text-decoration: inherit;
                color: #f0f0f0;
            }
            .body_main_container_content_tab{
                font-family: calibri;
                margin-left: auto;
                margin-right: auto;
                border-radius: 10px 10px 10px 10px;
                background: dodgerblue;
                color: #f0f0f0;
                height: 200px;
                width: 200px;
            }
            .body_main_container_content_tab:hover{
                height: 225px;
                width: 225px;
            }
            p.new{
                font-family: Arial;
                text-align: center;
                font-size: 10px;
            }
            .space{
                height: 10px;
            }
            .admin{
                background-color: #f0f0f0;
                position: fixed;
                right: 0;
                top: 16px;
                border-radius: 20px 0px 0px 20px;
                padding: 10px;
            }
            .admin img:hover{
                height: 55px;
                width: 55px;
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
            <a href="admin_login.php">
            <div class="admin">
                <img src="admin.png" height="50px" width="50px" alt="Admin Portal">
            </div>
            </a>
        </div>
        </div>
        <div id="body">
        <div class="body_header">
        </div>
        <div class="body_main">
            <div class="body_main_container">
                <div class="body_main_container_heading">
                    <center><b>STUDENT MANAGEMENT SYSTEM</b></center>
                </div>
                <hr size="2" color="dodgerblue">
                <div class="body_main_container_content">
                    <div class="body_main_container_content_area">
                    <div class="body_main_container_content_tab">
                        <a href="student_login.php">
                        <center>
                            <img src="book.png" height="150px" width="150px"><br>
                            Student Login
                        </center>
                        </a>
                    </div>
                    </div>
                    <div class="body_main_container_content_area">
                    <div class="body_main_container_content_tab">
                        <a href="teacher_login.php">
                        <center>
                            <img src="afbbf15d5e82a1c4fb5a55c4eacf3003-graduation-cap-icon-by-vexels.png" height="150px" width="150px"><br>
                            Teacher Login
                        </center>
                        </a>
                    </div>
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