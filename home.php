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
 include "header.php";
      ?>

    <div id="templatemo-blog" style="background-color: #999966;">
    <span class="txt_darkgrey" style="font-size: 40; margin-left: 300px;">Welcome to Attendance Managment Home Page</span>
            <div class="container" style="background-color:#999966;">
                <div class="row">
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                        <li>    
                        <div class="clearfix"> </div>
                        <p style="font-size: 19px;">
                            </p>
                        <p style="font-size: 15px; margin-top: 200">
                        This is our HTML/CSS/JS project for course CS455A
                            at IIT Kanpur. We are building a web based application
                            for attendance management.
                          
                        </p>
                        <p style="font-size: 15px;">
              
                          Amit Kumar 13095 (Back-End)
                        </p>
                        <p style="font-size: 15px;">
                        Shiv Shankar Azad 13655 (Front-End)
                        </p>
                            </li>
                        </ul>
                    </div> 
                </div>
              </div>
           </div>
    </div>
