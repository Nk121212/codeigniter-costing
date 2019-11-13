    <!--Main layout-->
    <main>
        <div class="container-fluid">

            <!--Section: Intro-->
            <section class="mt-lg-5">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header white-text aqua-gradient">
                            Edit Master Kain
                        </div>
                        <div class="col-lg-6 col-md-6 card-body text-center">
                            <select class="browser-default custom-select" onchange="fill_master();" id="f_data" searchable="Search here.."></select>
                        </div>
                        <div class="card-body row">
                            <div class="col-lg-12 md-form" hidden>
                                <input type="text" name="idk_master" id="idk_master">
                            </div>
                            <div class="col-lg-3 md-form">
                                <input onkeypress="validate(event)" id="m_pick_tenun" type="text" class="form-control right" required>
                                <label class="iser" for="m_pick_tenun">Pick Tenun</label>
                            </div>
                            <div class="col-lg-3 md-form">
                                <input onkeypress="validate(event)" id="m_lebar_sisir" type="text" class="form-control right" required>
                                <label class="iser" for="m_lebar_sisir">Lebar Sisir</label>
                            </div>
                            <div class="col-lg-3 md-form">
                                <input onkeypress="validate(event)" id="m_total_end" type="text" class="form-control right" required>
                                <label class="iser" for="m_total_end">Total End</label>
                            </div>
                            <div class="col-lg-3 md-form" style="text-align:center;">
                                <button class="btn btn-outline-primary" id="trig_kons">Fixed Konstruksi</button>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input id="m_konstruksi" type="text" class="form-control right" required>
                                <label class="iser" for="m_konstruksi">Konstruksi</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <button class="btn btn-outline-success" id="btn_kns">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Lusi 1
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bl">
                                        <input type="text" id="idl1" name="idl1" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_l" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_l">TPM Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_lusi" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_lusi">Benang Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_lusi">Denier Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_lusi" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_lusi" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updl" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Pakan 1
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bp">
                                        <input type="text" id="idp1" name="idp1" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_p" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_p">TPM Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_pakan" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_pakan">Benang Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_pakan">Denier Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_pakan" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_pakan" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updp" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color" id="mlusi2">
                                Lusi 2
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bl2">
                                        <input type="text" id="idl2" name="idl2" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_l_2" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_l_2">TPM Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_lusi2" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_lusi2">Benang Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_lusi2">Denier Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_lusi2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_lusi2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updl2" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color" id="mpakan2">
                                Pakan 2
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bp2">
                                        <input type="text" id="idp2" name="idp2" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_p_2" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_p_2">TPM Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_pakan2" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_pakan2">Benang Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_pakan2">Denier Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_pakan2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_pakan2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updp2" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color" id="mlusi3">
                                Lusi 3
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bl3">
                                        <input type="text" id="idl3" name="idl3" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_l_3" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_l_3">TPM Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_lusi3" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_lusi3">Benang Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_lusi3">Denier Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_lusi3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_lusi3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updl3" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color" id="mpakan3">
                                Pakan 3
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="div_bp3">
                                        <input type="text" id="idp3" name="idp3" hidden>
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_tpm_p_3" type="text" class="form-control" required>
                                                <label class="iser" for="m_tpm_p_3">TPM Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="m_b_pakan3" type="text" class="form-control right" required>
                                                <label class="iser" for="m_b_pakan3">Benang Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="m_d_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="m_d_pakan3">Denier Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_t_pakan3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="m_s_pakan3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <button id="updp3" class="btn btn-outline-success">Update</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Panel-->
                    </div>

                </div>
                

            </section>
    <!--Footer-->
    <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
              <div class="container-fluid">
                 © 2018 Copyright: <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/mdb.min.js"></script>
    <!--Initializations-->

    <script type="text/javascript" src="<?php echo base_url(); ?>js/formula.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/hitung.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/benang.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sizing.js"></script>
    <!-- Nice Alert Plugin-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/input_validasi/validasi.js"></script>

    <script>
    $("#trig_kons").click(function(){
        var te = $("#m_total_end").val();
        var pt = $("#m_pick_tenun").val();
        var ls = $("#m_lebar_sisir").val();

        var kons = $("#m_konstruksi").val();
        var res = kons.substring(0, 5);

        $("#m_konstruksi").val(""+res+":"+pt+"x"+ls+":"+te+"");
        $("#btn_kns").show();
    })

    $("#btn_kns").click(function(){
        var id_kain = $("#idk_master").val();
        var te = $("#m_total_end").val();
        var pt = $("#m_pick_tenun").val();
        var ls = $("#m_lebar_sisir").val();
        var kons = $("#m_konstruksi").val();

        $.ajax({  
            url: "<?php echo base_url(); ?>" + "mastercontroller/update_konstruksi",
            method:"POST",
            data:{id_kain:id_kain,te:te,pt:pt,ls:ls,kons:kons},                
                success:function(resp){                 
                    alert(resp);
                }  
        });
    })
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script type="text/javascript">
    function hide(){
        $("#updl").hide(); $("#updl2").hide(); $("#updl3").hide(); $("#updp").hide(); $("#updp2").hide(); $("#updp3").hide();
    }

    $(document).ready(function() {  
        $("#btn_kns").hide();
        hide();
        $.ajax({  
        url: "<?php echo base_url(); ?>" + "fillcontroller/index",
        method:"POST",
        data:{},                
            success:function(resp){                 
                $("#f_data").html(resp);
            }  
        });
    });

    function fill_master(){
        $("#updl").removeClass("btn btn-success");
        $("#updl").addClass("btn btn-outline-success");

        $("#updl2").removeClass("btn btn-success");
        $("#updl2").addClass("btn btn-outline-success");

        $("#updl3").removeClass("btn btn-success");
        $("#updl3").addClass("btn btn-outline-success");

        $("#updp").removeClass("btn btn-success");
        $("#updp").addClass("btn btn-outline-success");

        $("#updp2").removeClass("btn btn-success");
        $("#updp2").addClass("btn btn-outline-success");

        $("#updp3").removeClass("btn btn-success");
        $("#updp3").addClass("btn btn-outline-success");

        $("#btn_kns").hide();
        var s_id = $('#f_data').val();
        $.ajax({  
        url: "<?php echo base_url(); ?>" + "fillcontroller/fill_master",
        method:"POST",
        data:{s_id:s_id},               
            success:function(data){
                $("#m_tpm_l").val("").trigger("change");
                $("#m_tpm_l_2").val("").trigger("change");
                $("#m_tpm_l_3").val("").trigger("change"); 
                $("#m_b_lusi").val("").trigger("change");
                $("#m_b_lusi2").val("").trigger("change");
                $("#m_b_lusi3").val("").trigger("change");               

                $("#div_bl :input").attr("disabled", false);
                $("#div_bl2 :input").attr("disabled", false);
                $("#div_bl3 :input").attr("disabled", false);
                $("#div_bp :input").attr("disabled", false);
                $("#div_bp2 :input").attr("disabled", false);
                $("#div_bp3 :input").attr("disabled", false);

                $("#mlusi2").removeClass("elegant-color");
                $("#mlusi2").addClass("primary-color");
                $("#mlusi3").removeClass("elegant-color");
                $("#mlusi3").addClass("primary-color");
                $("#mpakan2").removeClass("elegant-color");
                $("#mpakan2").addClass("primary-color");
                $("#mpakan3").removeClass("elegant-color");
                $("#mpakan3").addClass("primary-color");

                hide();               
                console.log(data); 
                var arr = data.length;          
                
                for (var i in data){
                    if (arr == 2)
                    {
                        console.log("array 2");
                        arr2();
                        $("#updl").show();
                        $("#updp").show();

                        $("#idl1").val(data[0].id);
                        $("#idp1").val(data[1].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_pakan").val(data[1].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_pakan").val(data[1].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_p").val(data[1].tpm).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_pakan").val(data[1].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_pakan").val(data[1].sizing).trigger("change");

                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl2 :input").attr("disabled", true);
                        $("#div_bl3 :input").attr("disabled", true);
                        $("#div_bp2 :input").attr("disabled", true);
                        $("#div_bp3 :input").attr("disabled", true);

                    }
//-----------------------------------array jenis benang 1--------------------------------------//
                    else if(arr == 1)
                    {
                        //alert("Benang Hanya 1");                       
                        hide();
                        $("#m_b_lusi").val("").trigger("change");
                        $("#m_b_lusi2").val("").trigger("change");
                        $("#m_b_lusi3").val("").trigger("change");
                        $("#m_b_pakan").val("").trigger("change");
                        $("#m_b_pakan2").val("").trigger("change");
                        $("#m_b_pakan3").val("").trigger("change");

                        $("#m_d_lusi").val("").trigger("change");
                        $("#m_d_lusi2").val("").trigger("change");
                        $("#m_d_lusi3").val("").trigger("change");
                        $("#m_d_pakan").val("").trigger("change");
                        $("#m_d_pakan2").val("").trigger("change");
                        $("#m_d_pakan3").val("").trigger("change");

                        $("#m_tpm_l").val("").trigger("change");
                        $("#m_tpm_l_2").val("").trigger("change");
                        $("#m_tpm_l_3").val("").trigger("change");
                        $("#m_tpm_p").val("").trigger("change"); 
                        $("#m_tpm_p_2").val("").trigger("change"); 
                        $("#m_tpm_p_3").val("").trigger("change");   

                        $("#m_t_lusi").val("").trigger("change");
                        $("#m_t_lusi2").val("").trigger("change");
                        $("#m_t_lusi3").val("").trigger("change");
                        $("#m_t_pakan").val("").trigger("change");
                        $("#m_t_pakan2").val("").trigger("change");
                        $("#m_t_pakan3").val("").trigger("change");

                        $("#m_s_lusi").val("").trigger("change");
                        $("#m_s_lusi2").val("").trigger("change");
                        $("#m_s_lusi3").val("").trigger("change");
                        $("#m_s_pakan").val("").trigger("change");
                        $("#m_s_pakan2").val("").trigger("change");
                        $("#m_s_pakan3").val("").trigger("change");

                        $("#m_konstruksi").val("").trigger("change");
                        $("#m_pick_tenun").val("").trigger("change");
                        $("#m_total_end").val("").trigger("change");
                        $("#m_lebar_sisir").val("").trigger("change");
                        $("#idk_master").val(data[0].id_kain);
                    }
//-----------------------------------array jenis benang 2--------------------------------------//               
                    else if(arr == 0)
                    {
                        hide();
                        $("#m_b_lusi").val("").trigger("change");
                        $("#m_b_lusi2").val("").trigger("change");
                        $("#m_b_lusi3").val("").trigger("change");
                        $("#m_b_pakan").val("").trigger("change");
                        $("#m_b_pakan2").val("").trigger("change");
                        $("#m_b_pakan3").val("").trigger("change");

                        $("#m_d_lusi").val("").trigger("change");
                        $("#m_d_lusi2").val("").trigger("change");
                        $("#m_d_lusi3").val("").trigger("change");
                        $("#m_d_pakan").val("").trigger("change");
                        $("#m_d_pakan2").val("").trigger("change");
                        $("#m_d_pakan3").val("").trigger("change");

                        $("#m_tpm_l").val("").trigger("change");
                        $("#m_tpm_l_2").val("").trigger("change");
                        $("#m_tpm_l_3").val("").trigger("change");
                        $("#m_tpm_p").val("").trigger("change"); 
                        $("#m_tpm_p_2").val("").trigger("change"); 
                        $("#m_tpm_p_3").val("").trigger("change");   

                        $("#m_t_lusi").val("").trigger("change");
                        $("#m_t_lusi2").val("").trigger("change");
                        $("#m_t_lusi3").val("").trigger("change");
                        $("#m_t_pakan").val("").trigger("change");
                        $("#m_t_pakan2").val("").trigger("change");
                        $("#m_t_pakan3").val("").trigger("change");

                        $("#m_s_lusi").val("").trigger("change");
                        $("#m_s_lusi2").val("").trigger("change");
                        $("#m_s_lusi3").val("").trigger("change");
                        $("#m_s_pakan").val("").trigger("change");
                        $("#m_s_pakan2").val("").trigger("change");
                        $("#m_s_pakan3").val("").trigger("change");

                        $("#m_konstruksi").val("").trigger("change");
                        $("#m_pick_tenun").val("").trigger("change");
                        $("#m_total_end").val("").trigger("change");
                        $("#m_lebar_sisir").val("").trigger("change");
                        $("#idk_master").val(data[0].id_kain);
                        ///do nothing
                    }
//-----------------------------------array jenis benang 3--------------------------------------//
                    else if(arr == 3 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI')
                    {
                        console.log("array 3 Lusi, Lusi Pakan");
                        arr3_a();

                        $("#updl").show();
                        $("#updl2").show();
                        $("#updp").show();

                        $("#idl1").val(data[0].id);
                        $("#idl2").val(data[1].id);
                        $("#idp1").val(data[2].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_lusi2").val(data[1].benang).trigger("change");
                        $("#m_b_pakan").val(data[2].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_lusi2").val(data[1].denier).trigger("change");
                        $("#m_d_pakan").val(data[2].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#m_tpm_p").val(data[2].tpm).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_lusi").val(data[1].twisting).trigger("change");
                        $("#m_t_pakan").val(data[2].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_lusi2").val(data[1].sizing).trigger("change");
                        $("#m_s_pakan").val(data[2].sizing).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl3 :input").attr("disabled", true);
                        $("#div_bp2 :input").attr("disabled", true);
                        $("#div_bp3 :input").attr("disabled", true);                    
                    }
                    else if(arr == 3 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'PAKAN' && data[2].jenis_benang == 'PAKAN')
                    {
                        console.log("array 3 Lusi,Pakan,Pakan");
                        arr3_b();
                        $("#updl").show();
                        $("#updp").show();
                        $("#updp2").show();

                        $("#idl1").val(data[0].id);
                        $("#idp1").val(data[1].id);
                        $("#idp2").val(data[2].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_pakan").val(data[1].benang).trigger("change");
                        $("#m_b_pakan2").val(data[2].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_pakan").val(data[1].denier).trigger("change");
                        $("#m_d_pakan2").val(data[2].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_p").val(data[1].tpm).trigger("change");
                        $("#m_tpm_p_2").val(data[2].tpm).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_pakan").val(data[1].twisting).trigger("change");
                        $("#m_t_pakan2").val(data[2].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_pakan").val(data[1].sizing).trigger("change");
                        $("#m_s_pakan2").val(data[2].sizing).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl2 :input").attr("disabled", true);
                        $("#div_bl3 :input").attr("disabled", true);
                        $("#div_bp3 :input").attr("disabled", true);
                    }
//-----------------------------------array jenis benang 4--------------------------------------//
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'PAKAN' && data[3].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Lusi, Pakan, Pakan");
                        arr4_a();

                        $("#updl").show();
                        $("#updl2").show();
                        $("#updp").show();
                        $("#updp2").show();

                        
                        $("#idl1").val(data[0].id);
                        $("#idl2").val(data[1].id);
                        $("#idp1").val(data[2].id);
                        $("#idp2").val(data[3].id);


                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_lusi2").val(data[1].benang).trigger("change");
                        $("#m_b_pakan").val(data[2].benang).trigger("change");
                        $("#m_b_pakan2").val(data[3].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_lusi2").val(data[1].denier).trigger("change");
                        $("#m_d_pakan").val(data[2].denier).trigger("change");
                        $("#m_d_pakan2").val(data[3].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#m_tpm_p").val(data[2].tpm).trigger("change");
                        $("#m_tpm_p_2").val(data[3].tpm).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_lusi2").val(data[1].twisting).trigger("change");
                        $("#m_t_pakan").val(data[2].twisting).trigger("change");
                        $("#m_t_pakan2").val(data[3].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_lusi2").val(data[1].sizing).trigger("change");
                        $("#m_s_pakan").val(data[2].sizing).trigger("change");
                        $("#m_s_pakan2").val(data[3].sizing).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl3 :input").attr("disabled", true);
                        $("#div_bp3 :input").attr("disabled", true);
                    }
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Pakan, Pakan, Pakan");
                        arr4_b();

                        $("#updl").show();
                        $("#updp").show();
                        $("#updp2").show();
                        $("#updp3").show();

                        $("#idl1").val(data[0].id);
                        $("#idp1").val(data[1].id);
                        $("#idp2").val(data[2].id);
                        $("#idp3").val(data[3].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_pakan").val(data[1].benang).trigger("change");
                        $("#m_b_pakan2").val(data[2].benang).trigger("change");
                        $("#m_b_pakan3").val(data[3].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_pakan").val(data[1].denier).trigger("change");
                        $("#m_d_pakan2").val(data[2].denier).trigger("change");
                        $("#m_d_pakan3").val(data[3].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_p").val(data[1].tpm).trigger("change");
                        $("#m_tpm_p_2").val(data[2].tpm).trigger("change");
                        $("#m_tpm_p_3").val(data[3].tpm).trigger("change");

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_pakan").val(data[1].twisting).trigger("change");
                        $("#m_t_pakan2").val(data[2].twisting).trigger("change");
                        $("#m_t_pakan3").val(data[3].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_pakan").val(data[1].sizing).trigger("change");
                        $("#m_s_pakan2").val(data[2].sizing).trigger("change");
                        $("#m_s_pakan3").val(data[3].sizing).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl2 :input").attr("disabled", true);
                        $("#div_bl3 :input").attr("disabled", true);
                    }
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'LUSI' && data[3].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Lusi, Lusi, Pakan");
                        arr4_c();

                        $("#updl").show();
                        $("#updl2").show();
                        $("#updl3").show();
                        $("#updp").show();

                        $("#idl1").val(data[0].id);
                        $("#idl2").val(data[1].id);
                        $("#idl3").val(data[2].id);
                        $("#idp1").val(data[3].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_lusi2").val(data[1].benang).trigger("change");
                        $("#m_b_lusi3").val(data[2].benang).trigger("change");
                        $("#m_b_pakan").val(data[3].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_lusi2").val(data[1].denier).trigger("change");
                        $("#m_d_lusi3").val(data[2].denier).trigger("change");
                        $("#m_d_pakan").val(data[3].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#m_tpm_l_3").val(data[2].tpm).trigger("change");
                        $("#m_tpm_p").val(data[3].tpm).trigger("change"); 

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_lusi2").val(data[1].twisting).trigger("change");
                        $("#m_t_lusi3").val(data[2].twisting).trigger("change");
                        $("#m_t_pakan").val(data[3].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_lusi2").val(data[1].sizing).trigger("change");
                        $("#m_s_lusi3").val(data[2].sizing).trigger("change");
                        $("#m_s_pakan").val(data[3].sizing).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bp2 :input").attr("disabled", true);
                        $("#div_bp3 :input").attr("disabled", true);
                    }
//-----------------------------------array jenis benang 5--------------------------------------//
                    else if (arr == 5 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'PAKAN' && data[3].jenis_benang == 'PAKAN' && data[4].jenis_benang == 'PAKAN')
                    {
                        console.log("array 5 Lusi, Lusi, Pakan, Pakan, Pakan");
                        arr5_a();

                        $("#updl").show();
                        $("#updl2").show();
                        $("#updp").show();
                        $("#updp2").show();
                        $("#updp3").show();

                        
                        $("#idl1").val(data[0].id);
                        $("#idl2").val(data[1].id);
                        $("#idp1").val(data[2].id);
                        $("#idp2").val(data[3].id);
                        $("#idp3").val(data[4].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_lusi2").val(data[1].benang).trigger("change");
                        $("#m_b_pakan").val(data[2].benang).trigger("change");
                        $("#m_b_pakan2").val(data[3].benang).trigger("change");
                        $("#m_b_pakan3").val(data[4].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_lusi2").val(data[1].denier).trigger("change");
                        $("#m_d_pakan").val(data[2].denier).trigger("change");
                        $("#m_d_pakan2").val(data[3].denier).trigger("change");
                        $("#m_d_pakan3").val(data[4].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#m_tpm_p").val(data[2].tpm).trigger("change");
                        $("#m_tpm_p_2").val(data[3].tpm).trigger("change");   
                        $("#m_tpm_p_3").val(data[4].tpm).trigger("change");   

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_lusi2").val(data[1].twisting).trigger("change");
                        $("#m_t_pakan").val(data[2].twisting).trigger("change");
                        $("#m_t_pakan2").val(data[3].twisting).trigger("change");
                        $("#m_t_pakan3").val(data[4].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_lusi2").val(data[1].sizing).trigger("change");
                        $("#m_s_pakan").val(data[2].sizing).trigger("change");
                        $("#m_s_pakan2").val(data[3].sizing).trigger("change");
                        $("#m_s_pakan3").val(data[4].sizing).trigger("change");

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#div_bl3 :input").attr("disabled", true);
                    }
                    else if (arr == 5 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'LUSI' && data[3].jenis_benang == 'PAKAN' && data[4].jenis_benang == 'PAKAN')
                    {
                        $("#updl").show();
                        console.log("array 5 Lusi, Lusi, Lusi, Pakan, Pakan");
                        arr5_b();

                        $("#updl").show();
                        $("#updl2").show();
                        $("#updl3").show();
                        $("#updp").show();
                        $("#updp2").show();

                        $("#idl1").val(data[0].id);
                        $("#idl2").val(data[1].id);
                        $("#idl3").val(data[2].id);
                        $("#idp1").val(data[3].id);
                        $("#idp3").val(data[4].id);

                        $("#m_b_lusi").val(data[0].benang).trigger("change");
                        $("#m_b_lusi2").val(data[1].benang).trigger("change");
                        $("#m_b_lusi3").val(data[2].benang).trigger("change");
                        $("#m_b_pakan").val(data[3].benang).trigger("change");
                        $("#m_b_pakan2").val(data[4].benang).trigger("change");

                        $("#m_d_lusi").val(data[0].denier).trigger("change");
                        $("#m_d_lusi2").val(data[1].denier).trigger("change");
                        $("#m_d_lusi3").val(data[2].denier).trigger("change");
                        $("#m_d_pakan").val(data[3].denier).trigger("change");
                        $("#m_d_pakan2").val(data[4].denier).trigger("change");

                        $("#m_tpm_l").val(data[0].tpm).trigger("change");
                        $("#m_tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#m_tpm_l_3").val(data[2].tpm).trigger("change");
                        $("#m_tpm_p").val(data[3].tpm).trigger("change"); 
                        $("#m_tpm_p_2").val(data[4].tpm).trigger("change");   

                        $("#m_t_lusi").val(data[0].twisting).trigger("change");
                        $("#m_t_lusi2").val(data[1].twisting).trigger("change");
                        $("#m_t_lusi3").val(data[2].twisting).trigger("change");
                        $("#m_t_pakan").val(data[3].twisting).trigger("change");
                        $("#m_t_pakan2").val(data[4].twisting).trigger("change");

                        $("#m_s_lusi").val(data[0].sizing).trigger("change");
                        $("#m_s_lusi2").val(data[1].sizing).trigger("change");
                        $("#m_s_lusi3").val(data[2].sizing).trigger("change");
                        $("#m_s_pakan").val(data[3].sizing).trigger("change");
                        $("#m_s_pakan2").val(data[4].sizing).trigger("change");
                        $("#idk_master").val(data[0].id_kain);

                        $("#m_konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#m_pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#m_total_end").val(data[0].total_end).trigger("change");
                        $("#m_lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#div_bp3 :input").attr("disabled", true);
                    }
                }
            }
        });  
    }

    $('#updl').click(function(){
        var id = $("#idl1").val();
        var jb = 'LUSI';
        var benang = $("#m_b_lusi").val();
        var tpm = $("#m_tpm_l").val();
        var denier = $("#m_d_lusi").val();
        var twisting = $("#m_t_lusi").val();
        var sizing =$("#m_s_lusi").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updl").removeClass("btn btn-outline-success");
                $("#updl").addClass("btn btn-success");
            }
        });
    });

    $('#updl2').click(function(){
        var id = $("#f_data").val();
        var jb = 'LUSI';
        var benang = $("#m_b_lusi2").val();
        var tpm = $("#m_tpm_l2").val();
        var denier = $("#m_d_lusi2").val();
        var twisting = $("#m_t_lusi2").val();
        var sizing =$("#m_s_lusi2").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updl2").removeClass("btn btn-outline-success");
                $("#updl2").addClass("btn btn-success");
            }
        });

    });

    $('#updl3').click(function(){
        var id = $("#f_data").val();
        var jb = 'LUSI';
        var benang = $("#m_b_lusi3").val();
        var tpm = $("#m_tpm_l3").val();
        var denier = $("#m_d_lusi3").val();
        var twisting = $("#m_t_lusi3").val();
        var sizing =$("#m_s_lusi3").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updl3").removeClass("btn btn-outline-success");
                $("#updl3").addClass("btn btn-success");
            }
        });

    });

    $('#updp').click(function(){
        var id = $("#f_data").val();
        var jb = 'PAKAN';
        var benang = $("#m_b_pakan").val();
        var tpm = $("#m_tpm_p").val();
        var denier = $("#m_d_pakan").val();
        var twisting = $("#m_t_pakan").val();
        var sizing =$("#m_s_pakan").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updp").removeClass("btn btn-outline-success");
                $("#updp").addClass("btn btn-success");
            }
        });

    });

    $('#updp2').click(function(){
        var id = $("#f_data").val();
        var jb = 'PAKAN';
        var benang = $("#m_b_pakan2").val();
        var tpm = $("#m_tpm_p2").val();
        var denier = $("#m_d_pakan2").val();
        var twisting = $("#m_t_pakan2").val();
        var sizing =$("#m_s_pakan2").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updp2").removeClass("btn btn-outline-success");
                $("#updp2").addClass("btn btn-success");
            }
        });
    });

    $('#updp3').click(function(){
        var id = $("#f_data").val();
        var jb = 'PAKAN';
        var benang = $("#m_b_pakan3").val();
        var tpm = $("#m_tpm_p3").val();
        var denier = $("#m_d_pakan3").val();
        var twisting = $("#m_t_pakan3").val();
        var sizing =$("#m_s_pakan3").val();

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "MasterController/index",
        method:"POST",
        data:{id:id,jb:jb,benang:benang,tpm:tpm,denier:denier,twisting:twisting,sizing:sizing},             
            success:function(data){
                swal(data);
                $("#updp3").removeClass("btn btn-outline-success");
                $("#updp3").addClass("btn btn-success");
            }
        });
    });
</script>
</body>

</html>
