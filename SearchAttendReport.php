<?php
  $pagetitle="student Report";
  include "header.php"; ?>
  <div class="container">
              <div class="row">
                        <div class="text-center">
                          <h1>Individual Searching</h1>
                        </div>
                </div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("config.php");
?>
    <div class="form-container">

    <form method="post" action="Search_Rpt.php" role="form" class="search-form" style="width: 70%">
    <div class="container">
        <!-- <div class="row"> -->
         <div class="col-lg-8">
          <div class="form-group">

           <label for="student" >Student Name </label>
          <?php
          $qs=mysql_query("select * from student_table" );	
          echo "<select name='name' class='form-control' >";			

          while($stid=mysql_fetch_row($qs))
          {				
           echo"<option value=$stid[1] >$stid[1] </option>";
           }
          echo "</select>";
          ?>
         </div>

        
  
          <div><br>
          <button type="submit"  value="Search" name="search">Search</button>
          </div>
          </div>

          </form>
          </div> <!--form-container--> 
          </div><!--container--> 