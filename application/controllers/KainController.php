<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KainController extends CI_Controller {

	public function index()
	{

		$nm_kain = $this->input->post('nm_kain');
		$id_kain = $this->input->post('id_kain');
		$konstruksi = $this->input->post('konstruksi');
		$pick_tenun = $this->input->post('pick_tenun');
		$total_end = $this->input->post('total_end');
		$lebar_sisir = $this->input->post('lebar_sisir');

		$jb_lusi = $this->input->post('jb_lusi');
		$jb_lusi2 = $this->input->post('jb_lusi2');
		$jb_lusi3 = $this->input->post('jb_lusi3');

		$tpm_lusi = $this->input->post('tpm_lusi');
		$tpm_lusi2 = $this->input->post('tpm_lusi2');
		$tpm_lusi3 = $this->input->post('tpm_lusi3');

		$b_lusi = $this->input->post('b_lusi');
		$b_lusi2 = $this->input->post('b_lusi2');
		$b_lusi3 = $this->input->post('b_lusi3');

		$d_lusi = $this->input->post('d_lusi');
		$d_lusi2 = $this->input->post('d_lusi2');
		$d_lusi3 = $this->input->post('d_lusi3');

		$t_lusi = $this->input->post('t_lusi');
		$t_lusi2 = $this->input->post('t_lusi2');
		$t_lusi3 = $this->input->post('t_lusi3');

		$s_lusi = $this->input->post('s_lusi');
		$s_lusi2 = $this->input->post('s_lusi2');
		$s_lusi3 = $this->input->post('s_lusi3');
//------------------------------------------------------------------------------------------
		$jb_pakan = $this->input->post('jb_pakan');
		$jb_pakan2 = $this->input->post('jb_pakan2');
		$jb_pakan3 = $this->input->post('jb_pakan3');

		$tpm_pakan = $this->input->post('tpm_pakan');
		$tpm_pakan2 = $this->input->post('tpm_pakan2');
		$tpm_pakan3 = $this->input->post('tpm_pakan3');

		$b_pakan = $this->input->post('b_pakan');
		$b_pakan2 = $this->input->post('b_pakan2');
		$b_pakan3 = $this->input->post('b_pakan3');

		$d_pakan = $this->input->post('d_pakan');
		$d_pakan2 = $this->input->post('d_pakan2');
		$d_pakan3 = $this->input->post('d_pakan3');

		$t_pakan = $this->input->post('t_pakan');
		$t_pakan2 = $this->input->post('t_pakan2');
		$t_pakan3 = $this->input->post('t_pakan3');

		$s_pakan = $this->input->post('s_pakan');
		$s_pakan2 = $this->input->post('s_pakan2');
		$s_pakan3 = $this->input->post('s_pakan3');

		$jml = $this->input->post('jml');
		$jmp = $this->input->post('jmp');

		//echo $jml."<br>".$jmp; 
		//echo $t_lusi."<br>".$s_lusi;
		//echo $t_pakan."<br>".$s_pakan;
		if($jml == 1 && $jmp == 1){
			echo 'insert 2x';
			$data = array(
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi ,
					      'benang' => $b_lusi ,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi ,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   )
					);
			$query = $this->db->insert_batch('master', $data);
			if($query){
				echo "insert Success";
			}else{
				echo "Insert Failed";
			}
		}
		elseif ($jml == 1 && $jmp == 2) {
			echo "insert 3x lusi 1 pakan 2";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   )
					);
			$query = $this->db->insert_batch('master', $data);
			if($query){
				echo "insert Success";
			}else{
				echo "Insert Failed";
			}
		}
		elseif ($jml == 2 && $jmp == 1) {
			echo "insert 3x lusi 2 pakan 1";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   )
					);
			$query = $this->db->insert_batch('master', $data);
			if($query){
				echo "insert Success";
			}else{
				echo "Insert Failed";
			}
		}
		elseif ($jml == 1 && $jmp == 3) {
			echo "insert 4x lusi 1 pakan 3";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan3,
					      'tpm' => $tpm_pakan3,
					      'benang' => $b_pakan3,
					      'denier' => $d_pakan3,
					      'twisting' => $t_pakan3,
					      'sizing' => $s_pakan3
					   )
					);
			$query = $this->db->insert_batch('master', $data);
			if($query){
				echo "insert Success";
			}else{
				echo "Insert Failed";
			}
		}
		elseif ($jml == 3 && $jmp == 1) {
			echo "insert 4x lusi 3 pakan 1";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi3,
					      'tpm' => $tpm_lusi3,
					      'benang' => $b_lusi3,
					      'denier' => $d_lusi3,
					      'twisting' => $t_lusi3,
					      'sizing' => $s_lusi3
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   )
					);   
				$query = $this->db->insert_batch('master', $data);
				if($query){
					echo "insert Success";
				}else{
					echo "Insert Failed";
				}
		}
		elseif ($jml == 2 && $jmp == 2) {
			echo "insert 4x lusi 2 pakan 2";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   )
					);   
					   $query = $this->db->insert_batch('master', $data);
					   if($query){
							echo "insert Success";
						}else{
							echo "Insert Failed";
						}
		}
		elseif ($jml == 3 && $jmp == 2) {
			echo "insert 5x lusi 3 pakan 2";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi,
					      'benang' => $b_lusi,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi3,
					      'tpm' => $tpm_lusi3,
					      'benang' => $b_lusi3,
					      'denier' => $d_lusi3,
					      'twisting' => $t_lusi3,
					      'sizing' => $s_lusi3
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain,
					      'id_kain' => $id_kain,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun,
					      'total_end' => $total_end,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   )
					);   
					   $query = $this->db->insert_batch('master', $data);
					   if($query){
							echo "insert Success";
						}else{
							echo "Insert Failed";
						}
		}
		elseif ($jml == 2 && $jmp == 3) {
			echo "insert 5x lusi 2 pakan 3";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi ,
					      'benang' => $b_lusi ,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi ,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan3,
					      'tpm' => $tpm_pakan3,
					      'benang' => $b_pakan3,
					      'denier' => $d_pakan3,
					      'twisting' => $t_pakan3,
					      'sizing' => $s_pakan3
					   )
					);		
				$query = $this->db->insert_batch('master', $data);
				if($query){
					echo "insert Success";
				}else{
					echo "Insert Failed";
				}
		}
		elseif ($jml == 3 && $jmp == 3) {
			echo "insert 6x lusi 3 pakan 3";
			$data = array(
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi,
					      'tpm' => $tpm_lusi ,
					      'benang' => $b_lusi ,
					      'denier' => $d_lusi,
					      'twisting' => $t_lusi ,
					      'sizing' => $s_lusi
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi2,
					      'tpm' => $tpm_lusi2,
					      'benang' => $b_lusi2,
					      'denier' => $d_lusi2,
					      'twisting' => $t_lusi2,
					      'sizing' => $s_lusi2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_lusi3,
					      'tpm' => $tpm_lusi3,
					      'benang' => $b_lusi3,
					      'denier' => $d_lusi3,
					      'twisting' => $t_lusi3,
					      'sizing' => $s_lusi3
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan,
					      'tpm' => $tpm_pakan,
					      'benang' => $b_pakan,
					      'denier' => $d_pakan,
					      'twisting' => $t_pakan,
					      'sizing' => $s_pakan
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan2,
					      'tpm' => $tpm_pakan2,
					      'benang' => $b_pakan2,
					      'denier' => $d_pakan2,
					      'twisting' => $t_pakan2,
					      'sizing' => $s_pakan2
					   ),
					   array(
					      'nama_kain' => $nm_kain ,
					      'id_kain' => $id_kain ,
					      'konstruksi' => $konstruksi,
					      'pick_tenun' => $pick_tenun ,
					      'total_end' => $total_end ,
					      'lebar_sisir' => $lebar_sisir,
					      'jenis_benang' => $jb_pakan3,
					      'tpm' => $tpm_pakan3,
					      'benang' => $b_pakan3,
					      'denier' => $d_pakan3,
					      'twisting' => $t_pakan3,
					      'sizing' => $s_pakan3
					   )
					);   
			
			   $query = $this->db->insert_batch('master', $data);
			   if($query){
					echo "insert Success";
				}else{
					echo "Insert Failed";
				}
		}

		$this->db->close();
	}
}
