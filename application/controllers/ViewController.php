<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	public function index()
	{
		$query = $this->db->query("select master.*,tbl_cost.* from master left join tbl_cost 
		on master.id_kain = tbl_cost.id_kain where tbl_cost.id_kain is not null group by tbl_cost.id order by tbl_cost.id desc");
		$no = 1;
		foreach($query->result() as $data){
			$id_kain = $data->id_kain;
			$nm_kain = $data->nama_kain;
			$tgl = date("d/m/Y",strtotime($data->tanggal));
			$hpp = number_format($data->hpp,2,',','.');
			$sp = number_format($data->sell_price,2,',','.');
			echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$nm_kain.'</td>
					<td>'.$tgl.'</td>
					<td>'.$hpp.'</td>
					<td>'.$sp.'</td>
					<td>
						<a href="home/'.$id_kain.'" id="edit'.$no.'" class="btn btn-success"><i class="fa fa-refresh"></i> Update</a>
						<a href="view_data/'.$id_kain.'" id="view'.$no.'" class="btn btn-primary"><i class="fa fa-eye"></i> View</a>
					</td>
				</tr>
			';
			$no++;

		}

	}
	
} //---------------------kurung class 
