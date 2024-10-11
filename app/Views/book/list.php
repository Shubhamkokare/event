<div class="card">
    <div class="card-body">

        
        <div class="row">
            <div class="col-6 col-lg-3">
                Name
            </div>
            <div class="col-6 col-lg-3">
            <?=@$customer_details->name?>
            </div>
            <div class="col-6 col-lg-3">
                Fucntion:
            </div>
            <div class="col-6 col-lg-3">
            <?=@$boking_details->function_name?>
            </div>
            <div class="col-6 col-lg-3">
                Fucntion Date:
            </div>
            <div class="col-6 col-lg-3">
            <?=@$boking_details->func_date?>
            </div>
            <div class="col-6 col-lg-3">
                Address:
            </div>
            <div class="col-6 col-lg-3">
            <?=@$boking_details->address?>
            </div>
            <div class="col-6 col-lg-3">
                Remark:
            </div>
            <div class="col-6 col-lg-3">
            <?=@$boking_details->remark?>
            </div>
</div>
               
        <div class="table-container table-responsive">
            
        <table class="table table-bordered" id="">
                
                    <thead>
                        <tr>

                            <th>id</th>
                            <th>name</th>

                            <th>cost</th>
                            <th>qty</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Remark</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookingordelist as $itam): ?>
                            <tr>
                               
                                <td><?= $itam['id'] ?></td>
                                <td><?= $itam['product_name'] ?></td>
                                <td><?= $itam['rate'] ?></td>
                                <td><?= $itam['qty'] ?></td>
                                <td><?= $itam['total'] ?></td>
                                <td><?= $itam['status'] ?></td>
                                <td><?= $itam['remark'] ?></td>

                              
                            <?php endforeach; ?>

                    </tbody>
                   
                </table>
                
            <div class="col-6 col-lg-3">
             <h2>   Total:<?=@$boking_details->all_total?></h2>
            
            </div>
                <button class="btn btn-primary" onclick="window.print()">Print</button>
 
        </div>
    </div>
</div>