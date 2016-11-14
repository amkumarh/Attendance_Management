  <?php 
   $pagetitle="Students Registration";
  include "header.php"; ?>

  <?php 
    if (isset($_POST['register'])) {

      $studentName = $_POST['name'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $phone= $_POST['phone'];
      $add= $_POST['add'];
      $session = $_POST['session'];
      $program= $_POST['program'];
      $semester= $_POST['semester'];

      $db = new db();

      if($db->std_entry($conn,$studentName,$dob,$gender,$email,$phone,$add,$session,$program,$semester)){
      echo "New Student added";
      }
      else{
        echo "sorry!!!!!";
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
            <input type="text" class="form-control" required id="name" placeholder="student name"  name="name">
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
           <select  class="form-control"   required id="sex" name="gender">
           <option>-------select-------</option>
           <option value="male">Male</option>
           <option value="female">Female</option> 
           </select>
          </div>



          <div class="form-group">
            <label for="email"  >Email address </label>
            <input type="email" class="form-control" required id="email" placeholder=" Email" name="email">
          </div>
          </div>
           </div>



          <div class="form-group">
          <label for="program">Program</label>
           <select  class="form-control" name="program"  required id="program" name="program">
          <option></option>
           <option >B.Tech</option>
           <option >M.Tech</option>
           <option >Phd</option>
           <option >BS</option>
           </select>
          </div>  

          <button type="submit"  name="register">Register</button>
          <button type="reset" name="back">Clear</button>
    
       </form>
       </div><!--form-container--> 
       </div> <!--container--> 