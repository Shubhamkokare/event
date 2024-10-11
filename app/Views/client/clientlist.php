
<div class="card">
<div class="card-body">

    <div class="table-container table-responsive">
        <table class="table table-bordered" id="datatable">
            <thead>
                <tr>
                   
                    <th>id</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Address</th>
                     
                    <th>Opretion</th> 

                </tr>
            </thead>
            <tbody>
                <?php $sr=0; foreach($clientlist as $itam): ?>
                <tr>
                <td><?= ++$sr;?></td> 
                <td><?= $itam['name']?></td>
                <td><?= $itam['number']?></td>               
                <td><?= $itam['address']?></td>
                
                <td><a href="<?= site_url('editclient/' . $itam['id']) ?>"><i class="fa fa-edit text-primary"></i></a>&nbsp;&nbsp;

                 <a  onclick="return confirm('Are you sure?')"  href="<?= site_url('deleteclient/' . $itam['id']) ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
 


              
                <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>  </div>  