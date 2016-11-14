
<?php
 $pagetitle="Teachers Registration Page";
 include "header.php"; ?>
 <?php 
    if (isset($_POST['register'])) {
      
      $firstName = $_POST['name'];
      $lastName = $_POST['lname'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $degree= $_POST['degree'];
      $salary= $_POST['salary'];
      $address= $_POST['address'];
     
      $db = new db();

      if($db->teacher_entry($conn,$firstName,$lastName,$dob,$gender,$email,$phone,$degree,$salary,$address)){
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
                          <h1>Teacher Entry</h1>
                        </div>
                    </div>
              </div>


<div class="form-container">

    <form action="#" method="post" role="form" >
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="name" > First Name (*)</label>
            <input type="text" class="form-control" required id="name" placeholder="First Name" name="name">
          </div>


          <div class="form-group">
            <label for="lname"> Last Name(*)</label>
            <input type="text" class="form-control" required id="lname" placeholder="Last Name"  name="lname">
          </div>

    </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="dob"> DOB </label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>

          <div class="form-group">
          <label for="gender">Gender</label>
           <select  class="form-control" required id="sex" name="gender" >
           <option>-------select-------</option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>

  </div>
  </div>
   <div class="container">
    <div class="row">

          <div class="form-group">
            <label for="email" >Email address </label>
            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
          </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="address">Course</label>
            <input class="form-control" id="address" placeholder="Course" name="address">
          </div>

          <button type="submit"  name="register">Register</button>
          <button type="reset" name="back">Clear</button>
      
       </form>
          </div><!--form-container-->
        </div> <!--container-->
