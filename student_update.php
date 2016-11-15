
  <?php 
   $pagetitle="Update Student's Record";
  include "header.php"; ?>


<?php $db = new db(); ?>


  <?php 
    if (isset($_POST['update'])):?>
      <?php
      $studentName = $_POST['name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $program= $_POST['program'];
      $rollno= $_GET['std_roll_no'];

      if($db->update_std($conn,$studentName,$dob,$gender,$email,$program,$rollno)){
      $status= "Student's Information Updated Successfully";
      }
     ?>
     <?php endif ?> 

     <?php 
        $std_id = array();
        if (isset($_GET['std_roll_no'])) {
          $std_id = $_GET['std_roll_no'];
        }
       ?>

<div class="container">
    
        <?php 
            $update = $db->get_single_std($conn,"student_table",$std_id);
        ?>
          <?php foreach ($update as $key) { ?>


                <div class="row">
             <div class="text-center">
             <h1>Updation of Student Details</h1>
                </div>
                </div>
                <?php if (isset($status)): ?>

      <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $status; ?>
      </div>


    <?php endif ?> 

<div class="form-container">

    <form method="post" role="form" action="student_update.php?std_roll_no=<?php echo $key['std_roll_no']; ?>">
       <div class="container">
           <div class="row">


          <div class="form-group">
            <label for="name"> Student Name(*) </label>
            <input type="text" name="name" class="form-control" value="<?php echo $key['student_name']; ?>" required id="name" placeholder="student Name" >
          </div>

           

          <div class="form-group">
            <label for="dob"> Date Of Birth </label>
            <input type="date" name="dob" class="form-control" value="<?php echo $key['dob']; ?>" id="dob" >
          </div>

        </div>
        </div> <!-- col-container-->
       
        <div class="container">
           <div class="row">

 
          <div class="form-group">
          <label for="gender">Gender(*)</label>
           <select class="form-control" name="gender" required id="gender">

           <option></option>
           <option value="Male">Male</option>
           <option value="Female">Female</option> 
           </select>
          </div>
 
          <!-- </div> -->
          <!-- <div class="col-lg-6 push-right">  -->

          <div class="form-group">
            <label for="email">Email(*)</label>
            <input type="email" name="email" class="form-control" value="<?php echo $key['email']; ?>" required id="email" placeholder=" Email" >
          </div>

       </div>
       </div><!-- col-container-->




          <div class="form-group">
          <label for="program">Program(*)</label>
           <select  class="form-control" required id="program" name="program">
           
           <option></option>
           <option value="B.Tech">B.Tech</option>
           <option value="M.Tech">M.Tech</option>
           <option value="PhD">PhD</option>
           <option value="BS">BS</option>
           </select>
          </div>  

          <div "form-actions">
          <button type="submit" name="update">Update</button>
          </div>
       </form>
   <?php } ?>
          </div>
     </div><!--container-->	 
