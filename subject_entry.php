
<?php
 $pagetitle="Entering Subjects Detail In This Page ";
 include "header.php"; ?>

 <?php 
    if (isset($_POST['saved'])) {
    
      $subName = $_POST['subject'];
      $teacher= $_POST['teacher'];
      $field = $_POST['field'];
      $semester= $_POST['semester'];

      $db = new db();

      if($db->subject_entry($conn,$subName,$teacher,$field,$semester)){
      echo "Succesfully Saved";
      }
      else{
        echo "unable to Save.";
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
           <select  class="form-control" required id="teacher" name="subject">
           <option>Select subject</option>
           <option >C++</option>
           <option >Java</option>
           <option >MP</option>
           <option >OOP</option>
           <option >Others</option>
           </select>
          </div>
 

          <div class="form-group">
          <label for="field" >Field</label>
           <select  class="form-control" required id="field" name="field">
           <option>Select field</option>
           <option >BSCS</option>
           <option >BSSC</option>
           <option >MCS</option> 
           <option >Ms</option>
           <option >P.HD</option>
           </select>
          </div>


         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">


          <div class="form-group">
            <label for="semester" >Semester </label>
           <select  class="form-control" required id="semester" name="semester">
           <option>Select semester</option>
           <option >1st</option>
           <option >2nd</option>
           <option >3rd</option> 
           <option >4th</option>
           <option >5th</option>
           <option >6th</option> 
           <option >7th</option>
           <option >8th</option>
           </select>
          </div>


          <div class="form-group">
          <label for="teacher" >Teacher Name</label>
           <select  class="form-control" required id="teacher" name="teacher">
           <option>Select teacher</option>
           <option >Dr.Zubair</option>
           <option >Sir javed</option>
           <option >Miss Sadia Khattak</option>
           <option >Miss Rabeal Zahra</option>
           <option >Others</option>
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
