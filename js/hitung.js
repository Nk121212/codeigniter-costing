function den_lusi(){
	var a = $("#d_lusi").val();
	var b = $("#tpm_l").val();

	var c = (((+a * +b)/9000)+ +a).toFixed(4);
	if (b == 0){
		//alert("TPM Lusi Kosong !");	
	}else{
		$("#da_l").val(c).trigger("change");
	}	
}
function den_lusi2(){
	var a = $("#d_lusi2").val();
	var b = $("#tpm_l_2").val();
	var c = (((+a * +b)/9000)+ +a).toFixed(4);

	if (b == 0){
		//alert("TPM Lusi 2 Kosong");	
	}else{
		$("#da_l_2").val(c).trigger("change");
	}
}
function den_lusi3(){
	var a = $("#d_lusi3").val();
	var b = $("#tpm_l_3").val();

	var c = (((+a * +b)/9000)+ +a).toFixed(4);
	if (b == 0){
		//alert("TPM Lusi3 Kosong");	
	}else{
		$("#da_l_3").val(res).trigger("change");
	}
}

function den_pkn(){
	var a = $("#d_pakan").val();
	var b = $("#tpm_p").val();
	var c = (((+a * +b)/9000)+ +a).toFixed(4);

	if (b == 0){
		//alert("TPM Pakan Kosong !");
	}else{
		$("#da_p").val(c).trigger("change");
	}
	
}
function den_pkn2(){
	var a = $("#d_pakan2").val();
	var b = $("#tpm_p_2").val();
	var c = (((+a * +b)/9000)+ +a).toFixed(4);

	if (b == 0){
		//alert("TPM Pakan 2 Kosong");	
	}else{
		$("#da_p_2").val(c).trigger("change");
	}	
}
function den_pkn3(){
	var a = $("#d_pakan3").val();
	var b = $("#tpm_p_3").val();
	var c = (((+a * +b)/9000)+ +a).toFixed(4);

	if (b == 0){
		//alert("TPM Pakan 3 Kosong !");	
	}else{
		$("#da_p_3").val(c).trigger("change");
	}
	
}
// hitung cost lusi 1,2,3
function c_lusi(){
	var x = $("#g_lusi").val();
	var y = $("#hb_lusi").val();
	var res = (+x * +y)/1000;

	if (x == 0 || x == null){
		//alert("Gramasi Lusi Kosong !");
	}else if(y == 0 || y == null){
		alert("Harga Benang Lusi Kosong !");
	}else{ 
		var hasil = res.toFixed(2);
		$("#c_lusi").val(hasil).trigger("change");
	}
}
function c_lusi2(){
	var x = $("#g_lusi2").val();
	var y = $("#hb_lusi2").val();
	var res = (+x * +y)/1000;
	
	if (x == 0 || x == null){
		//alert("Gramasi Lusi 2 Kosong !");
	}else if(y == 0 || y == null){
		alert("Harga Benang Lusi 2 Kosong !");
	}else{
		var hasil = res.toFixed(2);
		$("#c_lusi2").val(hasil).trigger("change");
		
	}
}
function c_lusi3(){
	var x = $("#g_lusi3").val();
	var y = $("#hb_lusi3").val();
	var res = (+x * +y)/1000;
	var hasil = res.toFixed(2);
	if (x == 0 || x == null){
		//alert("Gramasi Lusi 3 Kosong !");
	}else if(y == 0 || y == null){
		//alert("Harga Benang Lusi 3 Kosong !");
	}else{
		$("#c_lusi3").val(hasil).trigger("change");
	}
}

//hitung cost pakan 1,2,3
function c_pakan(){
	var x = $("#g_pakan").val();
	var y = $("#hb_pakan").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null){
		//alert("Gramasi Pakan Kosong !");
	}else if(y == 0 || y == null){
		//alert("Harga Benang Pakan Kosong !");
	}else{
		var hasil = res.toFixed(2);
		$("#c_pakan").val(hasil).trigger("change");

	}
}
function c_pakan2(){
	var x = $("#g_pakan2").val();
	var y = $("#hb_pakan2").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#c_pakan2").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#c_pakan2").val(hasil).trigger("change");
	}
}
function c_pakan3(){
	var x = $("#g_pakan3").val();
	var y = $("#hb_pakan3").val();
	var res = (x*y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#c_pakan3").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#c_pakan3").val(hasil).trigger("change");
		
	}
}
function costpick(){
	var x = $("#pick_tenun").val();
	var y = $("#h_pick").val();
	var res = +x * +y;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#p_cost").val(res);
	}else{
		$("#p_cost").val(res).trigger("change");
		
	}	
}
function warpingcost(){
	var x = $("#g_lusi").val();
	var y = $("#h_warping").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#w_cost").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#w_cost").val(hasil).trigger("change");
		
	}	
}
function sc_lusi(){
	var x = $("#g_lusi").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_lusi").val(res);
	}else{
		var hasil = res.toFixed(2)
		$("#sc_lusi").val(hasil).trigger("change");
	}	
}
function sc_lusi2(){
	var x = $("#g_lusi2").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_lusi2").val(res);
	}else{
		var hasil = res.toFixed(2)
		$("#sc_lusi2").val(hasil).trigger("change");
	}	
}
function sc_lusi3(){
	var x = $("#g_lusi3").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_lusi3").val(res);
	}else{
		var hasil = res.toFixed(2)
		$("#sc_lusi3").val(hasil).trigger("change");
	}	
}

function sc_pkn(){
	var x = $("#g_pakan").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_pkn").val(res);
	}else{
		var hasil = res.toFixed(2)
		$("#sc_pkn").val(hasil).trigger("change");
	}	
}
function sc_pkn2(){
	var x = $("#g_pakan2").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_pkn2").val(res);
	}else{	
		var hasil = res.toFixed(2)
		$("#sc_pkn2").val(hasil).trigger("change");
	}	
}
function sc_pkn3(){
	var x = $("#g_pakan3").val();
	var y = $("#h_sizing").val();
	var res = (+x * +y)/1000;
	if (x == 0 || x == null || y == 0 || y == null){
		//$("#sc_pkn3").val(res);
	}else{
		var hasil = res.toFixed(2)
		$("#sc_pkn3").val(hasil).trigger("change");
	}	
}

function tpmc_l(){
	//(tpm * gramasilusi * harga twist/kg)/1000
	var x = $("#tpm_l").val();
	var y = $("#g_lusi").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_lusi").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_lusi").val(hasil).trigger("change");
		
	}	
}
function tpmc_l2(){
	//(tpm * gramasilusi2 * harga twist/kg)/1000
	var x = $("#tpm_l_2").val();
	var y = $("#g_lusi2").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_lusi2").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_lusi2").val(hasil).trigger("change");
		
	}
}
function tpmc_l3(){
	//(tpm * gramasilusi3 * harga twist/kg)/1000
	var x = $("#tpm_l_3").val();
	var y = $("#g_lusi3").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_lusi3").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_lusi3").val(hasil).trigger("change");
		
	}
}
function tpmc_p(){
	//(tpm * gramasilusi * harga twist/kg)/1000
	var x = $("#tpm_p").val();
	var y = $("#g_pakan").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_pakan").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_pakan").val(hasil).trigger("change");
		
	}	
}
function tpmc_p2(){
	//(tpm * gramasilusi2 * harga twist/kg)/1000
	var x = $("#tpm_p_2").val();
	var y = $("#g_pakan2").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_pakan2").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_pakan2").val(hasil).trigger("change");
		
	}
}
function tpmc_p3(){
	//(tpm * gramasilusi3 * harga twist/kg)/1000
	var x = $("#tpm_p_3").val();
	var y = $("#g_pakan3").val();
	var z = $("#h_twist").val();
	var res = (+x * +y * +z)/1000;
	if (x == 0 || y == 0 || z == 0){
		//$("#tc_pakan3").val(res);
	}else{
		var hasil = res.toFixed(2);
		$("#tc_pakan3").val(hasil).trigger("change");
		
	}
}
function  gc_mtr(){
	//lusi cost1 + lusi cost2 + lusi cost3 + pakan cost1+ pakan cost2 + pakan cost3 + pick cost + warping cost + 
	//tpmcost lusi + tpm cost lusi2 + tpm cost lusi3 + tpm cost pakan 1 + tpm cost pakan2 + tpm cost pakan3
	// + sizing cost = 
	var a = $("#c_lusi").val();
	var b = $("#c_lusi2").val();
	var c = $("#c_lusi3").val();
	var d = $("#c_pakan").val();
	var e = $("#c_pakan2").val();
	var f = $("#c_pakan3").val();
	var g = $("#p_cost").val();
	var h = $("#w_cost").val();
	var i = $("#tc_lusi").val();
	var j = $("#tc_lusi2").val();
	var k = $("#tc_lusi3").val();
	var l = $("#tc_pakan").val();
	var m = $("#tc_pakan2").val();
	var n = $("#tc_pakan3").val();
	var o = $("#sc_lusi").val();
	var p = $("#sc_lusi2").val();
	var q = $("#sc_lusi3").val();
	var r = $("#sc_pkn").val();
	var s = $("#sc_pkn2").val();
	var t = $("#sc_pkn3").val();

	var res = +a + +b + +c + +d + +e + +f + +g + +h + +i + +j + +k + +l + +m + +n + +o + +p + +q + +r + +s + +t;
	//alert(res);
	var hasil = res.toFixed(2);
	$("#g_cost").val(hasil).trigger("change");
}
function gc_final(){
	var a = $("#g_cost").val();
	var b = $("#pskj").val();
	var res = +a * +b;
	if(b == 0){
		//$("#g_cost2").val(res);	
	}else{
		var hasil = res.toFixed(2);
		$("#g_cost2").val(hasil).trigger("change");	
	}
	  
} 

function hpp(){
	var a = $("#g_cost").val();
	var b = $("#pskj").val();
	var c = $("#bp").val();
	var rms = (+a * +b)+ +c;
	if(a == 0 || b == 0 || c == 0){
		//$("#hpp").val(rms);
	}else{
		//var res = ((17155.6608*1.2)+7500)*0.9144;
		var i = rms.toFixed(2);
		var result = i * 0.9144;
		var res = result.toFixed(2);
		$("#hpp").val(res).trigger("change");
	}
}
function sp(){
	var a = $("#hpp").val();
	var res = +a/0.9144;
	if(a == 0 || a == null){
		//alert("Hpp Is Empty");
		//$("#hpp").focus();
		//$("#sellp").val("");
	}else{
		var hasil = res.toFixed(2);
		$("#sellp").val(hasil).trigger("change");
	}	
}