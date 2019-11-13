<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

	public function index()
	{
		$db1 = $this->load->database("default", TRUE);
		$db2 = $this->load->database("local", TRUE);

		$query = $db2->query("SELECT m.NAMA as nama_kain,m.KET5 AS id_kain,m.KET1 AS konstruksi,m.NUM3 AS pick_tenun,m.NUM9 AS total_end,m.NUM4 AS lebar_sisir,smp.NUM2 AS tpm,sjd.NAMA AS jenis_benang,m1.NAMA AS benang,m1.KET1 AS denier,sjd3.NAMA AS twisting,sjd2.NAMA AS sizing,m.CPK FROM wms_2009..s_material AS m LEFT JOIN WMS_2009..S_MATERIAL_PENYUSUN smp ON smp.CPKS_MATERIAL = m.CPK LEFT JOIN WMS_2009..S_MATERIAL m1 ON m1.CPK = smp.CPKS_MATERIAL1 LEFT JOIN WMS_2009..S_JENIS_DATA sjd ON sjd.CPK = smp.CPKS_JENIS_DATA1 LEFT JOIN WMS_2009..S_JENIS_DATA sjd2 ON sjd2.CPK = smp.CPKS_JENIS_DATA4 LEFT JOIN WMS_2009..S_JENIS_DATA sjd3 ON sjd3.CPK = smp.CPKS_JENIS_DATA5 WHERE m.CPKS_JENIS_DATA1 = '3ea7143f-a5dc-4ba5-a4b6-fffc1a79955b' AND m.KODE <> '' ORDER BY nama_kain, jenis_benang");
		/*$query = $this->db->query("SELECT m.NAMA as nama_kain,m.KET5 AS id_kain,m.KET1 AS konstruksi,m.NUM3 AS pick_tenun,m.NUM9 AS total_end,m.NUM4 AS lebar_sisir,smp.NUM2 AS tpm,sjd.NAMA AS jenis_benang,m1.NAMA AS benang,m1.KET1 AS denier,sjd3.NAMA AS twisting,sjd2.NAMA AS sizing,m.CPK FROM wms_2009..s_material AS m LEFT JOIN WMS_2009..S_MATERIAL_PENYUSUN smp ON smp.CPKS_MATERIAL = m.CPK LEFT JOIN WMS_2009..S_MATERIAL m1 ON m1.CPK = smp.CPKS_MATERIAL1 LEFT JOIN WMS_2009..S_JENIS_DATA sjd ON sjd.CPK = smp.CPKS_JENIS_DATA1 LEFT JOIN WMS_2009..S_JENIS_DATA sjd2 ON sjd2.CPK = smp.CPKS_JENIS_DATA4 LEFT JOIN WMS_2009..S_JENIS_DATA sjd3 ON sjd3.CPK = smp.CPKS_JENIS_DATA5 WHERE m.CPKS_JENIS_DATA1 = '3ea7143f-a5dc-4ba5-a4b6-fffc1a79955b' AND m.KODE <> '' ORDER BY nama_kain, jenis_benang");
		*/
		foreach ($query->result() as $row)
		{
			$nama_kain = $row->nama_kain;
			$id_kain = $row->id_kain;
			$konstruksi = $row->konstruksi;
			$pick_tenun = $row->pick_tenun;
			$total_end = $row->total_end;
			$lebar_sisir = $row->lebar_sisir;
			$tpm = $row->tpm;
			$jenis_benang = $row->jenis_benang;
			$benang = $row->benang;
			$denier = $row->denier;
			$twisting = $row->twisting;
			$sizing = $row->sizing;

			$cek = $this->db->query("
				select * from master where id_kain = '$id_kain' and jenis_benang = '$jenis_benang' and benang = '$benang'
			");

			$rc = $cek->num_rows();

			//hbu has been update (data telah d update)
			if($rc < 1){
				//insert data baru
				//echo 'insert data baru <br>';
				$update_data = $this->db->query("
					INSERT INTO master (nama_kain,id_kain,konstruksi,pick_tenun,total_end,lebar_sisir,tpm,jenis_benang,benang,
					denier,twisting,sizing) 
					VALUES ('$nama_kain','$id_kain','$konstruksi','$pick_tenun','$total_end','$lebar_sisir','$tpm','$jenis_benang','$benang',
					'$denier','$twisting','$sizing')
				");

			}else{

				$hbu = $cek->row()->hbu;

				if($hbu == 1){
					//echo 'jangan di replace data sudah di update di local <br>';
					//jangan update
				}else{
					//echo 'update data ! <br>';
					//update
					$update_data = $this->db->query("
						UPDATE master SET nama_kain = '$nama_kain', id_kain = '$id_kain', konstruksi = '$konstruksi', pick_tenun = '$pick_tenun',
						total_end = '$total_end', lebar_sisir = '$lebar_sisir', tpm = '$tpm', jenis_benang = '$jenis_benang', benang = '$benang', 
						denier = '$denier', twisting = '$twisting', sizing = '$sizing'
						WHERE id_kain = '$id_kain' and jenis_benang = '$jenis_benang' and benang = '$benang'
					");
				}

				if($update_data){

					$info = '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Info !</strong> Proses Sinkronisasi Selesai !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';

					$this->session->set_flashdata('info', $info);
					
					redirect("Dashboard/"); 

				}else{

					$info = '
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Info !</strong> Tidak Ada Data Baru !
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';

					$this->session->set_flashdata('info', $info);

					redirect("Dashboard/"); 

				}
			}


				/*$data = array(
				'nama_kain' => $nama_kain,
				'id_kain' => $id_kain,
				'konstruksi' => $konstruksi,
				'pick_tenun' => $pick_tenun,
				'total_end' => $total_end,
				'lebar_sisir' => $lebar_sisir,
				'tpm' => $tpm,
				'jenis_benang' => $jenis_benang,
				'benang' => $benang,
				'denier' => $denier,
				'twisting' => $twisting,
				'sizing' => $sizing
				);

				$this->legacy_db = $this->load->database('local', true);
				$this->legacy_db->insert('master', $data);
				*/
		}

		//$this->load->view('template/header');
		//$this->load->view('vhome');
		// fungsi get dari dotsys insert ke local
	}
}
