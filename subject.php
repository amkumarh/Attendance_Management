
  <?php
  $pagetitle="Subjects Information";
  // include "header2.php";
  include "header.php"; ?>
  <?php $db = new db(); ?>
  
<div class="container">
              <div class="row">
                        <div class="text-center">
                          <h1>Subjects's Details</h1>
                        </div>
                </div>
            
                <p><a href="subject_entry.php">Insert</a></p>
                <div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                     <!--  <th>Std Id</th> -->
                      <th>subject Name</th>
                      <th>credit</th>
                      <th>teacher name</th>
                      <th>field</th>
                    </tr>
                  </thead>
     <tbody>
          <?php        
            $view = $db->get_all_subject($conn,'subject_table');
            foreach ($view as $post) {
            //$std_id = $post['std_roll_no'];
  
          echo '<tr>';

            // echo '<td>'. $post['student_id'] . '</td>';          
            echo '<td>'. $post['subject_name'] . '</td>';
            echo '<td>'. $post['credit'] . '</td>';
            echo '<td>'. $post['teacher_name'] . '</td>';
            echo '<td>'. $post['field'] . '</td>';
            //echo '<td>'. $post['program'] . '</td>';
    
          
          echo '</tr>';
            
            }

           ?>
      </tbody>     
            </table>
            </div><!--table-responsive-->   
           </div><!--container-->