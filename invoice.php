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
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Invoice Create</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">GST IN: 32FTYPS1381E1Z8</label>
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <label for="">JANATHA TRADING</label>
                                        </div>
                                        <div class="col-md-3 text-right">
                                            <label for="">Mob: 000000000</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Transportation Mode</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Vehicle Number</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Date of Supply</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Place of Supply</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Invoice No</label>
                                                                    <div class="col-sm-7">
                                                                        <input type="email" readonly class="form-control form-control-border" id="inputEmail3" placeholder="001">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Date</label>
                                                                    <div class="col-sm-7">
                                                                        <input type="date" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">State</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Deatails of Receiver</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Address</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="address form-control form-control-border" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">GSTIN</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">State</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Deatails of Receiver</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Address</label>
                                                        <div class="col-sm-8">
                                                            <textarea class="address form-control form-control-border" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">GSTIN</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 col-form-label">State</label>
                                                        <div class="col-sm-8">
                                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row mb-2">
                                        <div class="input-group input-group-sm col-md-1 offset-md-11">
                                            <input type="text" class="form-control" value="1">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info btn-flat">Add</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table class="table table-bordered">
                                            <thead class="bg-primary">
                                                <th>Sl. No</th>
                                                <th style="width:300px">Name of Product</th>
                                                <th>HSN Code</th>
                                                <th>Qty</th>
                                                <th>In Sqm</th>
                                                <th>Rate</th>
                                                <th>Amount</th>
                                                <th>Discount</th>
                                                <th>Net Value</th>
                                                <th>CGST</th>
                                                <th>SGST</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>9412</td>
                                                    <td>
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>9412</td>
                                                    <td>
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>9412</td>
                                                    <td>
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <input type="text" readonly class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="8" rowspan="2">
                                                        <label>Total Invoice Amount In Words:</label>
                                                        <input type="text" value="" class="form-control form-control-border" id="">
                                                    </td>
                                                    <td colspan="2">
                                                        Total amount before tax :
                                                    </td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Add.CGST:</td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" rowspan="3">
                                                        Bank Details
                                                    </td>
                                                    <td colspan="4" rowspan="6">
                                                        Seal
                                                    </td>
                                                    <td colspan="2">Add.SGST</td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">Add.IGST</td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">TAx amout GST</td>
                                                    <td colspan="2"></td>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" rowspan="3">
                                                        Terms and conditions
                                                    </td>
                                                    <td colspan="4">Total Amount after tax</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        GST payable on reverse charges
                                                    </td>
                                                    <td colspan="2">

                                                    </td>
                                                </tr>
                                                <tr style="height: 250px;">
                                                    <td colspan="4">
                                                        Certified that
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="8">
                                                        Balnce Amount :
                                                    </td>
                                                    <td colspan="4">
                                                        <input type="text" class="form-control form-control-border" id="inputEmail3" placeholder="0.00">
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot></tfoot>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 offset-md-8 ">
                                            <button class="btn btn-primary btn-sm float-right">Save and Print</button>
                                            <button class="btn btn-outline-secondary btn-sm float-right mx-2">Print</button>
                                        </div>
                                    </div>
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