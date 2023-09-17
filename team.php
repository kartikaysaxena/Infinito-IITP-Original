<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team</title>
    <?php
    require('./templates/header.php');
    ?>
    
    <link rel="stylesheet" href="css/team.css">
</head>

<body style="overflow-x: hidden;max-width:100% ; background:#f3f3f3;">
    <div class="bac" style="background: #172134; position:fixed; width:100%; top:0px; z-index:100; margin-bottom:100px;">
        <div class="container" style="padding:10px 0">
            <a href="index.php" class="logo float-left tran4s"><img src="images/logo/logo.png" alt="Logo" style="border-radius:100%; height:56px; width:56px;" /></a>

            <!-- ========================= Theme Feature Page Menu ======================= -->
            <nav class="navbar float-right theme-main-menu one-page-menu">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" >
                        <span class="sr-only">Toggle navigation</span>
                        Menu
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse-1" style="margin-top:8px;">
                    <ul class="nav navbar-nav">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./events.php">Events</a></li>
                        <li class="active"><a href="./team.php">Team</a></li>
                        <li><a href="./gallery.php">Gallery</a></li>
                        
                        <?php
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                                    echo '<li><a href="./profile.php">Profile</a></li>
                                          <li><a href="./logout.php">Logout</a></li>';
                                }
                                else{
                                    echo '
                                    <li><a href="./registration.php">Register</a></li>
                                    <li><a href="./signIn.php">Sign In</a></li>';
                                }
                            ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /.theme-feature-menu -->
        </div>
    </div>

    <div id="content">
        <div class="theme-title">
            <h2>Meet Our Team</h2>
        </div>
        <section class="teams-section">
        <h4 class="group">Overall Head</h4>
        <hr class="teamHr">
        <div class="container_team">
            <div class="card">
                <div class="imgBx">
                    <img src="./images/team/Kaushlendra Singh Rathore_.jpg">
                </div>
                <div class="contentBx">
                    <h2>Rajat Chandna</h2>
                    <p>Fest Coordinator</p>
                    <div class="links">
                    <div class="socialLinks">
                        <a href="https://www.linkedin.com/in/kaushlendra-singh-42960419a/" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                        <a href="mailto: kaushlendra_2001ee90@iitp.ac.in"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            
        <h4 class="group">Coordinators</h4>
        <hr class="teamHr">
        <div class="techTeam">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG20230319215814 - Praveen.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Praveen Kumar </h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/praveen-kumar-87b075287" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: praveen_2101ee55@iitp.ac.in"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230325_131024_864 - Ashutosh Kumar.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ashutosh Kumar </h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ashutosh-kumar-7599b024b" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: ashutoshkrh07@gmail.com" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Rohit Sinha - Rohit Sinha.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rohit Sinha</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rohit-sinha-1282a821b/" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rohit_2001mm26@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Aryan Chanda_Spons.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Aryan Chanda</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/aryan-chanda-6985b7209" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: aryan_2001CE13@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Sahil Joshi _ Spons.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Sahil Joshi</h2>
                        <p>Sponsorship and Marketing</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/sahilmjoshi" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: sahil_2001EE59@iitp.ac.in" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230619_154953_693 - Dipanshh Chauhan.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Dipanshu chauhan</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/dipanshu-chauhan-46b082242"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: dipanshhchauhan@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/20230409_020009 - Prasenjit Chanda.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Prasenjit Chanda</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/prasenjit-chanda-5696a7227"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: prasenjitchanda14@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG-20230301-WA0136 - Anustha Raj.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Anustha Raj </h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/anustha-raj-92578b239/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: anustharaj02@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230917_014440 - Kritik Chaudhary.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Kritik Chaudhary </h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/kritik-chaudhary-ba57a8229"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: kritik_2101cb32@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Ashish_mpr.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ashish S Murty</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ashish-murthy/?originalSubdomain=in"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/VaniGrover - Vani Grover.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Vani Grover</h2>
                        <p>Media and Public Relations</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/vani-grover-77078a207/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: vanigrover2407@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20210209_212440 - Rakesh meena.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>RAKESH MEENA</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="http://www.linkedin.com/in/rakesh-meena-2a4b29291"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rakeshkholwad2002@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230917_011117_555 - Ajay Chauhan.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Ajay Chauhan </h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/ajay-chauhan-700102230"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: ajay_2101me06@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG20221009124929 - Anil gautam.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Anil Gautam </h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/anil-gautam-a25a70235"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: anil_2101me09@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/shivam krishna_hospi.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shivam Krishna</h2>
                        <p>Hospitality</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/shivam-krishna-8551551bb"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: shivam_2001ee66@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Kartikay Gupta.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Kartikay Gupta</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/kartikay-gupta/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: kartikay.gupta2002@gmail.com" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Chandan.jpeg">
                    </div>
                    <div class="contentBx">
                        <h2>Chandan</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/chandan-mahato-181ba3230" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: chandankrmahatoiitp@gmail.com" target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/vishal_web.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Vishal Yadav</h2>
                        <p>Web and App</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/vishal-yadav-71a514208/?originalSubdomain=in" target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: " target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG20230823112637 - KULDEEP MEENA.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Kuldeep Meena </h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/kuldeep-meena-604708249"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: kuldeepr9358@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230227_220039 - Naveen Gugulothu..jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Gugulothu Naveen </h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/gugulothu-naveen-946ab7248"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: gugulothnaveen84@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG_20230824_170845 - Rahul Sahu.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rahul sahu </h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/rahul-sahu-3501b9225"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: rahul_2101me53@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Pankaj_E - Pankaj VeRma.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Pankaj Rawat</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/pankaj-rawat-311b1524a"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: pankaj_2101cb40@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/1692718991698_2 - DEEPAK Gautam.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Deepak Gautam </h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/deepak-gautam-69995a224"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: dd3026344@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/YashChoudhary_events - Yash Choudhary.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Yash Chaudhary</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/yash-choudhary-8339ab20b/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: yashc331@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Abhishek Saini_events.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Abhishek</h2>
                        <p>Events, Planning & Management</p>
                        <div class="links">
                        
                        <div class="socialLinks">
                            <a href="https://www.linkedin.com/in/abhishek-saini-821a9b208"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                            <a href="mailto: abhi9813293405@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/IMG-20230719-WA0005 - shivam dubey.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Shivam Kumar Dubey</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/shivam-kumar-dubey-74bb26220"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: shivam_2101me63@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/20220711_191517_03 - Mihir.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Mihir</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/mihir-%E2%80%8B-171678253"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: mihir_2101ee99@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 

        <!-- <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Abhinav_Reg - Abhinav Mishra.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Abhinav Mishra</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/abhinav2901/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: abhinavmishra2901@gmail.com"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/download.png">
                    </div>
                    <div class="contentBx">
                        <h2>Ruchir Porwal</h2>
                        <p>Registration & Security</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href=""target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: "target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </section>
    <div class="twoCards">
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Rajneesh Kumar_CnD.jpg">
                    </div>
                    <div class="contentBx">
                        <h2>Rajneesh Kumar</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/rajneesh-kumar-5raj"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: rajneesh_2001cs53@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container_team">
                <div class="card">
                    <div class="imgBx">
                        <img src="./images/team/Priyanshu Patra_CnD - Priyanshu Patra.png">
                    </div>
                    <div class="contentBx">
                        <h2>Priyanshu Patra</h2>
                        <p>Creatives & Design</p>
                        <div class="links">
                        
                            <div class="socialLinks">
                                <a href="https://www.linkedin.com/in/pripat2002/"target="_blank"><i class="fa fa-linkedin social_icon" style="display:flex;"></i></a>
                                <a href="mailto: priyanshu_2001me55@iitp.ac.in"target="_blank"><i class="fa fa-envelope social_icon" style="display:flex;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php 
    require('./templates/footer.php');
    ?>
</body>

</html>