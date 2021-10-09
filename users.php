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
                        <a href="#" class="btn btn-primarybtn btn-sm btn-outline-primary float-right">Create New</a>
                    </div>
                </div>
                <div class="row">
                            <div class="col-md-12">
                              <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Users</h3>
                                    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                  <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                      <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Image</th>
                                        <th>email</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1.</td>
                                        <td>Sam</td>
                                        <td>
                                          Staff
                                        </td>
                                        <td><img src="" alt=""></td>
                                        <td>
                                            sam@info.com
                                        </td>
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