<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class MasterController extends CI_Controller {

	public function index()
	{
		$id = $this->input->post('id');
		$jb = $this->input->post('jb');
		$benang = $this->input->post('benang');
		$tpm = $this->input->post('tpm');
		$denier= $this->input->post('denier');
		$twisting = $this->input->post('twisting');
		$sizing = $this->input->post('sizing');

		//echo $id;
		$data = array(
			'tpm' => $tpm,
			'benang' => $benang,
			'denier' => $denier,
			'twisting' => $twisting,
			'sizing' => $sizing,
		);

		$this->db->where('id', $id);
		$query = $this->db->update('master',$data);
		if(!$query){
			echo 'Update Failed !';
		}else{
			echo 'Update Success !';
		}

		$this->db->close();
		
	}
	function update_konstruksi(){
		$id_kain = $this->input->post("id_kain");
		$tot_end = $this->input->post("te");
		$pick_tenun = $this->input->post("pt");
		$lebar_sisir = $this->input->post("ls");
		$konstruksi = $this->input->post("kons");

		//echo $id;
		$data = array(
			'konstruksi' => $konstruksi,
			'pick_tenun' => $pick_tenun,
			'total_end' => $tot_end,
			'lebar_sisir' => $lebar_sisir
		);

		$this->db->where('id_kain', $id_kain);
		$query = $this->db->update('master',$data);
		if(!$query){
			echo 'Update Failed !'.$id_kain;
		}else{
			echo 'Update Success !'.$id_kain;
		}

		$this->db->close();

	}
}