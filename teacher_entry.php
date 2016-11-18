
<?php
 $pagetitle="Teachers' Registration Page";
 include "header.php"; ?>
 <?php 
    if (isset($_POST['register'])) {
      
      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $course = $_POST['course'];
     
      $db = new db();

      if($db->teacher_entry($conn,$firstName,$lastName,$dob,$gender,$email,$course)){
      echo "New entry was created";
      }
      else{
        echo "unable to create new entry.";
      }
    }
     ?>

              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                          <h1>Teachers' Entry</h1>
                        </div>
                    </div>
              </div>


<div class="form-container">

    <form action="#" method="post" role="form" >
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="name" > First Name(*)</label>
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="first_name">
          </div>


          <div class="form-group">
            <label for="lname"> Last Name(*)</label>
            <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="last_name">
          </div>

    </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="dob"> Date of Birth </label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>

          <div class="form-group">
          <label for="gender">Gender</label>
           <select  class="form-control" required id="sex" name="gender" >
           <option></option>
           <option value="Male">Male</option>
           <option value="Female">Female</option> 
           </select>
          </div>

  </div>
  </div>
   <div class="container">
    <div class="row">

          <div class="form-group">
            <label for="email" >Email address </label>
            <input type="email" class="form-control" required id="email" placeholder="Email" name="email">
          </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="course">Course</label>
            <input type="text" class="form-control" required id="course" placeholder="Course" name="course">
          </div>

          <button type="submit"  name="register">Register</button>
          <button type="reset" name="back">Clear</button>
      
       </form>
          </div><!--form-container-->
        </div> <!--container-->
