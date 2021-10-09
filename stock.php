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
                                    <h3 class="card-title">Product Stock</h3>
                                    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Type</th>
                                            <th>Thickness</th>
                                            <th>Dimension in Inches</th>
                                            <th>Image</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood</td>
                                            <td>
                                                KKP
                                            </td>
                                            <td>Board</td>
                                            <td>12mm</td>
                                            <td>8x4</td>
                                            <td><img src="" alt=""></td>
                                            <td>56</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                            </td>
                                        
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood</td>
                                            <td>
                                                KKP
                                            </td>
                                            <td>Board</td>
                                            <td>12mm</td>
                                            <td>8x4</td>
                                            <td><img src="" alt=""></td>
                                            <td>56</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                            </td>
                                        
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood</td>
                                            <td>
                                                KKP
                                            </td>
                                            <td>Board</td>
                                            <td>12mm</td>
                                            <td>8x4</td>
                                            <td><img src="" alt=""></td>
                                            <td>56</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                            </td>
                                        
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Plywood</td>
                                            <td>
                                                KKP
                                            </td>
                                            <td>Board</td>
                                            <td>12mm</td>
                                            <td>8x4</td>
                                            <td><img src="" alt=""></td>
                                            <td>56</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
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
            </section>
        </div>

    </div>

    <?php
        require_once('inc/footer.php');
    ?>
    
</body>
</html>