<?php

class fruitModel extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function getFruits()
	{
			$query = $this->db->get('fruit_table');
			return $query->result();
	}

	public function getOne($id){
			$query = $this->db->where('id',$id)->get('fruit_table');
			return $query->result();
	}

	public function update($ob)
	{
		$this->db->where('id',$ob["id"])->update('fruit_table', array('name' => $ob['name']));
	}

	public function add($obj){
		 $this->db->insert('fruit_table', $obj);
	}
	
	public function delete($id){
		$this->db->where('id',$id)->delete('fruit_table');
	}

}
?>
