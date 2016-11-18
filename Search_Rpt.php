<?php
$pagetitle="Search Report";
include "header.php"; 
error_reporting(E_ALL ^ E_DEPRECATED);
$name=$_POST['name'];
//$session=$_POST['session'];
//$date=$_POST['date'];
//echo "$name";


include("config.php");

?>
<div class="container">
              <div class="row">
                        <div class="text-center">
                          <h1>Individual Searching</h1>
                        </div>
                </div>  
	<div class="table-responsive">
                 <table class="ui celled table table table-hover">
                  <thead>
                    <tr>
                  
                      <th>StudentRollNumber</th>
                      <th>StudentName</th>
                      <th>Date</th>
                      <th>Attendance</th>
                      
                    </tr>
                  </thead>
     <tbody>
          <?php        
            //$query=mysql_query("Select (Select count(*) from tbl_attendence Where attendance='P')/ count(studentrollNumber) *100 as Percentage from tbl_attendance ");
            //echo "$query";
			$query3=mysql_query("Select * from tbl_attendance T 
inner join student_table st on st.std_roll_no=T.StudentRollNumber
Where st.Student_Name like '%$name%' ");
      //echo "$query3";
      /*
      if(mysql_fetch_row($query3))
        echo "string";
      else
        echo "sdsfdsdf";
      */    
while($row=mysql_fetch_row($query3))
{
  //echo '<td>'.$row[1].'</td>';
  //echo "string";
  echo"<tr>";
           echo '<td>'. $row[1] . '</td>';
            echo '<td>'. $row[6] . '</td>';
			     echo '<td>'. $row[4] . '</td>';
           echo '<td>'. $row[3] . '</td>';
           /*
           $query=mysql_query("Select  (select count(*) from tbl_attendance where Attendance='P' and studentRollNumber='$row[1]' and subjectId='$row[2]')/(Select count(attendance) from tbl_attendance where studentRollNumber='$row[1]' and subjectId='$row[2]')*100 as per from tbl_attendance where studentrollNumber='$row[1]' and subjectid='$row[2]' group by per asc ");
		   
		while ($row2=mysql_fetch_row($query))
		   {
			   echo '<td>'. $row2[0] . '%</td>';
			   }
         */
			   echo"</tr>";
}
           ?>
       </tbody>     
            </table>
            </div><!--table-responsive-->
            </div><!--row-->  
            </div><!--container-->    




