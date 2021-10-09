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
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Invoice Create</h3>
                                </div>
                                <div class="card-body" id="printable_div">
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
                                            <div class="row invoiceArea">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Transportation Mode</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Vehicle Number</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
                                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Date of Supply</label>
                                                                <div class="col-sm-8">
                                                                    <input type="email" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-0">
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
                                                                <div class="form-group col-sm-6 mb-0">
                                                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Invoice No</label>
                                                                    <div class="col-sm-7">
                                                                        <input type="email" readonly class="form-control form-control-border" id="inputEmail3" placeholder="001">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-sm-6 mb-0">
                                                                    <label for="inputEmail3" class="col-sm-5 col-form-label">Date</label>
                                                                    <div class="col-sm-7">
                                                                        <input type="date" class="form-control form-control-border" id="inputEmail3" placeholder="">
                                                                    </div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row invoiceArea">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Deatails of Receiver</h4>
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
                                                <div class="card-header">
                                                    <h4 class="card-title">Deatails of Receiver</h4>
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
                                    </div>
                                    <hr>
                                    <br>
                                    
                                    <div class="row">
                                        <table class="table boxField bg-white invoice-table">
                                            <thead class="bg-primary">
                                                <th style="width: 250px;">Item</th>
                                                <th>HSN Code</th>
                                                <th>Qty</th>
                                                <th>Qty in Sqm</th>
                                                <th>Rate</th>
                                                <th>Amount</th>
                                                <th>Discount</th>
                                                <th>Net Value</th>
                                                <th>CGST</th>
                                                <th>SGST</th>
                                                <th>GST</th>
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
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
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
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
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
                                                        <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
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
                                            <button class="AddnewButton btn pruchase-add invoice-item-add" type="button">+ Add New Item</button>
                                        </div>

                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2" colspan="2">
                                                        Total Invoice Amount in Words : <input type="text" placeholder="Amount in words" class="form-control form-control-border">
                                                    </td>
                                                    <td style="width: 250px;">
                                                        Total Amount Before Tax :
                                                    </td>
                                                    <td style="width: 200px;">
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Add.CGST : 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">
                                                        <label for="">Bank Details</label>
                                                    </td>
                                                    <td rowspan="6" style="width:300px">
                                                        Seal
                                                    </td>
                                                    <td>
                                                        Add.SGST : 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Add.IGST : 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Tax (GST) : 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="3">
                                                        Terms & Conditions : 
                                                    </td>
                                                    <td>
                                                        Total Amount After Tax: 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        GST Payable on Reverse Charge : 
                                                    </td>
                                                    <td>
                                                        <input type="number" disabled class="form-control form-control-border">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="height:250px">
                                                        Certified that
                                                    </td>
                                                    
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 offset-md-8 ">
                                            <button class="btn btn-primary btn-sm float-right">Save and Print</button>
                                            <button id="print_btn" class="btn btn-outline-secondary btn-sm float-right mx-2">Print</button>
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
        
        $(document).on('click', '.invoice-item-add', function() {
            
            let extraItem = `<tr>
                                <td>
                                    <select name="" id="" class="form-control form-control-border">
                                        <option value="">Select</option>
                                        <option name="" id="">Plywood 12mm 8x4</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" min="0" class="form-control form-control-border" id="inputEmail3" placeholder="" value="0">
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

            
            $('.invoice-table tr:last').after(extraItem);
        });

        // $(document).on('click', '#print_btn', function(){
        //     $("#printable_div").print({
        //         globalStyles : false,
        //         mediaPrint : false,
        //     });
        // })
    })
</script>
    
</body>
</html>