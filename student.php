
  <?php
  $pagetitle="student data";
  // include "header2.php";
  include "header.php"; ?>
  <?php $db = new db(); ?>
  
  
<div class="container">
<?php
          if (isset($_GET['std_roll_no'])) {
            $id = $_GET['std_roll_no'];

            if($db->delete_std($conn,'student_table',$id)){
              echo "Record was Deleted";
            }
          }
?>
            
              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px; background-color: #ffffff" >
                        <div class="text-center">
                          <h1>Student Records</h1>
                        </div>
                    </div>
                </div>
                <p><a href="student_entry.php">Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                     <!--  <th>Std Id</th> -->
                      <th>Student Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Program</th>
                    </tr>
                  </thead>
     <tbody>
          <?php        
            $view = $db->get_all_std($conn,'student_table');
            foreach ($view as $post) {
            $std_id = $post['std_roll_no'];
  
          echo '<tr>';

            // echo '<td>'. $post['student_id'] . '</td>';          
            echo '<td>'. $post['student_name'] . '</td>';
            echo '<td>'. $post['dob'] . '</td>';
            echo '<td>'. $post['gender'] . '</td>';
            echo '<td>'. $post['email'] . '</td>';
            echo '<td>'. $post['program'] . '</td>';
            
            echo '<td width=250>';
            echo "<div class='ui mini buttons'>";
            echo '<a  href="student_update.php?std_roll_no='.$post['std_roll_no'].'">Update</a>';
            echo "<div class='or'></div>";
            echo '<a  href="student.php?std_roll_no='.$post['std_roll_no'].'">Delete</a>';
            echo "</div>";
            echo '</td>';    
          
          echo '</tr>';
            
            }

           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->   
           </div><!--container-->