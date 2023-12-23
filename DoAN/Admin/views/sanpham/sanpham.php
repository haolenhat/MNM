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
                    <a href="#">Sản Phẩm</a>
                </li>
            </ul>
    </div>
        <div class="row">           
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Thêm Sản Phẩm</h4>
                                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                            <i class="fa fa-plus"></i>
                                            Thêm Sản Phẩm
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Modal -->
                                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="index.php?controller=sanphamcontroller&action=them" method="POST" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h5 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                        Thêm</span> 
                                                        <span class="fw-light">
                                                            sản phẩm
                                                        </span>
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="small">thêm một sản phẩm bằng cách sử dụng biểu mẫu này, đảm bảo bạn điền vào tất cả</p>
                                                    
                                                        <div class="row">
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Mã đĩa nhạc</label>
                                                                    <input name="id_dianhac" type="text" class="form-control" placeholder="điền mã" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tên đĩa nhạc</label>
                                                                    <input name="tendianhac" type="text" class="form-control" placeholder="điền tên" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Mô tả</label>
                                                                    <script src="ckeditor/ckeditor.js"></script>
                                                                    <textarea id="mota" name="mota" type="text" class="form-control" cols="30" rows="4">
                                                                    </textarea required="required">
                                                                    <script type="text/javascript">CKEDITOR.replace( 'mota'); </script>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Giá</label>
                                                                    <input name="gia" type="number" class="form-control" placeholder="thêm giá tiền" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label>Hình</label>
                                                                    <input name="hinh" type="file" class="form-control" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <select name="id_theloai">
                                                                        <option>Thể Loại</option>
                                                                        <?php
                                                                        foreach($dataTL as $arr)
                                                                        {
                                                                        ?>
                                                                        <option value="<?php echo $arr['id_theloai']?>"><?php echo $arr['tentheloai']?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" id="addRowButton" class="btn btn-primary">Thêm</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>Mã</th>
                                                    <th>Tên</th>
                                                    <th>Giá</th>
                                                    <th>Hình</th>
                                                    <th>Thể loại</th>
                                                    <th style="width: 10%">Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Mã</th>
                                                    <th>Tên</th>
                                                    <th>Giá</th>
                                                    <th>Hình</th>
                                                    <th>Thể loại</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                    <?php
                                                    foreach ($data as $tl) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $tl['id_dianhac']?></td>
                                                        <td><?php echo $tl['tendianhac']?></td>
                                                        <td><?php echo chuyentien($tl['gia'])?></td>
                                                        <td><img src="views/assets/img/<?php echo $tl['hinh']?>" style="height: 50px; width: 40px;"></td>
                                                        <td><?php echo $tl['id_theloai']?></td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"><a href="index.php?controller=sanphamcontroller&action=sua&id=<?php echo $tl['id_dianhac']?>">
                                                                    <i class="fa fa-edit"></i> edit
                                                                </button></a>
                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="index.php?controller=sanphamcontroller&action=delete&id=<?php echo $tl['id_dianhac']?>">
                                                                <i class="fa fa-times"></i> delete</a>
                                                                </button>
                                                        
                                                            </div>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                                
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
    <script src="./ckeditor/ckeditor.js"></script>
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
           