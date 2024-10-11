<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
        .card-body {
            background-image: url('https://images.pexels.com/photos/4194842/pexels-photo-4194842.jpeg?auto=compress&cs=tinysrgb&w=600');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

       
        
    </style>
    <body>
<div class="card">
    <div class="card-body">
    <?=session()->getFlashdata('result');?>

        <div class="table-container table-responsive">
            <table class="table table-bordered">
                <table style="background-image: url('logo-shivneri.png'); background-size: cover;">

                    <tbody>
                    <td style="text-align: left;">
                    <h6 style=" float: left;">
                                <h4>Vaishnavi Sai Farm</h4>
                                Mo.: 8149634555 / 9545550087<br>Add:- Vaishnavi Sai Farm’s Near IMP Green Apartment,
                                Vijapur Road, Solapur
                            </h6>
                        </td>

                    </tbody>
                </table>
        </div>
        <br>

        <div class="row" style="background-color:#45aaf2">
            <div class="col-md-6 ">
                <b>Name:<?= $bill_details->customer_name ?></b>
            </div>

            <div class="col-md-6 ">
                <b>Event Date:<?= @$bill_details->func_date ?></b>
            </div>

            <div class="col-md-6 ">
                <b>Function:<?= @$bill_details->function_name ?></b>
            </div>

            <div class="col-md-6 ">
                <b>Address:<?= @$cust_list->address ?></b>
            </div>
        </div>

        <div class="table-container table-responsive">
            <table class="table table-bordered" id="" style="background-color:">
                <thead>
                    <tr>
                        <th>Sr.No.</th>
                        <th>Service</th>
                        <th>Select</th>
                        <th>Total</th>


                </thead>
                <tbody style="background-color;;">

                    <?php
                    $sr = 1;
                    foreach ($all_services_list as $itam): ?>
                        <tr>
                            <td>
                                <?= $sr++; ?>
                            </td>
                            <td>
                                <?= $itam['name'] ?>
                            </td>
                            <td>
                                <?= $itam['name'] ?>
                            </td>
                            <td> </td>

                        <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
            
            <table>
                <tbody>
                    <td>
                        <h6 style="color: border-left: unset;"><h4>Payment Info</h4>
                            80% Amount Must Be Paid Before Event <br>Google Pay | Phone Pay<br>
                            8149634555</h6>
                    </td>
                </tbody>
            </table>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="table-container table-responsive">
                <table class="table table-bordered" id="" style="background-color:rgb(178 184 194 / 12%);">
                    <thead>
                        <tr>

                            <th>Details</th>

                        </tr>
                    </thead>
                    <tbody style="background-color:#f1e7e7;">

                        <?php
                        $sr = 1;
                        $totalRate = 0;
                        foreach ($services_list as $itam): ?>
                            <tr>
                                <td style="text-align: right;">
 
                               <h3 style="background-color: #d374df; padding: 0 50%;; float: right;">
                                        <?= $itam['name'] ?>
                                    </h3><br><br><br>
                                    <?= $itam['remark'] ?> <br>

                                    <?= $itam['rate'], "*", $itam['qty'], "=", floatval($itam['qty']) * floatval($itam['rate']) ?>
                                    <br>
                                    <hr style="height: 5px; background-color: black;">
                                    <img src="<?= base_url() . 'public/uploads/service/' . $itam['img']; ?>" alt="" width="5000">
                                    <br>

                                </td>




                                <?php $totalRate += floatval($itam['rate']) * floatval($itam['qty']); ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
                <h4>Total:
                    <?= $totalRate ?>
                </h4>

            </div>
            <button class="btn btn-primary" onclick="printTable()">Print</button>
        </div>
    </div>
                        </body>
    <script>
        function printTable() {
            window.print();
        }
    </script>