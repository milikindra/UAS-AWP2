<?php
	class M_login extends CI_Model{
		public function loginUser($username,$password){
			$this -> db -> select ('username, password');
			$this -> db -> from ('user');
			$this -> db -> where ('username', $username);
			$this -> db -> where ('password', $password);
			$this -> db -> limit (1);
			
			$query = $this ->db ->get();
			
			if($query -> num_rows() ==1)
			{	
				return $query ->result();
			} else 
			{
				return false;
			}
		
		}
	}
?>