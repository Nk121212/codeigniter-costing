<?php
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Report_Costing.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
?>

<style>
    .page_break2 { page-break-after: always; text-align:center;}

    @page {
        margin: 0cm 0cm;
    }

    table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
    border:1px solid #dedede;
    padding: 1rem;
    }
    h1,h2,h3,h4,h5,table {
        font-family: Arial, Helvetica, sans-serif;
        font-size : 12px;
    }

    table {
    border-collapse: collapse;
    width: 100%;
    }
    .grey {
        background-color:#c6c9ce;
    }
    th, td {
    padding: 15px;
    }
    thead {
        text-align:center;
    }
</style>

<?php
$date1 = date("d M Y",strtotime($tgl));
$date2 = date("d M Y",strtotime($tgl2));

if($tgl == 0){
echo '
    <p style="font-weight:bold;" align="center">Report Costing</p>
    <p align="center">Tanggal '.$date2.'</p>
    
';
}elseif($tgl2 == 0){
    echo '
    <p style="font-weight:bold;" align="center">Report Costing</p>
    <p align="center">Tanggal '.$date1.'</p>
    ';
}elseif($tgl == 0 && $tgl2 == 0){
    echo '
    <p style="font-weight:bold;" align="center">Report Costing</p>
    <p align="center">Tanggal tidak dipilih !</p>
    ';
}else{
    echo '
    <p style="font-weight:bold;" align="center">Report Costing</p>
    <p align="center">Periode : '.date("d M Y",strtotime($tgl)).' s/d '.date("d M Y",strtotime($tgl2)).'</p>
    ';
}

if($tgl != 0 && $tgl2 != 0){

    $query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal BETWEEN '$tgl' AND '$tgl2' ORDER BY tanggal ASC");
    $total = $query->num_rows();
    if($total > 0){
        echo "<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                <thead>
                    <tr style='text-align:center;'>	
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
        $hpp = number_format($tc->hpp,2,',','.');
        $greige = number_format($tc->greige,2,',','.');
        $tgl = date("d M Y",strtotime($tc->tanggal));
        echo "<tr>
                <td>$no</td>	
                <td>$tgl</td>	
                <td>$nama_kain</td>
                <td>$hpp</td>
                <td>$greige</td>
            </tr>";
            $no++;
    }
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
    }
//----------------------------------------------------------------			
}elseif($tgl != 0 && $tgl2 == 0){

    $query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal = '$tgl' ORDER BY tanggal ASC");

    $total = $query->num_rows();
    if($total > 0){
        //$row = $query->row();
        
        echo "<table id='dtBasicExample' class='table' cellspacing='0' width='100%'>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal Create</th>
                        <th>Nama Kain</th>
                        <th>Sales Price</th>
                        <th>HPP Greige</th>
                    </tr>
                </thead>
                <tbody>";
        $no1 = 1;
        foreach($query->result() as $row)
        {
            //$tgl = $row->tanggal;
            $tgl = date("d M Y",strtotime($row->tanggal));
            $nm_kain = $row->nama_kain;
            $hpp = number_format($row->hpp,2,',','.');
            $g2 = number_format($row->greige,2,',','.');

            echo "<tr>
                   <td>$no1</td>
                   <td>$tgl</td>
                   <td>$nm_kain</td>
                   <td>$hpp</td>
                   <td>$g2</td>
                </tr>";
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

    }
//----------------------------------------------------------------			
}elseif($tgl == 0 && $tgl2 != 0){

    $query = $this->db->query("SELECT DISTINCT tbl_cost.tanggal AS tanggal,tbl_cost.hpp AS hpp,tbl_cost.hrg_greige2 AS greige, master.nama_kain AS nama_kain FROM tbl_cost INNER JOIN master ON tbl_cost.id_kain = master.id_kain WHERE tanggal = '$tgl2' ORDER BY tanggal ASC");

    $total = $query->num_rows();
    if($total > 0){
        $row = $query->row();
        
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
        $tgl = date("d M Y",strtotime($row->tanggal));
        $hpp = number_format($row->hpp,2,',','.');
        $g2 = number_format($row->greige,2,',','.');

        echo 
        "<tr>
            <td>$no2</td>
               <td>$tgl</td>
               <td>$nm_kain</td>
               <td>$hpp</td>
               <td>$g2</td>
        </tr>";
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
    }	
//----------------------------------------------------------------			
}elseif($tgl == 0 && $tgl2 == 0){
    
}
?>
