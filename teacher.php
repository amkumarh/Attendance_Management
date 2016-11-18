
  <?php
  $pagetitle="Teachers' data";
  // include "header2.php";
  include "header.php"; ?>
  <?php $db = new db(); ?>
  
<div class="container">
<?php
          if (isset($_GET['teacher_id'])) {
            $id = $_GET['teacher_id'];

            if($db->delete_teacher_record($conn,'teacher_table',$id)){
              echo "Record was Deleted";
            }
          }
?>
            
              <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                          <h1>Teacher Records</h1>
                        </div>
                    </div>
                </div>
                <p><a href="teacher_entry.php">Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                     <!--  <th>Std Id</th> -->
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Date of Birth</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Course</th>
                    </tr>
                  </thead>
     <tbody>
          <?php        
            $view = $db->get_all_teacher($conn,'teacher_table');
            foreach ($view as $post) {
            $teacher_id = $post['teacher_id'];
  
          echo '<tr>';

            // echo '<td>'. $post['student_id'] . '</td>';          
            echo '<td>'. $post['first_name'] . '</td>';
            echo '<td>'. $post['last_name'] . '</td>';
            echo '<td>'. $post['dob'] . '</td>';
            echo '<td>'. $post['gender'] . '</td>';
            echo '<td>'. $post['email'] . '</td>';
            echo '<td>'. $post['course'] . '</td>';
            
            echo '<td width=250>';
            echo "<div class='ui mini buttons'>";
            echo '<a  href="teacher_update.php?teacher_id='.$post['teacher_id'].'">Update</a>';
            echo "<div class='or'></div>";
            echo '<a  href="teacher.php?teacher_id='.$post['teacher_id'].'">Delete</a>';
            echo "</div>";
            echo '</td>';    
          
          echo '</tr>';
            
            }

           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->   
           </div><!--container-->