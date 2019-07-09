<?php
session_start();
include("connect.php");
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
                height: 50px;
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
            .text_area{
                width: 100%;
                background: #f0f0f0cc;
                margin-left: auto;
                margin-right: auto;
            }
            .text{
                font-family: calibri;
                padding-top: 30pt;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                padding-bottom: 30pt;
            }
            .space{
                height: 75pt;
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
                <a href="#"><div class="tab_s">Home</div></a>
                <a href="disp_teacher_update.php"><div class="tab">Update Attendance</div></a>
                <a href="#"><div class="tab">Student</div></a>
                <a href="disp_teacher_profile.php"><div class="tab">Profile</div></a>
            </div>
        </div>
        <div class="body_main">
            <div class="space">
            </div>
            <div class="text_area">
                <div class="text">
            <b>INTRODUCTION</b>
            <hr size="1" color="dodgerblue" width="300" align="left">
            <p>The Airports Authority of India or AAI is a statutory body ,working under the Ministry of Civil Aviation, Government of India is responsible for creating, upgrading, maintaining and managing civil aviation infrastructure in India.</p>
            <p>AAI has four training establishments viz. The Civil Aviation Training College (CATC) at Prayagraj and its extension at Hyderabad (CATC-HTC), Indian Aviation Academy (National Institute of Aviation Management and Research (NIAMAR) Society) at Delhi (a joint venture of Airports Authority of India, Directorate General of Civil Aviation (India) and Bureau of Civil Aviation Security, Govt of India) and Fire Training Centres (FTC) at Delhi & Kolkata.</p>
            <p>AAI covers all major air-routes over Indian landmass via 29 Radar installations at 11 locations along with 700VOR/DVOR installations co-located with Distance Measuring Equipment (DME). 52 runways are provided with Instrument landing system (ILS) installations with Night Landing Facilities at most of these airports and Automatic Message Switching System at 15 Airports.</p>
            <b>ROLE OF AAI</b>
            <hr size="1" color="dodgerblue" width="300"align="left">
            <p>It provides Communication Navigation Surveillance / Air Traffic Management (CNS/ATM) services over Indian airspace and adjoining oceanic areas.</p>
            <p>It also manages a total of 126[1] Airports, including 11[1] International Airports, 11 Customs Airports, 89 Domestic Airports and 26 Civil enclaves at Military Airfields</p>
            <p>AAI also has ground installations at all airports and 25 other locations to ensure safety of aircraft operations.</p>

            <b>MISSION OF AAI</b>
            <hr size="1" color="dodgerblue" width="300"align="left">
            <p><i>“To be the foundation of an enduring Indian aviation network, providing high quality, safe and customer- oriented airport and air navigation services thereby acting as a catalyst for economic growth in the areas we serve.”</i></p>
            <b>VISION OF AAI</b>
            <hr size="1" color="dodgerblue" width="300"align="left">
            <p>1.	AAI’s vision till 2006 is:  To be  the principal aviation provider in the country, AAI shall adopt and facilitate the use of contemporary air navigation services.<br>
                2.	Upgrade and adopt airport infrasturcture.<br>
                3.	Support improving air connectivity at unserved and underserved airports.<br>
                4.	Have restructured organization.<br>
                5.	Focus on profitable and opreration at major airports through continuing efforts on cost reduction and enhancing non- aeronautical revenue.</p>

            <b>SERVICES OF AAI</b>
            <hr size="1" color="dodgerblue" width="300"align="left">
                    <p>1.	<b><i>Passenger Facilities</i></b><br><br>

The main functions of AAI inter-alia include construction, modification & management of passenger terminals, development & management of cargo terminals, development & maintenance of apron infrastructure including runways, parallel taxiways, apron etc., Provision of Communication, Navigation and Surveillance which includes provision of DVOR / DME, ILS, ATC radars, visual aids etc., provision of air traffic services, provision of passenger facilities and related amenities at its terminals thereby ensuring safe and secure operations of aircraft, passenger and cargo in the country.<br><br>

                        <b><i>2.	Air Navigation Services</i></b><br><br>

In tune with global approach to modernization of Air Navigation infrastructure for seamless navigation across state and regional boundaries, AAI has been going ahead with its plans for transition to satellite based Communication, Navigation, Surveillance and Air Traffic Management. A number of co-operation agreements and memoranda of co-operation have been signed with US Federal Aviation Administration, US Trade & Development Agency, European Union, Air Services Australia and the French Government Co-operative Projects and Studies initiated to gain from their experience. Through these activities more and more executives of AAI are being exposed to the latest technology, modern practices & procedures being adopted to improve the overall performance of Airports and Air Navigation Services.<br>

Induction of latest state-of-the-art equipment, both as replacement and old equipments and also as new facilities to improve standards of safety of airports in the air is a continuous process. Adoptions of new and improved procedure go hand in hand with induction of new equipment. Some of the major initiatives in this direction are introduction of Reduced Vertical Separation Minima (RVSM) in India air space to increase airspace capacity and reduce congestion in the air; implementation of GPS And Geo Augmented Navigation (GAGAN) jointly with ISRO which when put to operation would be one of the four such systems in the world.<br><br>


                        <b><i>3.	Security</i></b><br><br>

The continuing security environment has brought into focus the need for strengthening security of vital installations. There was thus an urgent need to revamp the security at airports not only to thwart any misadventure but also to restore confidence of traveling public in the security of air travel as a whole, which was shaken after 9/11 tragedy. With this in view, a number of steps were taken including deployment of CISF for airport security, CCTV surveillance system at sensitive airports, latest and state-of-the-art X-ray baggage inspection systems, premier security & surveillance systems. Smart Cards for access control to vital installations at airports are also being considered to supplement the efforts of security personnel at sensitive airports.<br><br>


                        <b><i>4.	Aerodrome Facilities</i></b><br><br>

In Airports Authority of India, the basic approach to planning of airport facilities has been adopted to create capacity ahead of demand in our efforts. Towards implementation of this strategy, a number of projects for extension and strengthening of runway, taxi track and aprons at different airports has been taken up. Extension of runway to 7500 ft. has been taken up to support operation for Airbus-320/Boeing 737-800 category of aircrafts at all airports.<br><br>

                        <b><i>5.	HRD Training</i></b><br><br>

A large pool of trained and highly skilled manpower is one of the major assets of Airports Authority of India. Development and Technological enhancements and consequent refinement of operating standards and procedures, new standards of safety and security and improvements in management techniques call for continuing training to update the knowledge and skill of officers and staff. For this purpose AAI has a number of training establishments, viz. NIAMAR in Delhi, CATC in Allahabad, Fire Training Centres at Delhi & Kolkata for in-house training of its engineers, Air Traffic Controllers, Rescue & Fire Fighting personnel etc. NIAMAR & CATC are members of ICAO TRAINER programme under which they share Standard Training Packages (STP) from a central pool for imparting training on various subjects. Both CATC & NIAMAR have also contributed a number of STPs to the Central pool under ICAO TRAINER programme. Foreign students have also been participating in the training programme being conducted by these institution<br><br>




                        <b><i>6.	IT Implementation</i></b><br><br>

    Information Technology holds the key to operational and managerial efficiency, transparency and employee productivity. AAI initiated a programme to indoctrinate IT culture among its employees and this is most powerful tool to enhance efficiency in the organization. AAI website with domain name www.airportsindia.org.in or www.aai.aero is a popular website giving a host of information about the organization besides domestic and international flight information of interest to the public in general and passengers in particular.</p>

                    <b>FUNCTION OF AAI</b>
            <hr size="1" color="dodgerblue" width="300" align="left">
<p>1.	Design, Development, Operation and Maintenance of international and domestic airports and civil enclaves.<br>
2.	Control and Management of the Indian airspace extending beyond the territorial limits of the country, as accepted by ICAO.<br>
3.	Construction, Modification and Management of passenger terminals.<br>
4.	Development and Management of cargo terminals at international and domestic airports.<br>
5.	Provision of passenger facilities and information system at the passenger terminals at airports.<br>
6.	Expansion and strengthening of operation area, viz. Runways, Aprons, Taxiway etc.<br>
7.	Provision of visual aids.<br>
    8.	Provision of Communication and Navigation aids, viz. ILS, DVOR, DME, Radar etc.</p>
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