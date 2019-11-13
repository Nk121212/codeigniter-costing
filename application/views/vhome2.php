<html>
    <body><!--Main layout-->
    <main>
        <div class="container-fluid">
<form id="form" method="post" action="" hidden>
    <p>
        <label for="amount">Enter amount</label>
        <div class="flex">
            <span class="currency">Rp.</span>
            <input id="amount" name="amount" type="text" maxlength="15" />
        </div>
    </p>
</form>
            <!--Section: Intro-->
            <section class="mt-lg-5">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header white-text aqua-gradient">
                            Hitung Cost Greige 
                            <input type="text" name="idk" id="idk" value="<?php error_reporting(0); echo $id_kain;?>" hidden>
                        </div>
                        <div class="col-lg-8 col-md-6 card-body text-center">
                            <select class="browser-default custom-select" onchange="fill();" id="f_data"></select>
                        </div>
                        <div class="card-body row" id='kons'>
                            <div class="col-lg-3 md-form">
                                <input type="text" id="konstruksi" class="form-control">
                                <label for="konstruksi" class="iser">Konstruksi</label>
                            </div>
                            <div class="col-lg-3 md-form">
                                <input type="text" id="total_end" class="form-control">
                                <label for="total_end" class="iser">Total End</label>
                            </div>
                            <div class="col-lg-3 md-form">
                                <input type="text" id="pick_tenun" class="form-control">
                                <label for="pick_tenun" class="iser">Pick Tenun</label>
                            </div>
                            <div class="col-lg-3 md-form">
                                <input type="text" id="lebar_sisir" class="form-control">
                                <label for="lebar_sisir" class="iser">Lebar Sisir</label>
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

                                    <div class="list-group list-panel" id="div_bl">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="b_lusi">Benang Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="d_lusi">Denier Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_lusi();" id="tpm_l" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_l">TPM Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="ps_lusi" required>
                                                <label class="iser" for="ps_lusi">% Susut Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="pw_lusi" required>
                                                <label class="iser" for="pw_lusi">% Waste Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_lusi" required>
                                                <label class="iser" for="hb_lusi">Harga Benang Lusi</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_l" type="text" class="form-control" required>
                                                <label class="iser" for="da_l">Denier Actual Lusi</label>
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

                                    <div class="list-group list-panel" id="div_bp">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="b_pakan">Benang Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="d_pakan">Denier Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_pkn();" id="tpm_p" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_p">TPM Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="ps_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="ps_pakan">% Susut Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="pw_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="pw_pakan">% Waste Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_pakan" required>
                                                <label class="iser" for="hb_pakan">Harga Benang Pakan</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_p" type="text" class="form-control" required>
                                                <label class="iser" for="da_p">Denier Actual Pakan</label>
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

                                    <div class="list-group list-panel" id="div_bl2">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="b_lusi2">Benang Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="d_lusi2">Denier Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_lusi2();" id="tpm_l_2" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_l_2">TPM Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="ps_lusi2" required>
                                                <label class="iser" for="ps_lusi2">% Susut Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="pw_lusi2" required>
                                                <label class="iser" for="pw_lusi2">% Waste Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_lusi2" required>
                                                <label class="iser" for="hb_lusi2">Harga Benang Lusi 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_l_2" type="text" class="form-control" required>
                                                <label class="iser" for="da_l_2">Denier Actual Lusi 2</label>
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

                                    <div class="list-group list-panel" id="div_bp2">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="b_pakan2">Benang Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="d_pakan2">Denier Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_pkn2();" id="tpm_p_2" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_p_2">TPM Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="ps_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="ps_pakan2">% Susut Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="pw_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="pw_pakan2">% Waste Pakan2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_pakan2" required>
                                                <label class="iser" for="hb_pakan2">Harga Benang Pakan 2</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_p_2" type="text" class="form-control" required>
                                                <label class="iser" for="da_p_2">Denier Actual Pakan 2</label>
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

                                    <div class="list-group list-panel" id="div_bl3">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="b_lusi3">Benang Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="d_lusi3">Denier Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_lusi3();" id="tpm_l_3" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_l_3">TPM Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="ps_lusi3" required>
                                                <label class="iser" for="ps_lusi3">% Susut Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="pw_lusi3" required>
                                                <label class="iser" for="pw_lusi3">% Waste Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_lusi3" required>
                                                <label class="iser" for="hb_lusi3">Harga Benang Lusi 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_l_3" type="text" class="form-control" required>
                                                <label class="iser" for="da_l_3">Denier Actual Lusi 3</label>
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

                                    <div class="list-group list-panel" id="div_bp3">
                                        <div class="row">
                                            <div class="col-lg-12 md-form list-group-item">
                                                <input id="b_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="b_pakan3">Benang Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="d_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="d_pakan3">Denier Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" onkeyup="den_pkn3();" id="tpm_p_3" type="text" class="form-control" required>
                                                <label class="iser" for="tpm_p_3">TPM Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="ps_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="ps_pakan3">% Susut Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="pw_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="pw_pakan3">% Waste Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="hb_pakan3" required>
                                                <label class="iser" for="hb_pakan3">Harga Benang Pakan 3</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input onkeypress="validate(event)" id="da_p_3" type="text" class="form-control" required>
                                                <label class="iser" for="da_p_3">Denier Actual Pakan 3</label>
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

                    <div class="col-lg-12 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Input Field
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel" id="div_input">
                                        <div class="row">
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="h_pick" required>
                                                <label class="iser" for="h_pick">Harga/Pick</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="h_warping" required>
                                                <label class="iser" for="h_warping">Harga Warping/Kg</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="h_twist" required>
                                                <label class="iser" for="h_twist">Harga Twist/kg</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="h_sizing" required>
                                                <label class="iser" for="h_sizing">Harga Sizing/Kg</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="pskj" required>
                                                <label class="iser" for="pskj">% Susut Kain Jadi</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input onkeypress="validate(event)" type="text" class="form-control" id="bp" required>
                                                <label class="iser" for="bp">Biaya Pemrosesan</label>
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

                    <div class="col-sm-12" align="center">
                        <button type="button" class="btn btn-outline-success waves-effect" id="hitung"><i class="fa fa-check-square-o"></i> Hitung</button>
                    </div>

                    <div class="col-lg-12 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Result Field
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel" id="formula">
                                        <div class="row">
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="g_lusi">Gramasi Lusi</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="g_lusi2">Gramasi Lusi 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="g_lusi3">Gramasi Lusi 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="g_pakan">Gramasi Pakan</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="g_pakan2">Gramasi Pakan 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="g_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="g_pakan3">Gramasi Pakan 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="c_lusi">Cost Lusi</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="c_lusi2">Cost Lusi 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="c_lusi3">Cost Lusi 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="c_pakan">Cost Pakan</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="c_pakan2">Cost Pakan 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="c_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="c_pakan3">Cost Pakan 3</label>
                                            </div>

                                            <div class="col-lg-6 md-form list-group-item">
                                                <input type="text" class="form-control" id="p_cost" required>
                                                <label class="iser" for="p_cost">Pick Cost</label>
                                            </div>
                                            <div class="col-lg-6 md-form list-group-item">
                                                <input type="text" class="form-control" id="w_cost" required>
                                                <label class="iser" for="w_cost">Warping Cost</label>
                                            </div>

                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_lusi" required>
                                                <label class="iser" for="sc_lusi">Sizing Cost Lusi</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_lusi2" required>
                                                <label class="iser" for="sc_lusi2">Sizing Cost Lusi 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_lusi3" required>
                                                <label class="iser" for="sc_lusi3">Sizing Cost Lusi 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_pkn" required>
                                                <label class="iser" for="sc_pkn">Sizing Cost Pakan</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_pkn2" required>
                                                <label class="iser" for="sc_pkn2">Sizing Cost Pakan 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input type="text" class="form-control" id="sc_pkn3" required>
                                                <label class="iser" for="sc_pkn3">Sizing Cost Pakan 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_lusi" type="text" class="form-control" required>
                                                <label class="iser" for="tc_lusi">TPM Cost Lusi</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_lusi2" type="text" class="form-control" required>
                                                <label class="iser" for="tc_lusi2">TPM Cost Lusi 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_lusi3" type="text" class="form-control" required>
                                                <label class="iser" for="tc_lusi3">TPM Cost Lusi 3</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_pakan" type="text" class="form-control" required>
                                                <label class="iser" for="tc_pakan">TPM Cost Pakan</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_pakan2" type="text" class="form-control" required>
                                                <label class="iser" for="tc_pakan2">TPM Cost Pakan 2</label>
                                            </div>
                                            <div class="col-lg-2 md-form list-group-item">
                                                <input id="tc_pakan3" type="text" class="form-control" required>
                                                <label class="iser" for="tc_pakan3">TPM Cost Pakan 3</label>
                                            </div>                                            

                                            <div class="col-lg-3 md-form list-group-item">
                                                <input type="text" class="form-control right" id="g_cost" required>
                                                <label class="iser" for="g_cost">Greige Cost/mtr</label>
                                            </div>
                                            <div class="col-lg-3 md-form list-group-item">
                                                <input type="text" class="form-control right" id="g_cost2" required>
                                                <label class="iser" for="g_cost2">Greige Cost/mtr (Final)</label>
                                            </div>
                                            <div class="col-lg-3 md-form list-group-item">
                                                <input type="text" class="form-control right" id="hpp" required>
                                                <label class="iser" for="hpp">HPP</label>
                                            </div>
                                            <div class="col-lg-3 md-form list-group-item">
                                                <input type="text" class="form-control right" id="sellp" required>  
                                                <label class="iser" for="sellp">Sell Price</label>
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
                            <div class="col-sm-12" align="center">
                                <button type="button" class="btn btn-outline-danger waves-effect" onclick="reset()" id="ref"><i class="fa fa-refresh"></i> Refresh</button>
                                <button type="button" class="btn btn-outline-primary waves-effect" id="save" onclick="insert();" disabled><i class="fa fa-hdd-o"></i> Simpan</button>
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
    <!-- Manual Javascript Plugin -->   
    <script type="text/javascript" src="<?php echo base_url(); ?>js/formula.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/hitung.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/benang.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sizing.js"></script>
    <!-- Nice Alert Plugin-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/input_validasi/validasi.js"></script>
    <script type="text/javascript">
        
    </script>
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
    $(document).ready(function() {
        (function($, undefined) {
            "use strict";
            // When ready.
            $(function() {
                
                var $form = $( "#form" );
                var $input = $form.find( "input" );

                $input.on( "keyup", function( event ) {
                    
                    
                    // When user select text in the document, also abort.
                    var selection = window.getSelection().toString();
                    if ( selection !== '' ) {
                        return;
                    }
                    
                    // When the arrow keys are pressed, abort.
                    if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
                        return;
                    }
                    
                    
                    var $this = $( this );
                    
                    // Get the value.
                    var input = $this.val();
                    
                    var input = input.replace(/[\D\s\._\-]+/g, "");
                            input = input ? parseInt( input, 10 ) : 0;

                            $this.val( function() {
                                return ( input === 0 ) ? "" : input.toLocaleString( "id-ID" );
                            } );
                } );

                $form.on( "submit", function( event ) {
                    
                    var $this = $( this );
                    var arr = $this.serializeArray();
                
                    for (var i = 0; i < arr.length; i++) {
                            arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
                    };
                    
                    console.log( arr );
                    
                    event.preventDefault();
                });
                
            });
        })(jQuery);

    $("#save").hide();  

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "fillcontroller/index",
        method:"POST",
        data:{},                
            success:function(resp){                 
                $("#f_data").html(resp);
                    var idk = $("#idk").val();
                
                    if(idk == ""){
                        alert("Tidak Ada Data");
                    }else{
                        $("#f_data").val(idk).trigger("change"); 
                    }
            }  
        });
    });
    function insert(){
        //alert("belum pake fungsi");
        var id_kain = $("#f_data").val();

        var ps_lusi = $("#ps_lusi").val();
        var ps_lusi2 = $("#ps_lusi2").val();
        var ps_lusi3 = $("#ps_lusi3").val();
        var ps_pkn = $("#ps_pakan").val();
        var ps_pkn2 = $("#ps_pakan2").val();
        var ps_pkn3 = $("#ps_pakan3").val();
        var pw_lusi = $("#pw_lusi").val();
        var pw_lusi2 = $("#pw_lusi2").val();
        var pw_lusi3 = $("#pw_lusi3").val();
        var pw_pkn = $("#pw_pakan").val();
        var pw_pkn2 = $("#pw_pakan2").val();
        var pw_pkn3 = $("#pw_pakan3").val();

        var hb_lusi = $("#hb_lusi").val();
        var hb_lusi2 = $("#hb_lusi2").val();
        var hb_lusi3 = $("#hb_lusi3").val();
        var hb_pkn = $("#hb_pakan").val();
        var hb_pkn2 = $("#pw_pakan2").val();
        var hb_pkn3 = $("#pw_pakan3").val();

        var hrg_pick = $("#h_pick").val();
        var hw_kg = $("#h_warping").val();
        var ht_kg = $("#h_twist").val();
        var hs_kg = $("#h_sizing").val();
        var ps_kj = $("#pskj").val();
        var bp = $("#bp").val();


        var da_l = $("#da_l").val();
        var da_l2 = $("#da_l_2").val();
        var da_l3 = $("#da_l_3").val();
        var da_p = $("#da_p").val();
        var da_p2 = $("#da_p_2").val();
        var da_p3 = $("#da_p_3").val();
        var gl = $("#g_lusi").val();
        var gl2 = $("#g_lusi2").val();
        var gl3 = $("#g_lusi3").val();
        var gp = $("#g_pakan").val();
        var gp2 = $("#g_pakan2").val();
        var gp3 = $("#g_pakan3").val();
        var cl = $("#c_lusi").val();
        var cl2 = $("#c_lusi2").val();
        var cl3 = $("#c_lusi3").val();
        var cp = $("#c_pakan").val();
        var cp2 = $("#c_pakan2").val();
        var cp3 = $("#c_pakan3").val();
        var pc = $("#p_cost").val();
        var wc = $("#w_cost").val();
        var tcl = $("#tc_lusi").val();
        var tcl2 = $("#tc_lusi2").val();
        var tcl3 = $("#tc_lusi3").val();
        var tcp = $("#tc_pakan").val();
        var tcp2 = $("#tc_pakan2").val();
        var tcp3 = $("#tc_pakan3").val();
        var scl = $("#sc_lusi").val();
        var scl2 = $("#sc_lusi2").val();
        var scl3 = $("#sc_lusi3").val();
        var scp = $("#sc_pkn").val();
        var scp2 = $("#sc_pkn2").val();
        var scp3 = $("#sc_pkn3").val();
        var gc = $("#g_cost").val();
        var gc2 = $("#g_cost2").val();
        var hpp = $("#hpp").val();
        var sp = $("#sellp").val();
        
        if (id_kain == 0 || da_l == 0 || da_p == 0 || g_lusi == 0 || g_pakan ==0 || c_lusi == 0 || c_pakan == 0 || gc == 0 || gc2 == 0 || hpp == 0 || sp == 0){
            
            swal('Periksa Kembali Inputan Data !', '', 'warning');
        
        }else{

            $.ajax({  
            url: "<?php echo base_url(); ?>" + "fillcontroller/insert",
            method:"POST",
            data:{id_kain:id_kain,ps_lusi:ps_lusi,ps_lusi2:ps_lusi2,ps_lusi3:ps_lusi3,ps_pkn:ps_pkn,ps_pkn2:ps_pkn2,ps_pkn3:ps_pkn3,
            pw_lusi:pw_lusi,pw_lusi2:pw_lusi2,pw_lusi3:pw_lusi3,pw_pkn:pw_pkn,pw_pkn2:pw_pkn2,pw_pkn3:pw_pkn3,
            hb_lusi:hb_lusi,hb_lusi2:hb_lusi2,hb_lusi3:hb_lusi3,hb_pkn:hb_pkn,hb_pkn2:hb_pkn2,hb_pkn3:hb_pkn3,
            hrg_pick:hrg_pick,hw_kg:hw_kg,ht_kg:ht_kg,hs_kg:hs_kg,ps_kj:ps_kj,bp:bp,
            da_l:da_l,da_l2:da_l2,da_l3:da_l3,da_p:da_p,da_p2:da_p2,da_p3:da_p3,gl:gl,gl2:gl2,gl3:gl3,
            gp:gp,gp2:gp2,gp3:gp3,cl:cl,cl2:cl2,cl3:cl3,cp:cp,cp2:cp2,cp3:cp3,pc:pc,wc:wc,
            tcl:tcl,tcl2:tcl2,tcl3:tcl3,tcp:tcp,tcp2:tcp2,tcp3:tcp3,scl:scl,scl2:scl2,scl3:scl3,
            scp:scp,scp2:scp2,scp3:scp3,gc:gc,gc2:gc2,hpp:hpp,sp:sp},
                success:function(resp){     
                swal(resp);
                //location.reload();            
                }  
            });
        }   
    }

    function fill(){
        var s_id = $('#f_data').val();
        alert(s_id);
        document.getElementById("konstruksi").readOnly = true;
        document.getElementById("total_end").readOnly = true;
        document.getElementById("pick_tenun").readOnly = true;
        document.getElementById("lebar_sisir").readOnly = true;
        $("#save").hide();
        $.ajax({  
        url: "<?php echo base_url(); ?>" + "fillcontroller/autofill",
        method:"POST",
        data:{s_id:s_id},               
            success:function(data){ 
                //kosongkan kembali input data setelah fetch data baru
                $("#kons :input").val("");
                $("#div_bl :input").val("");
                $("#div_bl2 :input").val("");
                $("#div_bl3 :input").val("");
                $("#div_bp :input").val("");
                $("#div_bp2 :input").val("");
                $("#div_bp3 :input").val("");
                $("#formula :input").val("");
                $("#div_input :input").val("");

                $("#kons :input").attr("disabled", false);
                $("#div_bl :input").attr("disabled", false);
                $("#div_bl2 :input").attr("disabled", false);
                $("#div_bl3 :input").attr("disabled", false);
                $("#div_bp :input").attr("disabled", false);
                $("#div_bp2 :input").attr("disabled", false);
                $("#div_bp3 :input").attr("disabled", false);
                $("#formula :input").attr("disabled", false);
                $("#div_input :input").attr("disabled", false);

                $("#mlusi2").removeClass("elegant-color");
                $("#mlusi2").addClass("primary-color");
                $("#mlusi3").removeClass("elegant-color");
                $("#mlusi3").addClass("primary-color");
                
                $("#mpakan2").removeClass("elegant-color");
                $("#mpakan2").addClass("primary-color");
                $("#mpakan3").removeClass("elegant-color");
                $("#mpakan3").addClass("primary-color");


                console.log(data); 
                var arr = data.length;          
                
                for (var i in data){
//-----------------------------------array jenis benang 2--------------------------------------//
                    if (arr == 2)
                    {
                        console.log("array 2");
                        arr2();
                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_pakan").val(data[1].benang).trigger("change");          
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_pakan").val(data[1].denier).trigger("change");
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_p").val(data[1].tpm).trigger("change");
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");
                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_p").val(data[1].act_denier).trigger("change"); 

                        $("#ps_lusi").val(data[0].ps_lusi).trigger("change"); 
                        $("#ps_pakan").val(data[1].ps_pkn).trigger("change"); 
                        $("#pw_lusi").val(data[0].pw_lusi).trigger("change"); 
                        $("#pw_pakan").val(data[1].pw_pkn).trigger("change");
                        $("#hb_lusi").val(data[0].hb_lusi).trigger("change"); 
                        $("#hb_pakan").val(data[1].hb_pkn).trigger("change"); 

                        $("#h_pick").val(data[0].hp_pick).trigger("change"); 
                        $("#h_warping").val(data[1].hw_kg).trigger("change"); 
                        $("#h_twist").val(data[0].ht_kg).trigger("change"); 
                        $("#h_sizing").val(data[1].hs_kg).trigger("change");
                        $("#pskj").val(data[0].ps_kj).trigger("change"); 
                        $("#bp").val(data[1].biaya_proses).trigger("change"); 
                        
                        g_l1p1();

                        var sc1 = data[0].sizing;
                        var sc2 = data[1].sizing;

                        if ((sc1 == "YA" || sc1 == "SIZING") && (sc2 == "YA" || sc2 == "SIZING"))
                            {                   
                                console.log("sizing : ya ya");
                                jb2_sc_yy();
                                
                                    
                            }   
                            else if((sc1 == "TIDAK" || sc1 == "TWISTING") && (sc2 == "TIDAK" || sc2 == "TWISTING"))
                            {
                                console.log("sizing : tidak tidak");
                                jb2_sc_tt();    
                                                            
                            }
                            else if((sc1 == "YA" || sc1 == "SIZING") && (sc2 == "TIDAK" || sc2 == "TWISTING"))
                            {
                                console.log("sizing : ya tidak");
                                jb2_sc_yt();
                                    
                                
                            }
                            else if((sc1 == "TIDAK" || sc1 == "TWISTING") && (sc2 == "YA" || sc2 == "SIZING"))
                            {
                                console.log("sizing : tidak iya");
                                jb2_sc_ty();    
                                                                
                            }
                    }
//-----------------------------------array jenis benang 1--------------------------------------//
                    else if(arr == 1)
                    {
                        console.log("array 1");
                    }
//-----------------------------------array jenis benang 2--------------------------------------//               
                    else if(arr == 0)
                    {
                        
                    }
//-----------------------------------array jenis benang 3--------------------------------------//
                    else if(arr == 3 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI')
                    {
                        console.log("array 3 Lusi, Lusi Pakan");
                        arr3_a();

                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_lusi2").val(data[1].benang).trigger("change");
                        $("#b_pakan").val(data[2].benang).trigger("change");
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_lusi2").val(data[1].denier).trigger("change");
                        $("#d_pakan").val(data[2].denier).trigger("change");
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#tpm_p").val(data[2].tpm).trigger("change");
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        g_l2p1();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {
                            console.log("sizing : ya ya ya");
                            jb3_sc_yyy();                                                       
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak");
                            jb3_sc_ttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak");
                            jb3_sc_ytt();
                            
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak");
                            jb3_sc_yyt();
                            
                            
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya");
                            jb3_sc_tyy();
                            
                                            
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya");
                            jb3_sc_tty();
                                        
                        }
                    }
                    else if(arr == 3 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'PAKAN' && data[2].jenis_benang == 'PAKAN')
                    {
                        console.log("array 3 Lusi,Pakan,Pakan");

                        arr3_b();

                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_p").val(data[1].act_denier).trigger("change");
                        $("#da_p_2").val(data[2].act_denier).trigger("change");
                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_pakan").val(data[1].benang).trigger("change");
                        $("#b_pakan2").val(data[2].benang).trigger("change");     
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_pakan").val(data[1].denier).trigger("change");
                        $("#d_pakan2").val(data[2].denier).trigger("change"); 
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_p").val(data[1].tpm).trigger("change");
                        $("#tpm_p_2").val(data[2].tpm).trigger("change");
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        $("#tc_lusi").attr("disabled",false);
                        $("#tc_pakan").attr("disabled",false);
                        $("#tc_pakan2").attr("disabled",false);

                        g_l1p2();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya");
                            jb3_sc_yyy2();
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak");
                            jb3_sc_ttt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak");
                            jb3_sc_ytt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak");
                            jb3_sc_yyt2();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya");
                            jb3_sc_tyy2();      
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya");
                            jb3_sc_tty2();                  
                        }

                    }
//-----------------------------------array jenis benang 4--------------------------------------//
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'PAKAN' && data[3].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Lusi, Pakan, Pakan");

                        arr4_a();

                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_l_2").val(data[1].act_denier).trigger("change");
                        $("#da_p").val(data[2].act_denier).trigger("change");
                        $("#da_p_2").val(data[3].act_denier).trigger("change");
                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_lusi2").val(data[1].benang).trigger("change");
                        $("#b_pakan").val(data[2].benang).trigger("change");
                        $("#b_pakan2").val(data[3].benang).trigger("change");
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_lusi2").val(data[1].denier).trigger("change");
                        $("#d_pakan").val(data[2].denier).trigger("change");
                        $("#d_pakan2").val(data[3].denier).trigger("change");
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#tpm_p").val(data[2].tpm).trigger("change");
                        $("#tpm_p_2").val(data[3].tpm).trigger("change");
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        g_l2p2();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya ya");
                            jb4_sc_yyyy();
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak tidak");
                            jb4_sc_tttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak tidak");
                            jb4_sc_yttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak tidak");
                            jb4_sc_yytt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya tidak");
                            jb4_sc_yyyt();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya ya");
                            jb4_sc_tyyy();                      
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya ya");
                            jb4_sc_ttyy();                      
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak ya");
                            jb4_sc_ttty();                      
                        }
                    }
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Pakan, Pakan, Pakan");

                        arr4_b();

                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_p").val(data[1].act_denier).trigger("change");
                        $("#da_p_2").val(data[2].act_denier).trigger("change");
                        $("#da_p_3").val(data[3].act_denier).trigger("change");
                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_pakan").val(data[1].benang).trigger("change");
                        $("#b_pakan2").val(data[2].benang).trigger("change");
                        $("#b_pakan3").val(data[3].benang).trigger("change");
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_pakan").val(data[1].denier).trigger("change");
                        $("#d_pakan2").val(data[2].denier).trigger("change");
                        $("#d_pakan3").val(data[3].denier).trigger("change");
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_p").val(data[1].tpm).trigger("change");
                        $("#tpm_p_2").val(data[2].tpm).trigger("change");
                        $("#tpm_p_3").val(data[3].tpm).trigger("change");     
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        g_l1p3();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya ya");
                            jb4_sc_yyyy2(); 
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak tidak");
                            jb4_sc_tttt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak tidak");
                            jb4_sc_yttt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak tidak");
                            jb4_sc_yytt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya tidak");
                            jb4_sc_yyyt2();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya ya");
                            jb4_sc_tyyy2();                         
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya ya");
                            jb4_sc_ttyy2();                     
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak ya");
                            jb4_sc_ttty2();                         
                        }
                    }
                    else if (arr == 4 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'LUSI' && data[3].jenis_benang == 'PAKAN')
                    {
                        console.log("array 4 Lusi, Lusi, Lusi, Pakan");
                        
                        arr4_c();

                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_l_2").val(data[1].act_denier).trigger("change");
                        $("#da_l_3").val(data[2].act_denier).trigger("change");
                        $("#da_p").val(data[3].act_denier).trigger("change");
                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_lusi2").val(data[1].benang).trigger("change");
                        $("#b_lusi3").val(data[2].benang).trigger("change");
                        $("#b_pakan").val(data[3].benang).trigger("change");
                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_lusi2").val(data[1].denier).trigger("change");
                        $("#d_lusi3").val(data[2].denier).trigger("change");
                        $("#d_pakan").val(data[3].denier).trigger("change");
                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#tpm_l_3").val(data[2].tpm).trigger("change");
                        $("#tpm_p").val(data[3].tpm).trigger("change");       
                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        g_l3p1();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya ya");
                            jb4_sc_yyyy3();
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak tidak");
                            jb4_sc_tttt3();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak tidak");
                            jb4_sc_yttt3();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak tidak");
                            jb4_sc_yytt3();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya tidak");
                            jb4_sc_yyyt3();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya ya");
                            jb4_sc_tyyy3();                     
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya ya");
                            jb4_sc_ttyy3();                     
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak ya");
                            jb4_sc_ttty3();                         
                        }
                    }
//-----------------------------------array jenis benang 5--------------------------------------//
                    else if (arr == 5 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'PAKAN' && data[3].jenis_benang == 'PAKAN' && data[4].jenis_benang == 'PAKAN')
                    {
                        console.log("array 5 Lusi, Lusi, Pakan, Pakan, Pakan");
                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_l_2").val(data[1].act_denier).trigger("change");
                        $("#da_p").val(data[2].act_denier).trigger("change");
                        $("#da_p_2").val(data[3].act_denier).trigger("change");
                        $("#da_p_3").val(data[4].act_denier).trigger("change");

                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_lusi2").val(data[1].benang).trigger("change");
                        $("#b_pakan").val(data[2].benang).trigger("change");
                        $("#b_pakan2").val(data[3].benang).trigger("change");
                        $("#b_pakan3").val(data[4].benang).trigger("change");

                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_lusi2").val(data[1].denier).trigger("change");
                        $("#d_pakan").val(data[2].denier).trigger("change");
                        $("#d_pakan2").val(data[3].denier).trigger("change");
                        $("#d_pakan3").val(data[4].denier).trigger("change");

                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#tpm_p").val(data[2].tpm).trigger("change");
                        $("#tpm_p_2").val(data[3].tpm).trigger("change"); 
                        $("#tpm_p_3").val(data[4].tpm).trigger("change"); 

                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        g_l2p3();

                        arr5_a();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya ya ya");
                            jb5_sc_yyyyy();
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak tidak tidak");
                            jb5_sc_ttttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak tidak tidak");
                            jb5_sc_ytttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak tidak tidak");
                            jb5_sc_yyttt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya tidak tidak");
                            jb5_sc_yyytt();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya ya tidak");
                            jb5_sc_yyyyt();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya ya ya");
                            jb5_sc_tyyyy();                     
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya ya ya");
                            jb5_sc_ttyyy();                         
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak ya ya");
                            jb5_sc_tttyy();                     
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak tidak ya");
                            jb5_sc_tttty();                     
                        }
                    }
                    else if (arr == 5 && data[0].jenis_benang == 'LUSI' && data[1].jenis_benang == 'LUSI' && data[2].jenis_benang == 'LUSI' && data[3].jenis_benang == 'PAKAN' && data[4].jenis_benang == 'PAKAN')
                    {
                        console.log("array 5 Lusi, Lusi, Lusi, Pakan, Pakan");
                        $("#da_l").val(data[0].act_denier).trigger("change");
                        $("#da_l_2").val(data[1].act_denier).trigger("change");
                        $("#da_l_3").val(data[2].act_denier).trigger("change");
                        $("#da_p").val(data[3].act_denier).trigger("change");
                        $("#da_p_2").val(data[4].act_denier).trigger("change");

                        $("#b_lusi").val(data[0].benang).trigger("change");
                        $("#b_lusi2").val(data[1].benang).trigger("change");
                        $("#b_lusi3").val(data[2].benang).trigger("change");
                        $("#b_pakan").val(data[3].benang).trigger("change");
                        $("#b_pakan2").val(data[4].benang).trigger("change");

                        $("#d_lusi").val(data[0].denier).trigger("change");
                        $("#d_lusi2").val(data[1].denier).trigger("change");
                        $("#d_lusi3").val(data[2].denier).trigger("change");
                        $("#d_pakan").val(data[3].denier).trigger("change");
                        $("#d_pakan2").val(data[4].denier).trigger("change");

                        $("#tpm_l").val(data[0].tpm).trigger("change");
                        $("#tpm_l_2").val(data[1].tpm).trigger("change");
                        $("#tpm_l_3").val(data[2].tpm).trigger("change");
                        $("#tpm_p").val(data[3].tpm).trigger("change");   
                        $("#tpm_p_2").val(data[4].tpm).trigger("change"); 

                        $("#konstruksi").val(data[0].konstruksi).trigger("change");
                        $("#pick_tenun").val(data[0].pick_tenun).trigger("change");
                        $("#total_end").val(data[0].total_end).trigger("change");
                        $("#lebar_sisir").val(data[0].lebar_sisir).trigger("change");

                        arr5_b();
                        g_l3p2();

                        if ((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {                   
                            console.log("sizing : ya ya ya ya ya");
                            jb5_sc_yyyyy2();
                        }   
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : tidak tidak tidak tidak tidak");
                            jb5_sc_ttttt2();
                            
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya tidak tidak tidak tidak");
                            jb5_sc_ytttt2();
                            
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya tidak tidak tidak");
                            jb5_sc_yyttt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya tidak tidak");
                            jb5_sc_yyytt2();
                        }
                        else if((data[0].sizing == "YA" || data[0].sizing == "SIZING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "TIDAK" || data[4].sizing == "TWISTING"))
                        {
                            console.log("sizing : ya ya ya ya tidak");
                            jb5_sc_yyyyt2();
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "YA" || data[1].sizing == "SIZING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak ya ya ya ya");
                            jb5_sc_tyyyy2();                        
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "YA" || data[2].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING"))
                        {
                            console.log("tidak tidak ya ya ya");
                            jb5_sc_ttyyy2();                        
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "YA" || data[3].sizing == "SIZING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak ya ya");
                            jb5_sc_tttyy2();                                
                        }
                        else if((data[0].sizing == "TIDAK" || data[0].sizing == "TWISTING") && (data[1].sizing == "TIDAK" || data[1].sizing == "TWISTING") && (data[2].sizing == "TIDAK" || data[2].sizing == "TWISTING") && (data[3].sizing == "TIDAK" || data[3].sizing == "TWISTING") && (data[4].sizing == "YA" || data[4].sizing == "SIZING"))
                        {
                            console.log("tidak tidak tidak tidak ya");
                            jb5_sc_tttty2();                            
                        }
                    }
//-----------------------------------array jenis benang 6--------------------------------------//
                    else if(arr == 6)
                    {
                        console.log("array 6 No kondisi");
                        arr6();
                    }       
                }
            }  //-----------------tutup success function ajax----------------
        });//----------------------tutup ajax-----------------------------------
    }//----------------------------tutup fungsi fill-----------------------------
    </script>
    </body>

</html>
