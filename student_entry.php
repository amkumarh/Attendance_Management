  <?php 
   $pagetitle="Students Registration";
  include "header.php"; ?>

   <?php 
      $conn = "";
      try {

        $conn = new PDO('mysql:host=localhost;dbname=attendance_db;','root','');

      } catch (Exception $e) {

        echo 'ERROR'.$e->getMessage();
      }
      ?>


  <?php 
    if (isset($_POST['register'])) {

      $studentName = $_POST['name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $program = $_POST['program'];

       
    $query = "INSERT INTO student_table SET student_name = ?, dob = ?, gender = ?, email = ?,program = ?";

    $entry = $conn->prepare($query);
    $entry->bindValue(1, $studentName);
    $entry->bindValue(2, $dob);
    $entry->bindValue(3, $gender);
    $entry->bindValue(4, $email);
    $entry->bindValue(5, $program);
    
    if($entry->execute())
    {
      echo "Successfully registered.";
      die();
    }
    else{
      echo "Unable to register! Try again please.";
    }
    }
     ?>  

<div class="container">
             <div class="text-center">
             <h1>Student Entry</h1>
                </div>
          

<div class="form-container">
    <form action="#" method="post" role="form">

        <div class="container">
          <div class="row">

          <div class="form-group">
            <label for="name" > Student Name(*) </label>
            <input type="text" class="form-control" required id="name" name="name">
          </div>


          <div class="form-group">
            <label for="dob"> Date Of Birth </label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>

         </div>
        </div>  <!-- col-container-->

         <div class="container">
          <div class="row">


          <div class="form-group">
          <label for="gender"  >Gender(*)</label>
           <select class="form-control" required id="sex" name="gender">
           <option></option>
           <option value="Male">Male</option>
           <option value="Female">Female</option> 
           </select>
          </div>



          <div class="form-group">
            <label for="email"  >Email address(*) </label>
            <input type="email" class="form-control" required id="email" placeholder="Email" name="email">
          </div>
          </div>
           </div>



          <div class="form-group">
          <label for="program">Program(*) </label>
           <select  class="form-control" required id="program" name="program">
          <option></option>
           <option value="B.Tech">B.Tech</option>
           <option value="M.Tech">M.Tech</option>
           <option value="PhD">PhD</option>
           <option value="BS">BS</option>
           </select>
          </div>  

          <button type="submit"  name="register">Register</button>
          <button type="reset" name="back">Clear</button>
    
       </form>
       </div>
       </div> 