
<?php
 $pagetitle="Entering Subjects Detail In This Page ";
 include "header.php"; ?>

  <?php 
    if (isset($_POST['saved'])) {

      $studentName = $_POST['subject'];
      $dob = $_POST['credit'];
      $gender = $_POST['teacher'];
      $email = $_POST['field'];
      //$program = $_POST['program'];

      $db = new db();

      if($db->subject_entry($conn,$studentName,$dob,$gender,$email)){
      echo "New Student added";
      }
      else{
        echo "sorry!!!!!";
      }
    }
     ?>  
 
<div class="container">

              <div class="row">
                        <div class="text-center">
                          <h1>Subjects's Entry</h1>
                        </div>
                </div>
                

<div class="form-container">

    <form action="#" method="post" role="form">
    <div class="container">
    <div class="row">
          <div class="form-group">
            <label for="subject" >Subject's Name </label>
           <select  class="form-control" required id="subject" name="subject">
           <option>Select subject</option>
           <option >CS210A: Data Structures and Algorithms</option>
           <option >CS330: Operating Systems</option>
           <option >CS340: Compiler Design</option>
           <option >CS345A: Algorithm II</option>
           <option >CS455A: Introduction to Software Engineering</option>
           </select>
          </div>

          <div class="form-group">
          <label for="credit" >Credits</label>
           <select  class="form-control" required id="credit" name="credit">
           <option></option>
           <option >9</option>
           <option >11</option>
           <option >12</option>
           <option >13</option>
           </select>
          </div>



         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">


          <div class="form-group">
          <label for="teacher" >Teacher Name</label>
           <select  class="form-control" required id="teacher" name="teacher">
           <option>Select teacher</option>
           <option >Dr. T. V. Prabhakar</option>
           <option >Dr. Surender Baswana</option>
           <option >Dr. Harish Karnick</option>
           <option >Dr. Subhajit Roy</option>
           <option >Dr. Mainak Chaudhuri</option>
           <option >Dr. Raghunath Tewari</option>
           </select>
          </div>

          <div class="form-group">
          <label for="field" >Field</label>
           <select  class="form-control" required id="field" name="field">
           <option>Select field</option>
           <option >B.Tech</option>
           <option >M.Tech</option>
           <option >PhD</option> 
           <option >BS</option>
           </select>
          </div>
          
      </div>
      </div>

          <div >
          <button type="submit"  name="saved">Register</button>
          <div class="or"></div>
          <button type="reset" name="back">Clear</button>
          </div>
      
  </form>
 </div><!--form-container-->
 </div> <!--container-->
