
<?php
 $pagetitle="Updating-Teacher's Record";
 include "header.php";
  $db = new db();

  ?>

 <?php

    if (isset($_POST['update'])):?>
      <?php
      $firstName = $_POST['name'];
      $lastName = $_POST['lname'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $degree= $_POST['degree'];
      $salary= $_POST['salary'];
      $address= $_POST['address'];
      $id= $_GET['teacher_id'];
      if($db->update_teacher_record($conn,$firstName,$lastName,$dob,$gender,$email,$phone,$degree,$salary,$address,$id)){
             $status= "Teacher's Information Updated Successfully";
        }
       ?>
     <?php endif ?>   

      <?php 
        $t_id = array();
        if (isset($_GET['teacher_id'])) {
          $t_id = $_GET['teacher_id'];
        }
       ?>


<div class="container">
        <?php 
            $update = $db->get_single_teacher($conn,"teacher_table",$t_id);
        ?>
        <?php foreach ($update as $key) { ?>
              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                          <h1>Updation of Teacher's Details</h1>
                        </div>
                    </div>
              </div>
        <?php if (isset($status)): ?>

            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $status; ?>
            </div>


          <?php endif ?>                

<div class="form-container">

    <form method="post" role="form" action="teacher_update.php?teacher_id=<?php echo $key['teacher_id']; ?>">
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

          <div "form-actions">
          <button type="submit" name="update">Update</button>
          </div>
      
       </form>
        <?php } ?>

           </div><!--form-container-->  
           </div><!--container-->	    

