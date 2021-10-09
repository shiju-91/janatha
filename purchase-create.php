<!DOCTYPE html>
<html lang="en">
    <?php
        require_once('inc/header.php');
    ?>
    <style>
        .sc-cJSrbW.huuTkr {
            height: 100%;
            cursor: pointer;
            line-height: 2.625rem;
            padding: 0px;
            position: absolute;
            right: 20px;
            top: 10px;
        }
        .rupay {
            height: 100%;
            cursor: pointer;
            line-height: 2.625rem;
            padding: 0px;
            position: absolute;
            left: 12px;
            top: 10px;
            padding-right: 10px;
        }
        table.table.boxField td{

            position: relative;
        }
        button.sc-dnqmqq.dTHIBF.sc-eTpRJs.bNDTaW {
            border: 0;
            display: block;
            margin: 20px;
            padding: 8px 18px;
            border-radius: 5px;
        }
        .addNew {
                padding: 20px 0;
        }
        .addNew button {
            display: inline-flex;
            outline: none;
            line-height: 1.5;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-family: inherit;
            font-weight: 400;
            -webkit-box-pack: center;
            justify-content: center;
            vertical-align: middle;
            -webkit-box-align: center;
            align-items: center;
            border-radius: 4px;
            border: 1px dashed rgb(180, 194, 213);
            height: 3rem;
            padding: 0px 1.5rem;
            white-space: nowrap;
            width: 100%;
            background: #fff;
            color: rgb(97, 113, 131);
            appearance: none !important;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
    </style>
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
                                                            <h4 class="card-title">Billed By</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Name</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Address</label>
                                                                <div class="col-sm-8">
                                                                    <textarea class="address form-control form-control-border" rows="2"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">GSTIN</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
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
                                    
                                    <div class="row">
                                        <table class="table boxField bg-white purchase-table">
                                            <thead class="bg-primary">
                                                <th style="width: 250px;">Item</th>
                                                <th>Tax</th>
                                                <th>Nos</th>
                                                <th>Qty in Sqm</th>
                                                <th>Bill Rate</th>
                                                <th>Rate</th>
                                                <th>Net Bill Value</th>
                                                <th>Net Value</th>
                                                <th>CGST</th>
                                                <th>SGST</th>
                                                <th>GST</th>
                                                <th>Total Bill Amount</th>
                                                <th>Total Amount</th>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="" id="" class="form-control form-control-border">
                                                            <option value="">Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number"  class="form-control form-control-border" id="gst" placeholder="" value="18">
                                                        <div class="sc-cJSrbW huuTkr">%</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                    </td>
                                                
                                                    <td>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>
                                                        <select name="" id="" class="form-control form-control-border">
                                                            <option value="">Select</option>
                                                            <option name="" id="">Plywood 12mm 8x4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number"  class="form-control form-control-border" id="gst" placeholder="" value="18">
                                                        <div class="sc-cJSrbW huuTkr">%</div>
                                                    </td>
                                                    
                                                    <td>
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                                    </td>
                                                
                                                    <td>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                    <td>
                                                        <div class="rupay">₹</div>
                                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="addNew">
                                            <button class="AddnewButton btn pruchase-add" type="button">+ Add New Item</button>
                                        </div>
                                        <table class="table table-bordered ">
                                           
                                            <tbody>
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
                
                let extraItem = `<tr>
                                    <td>
                                        <select name="" id="" class="form-control form-control-border">
                                            <option value="">Select</option>
                                            <option name="" id="">Plywood 12mm 8x4</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="number"  class="form-control form-control-border" id="gst" placeholder="" value="18">
                                        <div class="sc-cJSrbW huuTkr">%</div>
                                    </td>
                                    
                                    <td>
                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
                                    </td>
                                
                                    <td>
                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="rate" placeholder="1">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">

                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                    </td>
                                    <td>
                                        <div class="rupay">₹</div>
                                        <input type="number"  class="form-control form-control-border" id="inputEmail3" placeholder="">
                                    </td>
                                </tr>`;

                
                $('.purchase-table tr:last').after(extraItem);
            });
        })
    </script>
    
</body>
</html>