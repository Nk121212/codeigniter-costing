
//----------------------------------------------fungsi jika array 2, lusi 1 pakan 1-----------------------------------------//
function g_l1p1(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		//hitung gramasi lusi
		var da_lusi = $("#da_l").val(); 
		var total_end = $("#total_end").val(); 
		var ps_lusi = $("#ps_lusi").val(); 
		var pw_lusi = $("#pw_lusi").val();

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var res1 = (((+da_lusi * +total_end)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(res1).trigger("change");

		//hitung gramasi pakan
		var res2 = (((+da_p * +pick_tenun * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(res2).trigger("change");	

		c_lusi();
		c_pakan();
		costpick();
		tpmc_l();
		tpmc_p();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);
	});
}
//-------------------------------------------fungsi jika array 3, lusi 2 pakan 1----------------------------------------//
function g_l2p1(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var da_l_2 = $("#da_l_2").val();
		var ps_lusi2 = $("#ps_lusi2").val();
		var pw_lusi2 = $("#pw_lusi2").val();

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		//hitung gramasi lusi 1
		var gl = ((+da_l * (+total_end/2)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		//hitung gramasi lusi 2
		var gl2 = ((+da_l_2 * (+total_end/2)/9000)*(+ps_lusi2 * +pw_lusi2)).toFixed(2);
		$("#g_lusi2").val(gl2).trigger("change");

		//hitung gramasi pakan
		var gp = (((+da_p * +pick_tenun * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		c_lusi();
		c_lusi2();
		c_pakan();
		costpick();
		tpmc_l();
		tpmc_l2();
		tpmc_p();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);
	});
}
function g_l1p2(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var gl = (((+da_l * +total_end)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var da_p_2 = $("#da_p_2").val();
		var ps_pakan2 = $("#ps_pakan2").val();
		var pw_pakan2 = $("#pw_pakan2").val();

		var gp = (((+da_p * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		var gp2 = (((+da_p_2 * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan2 * +pw_pakan2)).toFixed(2);
		$("#g_pakan2").val(gp2).trigger("change");

		c_lusi();
		c_pakan();
		c_pakan2();
		costpick();
		tpmc_l();
		tpmc_p();
		tpmc_p2();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);

	});
}
function g_l2p2(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var da_l_2 = $("#da_l_2").val();
		var ps_lusi2 = $("#ps_lusi2").val();
		var pw_lusi2 = $("#pw_lusi2").val();

		var gl = ((+da_l * (+total_end / 2)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		var gl2 = ((+da_l_2 * (+total_end / 2)/9000)*(+ps_lusi2 * +pw_lusi2)).toFixed(2);
		$("#g_lusi2").val(gl2).trigger("change");	

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var da_p_2 = $("#da_p_2").val();
		var ps_pakan2 = $("#ps_pakan2").val();
		var pw_pakan2 = $("#pw_pakan2").val();

		var gp = (((+da_p * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		var gp2 = (((+da_p_2 * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan2 * +pw_pakan2)).toFixed(2);
		$("#g_pakan2").val(gp2).trigger("change");	

		c_lusi();
		c_lusi2();
		c_pakan();
		c_pakan2();
		costpick();
		tpmc_l();
		tpmc_l2();
		tpmc_p();
		tpmc_p2();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);

	});
}
function g_l1p3(){ 
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var gl = (((+da_l * +total_end)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");
//-----------------------------------------------------------------
		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var da_p_2 = $("#da_p_2").val();
		var ps_pakan2 = $("#ps_pakan2").val();
		var pw_pakan2 = $("#pw_pakan2").val();

		var da_p_3 = $("#da_p_3").val();
		var ps_pakan3 = $("#ps_pakan3").val();
		var pw_pakan3 = $("#pw_pakan3").val();

		var gp = (((+da_p * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		var gp2 = (((+da_p_2 * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan2 * +pw_pakan2)).toFixed(2);
		$("#g_pakan2").val(gp2).trigger("change");

		var gp3 = (((+da_p_3 * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan3 * +pw_pakan3)).toFixed(2);
		$("#g_pakan3").val(gp3).trigger("change");

		c_lusi();
		c_pakan();
		c_pakan2();
		c_pakan3();
		costpick();
		tpmc_l();
		tpmc_p();
		tpmc_p2();
		tpmc_p3();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();	
		$("#formula :input").attr("disabled",true);
	});
}
function g_l3p1(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var da_l_2 = $("#da_l_2").val();
		var ps_lusi2 = $("#ps_lusi2").val();
		var pw_lusi2 = $("#pw_lusi2").val();

		var da_l_3 = $("#da_l_3").val();
		var ps_lusi3 = $("#ps_lusi3").val();
		var pw_lusi3 = $("#pw_lusi3").val();

		var gl = ((+da_l * (+total_end/3)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		var gl2 = ((+da_l_2 * (+total_end/3)/9000)*(+ps_lusi2 * +pw_lusi2)).toFixed(2);
		$("#g_lusi2").val(gl2).trigger("change");

		var gl3 = ((+da_l_3 * (+total_end/3)/9000)*(+ps_lusi3 * +pw_lusi3)).toFixed(2);
		$("#g_lusi3").val(gl3).trigger("change");	

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var gp = (((+da_p * +pick_tenun * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");	

		c_lusi();
		c_lusi2();
		c_lusi3();
		c_pakan();
		costpick();
		tpmc_l();
		tpmc_l2();
		tpmc_l3();
		tpmc_p();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);

	});
} 
function g_l2p3(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var da_l_2 = $("#da_l_2").val();
		var ps_lusi2 = $("#ps_lusi2").val();
		var pw_lusi2 = $("#pw_lusi2").val();

		var gl = ((+da_l * (+total_end / 2)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		var gl2 = ((+da_l_2 * (+total_end / 2)/9000)*(+ps_lusi2 * +pw_lusi2)).toFixed(2);
		$("#g_lusi2").val(gl2).trigger("change");

		//--------------------------------------------------------------------
		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var da_p_2 = $("#da_p_2").val();
		var ps_pakan2 = $("#ps_pakan2").val();
		var pw_pakan2 = $("#pw_pakan2").val();

		var da_p_3 = $("#da_p_3").val();
		var ps_pakan3 = $("#ps_pakan3").val();
		var pw_pakan3 = $("#pw_pakan3").val();

		var gp = (((+da_p * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		var gp2 = (((+da_p_2 * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan2 * +pw_pakan2)).toFixed(2);
		$("#g_pakan2").val(gp2).trigger("change");

		var gp3 = (((+da_p_3 * (+pick_tenun / 3) * +lebar_sisir)/9000)*(+ps_pakan3 * +pw_pakan3)).toFixed(2);
		$("#g_pakan3").val(gp3).trigger("change");	

		c_lusi();
		c_lusi2();
		c_pakan();
		c_pakan2();
		c_pakan3();
		costpick();
		tpmc_l();
		tpmc_l2();
		tpmc_p();
		tpmc_p2();
		tpmc_p3();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);

	});
}
function g_l3p2(){
	$('#hitung').click(function(){
		$("#formula :input").val("");
		$("#save").show();
		var da_l = $("#da_l").val();
		var total_end = $("#total_end").val();
		var ps_lusi = $("#ps_lusi").val();
		var pw_lusi = $("#pw_lusi").val();

		var da_l_2 = $("#da_l_2").val();
		var ps_lusi2 = $("#ps_lusi2").val();
		var pw_lusi2 = $("#pw_lusi2").val();

		var da_l_3 = $("#da_l_3").val();
		var ps_lusi3 = $("#ps_lusi3").val();
		var pw_lusi3 = $("#pw_lusi3").val();

		var gl = ((+da_l * (+total_end/3)/9000)*(+ps_lusi * +pw_lusi)).toFixed(2);
		$("#g_lusi").val(gl).trigger("change");

		var gl2 = ((+da_l_2 * (+total_end/3)/9000)*(+ps_lusi2 * +pw_lusi2)).toFixed(2);
		$("#g_lusi2").val(gl2).trigger("change");

		var gl3 = ((+da_l_3 * (+total_end/3)/9000)*(+ps_lusi3 * +pw_lusi3)).toFixed(2);
		$("#g_lusi3").val(gl3).trigger("change");	

		//------------------------------------------------------------------

		var da_p = $("#da_p").val();
		var pick_tenun = $("#pick_tenun").val();
		var lebar_sisir = $("#lebar_sisir").val();
		var ps_pakan = $("#ps_pakan").val();
		var pw_pakan = $("#pw_pakan").val();

		var da_p_2 = $("#da_p_2").val();
		var ps_pakan2 = $("#ps_pakan2").val();
		var pw_pakan2 = $("#pw_pakan2").val();

		var gp = (((+da_p * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan * +pw_pakan)).toFixed(2);
		$("#g_pakan").val(gp).trigger("change");

		var gp2 = (((+da_p_2 * (+pick_tenun / 2) * +lebar_sisir)/9000)*(+ps_pakan2 * +pw_pakan2)).toFixed(2);
		$("#g_pakan2").val(gp2).trigger("change");

		c_lusi();
		c_lusi2();
		c_lusi3();
		c_pakan();
		c_pakan2();
		costpick();
		tpmc_l();
		tpmc_l2();
		tpmc_l3();
		tpmc_p();
		tpmc_p2();
		warpingcost();
		sc_lusi();
		sc_lusi2();
		sc_lusi3();
		sc_pkn();
		sc_pkn2();
		sc_pkn3();
		gc_mtr();
		gc_final();
		hpp();
		sp();
		$("#formula :input").attr("disabled",true);
	});
}

function reset(){
	location.reload();
	$("#f_data").focus();
}	