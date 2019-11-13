<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FillController extends CI_Controller {

	public function index()
	{

		echo "<option>Pilih Greige</option>";

		$query = $this->db->query("SELECT DISTINCT id_kain, nama_kain FROM master ORDER BY nama_kain asc");

		foreach ($query->result() as $row)
		{
			$id_kain = $row->id_kain;
			$nama_kain = $row->nama_kain;
		   	echo "<option value='$id_kain'>$nama_kain</option>";
		}

		$this->db->close();
	}

	function autofill()
	{

		$id = $this->input->post('s_id');
		/*$query = $this->db->query("SELECT master.*,tbl_cost.* FROM master
		left join tbl_cost on tbl_cost.id_kain = master.id_kain where tbl_cost.id_kain = '$id' ORDER BY tbl_cost.tanggal DESC LIMIT 1");
		*/
		$cek_id = $this->db->query("
			select * from tbl_cost where id_kain = '$id'
		");

		if($cek_id->num_rows() < 1){
			$query = $this->db->query("
				select * from master where id_kain = '$id' order by jenis_benang asc
			");

			$rows = $query->num_rows();
			
			$i = 0;
			if($rows < 1){
				
					$SubjectCode[] = array();
					$SubjectCode[$i]['nama_kain']='';
					$SubjectCode[$i]['id_kain']='';
					$SubjectCode[$i]['konstruksi']='';
					$SubjectCode[$i]['pick_tenun']='';
					$SubjectCode[$i]['total_end']='';
					$SubjectCode[$i]['lebar_sisir']='';
					$SubjectCode[$i]['tpm']='';
					$SubjectCode[$i]['jenis_benang']='';
					$SubjectCode[$i]['benang']='';
					$SubjectCode[$i]['denier']='';
					$SubjectCode[$i]['twisting']='';
					$SubjectCode[$i]['sizing']='';
					$SubjectCode[$i]['act_denier']='';
	
				header('Content-Type: application/json');
				echo json_encode ($SubjectCode);
				//echo $id;
			}else{
	
				$i=0;
				foreach ($query->result() as $row)
				{
						$SubjectCode[] = array();
						$SubjectCode[$i]['nama_kain']=$row->nama_kain;
						$SubjectCode[$i]['id_kain']=$row->id_kain;
						$SubjectCode[$i]['konstruksi']=$row->konstruksi;
	
						$rpt = $row->pick_tenun;
						$bltrpt = round($rpt);
						$SubjectCode[$i]['pick_tenun']=$bltrpt;
						
						$rte = $row->total_end;
						$bltrte = round($rte);
						$SubjectCode[$i]['total_end']= $bltrte;
	
	
						$rls = $row->lebar_sisir;
						$bulat = round($rls);
						$SubjectCode[$i]['lebar_sisir']=$bulat;
	
						$SubjectCode[$i]['tpm']=$row->tpm;
						$SubjectCode[$i]['jenis_benang']=$row->jenis_benang;
						$SubjectCode[$i]['benang']=$row->benang;
						
						$den = $row->denier;
						$arr = explode("/", $den, 2);
						$first = $arr[0];
						$str = ltrim($first, '0');
	
						$SubjectCode[$i]['denier']=$str;
						$SubjectCode[$i]['twisting']=$row->twisting;
						$SubjectCode[$i]['sizing']=$row->sizing;
	
						$htpm = $row->tpm;
	
							if ($htpm == '' || is_null($htpm) || $htpm == 0){
								$act_denier = (($str*$htpm)/9000)+$str;
								$SubjectCode[$i]['act_denier']=round($act_denier,4);
							}else{
								$act_denier = (($str*$htpm)/9000)+$str;
								$SubjectCode[$i]['act_denier']=round($act_denier,4);
							} 
	
						$i ++;
				}
				header('Content-Type: application/json');
				echo json_encode ($SubjectCode);
			}

		}else{
			$query = $this->db->query("select master.*,max(tbl_cost.tanggal) as max,
			tbl_cost.ps_lusi, tbl_cost.ps_lusi2,tbl_cost.ps_lusi3,
			tbl_cost.ps_pkn,tbl_cost.ps_pkn2,tbl_cost.ps_pkn3,tbl_cost.pw_lusi,tbl_cost.pw_lusi2,tbl_cost.pw_lusi3,
			tbl_cost.pw_pkn,tbl_cost.pw_pkn2,tbl_cost.pw_pkn3,tbl_cost.hb_lusi,tbl_cost.hb_lusi2,tbl_cost.hb_lusi3,
			tbl_cost.hb_pkn,tbl_cost.hb_pkn2,tbl_cost.hb_pkn3,tbl_cost.hp_pick,tbl_cost.hw_kg,tbl_cost.ht_kg,tbl_cost.hs_kg,
			tbl_cost.ps_kj,tbl_cost.biaya_proses
			FROM master
			left join tbl_cost on tbl_cost.id_kain = master.id_kain 
			where tbl_cost.id_kain = '$id' and tbl_cost.tanggal = 
			(select max(tbl_cost.tanggal) from tbl_cost where id_kain ='$id') group by master.id");

			$rows = $query->num_rows();
			
			$i = 0;
			if($rows < 1){
				
					$SubjectCode[] = array();
					$SubjectCode[$i]['nama_kain']='';
					$SubjectCode[$i]['id_kain']='';
					$SubjectCode[$i]['konstruksi']='';
					$SubjectCode[$i]['pick_tenun']='';
					$SubjectCode[$i]['total_end']='';
					$SubjectCode[$i]['lebar_sisir']='';
					$SubjectCode[$i]['tpm']='';
					$SubjectCode[$i]['jenis_benang']='';
					$SubjectCode[$i]['benang']='';
					$SubjectCode[$i]['denier']='';
					$SubjectCode[$i]['twisting']='';
					$SubjectCode[$i]['sizing']='';
					$SubjectCode[$i]['act_denier']='';
	
				header('Content-Type: application/json');
				echo json_encode ($SubjectCode);
				//echo $id;
			}else{
	
				$i=0;
				foreach ($query->result() as $row)
				{
						$SubjectCode[] = array();
						$SubjectCode[$i]['nama_kain']=$row->nama_kain;
						$SubjectCode[$i]['id_kain']=$row->id_kain;
						$SubjectCode[$i]['konstruksi']=$row->konstruksi;
	
						$rpt = $row->pick_tenun;
						$bltrpt = round($rpt);
						$SubjectCode[$i]['pick_tenun']=$bltrpt;
						
						$rte = $row->total_end;
						$bltrte = round($rte);
						$SubjectCode[$i]['total_end']= $bltrte;
	
	
						$rls = $row->lebar_sisir;
						$bulat = round($rls);
						$SubjectCode[$i]['lebar_sisir']=$bulat;
	
						$SubjectCode[$i]['tpm']=$row->tpm;
						$SubjectCode[$i]['jenis_benang']=$row->jenis_benang;
						$SubjectCode[$i]['benang']=$row->benang;
						
						$den = $row->denier;
						$arr = explode("/", $den, 2);
						$first = $arr[0];
						$str = ltrim($first, '0');
	
						$SubjectCode[$i]['denier']=$str;
						$SubjectCode[$i]['twisting']=$row->twisting;
						$SubjectCode[$i]['sizing']=$row->sizing;
	
						$htpm = $row->tpm;
	
							if ($htpm == '' || is_null($htpm) || $htpm == 0){
								$act_denier = (($str*$htpm)/9000)+$str;
								$SubjectCode[$i]['act_denier']=round($act_denier,4);
							}else{
								$act_denier = (($str*$htpm)/9000)+$str;
								$SubjectCode[$i]['act_denier']=round($act_denier,4);
							} 
						
							$SubjectCode[$i]['ps_lusi']=$row->ps_lusi;
							$SubjectCode[$i]['ps_lusi2']=$row->ps_lusi2;
							$SubjectCode[$i]['ps_lusi3']=$row->ps_lusi3;
							$SubjectCode[$i]['ps_pkn']=$row->ps_pkn;
							$SubjectCode[$i]['ps_pkn2']=$row->ps_pkn2;
							$SubjectCode[$i]['ps_pkn3']=$row->ps_pkn3;
		
							$SubjectCode[$i]['pw_lusi']=$row->pw_lusi;
							$SubjectCode[$i]['pw_lusi2']=$row->pw_lusi2;
							$SubjectCode[$i]['pw_lusi3']=$row->pw_lusi3;
							$SubjectCode[$i]['pw_pkn']=$row->pw_pkn;
							$SubjectCode[$i]['pw_pkn2']=$row->pw_pkn2;
							$SubjectCode[$i]['pw_pkn3']=$row->pw_pkn3;
							
							$SubjectCode[$i]['hb_lusi']=$row->hb_lusi;
							$SubjectCode[$i]['hb_lusi2']=$row->hb_lusi2;
							$SubjectCode[$i]['hb_lusi3']=$row->hb_lusi3;
							$SubjectCode[$i]['hb_pkn']=$row->hb_pkn;
							$SubjectCode[$i]['hb_pkn2']=$row->hb_pkn2;
							$SubjectCode[$i]['hb_pkn3']=$row->hb_pkn3;
		
							$SubjectCode[$i]['hp_pick']=$row->hp_pick;
							$SubjectCode[$i]['hw_kg']=$row->hw_kg;
							$SubjectCode[$i]['ht_kg']=$row->ht_kg;
							$SubjectCode[$i]['hs_kg']=$row->hs_kg;
							$SubjectCode[$i]['ps_kj']=$row->ps_kj;
							$SubjectCode[$i]['biaya_proses']=$row->biaya_proses;
	
						$i ++;
				}
				header('Content-Type: application/json');
				echo json_encode ($SubjectCode);
			}
		}

		$this->db->close();
	}
	function insert(){
		date_default_timezone_set('Asia/Jakarta');
		$tgl = date('Y/m/d');
		$id_kain = $this->input->post('id_kain');
		//baru sini
		$ps_lusi = $this->input->post("ps_lusi");
		$ps_lusi2 = $this->input->post("ps_lusi2");
		$ps_lusi3 = $this->input->post("ps_lusi3");
		$ps_pkn = $this->input->post("ps_pkn");
		$ps_pkn2 = $this->input->post("ps_pkn2");
		$ps_pkn3 = $this->input->post("ps_pkn3");
		$pw_lusi = $this->input->post("pw_lusi");
		$pw_lusi2= $this->input->post("pw_lusi2");
		$pw_lusi3= $this->input->post("pw_lusi3");
		$pw_pkn= $this->input->post("pw_pkn");
		$pw_pkn2= $this->input->post("pw_pkn2");
		$pw_pkn3= $this->input->post("pw_pkn3");
		$hb_lusi= $this->input->post("hb_lusi");
		$hb_lusi2= $this->input->post("hb_lusi2");
		$hb_lusi3= $this->input->post("hb_lusi3");
		$hb_pkn= $this->input->post("hb_pkn");
		$hb_pkn2= $this->input->post("hb_pkn2");
		$hb_pkn3= $this->input->post("hb_pkn3");
		$hrg_pick= $this->input->post("hrg_pick");
		$hw_kg= $this->input->post("hw_kg");
		$ht_kg= $this->input->post("ht_kg");
		$hs_kg= $this->input->post("hs_kg");
		$ps_kj= $this->input->post("ps_kj");
		$bp= $this->input->post("bp");
		//--
		$da_l = $this->input->post('da_l');
		$da_l2 = $this->input->post('da_l2');
		$da_l3 = $this->input->post('da_l3');
		$da_p = $this->input->post('da_p');
		$da_p2 = $this->input->post('da_p2');
		$da_p3= $this->input->post('da_p3');
		$gl = $this->input->post('gl');
		$gl2 = $this->input->post('gl2');
		$gl3 = $this->input->post('gl3');
		$gp = $this->input->post('gp');
		$gp2 = $this->input->post('gp2');
		$gp3 = $this->input->post('gp3');
		$cl = $this->input->post('cl');
		$cl2 = $this->input->post('cl2');
		$cl3 = $this->input->post('cl3');
		$cp = $this->input->post('cp');
		$cp2 = $this->input->post('cp2');
		$cp3 = $this->input->post('cp3');
		$pc = $this->input->post('pc');
		$wc = $this->input->post('wc');
		$tcl = $this->input->post('tcl');
		$tcl2 = $this->input->post('tcl2');
		$tcl3 = $this->input->post('tcl3');
		$tcp = $this->input->post('tcp');
		$tcp2 = $this->input->post('tcp2');
		$tcp3 = $this->input->post('tcp3');
		$scl = $this->input->post('scl');
		$scl2 = $this->input->post('scl2');
		$scl3 = $this->input->post('scl3');
		$scp = $this->input->post('scp');
		$scp2 = $this->input->post('scp2');
		$scp3 = $this->input->post('scp3');
		$gc = $this->input->post('gc');
		$gc2 = $this->input->post('gc2');
		$hpp = $this->input->post('hpp');
		$sp = $this->input->post('sp');

		$qcek = $this->db->query("SELECT * FROM tbl_cost WHERE tanggal='$tgl' AND id_kain='$id_kain'");
		$rcek = $qcek->num_rows();
		if($rcek > 0){
			echo "Data Sudah Ada !";
			//echo "Tidak Boleh Insert";
		}else{
			//echo "Boleh Insert";
			$data = array(
				'id_kain' => $id_kain,
				'ps_lusi' => $ps_lusi,
				'ps_lusi2' => $ps_lusi2,
				'ps_lusi3' => $ps_lusi3,
				'ps_pkn' => $ps_pkn,
				'ps_pkn2' => $ps_pkn2,
				'ps_pkn3' => $ps_pkn3, ///////Continued
				'pw_lusi' => $pw_lusi,
				'pw_lusi2' => $pw_lusi2,
				'pw_lusi3' => $pw_lusi3,
				'pw_pkn' => $pw_pkn,
				'pw_pkn2' => $pw_pkn2,
				'pw_pkn3' => $pw_pkn3,
				'hb_lusi' => $hb_lusi,
				'hb_lusi2' => $hb_lusi2,
				'hb_lusi3' => $hb_lusi3,
				'hb_pkn' => $hb_pkn,
				'hb_pkn2' => $hb_pkn2,
				'hb_pkn3' => $hb_pkn3,
				'hp_pick' => $hrg_pick,
				'hw_kg' => $hw_kg,
				'ht_kg' => $ht_kg,
				'hs_kg' => $hs_kg,
				'ps_kj' => $ps_kj,
				'biaya_proses' => $bp,
				'tanggal' => $tgl,
			    'denier_actual_lusi' => $da_l,
			    'denier_actual_lusi2' => $da_l2,
			    'denier_actual_lusi3' => $da_l3,
			    'denier_actual_pkn' => $da_p,
			    'denier_actual_pkn2' => $da_p2,
			    'denier_actual_pkn3' => $da_p3,
			    'gramasi_lusi' => $gl,
			    'gramasi_lusi2' => $gl2,
			    'gramasi_lusi3' => $gl3,
			    'gramasi_pkn' => $gp,
			    'gramasi_pkn2' => $gp2,
			    'gramasi_pkn3' => $gp3,
			    'cost_lusi' => $cl,
			    'cost_lusi2' => $cl2,
			    'cost_lusi3' => $cl3,
			    'cost_pkn' => $cp,
			    'cost_pkn2' => $cp2,
			    'cost_pkn3' => $cp3,
			    'pick_cost' => $pc,
			    'warping_cost' => $wc,
			    'tpmc_lusi' => $tcl,
			    'tpmc_lusi2' => $tcl2,
			    'tpmc_lusi3' => $tcl3,
			    'tpmc_pkn' => $tcp,
			    'tpmc_pkn2' => $tcp2,
			    'tpmc_pkn3' => $tcp3,	    
			    'sc_lusi' => $scl,
			    'sc_lusi2' => $scl2,
			    'sc_lusi3' => $scl3,
			    'sc_pkn' => $scp,
			    'sc_pkn2' => $scp2,
			    'sc_pkn3' => $scp3,
			    'hrg_greige1' => $gc,
			    'hrg_greige2' => $gc2,
			    'hpp' => $hpp,
			    'sell_price' => $sp
			);
			$ins = $this->db->insert('tbl_cost', $data);
			if($ins){
				echo "Insert Success !";
			}else{
				echo "Insert Failed !";
			}
		}

		$this->db->close();
		/*
		*/
	}

	function fill_master()
	{
		$id = $this->input->post('s_id');

		if($id == 0){
			$SubjectCode[] = array();
			$SubjectCode[$i]['nama_kain']='';
			$SubjectCode[$i]['id_kain']='';
			$SubjectCode[$i]['konstruksi']='';
			$SubjectCode[$i]['pick_tenun']='';
			$SubjectCode[$i]['total_end']='';
			$SubjectCode[$i]['lebar_sisir']='';
			$SubjectCode[$i]['tpm']='';
			$SubjectCode[$i]['jenis_benang']='';
			$SubjectCode[$i]['benang']='';
			$SubjectCode[$i]['denier']='';
			$SubjectCode[$i]['twisting']='';
			$SubjectCode[$i]['sizing']='';
			$SubjectCode[$i]['act_denier']='';

			header('Content-Type: application/json');
			echo json_encode ($SubjectCode);
		}else{
			$query = $this->db->query("SELECT * from master where id_kain = '$id'");

			$i=0;
			foreach ($query->result() as $row)
			{
					$SubjectCode[] = array();
					$SubjectCode[$i]['id']=$row->id;
					$SubjectCode[$i]['nama_kain']=$row->nama_kain;
					$SubjectCode[$i]['id_kain']=$row->id_kain;
					$SubjectCode[$i]['konstruksi']=$row->konstruksi;
					$SubjectCode[$i]['pick_tenun']=$row->pick_tenun;
					$SubjectCode[$i]['total_end']=$row->total_end;
					$SubjectCode[$i]['lebar_sisir']=$row->lebar_sisir;
					$SubjectCode[$i]['tpm']=$row->tpm;
					$SubjectCode[$i]['jenis_benang']=$row->jenis_benang;
					$SubjectCode[$i]['benang']=$row->benang;
					
					$den = $row->denier;

					$arr = explode("/", $den, 2);
					$first = $arr[0];
					$str = ltrim($first, '0');

					$SubjectCode[$i]['denier']=$str;
					$SubjectCode[$i]['twisting']=$row->twisting;
					$SubjectCode[$i]['sizing']=$row->sizing;

					$htpm = $row->tpm;

						if ($htpm == '' || is_null($htpm) || $htpm == 0){
							$act_denier = (($str*$htpm)/9000)+$str;
							$SubjectCode[$i]['act_denier']=round($act_denier,2);
						}else{
							$act_denier = (($str*$htpm)/9000)+$str;
							$SubjectCode[$i]['act_denier']=round($act_denier,2);
						} 
					

					$i ++;
			}
			header('Content-Type: application/json');
			echo json_encode ($SubjectCode);
		}

		$this->db->close();
	}
	
} //---------------------kurung class fillcontroler--------------------
