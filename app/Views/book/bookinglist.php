<div class="col-md-12">

<div class="card">
<div class="card-body">
<form class="contact-form-inner" method="post" enctype="multipart/form-data"
                    action="<?= base_url() . 'index.php/' . ((@$edit) ? 'editproduct/' . $edit->id : 'Search') ?>">
<div class="form-group col-6  col-md-12">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control"  name="from_date" placeholder="date">
                        </div>
                        <div class="form-group col-6 col-md-12">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control"  name="To_date" placeholder="date">
                        </div>
                        <div class="col-12">
                            <button class="btn  btn-primary" name="save">
                                <?= (@$edit) ? 'UPDATE' : 'Search'; ?>
                            </button>
                        </div>
</form>

    <div class="table-container table-responsive">
        <table class="table table-bordered" id="datatable">
            <thead>
                <tr>
                   
                    <th>id</th>
                    <th>function Date</th>
                    <th> Date</th>
                    <th>function </th>
                    <th>name</th>
                    <th>Address</th>
                    <th>Opretion</th> 

                </tr>
            </thead>
            <tbody>
                <?php foreach($bookinglist as $itam): ?>
                <tr>
                <td><?= $itam['id']?></td> 
                <td><?=date("D-m y", strtotime($itam['iddate']))?></td> 

                <td><?=date("D-m y", strtotime($itam['func_date']))?></td> 
                <td><?= $itam['f_name']?></td> 

                <td><a href="<?= site_url('customerorderlist/' . $itam['client_id']) ?>"><?= $itam['customer_name']?></td>
                <td><?= $itam['address']?></td> 
                <td><a href="<?= site_url('services_list/' . $itam['id']) ?>"><i class="fa fa-eye text-success"></i></a>
                &nbsp;&nbsp;
                <a href="<?= site_url('editorderlist/' . $itam['id']) ?>"title="Edit"><i class="fa fa-edit text-primary"></i></a>
                &nbsp;&nbsp;
                
                 <a   href="<?= site_url('services/' . $itam['id']) ?>"title="edit"><i class="fa fa-trash text-primary"></i></a>
                  </td>
 


              
                <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>  </div>    </div>  