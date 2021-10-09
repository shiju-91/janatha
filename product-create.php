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
                        <div class="col-md-8 offset-md-2 mb-4">
                            <a href="products.php"class="btn btn-primarybtn btn-sm btn-outline-primary float-right">View All</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Create Product</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="">

                                        <div class="form-group">
                                            <label for="inputName">Name</label>
                                            <input type="text" id="inputName" name="brand" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStatus">Brand</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected disabled>Select one</option>
                                                <option>On Hold</option>
                                                <option>Canceled</option>
                                                <option>Success</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStatus">Type</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected disabled>Select one</option>
                                                <option>On Hold</option>
                                                <option>Canceled</option>
                                                <option>Success</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName">Thickness</label>
                                            <input type="text" id="inputName" name="thickness" class="form-control">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="inputName">Dimension in Inches </label> (2x4)
                                                <input type="text" id="inputName" name="dimension" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputName">Dimension in Sqm</label>
                                                <input type="text" id="inputName" name="dimension" readonly class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputDescription">Description</label>
                                            <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputClientCompany">Image</label>
                                            <input type="file" id="inputClientCompany" class="form-control">
                                        </div>
                                        <!-- <hr> -->
                                        <div class="row float-right mt-4">
                                            <button class="btn btn-outline-danger btn-sm mx-2" id="btn">Cancel</button>
                                            <button class="btn btn-primary btn-sm">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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