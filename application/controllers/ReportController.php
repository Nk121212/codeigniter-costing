<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportController extends CI_Controller {

	public function index()
	{
		$tgl = $this->input->post('tgl');
		$tgl2 = $this->input->post('tgl2');

		if($tgl != 0 && $tgl2 != 0){

			$query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal BETWEEN '$tgl' AND '$tgl2' ORDER BY tanggal ASC");
			$total = $query->num_rows();
			if($total > 0){
				echo "<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                        <thead>
							<tr>	
								<th class='th-sm'>#</th>
                                <th class='th-sm'>Tanggal Create</th>
                                <th class='th-sm'>Nama Kain</th>
                                <th class='th-sm'>Sales Price</th>
                                <th class='th-sm'>HPP Greige</th>
                            </tr>
                        </thead>
                        <tbody>";
				$no = 1;
			foreach($query->result() AS $tc){
				$nama_kain = $tc->nama_kain;
				$hpp = $tc->hpp;
				$greige = $tc->greige;
				$tgl = $tc->tanggal;
				echo "<tr>
						<td>$no</td>	
						<td>$tgl</td>	
						<td>$nama_kain</td>
						<td>$hpp</td>
						<td>$greige</td>
					</tr>";
					$no++;
			}
				echo "<script>$('#xcl').show();$('#pdf').show();</script>";
				echo "
					</tbody>
				</table>";

			}elseif($total < 1){

				echo "
				<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                    <thead>
						<tr>
							<th class='th-sm'>#</th>
                            <th class='th-sm'>Tanggal Create</th>
                            <th class='th-sm'>Nama Kain</th>
                            <th class='th-sm'>Sales Price</th>
                            <th class='th-sm'>HPP Greige</th>
                        </tr>
                    </thead>
                    <tbody>
			    	<tr style='text-align:center; background-color:#F31431;'>
					   	<td colspan='4' style='color:white;'><b>Tidak Ada Data !</b></td>
					</tr>
					</tbody>
				</table>";
				echo "<script>$('#xcl').hide();</script>";
				echo "<script>$('#tgl').focus();</script>";
			}
//----------------------------------------------------------------			
		}elseif($tgl != 0 && $tgl2 == 0){

			$query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal = '$tgl' ORDER BY tanggal ASC");

			$total = $query->num_rows();
			if($total > 0){
				$row = $query->row();
				$tgl = $row->tanggal;
				echo "<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                        <thead>
							<tr>
								<th class='th-sm'>#</th>
                                <th class='th-sm'>Tanggal Create</th>
                                <th class='th-sm'>Nama Kain</th>
                                <th class='th-sm'>Sales Price</th>
                                <th class='th-sm'>HPP Greige</th>
                            </tr>
                        </thead>
						<tbody>";
					$no1 = 1;
				foreach ($query->result() as $row)
				{
					//$tgl = $row->tanggal;
					$nm_kain = $row->nama_kain;
					$hpp = $row->hpp;
					$g2 = $row->greige;

					echo 
					"<tr>
						<td>$no1</td>
					   	<td>$tgl</td>
					   	<td>$nm_kain</td>
					   	<td>$hpp</td>
					   	<td>$g2</td>
					</tr>";
					echo "<script>$('#xcl').show();$('#pdf').show();</script>";
					//$no ++;
					$no1++;
				}
				echo "</tbody>
					</table>";
			}elseif($total < 1){

				echo "
				<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                    <thead>
						<tr>
							<th class='th-sm'>#</th>
                            <th class='th-sm'>Tanggal Create</th>
                            <th class='th-sm'>Nama Kain</th>
                            <th class='th-sm'>Sales Price</th>
                            <th class='th-sm'>HPP Greige</th>
                        </tr>
                    </thead>
                    <tbody>
			    	<tr style='text-align:center; background-color:#F31431;'>
					   	<td colspan='4'><b style='color:white;'>Tidak Ada Data !</b></td>
					</tr>
					</tbody>
				</table>";
				echo "<script>$('#xcl').hide();</script>";
				echo "<script>$('#tgl').focus();</script>";

			}
//----------------------------------------------------------------			
		}elseif($tgl == 0 && $tgl2 != 0){

			$query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal = '$tgl2' ORDER BY tanggal ASC");

			$total = $query->num_rows();
			if($total > 0){
				$row = $query->row();
				$tgl = $row->tanggal;
			echo "<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                    <thead>
						<tr>
						<th class='th-sm'>#</th>
                            <th class='th-sm'>Tanggal Create</th>
                            <th class='th-sm'>Nama Kain</th>
                            <th class='th-sm'>Sales Price</th>
                            <th class='th-sm'>HPP Greige</th>
                        </tr>
                    </thead>
					<tbody>";
					$no2 = 1;
			foreach ($query->result() as $row)
			{
				$nm_kain = $row->nama_kain;
				$hpp = $row->hpp;
				$g2 = $row->greige;

				echo 
				"<tr>
					<td>$no2</td>
				   	<td>$tgl</td>
				   	<td>$nm_kain</td>
				   	<td>$hpp</td>
				   	<td>$g2</td>
				</tr>";
				echo "<script>$('#xcl').show();$('#pdf').show();</script>";
				//$no ++;
				$no2++;
			}
			echo "</tbody>
				</table>";
			}elseif($total < 1){
				echo "
				<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                    <thead>
						<tr>
							<th class='th-sm'>#</th>
                            <th class='th-sm'>Tanggal Create</th>
                            <th class='th-sm'>Nama Kain</th>
                            <th class='th-sm'>Sales Price</th>
                            <th class='th-sm'>HPP Greige</th>
                        </tr>
                    </thead>
                    <tbody>
			    	<tr style='text-align:center; background-color:#F31431;'>
					   	<td colspan='4' style='color:white;'><b>Tidak Ada Data !</b></td>
					</tr>
					</tbody>
				</table>";
				echo "<script>$('#xcl').hide();</script>";
				echo "<script>$('#tgl').focus();</script>";
			}	
//----------------------------------------------------------------			
		}elseif($tgl == 0 && $tgl2 == 0){
			echo "<script type='text/javascript'>swal('Pilih Tanggal Dulu !', '', 'error');</script>";
			echo "<script>$('#xcl').hide();</script>";
			echo "<script>$('#tgl').focus();</script>";
		}
		$this->db->close();	
	}

	function pdf_report(){
		$pdf = $this->input->post("pdf");
		$tgl = $this->input->post('tgl');
		$tgl2 = $this->input->post('tgl2');

		$data["tgl"] = $tgl;
		$data["tgl2"] = $tgl2;

		if(isset($pdf)){

			$this->load->library("pdf");
			$this->pdf->load_view('template/template');
			$this->pdf->load_view('report_form/pdf_report',$data);
			$this->pdf->set_paper('A4', 'potrait');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf", array("Attachment" => false));

		}else{
			//echo 'excel';
			$this->load->view("report_form/excel", $data);
		}
	}
}
