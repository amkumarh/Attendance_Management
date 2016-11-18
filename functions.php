   <?php 
      $conn = "";

        $conn = new PDO('mysql:host=localhost;dbname=attendance_db;','root','');




     Class db{
     	function get_all_subject($conn,$tbl){


				$sql = "SELECT * FROM {$tbl} ORDER BY  subject_name";
					$cmd = $conn->prepare( $sql );
					$cmd->execute();
					return $cmd->fetchAll();


	      }
	      	function subject_entry($conn,$sbnm,$credit,$teacher,$field){

		
		$sql = "INSERT INTO subject_tbl SET subject_name=?, credit = ?, teacher_name = ?, field = ?";

		$entry = $conn->prepare($sql);
		$entry->bindValue(1, $sbnm);
		$entry->bindValue(4, $credit);
		$entry->bindValue(2, $teacher);
		$entry->bindValue(3, $field);
		if($entry->execute())
		{
			return "Successfully saved.";
			die();
		}
		else{
			return "Unable to save ";
		}

	}

 function teacher_entry($conn,$fnm,$lnm,$dob,$gender,$ml,$course){
		
		$sql = "INSERT INTO teacher_tbl SET first_name = ?, last_name = ?, dob = ?, gender = ?,ml = ?,course = ?";$entry = $conn->prepare($sql);$entry->bindValue(1, $fnm);$entry->bindValue(2, $lnm);$entry->bindValue(3, $dob);$entry->bindValue(4, $gender);$entry->bindValue(5, $ml);$entry->bindValue(6, $course);if($entry->execute()){return "Successfully registered.";die();}else{return "Unable to register! y again please.";}
	}
	function get_all_teacher($conn,$tbl){
				$sql = "SELECT * FROM {$tbl} ORDER BY teacher_id";
					$cmd = $conn->prepare( $sql );
					$cmd->execute();
					return $cmd->fetchAll();
	      }

	 	function get_single_teacher($conn,$tbl,$id){$sql = "SELECT * FROM {$tbl} WHERE teacher_id = {$id}";$cmd = $conn->prepare( $sql );$cmd->execute();return $cmd->fetchAll();}     

    function delete_teacher_record($conn,$tbl,$t_id){
    		$sql="DELETE FROM {$tbl} WHERE teacher_id = {$t_id}";
    		$cmd=$conn->prepare($sql);
    		$cmd->execute();


    } 

	function update_teacher_record($conn,$fnm,$lnm,$dob,$gender,$ml,$course,$id){

		
		$sql = "UPDATE  teacher_tbl SET first_name = ?, last_name = ?, dob = ?, gender = ?, ml = ?, course = ? WHERE teacher_id = ?";
		$cmd = $conn->prepare($sql);
		$cmd->bindParam(1, $fnm);
		$cmd->bindParam(2, $lnm);
		$cmd->bindParam(3, $dob);
		$cmd->bindParam(4, $gender);
		$cmd->bindParam(5, $ml);
		$cmd->bindParam(6, $course);
		$cmd->bindParam(7, $id);
		if($cmd->execute()){
			return "Record was Updated.";
			die();
		}else{
			 return "Unable to Update Record";
			
		}

	}



function get_all_std($conn,$tbl){
				$sql = "SELECT * FROM {$tbl} ORDER BY std_roll_no";
					$cmd = $conn->prepare( $sql );
					$cmd->execute();
					return $cmd->fetchAll();
	      }


function get_single_std($conn,$tbl,$id)
	{
			$sql = "SELECT * FROM {$tbl} WHERE std_roll_no = {$id}";$cmd = $conn->prepare($sql);	$cmd->execute();return $cmd->fetchAll();

	}

function delete_std($conn,$tbl,$id){
				$sql = "DELETE  FROM {$tbl} WHERE std_roll_no={$id}";$cmd = $conn->prepare( $sql );$cmd->execute();
				

	}
	function update_std($conn,$snm,$dob,$gender,$ml,$program,$id){

		
		$sql = "UPDATE student_tbl SET student_name = ?, dob = ?, gender = ?, ml = ?, program = ? WHERE std_roll_no = ?";$cmd = $conn->prepare($sql);$cmd->bindParam(1, $snm);$cmd->bindParam(2, $dob);$cmd->bindParam(3, $gender);$cmd->bindParam(4, $ml);$cmd->bindParam(5, $program);$cmd->bindParam(6, $id);if($cmd->execute()){return "Record was Updated.";die();}else{return "Unable to Update Record";}
	}






	
 	}