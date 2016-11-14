 <link href="css/templatemo_style.css" rel='stylesheet' type='text/css'>   
  <link href="css/mystyle.css" rel='stylesheet' type='text/css'>  
<?php
session_start();

             if(isset($_SESSION['id'])){
              $username=($_SESSION['username']);
              $userId=($_SESSION['id']);
            }
            else{
              header("Location:login.php");
            }

 $pagetitle="HOME";
      ?>
      
            <?php
         include "header.php";
         ?>

        <div class="templatemo-welcome" id="templatemo-welcome" style="background-color: #A9A9A9; ">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to Attendance Managment Home Page</span>
                    <p class="txt_slogan">
                </div>	
            </div>
        </div>   

    <div id="templatemo-blog" style="background-color: #A9A9A9;">
            <div class="container" style="background-color: #A9A9A9;">
                <div class="row">
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                        <li>    
                        <div class="clearfix"> </div>
                        <p style="font-size: 19px;">
                            This is our HTML/CSS/JS project for course CS455A
                            at IIT Kanpur.We are building a web based application
                            for attendance management.</p>
                        <p style="font-size: 20px; margin-top: 200">
                          Amit Kumar 13095(Back-End)(Ise thodi bht php aati h )
                        </p>
                        <p style="font-size: 20px;">
                        Shiv Shankar Azad 13655(Front-End)(Expert at making awesome front ends of websites)
                        </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 --> 
                </div>
              </div>
           </div>
    </div>
