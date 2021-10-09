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
                                    <h3 class="card-title">Purchase Create</h3>
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
                                                        <div class="card-header">
                                                            <h4 class="card-title">Deatails of Seller</h4>
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
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Invoice No</label>
                                                                    <div class="col-sm-7">
                                                                        <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="001">
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
                                    <!-- <div class="row">
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
                                    </div> -->
                                    <!-- <hr> -->
                                    <br>
                                    <div class="row mb-2">
                                        <div class="input-group input-group-sm col-md-1 offset-md-11">
                                            <input type="number" min="1" id="purchase-column-count" class="form-control" value="1">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-info btn-flat pruchase-add">Add</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <table class="table table-bordered purchase-table">
                                            <thead class="bg-primary">
                                                <th style="width:300px">Name of Product</th>
                                                <th>Tax</th>
                                                <th>Nos</th>
                                                <th>Qty in Sqm</th>
                                                <th>Bill Rate</th>
                                                <th>Rate</th>
                                                <th>Net Bill Value</th>
                                                <th>Net Value</th>
                                                <th>CGST</th>
                                                <th>SGST</th>
                                                <th>Total Bill Amount</th>
                                                <th>Total Amount</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>18</td>
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
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>18</td>
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
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                </tr>
                                                <tr id="last-tr-purchase">
                                                    <td>
                                                        <select name="product_id" id="" class="form-control">
                                                            <option value="" selected disabled>Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>18</td>
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
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                </tr>
                                                <tr >
                                                    <th></th>
                                                    <th></th>
                                                    <th>12</th>
                                                    <th>6578</th>
                                                    <th></th>
                                                    <th>12334</th>
                                                    <th>6775</th>
                                                    <th>3423</th>
                                                    <th>3424</th>
                                                    <th>242</th>
                                                    <th>3442</th>
                                                    <th>4322</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class=" col-form-label">Transportation Details</label>
                                                            
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Vehicle</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">From</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">To</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td colspan="4">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Discount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Handling</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Fright</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Transport</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td colspan="5">
                                                        
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Net Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Net Bill Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">CGST Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">SGST Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">GST Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Total Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Total Bill Amount</label>
                                                            <div class="col-sm-8">
                                                                <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot></tfoot>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Total Paid Amount</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Total Credit Amount</label>
                                        <div class="col-sm-3">
                                            <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 offset-md-8 ">
                                            <button class="btn btn-primary btn-md float-right">Save</button>
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

    <script>
        $(document).ready(function(){
            
            $(document).on('click', '.pruchase-add', function() {
                let extraItem = [];
                let count = $('#purchase-column-count').val();
                for (let index = 1; index <= count; index++) {
                    extraItem.push(`<tr>
                                            <td>
                                                <select name="product_id" id="" class="form-control">
                                                    <option value="" selected disabled>Select</option>
                                                    <option name="" id="">Plywood 12mm 8x4</option>
                                                </select>
                                            </td>
                                            <td>18</td>
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
                                                <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                            </td>
                                            <td>
                                                <input type="text"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                            </td>
                                        </tr>`
                                        );
                }
                $('#last-tr-purchase').after(...extraItem);
            });
        })
    </script>
    
</body>
</html>