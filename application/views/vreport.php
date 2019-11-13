    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dttable/css/datatables.min.css">
    <style type="text/css">
        table.dataTable thead>tr>td.sorting,
        table.dataTable thead>tr>td.sorting_asc,
        table.dataTable thead>tr>td.sorting_desc,
        table.dataTable thead>tr>th.sorting,
        table.dataTable thead>tr>th.sorting_asc,
        table.dataTable thead>tr>th.sorting_desc {
          padding-right: 30px
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_asc_disabled,
        table.dataTable thead .sorting_desc,
        table.dataTable thead .sorting_desc_disabled {
          cursor: pointer;
          position: relative
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
          position: absolute;
          bottom: .9em;
          display: block;
          opacity: .3
        }

        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:before {
          right: 1em;
          content: "\f0de";
          font-family: FontAwesome;
          font-size: 1rem
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc_disabled:after {
          content: "\f0dd";
          font-family: FontAwesome;
          right: 16px;
          font-size: 1rem
        }

        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_desc:after {
          opacity: 1
        }

        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc_disabled:after {
          opacity: 0
        }
        .dataTables_length{
            margin-right: 300px;
        }
        .dataTables_info{
            margin-right: 200px;
        }
    </style>
    <!--Main layout-->
    <main>
        <div class="container-fluid">

            <!--Section: Intro-->
            <section class="mt-lg-5">

                <form action="<?php echo base_url();?>reportcontroller/pdf_report" method="post" target="_blank">

                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header white-text aqua-gradient">
                            Report Cost Greige
                        </div>

                        <div class="md-form col-sm-12"><span style="color:red;font-weight:bold; font-size: 20px;">* </span><span style="font-size: 14px;">Pilih Salah Satu Tanggal Untuk Melihat Report Per Tanggal !</span></div>
                        
                        
                        
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="md-form input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text md-addon" id="material-addon1"><i class="fa fa-calendar-o input-group-text"></i></span>
                                        </div>
                                        <input style="cursor: pointer;" type="text" class="form-control datepicker" placeholder="Dari Tanggal" aria-label="Dari Tanggal" id="tgl" name="tgl" aria-describedby="material-addon1">
                                    </div>   
                                </div>
                                <div class="col-md-5">
                                    <div class="md-form input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text md-addon" id="material-addon1"><i class="fa fa-calendar-o input-group-text"></i></span>
                                        </div>
                                        <input style="cursor: pointer;" type="text" class="form-control datepicker" placeholder="Sampai Tanggal" aria-label="Sampai Tanggal" id="tgl2" name="tgl2" aria-describedby="material-addon1">
                                    </div>   
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form">
                                        <button type="button" onclick="show_tbl();" class="btn btn-outline-primary"><i class="fa fa-eye"></i>  View</button>
                                    </div>   
                                </div>
                            </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <!--Panel-->
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Table Report
                            </div>
                            <!--/.Card-->
                            <div class="card-body pt-0 px-1">

                                <!--Card content-->
                                <div class="card-body text-center">

                                    <div class="list-group list-panel">
                                        <div align="right">
                                            <button type="submit" id="xcl" name="xcl" class="btn btn-outline-success"><i class="fa fa-file-excel-o"></i> Excel</button>
                                            <button type="submit" id="pdf" name="pdf" class="btn btn-outline-danger"><i class="fa fa-file-pdf-o"></i> PDF</button>
                                        </div>
                                        <div id="Costing_Report">
                                            <!-- show table -->
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
            </form>

        </section>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>dttable/js/datatables.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/formula.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/hitung.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/benang.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sizing.js"></script>
    <!-- Nice Alert Plugin-->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sweetalert.min.js"></script>

    <!-- Table To Excel Plugin -->
    <script src="<?php echo base_url(); ?>excel/js/FileSaver.js"></script>
    <script src="<?php echo base_url(); ?>excel/js/tableexport.js"></script>

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
        $('.datepicker').pickadate({
            format: 'yyyy-mm-dd'
        });

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
            $("#xcl").hide();
            $("#pdf").hide();
        });
        
        function show_tbl (){
            var tgl = $("#tgl").val();
            var tgl2 = $("#tgl2").val();
            //alert(tgl);
            $.ajax({  
            url: "<?php echo base_url(); ?>" + "ReportController/index",
            method:"POST",
            data:{tgl:tgl,tgl2:tgl2},             
                success:function(data){
                    $("#Costing_Report").html(data); 
                    $('#dtBasicExample').DataTable();
                    $('.dataTables_length').addClass('bs-select');               
                }
            });
        }
        function html2xcl(){
            var tgl = $('#tgl').val();
            $("#Costing_Report").tableExport({
                headings: true,                    // (Boolean), display table headings (th/td elements) in the <thead>
                footers: true,                     // (Boolean), display table footers (th/td elements) in the <tfoot>
                formats: ["xls", "csv", "txt"],    // (String[]), filetypes for the export
                filename: `Costing_Report (${tgl}.)`,                    // (id, String), filename for the downloaded file
                bootstrap: true,                   // (Boolean), style buttons using bootstrap
                position: "bottom",                 // (top, bottom), position of the caption element relative to table
                ignoreRows: null,                  // (Number, Number[]), row indices to exclude from the exported file(s)
                ignoreCols: null,                  // (Number, Number[]), column indices to exclude from the exported file(s)
                //ignoreCSS: ".tableexport-ignore",  // (selector, selector[]), selector(s) to exclude from the exported file(s)
                //emptyCSS: ".tableexport-empty",    // (selector, selector[]), selector(s) to replace cells with an empty string in the exported file(s)
                trimWhitespace: false              // (Boolean), remove all leading/trailing newlines, spaces, and tabs from cell text in the exported file(s)
                //dateFormat : "Y/mm/dd"
            });
        }
    </script>
</body>

</html>
