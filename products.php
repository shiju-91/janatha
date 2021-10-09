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
                        <div class="col-md-11 mb-4">
                            <a href="product-create.php" class="btn btn-primarybtn btn-sm btn-outline-primary float-right">Create New</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Products</h3>
                                    
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
                                            <th>Dimension in Sqm</th>
                                            <th>Description</th>
                                            <th>Image</th>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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
                                            <td>56.08</td>
                                            <td>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, quo! Distinctio atque quas laboriosam, ducimus rem eius, amet, accusamus autem commodi veniam quasi dicta est soluta rerum nihil placeat! Aliquid.
                                            </td>
                                            <td><img src="" alt=""></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm btn-block">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm btn-block">Delete</button>
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