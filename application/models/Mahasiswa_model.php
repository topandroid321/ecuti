<?php 
	class Mahasiswa_model extends CI_Model
	{	
		private $table = 'mahasiswa';

		function __construct()
		{
			parent::__construct();
		}
		
		function insert($data)
		{
			$this->db->insert($this->table, $data);
		}

		function select_all()
		{
			$this->db->select('*');
			$this->db->from($this->table);
			return $this->db->get();
		}

		function select_by_id($id)
		{
			$this->db->select('*');
			$this->db->from($this->table);
			$this->db->where('id', $id);
			return $this->db->get();
		}

		function update($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update($this->table, $data);
		}

		function delete($id)
		{
			$this->db->where('id', $id);
			$this->db->delete($this->table);
		}
		
		//function yang digunakan oleh paginationsample
		function select_all_paging($limit=array())
		{
			$this->db->select('*');
			$this->db->from($this->table);
			if ($limit != NULL) {
				# code...
				$this->db->limit($limit['perpage'], $limit['offset']);
				return $this->db->get();
			}
		}
	}
 ?>