<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('inc/header.php');
    ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
                            <div class="cardtop mt-4">
                                <div class="row">
                                    <div class="col-md-3">
                                       <form action="simple-results.html">
                                            <div class="input-group">
                                                <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-lg btn-default">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2">
                                    <a href="" class="btn btn-primary btn mt-1 ">This Month</a>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="d-flex">From: <input type="date" class="form-control ml-3"></span>

                                    </div>
                                    <div class="col-md-3">
                                    <span class="d-flex">To:<input type="date" class="form-control ml-3"></span>

                                    </div>
                                    <div class="col-md-1">
                                    <a href="" class="btn btn-success btn mt-1 ">Excel</a>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-primary mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Purchase Report</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Invoice No</th>
                                            <th>Invoice Date</th>
                                            <th>Buyer Details</th>
                                            <th>Transportation Details</th>
                                            <th>Total Amount</th>
                                            <th>Payment Mode</th>
                                            <th>Credit Balance</th>
                                            <th>View Purchase</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td >
                                                #1001
                                            </td>
                                            <td>24-07-2021</td>
                                            <td>
                                                Jhon , address
                                            </td>
                                            <td>
                                                By road, KL10 007A
                                            </td>
                                            <td>
                                                Rs 85000
                                            </td>
                                            <td>
                                                Cash
                                            </td>
                                            <td>
                                                0.00
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm">View</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td >
                                                #1001
                                            </td>
                                            <td>24-07-2021</td>
                                            <td>
                                                Jhon , address
                                            </td>
                                            <td>
                                                By road, KL10 007A
                                            </td>
                                            <td>
                                                Rs 85000
                                            </td>
                                            <td>
                                                Cash
                                            </td>
                                            <td>
                                                0.00
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm">View</button>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td >
                                                #1001
                                            </td>
                                            <td>24-07-2021</td>
                                            <td>
                                                Jhon , address
                                            </td>
                                            <td>
                                                By road, KL10 007A
                                            </td>
                                            <td>
                                                Rs 85000
                                            </td>
                                            <td>
                                                Cash
                                            </td>
                                            <td>
                                                0.00
                                            </td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm">View</button>
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