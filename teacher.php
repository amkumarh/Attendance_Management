
<?php
 $pagetitle="Teacher Records";
 include "header.php"; ?>
  <?php $db = new db(); ?>


<div class="container">
	<?php 
		if(isset($_GET['teacher_id'])){
       $t_id = $_GET['teacher_id'];

       if($db->delete_teacher_record($conn,'teacher_table',$t_id)){
       echo "Record was Deleted";
            }
               } ?>

              <div class="row">
                        <div class="text-center">
                          <h1>Teacher Records</h1>
                        </div>
                </div>
                <p><a href="teacher_entry.php">Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                  
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>DOB</th>
                      <th>Gender</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Degree</th>
                      <th>Salary</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
     <tbody>
          <?php        
            $veiw = $db->get_all_teacher($conn,'teacher_table',10);
            foreach ($veiw as $post) {
            $teacher_id = $post['teacher_id'];
  
          echo '<tr>';

                     
            echo '<td>'. $post['first_name'] . '</td>';
            echo '<td>'. $post['last_name'] . '</td>';
            echo '<td>'. $post['dob'] . '</td>';
            echo '<td>'. $post['gender'] . '</td>';
            echo '<td>'. $post['email'] . '</td>';
            echo '<td>'. $post['phone'] . '</td>';
            echo '<td>'. $post['degree'] . '</td>';
            echo '<td>'. $post['salary'] . '</td>';
            echo '<td>'. $post['address'] . '</td>';
            
            echo '<td width=250>';
            echo "<div class='ui mini buttons'>";
            echo '<a href="teacher_update.php?teacher_id='.$post['teacher_id'].'">Update</a>';
            echo "<div class='or'></div>";    
            echo '<a href="teacher.php?teacher_id='.$post['teacher_id'].'">Delete</a>';
            echo "</div>";
            echo '</td>';    
           echo '</tr>';  
            }
           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->
            </div><!--row-->   
           </div><!--container-->
