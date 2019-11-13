    <!--Main layout-->
    <main>
        <div class="container-fluid">

            <!--Section: Intro-->
            <section class="mt-lg-5">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header white-text aqua-gradient">
                            Tambah Master Kain
                        </div>
                        <div class="card-body row">
                            <div class="col-lg-4 md-form">
                                <input id="nama_kain" type="text" class="form-control" required>
                                <label class="iser" for="nama_kain">Nama Kain</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input id="id_kain" type="text" class="form-control" required>
                                <label class="iser" for="id_kain">Id Kain</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input id="konstruksi" type="text" class="form-control" required>
                                <label class="iser" for="konstruksi">Konstruksi</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input onkeypress="validate(event)" id="pick_tenun" type="text" class="form-control" required>
                                <label class="iser" for="pick_tenun">Pick Tenun</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input onkeypress="validate(event)" id="total_end" type="text" class="form-control" required>
                                <label class="iser" for="total_end">Total End</label>
                            </div>
                            <div class="col-lg-4 md-form">
                                <input onkeypress="validate(event)" id="lebar_sisir" type="text" class="form-control" required>
                                <label class="iser" for="lebar_sisir">Lebar Sisir</label>
                            </div>
                            <div class="col-lg-6 md-form">
                                <select onchange="jl();valid_cek();" class="browser-default custom-select" id="jlusi" onchange="jl();">
                                    <option value="">Jumlah Lusi</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-lg-6 md-form">
                                <select onchange="jp();valid_cek();" class="browser-default custom-select" id="jpakan" onchange="jp();">
                                <option value="">Jumlah Pakan</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color" id="l1">
                                Lusi 1
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bl">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_lusi" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_lusi">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_lusi" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_lusi">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_lusi" type="text" class="form-control right" required>
                                                <label class="iser" for="b_lusi">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi" type="text" class="form-control right" required>
                                                <label class="iser" for="d_lusi">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_lusi" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">YA</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_lusi" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">YA</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                            <div class="card-header white-text primary-color" id="p1">
                                Pakan 1
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bp">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_pakan" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_pakan">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_pakan" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_pakan">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_pakan" type="text" class="form-control right" required>
                                                <label class="iser" for="b_pakan">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan" type="text" class="form-control right" required>
                                                <label class="iser" for="d_pakan">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_pakan" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_pakan" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                            <div class="card-header white-text primary-color" id="l2">
                                Lusi 2
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bl2">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_lusi2" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_lusi2">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_lusi2" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_lusi2">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_lusi2" type="text" class="form-control right" required>
                                                <label class="iser" for="b_lusi2">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi2" type="text" class="form-control right" required>
                                                <label class="iser" for="d_lusi2">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_lusi2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_lusi2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                            <div class="card-header white-text primary-color" id="p2">
                                Pakan 2
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bp2">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_pakan2" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_pakan2">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_pakan2" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_pakan2">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_pakan2" type="text" class="form-control right" required>
                                                <label class="iser" for="b_pakan2">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan2" type="text" class="form-control right" required>
                                                <label class="iser" for="d_pakan2">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_pakan2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_pakan2" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                            <div class="card-header white-text primary-color" id="l3">
                                Lusi 3
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bl3">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_lusi3" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_lusi3">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_lusi3" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_lusi3">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_lusi3" type="text" class="form-control right" required>
                                                <label class="iser" for="b_lusi3">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi3" type="text" class="form-control right" required>
                                                <label class="iser" for="d_lusi3">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_lusi3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_lusi3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                            <div class="card-header white-text primary-color" id="p3">
                                Pakan 3
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div class="row" id="tk_bp3">
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="jb_pakan3" type="text" class="form-control right" required>
                                                <label class="iser" for="jb_pakan3">Jenis Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="tpm_pakan3" type="text" class="form-control right" required>
                                                <label class="iser" for="tpm_pakan3">TPM</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input id="b_pakan3" type="text" class="form-control right" required>
                                                <label class="iser" for="b_pakan3">Benang</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan3" type="text" class="form-control right" required>
                                                <label class="iser" for="d_pakan3">Denier</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="t_pakan3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Twisting--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <select id="s_pakan3" class="mdb-select colorful-select dropdown-info mx-2 md-form mt-3">
                                                    <option value="">--Sizing--</option>
                                                    <option value="YA">Y</option>
                                                    <option value="TIDAK">TDK</option>
                                                </select required>
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
                    <div class="col-lg-12 md-form" align="center">
                        <button onclick="ins_kain();" class="btn btn-outline-primary" id="bm_kain"><i class="fa fa-floppy-o"></i> Simpan</button>
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
        $(document).ready(function(){
            //disabled all dulu
            //alert("ahay");
            $("#l1").removeClass("primary-color");
            $("#l1").addClass("elegant-color-dark");

            $("#l2").removeClass("primary-color");
            $("#l2").addClass("elegant-color-dark");

            $("#l3").removeClass("primary-color");
            $("#l3").addClass("elegant-color-dark");

            $("#p1").removeClass("primary-color");
            $("#p1").addClass("elegant-color-dark");

            $("#p2").removeClass("primary-color");
            $("#p2").addClass("elegant-color-dark");

            $("#p3").removeClass("primary-color");
            $("#p3").addClass("elegant-color-dark");

            $("#tk_bl :input").attr("disabled",true);
            $("#tk_bl2 :input").attr("disabled",true);
            $("#tk_bl3 :input").attr("disabled",true);
            $("#tk_bp :input").attr("disabled",true);
            $("#tk_bp2 :input").attr("disabled",true);
            $("#tk_bp3 :input").attr("disabled",true);
            $("#bm_kain").attr("disabled",true);

        });

        function jl(){
            var jml = $("#jlusi").val();

            $("#tk_bl :input").attr("disabled",true);
            $("#tk_bl2 :input").attr("disabled",true);
            $("#tk_bl3 :input").attr("disabled",true);
            $("#bm_kain").attr("disabled",true);

            if(jml == 1){
                $("#tk_bl :input").attr("disabled",false);

                $("#l1").removeClass("elegant-color-dark");
                $("#l1").addClass("primary-color");

                $("#l2").removeClass("primary-color");
                $("#l2").addClass("elegant-color-dark");
                $("#l3").removeClass("primary-color");
                $("#l3").addClass("elegant-color-dark");
                $("#jb_lusi").val("LUSI").trigger("change");
                $("#jb_lusi2").val("").trigger("change");
                $("#jb_lusi3").val("").trigger("change");
            }
            else if(jml == 2){
                $("#tk_bl :input").attr("disabled",false);
                $("#tk_bl2 :input").attr("disabled",false);
                
                $("#l1").removeClass("elegant-color-dark");
                $("#l1").addClass("primary-color");
                $("#l2").removeClass("elegant-color-dark");
                $("#l2").addClass("primary-color");

                $("#l3").removeClass("primary-color");
                $("#l3").addClass("elegant-color-dark");

                $("#jb_lusi").val("LUSI").trigger("change");
                $("#jb_lusi2").val("LUSI").trigger("change");
                $("#jb_lusi3").val("").trigger("change");
            }
            else if(jml == 3){
                $("#tk_bl :input").attr("disabled",false);
                $("#tk_bl2 :input").attr("disabled",false);
                $("#tk_bl3 :input").attr("disabled",false);
                $("#jb_lusi").val("LUSI").trigger("change");
                $("#jb_lusi2").val("LUSI").trigger("change");
                $("#jb_lusi3").val("LUSI").trigger("change");
                $("#l1").removeClass("elegant-color-dark");
                $("#l1").addClass("primary-color");
                $("#l2").removeClass("elegant-color-dark");
                $("#l2").addClass("primary-color");
                $("#l3").removeClass("elegant-color-dark");
                $("#l3").addClass("primary-color");
            }else{
                $("#jb_lusi").val("").trigger("change");
                $("#jb_lusi2").val("").trigger("change");
                $("#jb_lusi3").val("").trigger("change");
                $("#tk_bl :input").attr("disabled",true);
                $("#tk_bl2 :input").attr("disabled",true);
                $("#tk_bl3 :input").attr("disabled",true);

                $("#l1").removeClass("primary-color");
                $("#l1").addClass("elegant-color-dark");
                $("#l2").removeClass("primary-color");
                $("#l2").addClass("elegant-color-dark");
                $("#l3").removeClass("primary-color");
                $("#l3").addClass("elegant-color-dark");
            }
        }
        function jp(){
            var jmp = $("#jpakan").val();

            $("#tk_bp :input").attr("disabled",true);
            $("#tk_bp2 :input").attr("disabled",true);
            $("#tk_bp3 :input").attr("disabled",true);
            $("#bm_kain").attr("disabled",true);

            if(jmp == 1){
                $("#tk_bp :input").attr("disabled",false);
                $("#p1").removeClass("elegant-color-dark");
                $("#p1").addClass("primary-color");

                $("#p2").removeClass("primary-color");
                $("#p2").addClass("elegant-color-dark");
                $("#p3").removeClass("primary-color");
                $("#p3").addClass("elegant-color-dark");

                $("#jb_pakan").val("PAKAN").trigger("change");
                $("#jb_pakan2").val("").trigger("change");
                $("#jb_pakan3").val("").trigger("change");
            }
            else if(jmp == 2){
                $("#tk_bp :input").attr("disabled",false);
                $("#tk_bp2 :input").attr("disabled",false);
                $("#jb_pakan").val("PAKAN").trigger("change");
                $("#jb_pakan2").val("PAKAN").trigger("change");
                $("#jb_pakan3").val("").trigger("change");

                $("#p1").removeClass("elegant-color-dark");
                $("#p1").addClass("primary-color");
                $("#p2").removeClass("elegant-color-dark");
                $("#p2").addClass("primary-color");

                $("#p3").removeClass("primary-color");
                $("#p3").addClass("elegant-color-dark");
            }
            else if(jmp == 3){
                $("#tk_bp :input").attr("disabled",false);
                $("#tk_bp2 :input").attr("disabled",false);
                $("#tk_bp3 :input").attr("disabled",false);

                $("#p1").removeClass("elegant-color-dark");
                $("#p1").addClass("primary-color");
                $("#p2").removeClass("elegant-color-dark");
                $("#p2").addClass("primary-color");
                $("#p3").removeClass("elegant-color-dark");
                $("#p3").addClass("primary-color");

                $("#jb_pakan").val("PAKAN").trigger("change");
                $("#jb_pakan2").val("PAKAN").trigger("change");
                $("#jb_pakan3").val("PAKAN").trigger("change");
            }
            else{
                $("#jb_pakan").val("").trigger("change");
                $("#jb_pakan2").val("").trigger("change");
                $("#jb_pakan3").val("").trigger("change");
                $("#p1").removeClass("primary-color");
                $("#p1").addClass("elegant-color-dark");
                $("#p2").removeClass("primary-color");
                $("#p2").addClass("elegant-color-dark");
                $("#p3").removeClass("primary-color");
                $("#p3").addClass("elegant-color-dark");
                $("#tk_bp :input").attr("disabled",true);
                $("#tk_bp2 :input").attr("disabled",true);
                $("#tk_bp3 :input").attr("disabled",true);
                
            }
        }
        function valid_cek(){
            var jml = $("#jlusi").val();
            var jmp = $("#jpakan").val();
            var total = (+jml + +jmp);
            //alert(total);

            if(jml >= 1 && jmp >= 1){
                if(total <= 5){
                    $("#bm_kain").attr("disabled",false);  
                }else{
                    alert("Maksimal 5 Benang !");
                    $("#jlusi").val("");
                    $("#jpakan").val("");

                    $("#jb_lusi").val("").trigger("change");
                    $("#jb_lusi2").val("").trigger("change");
                    $("#jb_lusi3").val("").trigger("change");
                    $("#tk_bl :input").attr("disabled",true);
                    $("#tk_bl2 :input").attr("disabled",true);
                    $("#tk_bl3 :input").attr("disabled",true);

                    $("#l1").removeClass("primary-color");
                    $("#l1").addClass("elegant-color-dark");
                    $("#l2").removeClass("primary-color");
                    $("#l2").addClass("elegant-color-dark");
                    $("#l3").removeClass("primary-color");
                    $("#l3").addClass("elegant-color-dark");
                    
                    $("#jb_pakan").val("").trigger("change");
                    $("#jb_pakan2").val("").trigger("change");
                    $("#jb_pakan3").val("").trigger("change");
                    $("#p1").removeClass("primary-color");
                    $("#p1").addClass("elegant-color-dark");
                    $("#p2").removeClass("primary-color");
                    $("#p2").addClass("elegant-color-dark");
                    $("#p3").removeClass("primary-color");
                    $("#p3").addClass("elegant-color-dark");
                    $("#tk_bp :input").attr("disabled",true);
                    $("#tk_bp2 :input").attr("disabled",true);
                    $("#tk_bp3 :input").attr("disabled",true);
                }
                              
            }else{

                $("#bm_kain").attr("disabled",true);
                
            }
        }
        function ins_kain(){
            var nm_kain = $("#nama_kain").val();
            var id_kain = $("#id_kain").val();
            var konstruksi = $("#konstruksi").val(); 
            var pick_tenun = $("#pick_tenun").val();
            var total_end = $("#total_end").val();
            var lebar_sisir = $("#lebar_sisir").val();

            //lusi var
            var jb_lusi = $("#jb_lusi").val();
            var jb_lusi2 = $("#jb_lusi2").val();
            var jb_lusi3 = $("#jb_lusi3").val();

            var tpm_lusi = $("#tpm_lusi").val();
            var tpm_lusi2 = $("#tpm_lusi2").val();
            var tpm_lusi3 = $("#tpm_lusi3").val();

            var b_lusi = $("#b_lusi").val();
            var b_lusi2 = $("#b_lusi2").val();
            var b_lusi3 = $("#b_lusi3").val();

            var d_lusi = $("#d_lusi").val();
            var d_lusi2 = $("#d_lusi2").val();
            var d_lusi3 = $("#d_lusi3").val();

            var t_lusi = $("#t_lusi").val();
            var t_lusi2 = $("#t_lusi2").val();
            var t_lusi3 = $("#t_lusi3").val();

            var s_lusi = $("#s_lusi").val();
            var s_lusi2 = $("#s_lusi2").val();
            var s_lusi3 = $("#s_lusi3").val();

            //pakan var
            var jb_pakan = $("#jb_pakan").val();
            var jb_pakan2 = $("#jb_pakan2").val();
            var jb_pakan3 = $("#jb_pakan3").val();

            var tpm_pakan = $("#tpm_pakan").val();
            var tpm_pakan2 = $("#tpm_pakan2").val();
            var tpm_pakan3 = $("#tpm_pakan3").val();

            var b_pakan = $("#b_pakan").val();
            var b_pakan2 = $("#b_pakan2").val();
            var b_pakan3 = $("#b_pakan3").val();

            var d_pakan = $("#d_pakan").val();
            var d_pakan2 = $("#d_pakan2").val();
            var d_pakan3 = $("#d_pakan3").val();

            var t_pakan = $("#t_pakan").val();
            var t_pakan2 = $("#t_pakan2").val();
            var t_pakan3 = $("#t_pakan3").val();

            var s_pakan = $("#s_pakan").val();
            var s_pakan2 = $("#s_pakan2").val();
            var s_pakan3 = $("#s_pakan3").val();

            var jml = $("#jlusi").val();
            var jmp = $("#jpakan").val();
            if (nm_kain == 0 || id_kain == 0 || konstruksi == 0 || pick_tenun == 0 || lebar_sisir == 0){
                swal ( "Failed !" ,  "Periksa Inputan Data !" ,  "error" )
            }else{
                $.ajax({  
                    url: "<?php echo base_url(); ?>" + "KainController/index",
                    method:"POST",
                    data:{nm_kain:nm_kain,id_kain:id_kain,konstruksi:konstruksi,pick_tenun:pick_tenun,total_end:total_end,lebar_sisir:lebar_sisir,jb_lusi:jb_lusi,jb_lusi2:jb_lusi2,jb_lusi3:jb_lusi3,tpm_lusi:tpm_lusi,tpm_lusi2:tpm_lusi2,tpm_lusi3:tpm_lusi3,b_lusi:b_lusi,b_lusi2:b_lusi2,b_lusi3:b_lusi3,d_lusi:d_lusi,d_lusi2:d_lusi2,d_lusi3:d_lusi3,t_lusi:t_lusi,t_lusi2:tpm_lusi2,t_lusi3:t_lusi3,s_lusi:s_lusi,s_lusi2:s_lusi2,s_lusi3:s_lusi3,jb_pakan:jb_pakan,jb_pakan2:jb_pakan2,jb_pakan3:jb_pakan3,tpm_pakan:tpm_pakan,tpm_pakan2:tpm_pakan2,tpm_pakan3:tpm_pakan3,b_pakan:b_pakan,b_pakan2:b_pakan2,b_pakan3:b_pakan3,d_pakan:d_pakan,d_pakan2:d_pakan2,d_pakan3:d_pakan3,t_pakan:t_pakan,t_pakan2:t_pakan2,t_pakan3:t_pakan3,s_pakan:s_pakan,s_pakan2:s_pakan2,s_pakan3:s_pakan3,jml:jml,jmp:jmp},               
                        success:function(resp){                 
                            alert(resp);
                        }  
                });
            }
        }
    </script>
    </body>
</html>
