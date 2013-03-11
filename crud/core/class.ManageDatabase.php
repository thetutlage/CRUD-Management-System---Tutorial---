<?php
	class ManageDatabase{
		public $link;

		function __construct(){
			include_once( 'class.database.php' );
			$conn = new database;
			$this->link = $conn->connect();
			return $this->link;
		}
		
		function getData($table_name,$id=null){
			if(isset($id)){
				$query = $this->link->query("SELECT * FROM $table_name WHERE id = '$id' ORDER BY id ASC");
			}
			else
			{
				$query = $this->link->query("SELECT * FROM $table_name ORDER BY id ASC");
			}
			$rowCount = $query->rowCount();
			if($rowCount >= 1)
			{
				$query->setFetchMode(PDO::FETCH_ASSOC);
				$result = $query->fetchAll();
			}
			else
			{
				$result = 0;
			}
			return $result;
		}
		
		function listFields($table_name){
			$query = $this->link->query("DESCRIBE $table_name");
			$result = $query->fetchAll();
			return $result;
		}
		
		function editData($table_name,$param,$id){
			foreach($param as $key => $value){
				$query = $this->link->query("UPDATE $table_name SET $key = '$value' WHERE id = '$id'");
			}
		}
		
		function deleteData($table_name,$id){
			$query = $this->link->query("DELETE FROM $table_name WHERE id = '$id'");
			$rowCount = $query->rowCount();
			return $rowCount;
		}
		
		function insertData($table_name,$fields_name,$bind_param,$field_values){
			$query = $this->link->prepare("INSERT INTO $table_name ($fields_name) VALUES ($bind_param)");
			$query->execute($field_values);
			$rowCount = $query->rowCount();
			return $rowCount;			
		}
		function listTables(){
			$query = $this->link->query("show tables");
			$result = $query->fetchAll();
			
			return $result;
		}
		
	}
?>