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
                       <div class="col-md-10 offset-md-1">
                           <div class="card card-primary mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Settings</h3>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="inputName">Company Name</label>
                                                <input type="text" id="inputName" name="company_name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputName">Logo</label>
                                                <input type="file" id="inputName" name="dimension" readonly class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="inputName">Company Address</label>
                                                <textarea name="company_address" id="" cols="30" rows="2" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputName">Login Page Logo</label>
                                                <input type="file" id="inputName" name="dimension" readonly class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="inputName">Company Mobile</label>
                                                <input type="text" id="inputName" name="company_name" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputName">Email</label>
                                                <input type="email" id="inputName" name="dimension" readonly class="form-control">
                                            </div>
                                            <div class="mt-4">
                                                <button class="btn btn-primary float-right btn-sm">Save</button>
                                            </div>
                                        </div>
                                        
                                    </form>
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