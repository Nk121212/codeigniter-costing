<?php
class M_data extends CI_Model{

	function data($number,$offset){

		$cari = $this->input->post('cari');
		
		if($cari == 0){
			$this->db->order_by("master.id_kain","asc");
			return $query = $this->db->get('master',$number,$offset)->result();
		}else{
			$query = $this->db->get_where('master', array('nama_kain' => $cari), $number, $offset);
			return $query->result();
		}
				
	}
 
	function jumlah_data(){
		$this->db = $this->load->database('local', true);
		return $this->db->get('master')->num_rows();
	}

	function delete_id($id){
		$this->db = $this->load->database('local', true);
	    $this->db->where("id",$id);
	    $this->db->delete("master");
	    return $this->db->affected_rows();
	}

	public function insertuser($user){
		$this->db = $this->load->database('local', true);
		return $this->db->insert('master', $user);
	}

	public function getUser($id){
		$this->db = $this->load->database('local', true);
		$query = $this->db->get_where('master',array('id'=>$id));
		return $query->row_array();
		
		$cek = $query->row_array();
		echo $cek;
	}

	public function updateuser($user, $id){
		$this->db = $this->load->database('local', true);
		$this->db->where('master.id', $id);
		return $this->db->update('master', $user);
	}

	public function deleteuser($id){
		$this->db = $this->load->database('local', true);
		$this->db->where('master.id', $id);
		return $this->db->delete('master');
	}

}
