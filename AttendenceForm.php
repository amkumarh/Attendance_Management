<?php  $pagetitle="AttendenceForm";
  include "header.php"; ?>
 <div class="container">
              <div class="row">
                        <div class="text-center">
                          <h1>Attendance Form</h1>
                        </div>
                </div>  
<?php  
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");?>
<div class="form-container">
    <form method="post" action="saveattendence.php" role="form">
     <!-- <div class="container"> -->
      <div class="form-group">
<?php
      $qs=mysql_query("select * from student_table");
      //echo "$qs";
      ?>
      <?php	
      echo "<select class='form-control' name='sttid' >";			
      while($stid=mysql_fetch_row($qs))
      {
        //echo "";				
       echo"
       <option value=$stid[0]> $stid[1] </option>";
       }
      echo "</select>"."<br>";
      ?>
      </div>

      
       
      <?php
      /*
      $qs1=mysql_query("select * from subject_table");	
      echo "<select class='form-control' name='subjid'>";			
      while($subjid=mysql_fetch_row($qs1))
      {				
       echo"
       <option value=$subjid[0]>$subjid[1] </option>";
       }
      echo "</select>";
      */
      ?>
      
      
      <input type="radio" name="present" value="P" />Present
      <input type="radio" name="present" value="A" />Absent<br></br>
      <button type="submit" name="save" value="Save" class="btn btn-success btn-sm">Save</button>
   
 </form>
 </div> <!--form-container-->
</div><!--container-->