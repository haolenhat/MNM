<!DOCTYPE html>
<html lang="en">
<!--header-->
    <?php include './views/layouts/headerpage.php' ?>
<!--header-->
<body data-background-color="dark">
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <?php include './views/layouts/logoheader.php'?>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <?php include './views/layouts/navbarpage.php'?>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <?php include './views/layouts/sidebarmenu.php' ?>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
            <div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Dữ liệu</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Danh Sách</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Cih tiết Hóa Đơn</a>
                </li>
            </ul>
    </div>
        <div class="row">           
                        <div class="col-md-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    <!-- Modal -->
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover" >           
                                            <thead>
                                                 <tr>
                                                    <?php
                                                    foreach ($data1 as $arr) {
                                                    ?>
                                                     <ul>Mã hóa đơn: <?php echo $arr['id_hd'];?></ul>
                                                     <ul>Tên người nhận: <?php echo $arr['tennguoinhan'];?></ul>
                                                     <ul>email: <?php echo $arr['email'];?></ul>
                                                      <ul>Số điện thoại: <?php echo $arr['dienthoainguoinhan'];?></ul>
                                                       <ul>ngày nhận: <?php echo $arr['ngaynhan'];?></ul>
                                                    <?php
                                                    }
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <th>Sản Phẩm</th>
                                                    <th>Số Lượng</th>
                                                    <th>giá tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                   <?php
                                                    foreach ($data as $arr) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $arr['tendianhac'];?></td>
                                                        <td><?php echo $arr['soluong'];?></td>
                                                        <td><?php echo chuyentien($arr['gia']);?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                    <?php
                                                    foreach ($data1 as $arr) {
                                                    ?>
                                                    <td>Tổng tiền: <?php echo chuyentien($arr['tongtien']);?></td>
                                                    <?php
                                                    }
                                                    ?>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div>
            <!--footer-->
            <?php include'./views/layouts/footerpage.php'?>
            <!--end footer-->
        </div>
        
        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="./views/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="./views/assets/js/core/popper.min.js"></script>
    <script src="./views/assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="./views/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="./views/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Chart Circle -->
    <script src="./views/assets/js/plugin/chart-circle/circles.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="./views/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <!-- Chart JS -->
    <script src="./views/assets/js/plugin/chart.js/chart.min.js"></script>
    <script src="./views/assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Sweet Alert -->
    <script src="./views/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Atlantis JS -->
    <script src="./views/assets/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="./views/assets/js/setting-demo.js"></script>
    <script src="./views/assets/js/demo.js"></script>
    <script >
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
            });

            $('#multi-filter-select').DataTable( {
                "pageLength": 5,
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                                );

                            column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                        } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                

            });
        });
    </script>
</body>
</html>
           