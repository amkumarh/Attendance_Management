<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

    <head >         
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title><?php echo $pagetitle; ?></title>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
    </head>   
    <body style="background-color: #A9A9A9;">
        <div>
            <div>
                <div class="navbar-default" role="navigation">
                    <div class="container" style="margin-right: 3000px;">
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar" class="external-link">
                            <ul class="nav navbar-nav navbar-right" style="margin-top:5px;"  >
                                <li><a href="home.php">HOME</a></li>
                                <li><a href="student.php" >Students Details</a></li>
                                <li><a href="teacher.php" >Teachers Details</a></li>
                                <li><a href="subject.php" >List of Subjects</a></li>
                                 <li><a href="SearchAttendReport.php" >Individual Attendance</a></li>
                                <li><a href="AttendanceReport.php" >Overall Attendance</a></li>
                                  <li><a href="AttendanceForm.php" >Take Attendance</a></li>

                                <li><a href="logout.php"  >Log Out</a></li>
                             </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>