
<?php
 $pagetitle="Subjects Information";
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
                      <th>Subject No</th>
                      <th>Subject Name</th>
                      <th>Teacher Name</th>
                      <th>Field</th>
                      <th>Semester</th>
                    </tr>
                  </thead>
      <tbody>
          <?php        
            $veiw = $db->get_all_subject($conn,'subject_table',10);
            foreach ($veiw as $post) {
            $sub_no = $post['subject_no'];
  
            echo '<tr>';        
            echo '<td>'. $post['subject_no'] . '</td>';
            echo '<td>'. $post['subject_name'] . '</td>';
            echo '<td>'. $post['teacher_name'] . '</td>';
            echo '<td>'. $post['field'] . '</td>';
            echo '<td>'. $post['semester'] . '</td>';
            }
           ?>
      </tbody>     
             </table>



</div> <!--table-responsive-->
</div><!--container-->
