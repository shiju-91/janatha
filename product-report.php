<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('inc/header.php');
    ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <?php
            require_once('inc/nav.php');
            require_once('inc/sidebar.php');
        ?>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Product Report</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Product Name</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Sale Qty in nos</th>
                                            <th>Sale Qty in Sqm</th>
                                            <th>Total Sale Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood 12mm</td>
                                            <td>
                                                KKp
                                            </td>
                                            <td>
                                                Board
                                            </td>
                                            <td>
                                                234
                                            </td>
                                            <td>
                                                23456
                                            </td>
                                            <td>
                                                1000000.00
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood 12mm</td>
                                            <td>
                                                KKp
                                            </td>
                                            <td>
                                                Board
                                            </td>
                                            <td>
                                                234
                                            </td>
                                            <td>
                                                23456
                                            </td>
                                            <td>
                                                1000000.00
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood 12mm</td>
                                            <td>
                                                KKp
                                            </td>
                                            <td>
                                                Board
                                            </td>
                                            <td>
                                                234
                                            </td>
                                            <td>
                                                23456
                                            </td>
                                            <td>
                                                1000000.00
                                            </td>
                                            
                                            
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <?php
        require_once('inc/footer.php');
    ?>
    
</body>
</html>