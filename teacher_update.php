
  <?php 
   $pagetitle="Update Teacher's Record";
  include "header.php"; 
  $db = new db(); 

  ?>

  <?php 
    if (isset($_POST['update'])):?>
      <?php
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $course= $_POST['course'];
      $id= $_GET['teacher_id'];

      if($db->update_teacher_record($conn,$first_name,$last_name,$dob,$gender,$email,$course,$id)){
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
            <label for="name"> First Name(*) </label>
            <input type="text" name="first_name" class="form-control" value="<?php echo $key['first_name']; ?>" required id="first_name" placeholder="First Name" >
          </div>


          <div class="form-group">
            <label for="lname"> Last Name(*)</label>
            <input type="text" class="form-control" value="<?php echo $key['last_name']; ?>" required id="last_name" placeholder="Last Name"  name="last_name">
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
          <label for="course">Course(*)</label>
           <select  class="form-control" required id="course" name="course">
           
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
