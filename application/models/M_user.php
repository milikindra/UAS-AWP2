<?php
	class M_user extends CI_Model{
		public function tabelUser(){
			$query = "SELECT * FROM user";
			
			$result = $this->db->query($query);
			
			return $result->result();
		}
		
		public function deleteData($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		
		public function editData($where,$table){		
			return $this->db->get_where($table,$where);
		}
		
		function updateData($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	
		public function entryData($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>