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
                <div class="col-lg-12 col-md-6 mb-4">
                    <!--Panel-->
                    <div class="card">
                        <div class="card-header white-text aqua-gradient">
                            Table Report
                        </div>
                        <!--/.Card-->
                        <div class="card-body pt-0 px-1">

                            <!--Card content-->
                            <div class="card-body text-center">

                                <div class="list-group list-panel">
                                    <div>
                                        <table class="table" id="view_data">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kain</th>
                                                    <th>Tanggal Update</th>
                                                    <th>HPP</th>
                                                    <th>Sell Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="view_tbl">
                                            
                                            </tbody>
                                        </table>
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

<script type="text/javascript">
    $(document).ready(function(){
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

        $.ajax({  
        url: "<?php echo base_url(); ?>" + "viewcontroller/index",
        method:"POST",
        data:{},             
            success:function(data){
                $("#view_tbl").html(data); 
                $('#view_data').DataTable();
                $('.dataTables_length').addClass('bs-select');               
            }
        });
    });
</script>
</body>

</html>
