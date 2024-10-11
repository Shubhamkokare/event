
<div class="card">
<div class="card-body">

    <div class="table-container table-responsive">
        <table class="table table-bordered" id="datatable">
            <thead>
                <tr>
                   
                    <th>id</th>
                    <th>name</th>
                    <th>cost</th>
                    <th>deis</th>
                    <th>img</th>
                    <th>user</th> 
                    <th>Opretion</th> 
                </tr>
            </thead>
            <tbody>
                <?php $sr=0; foreach($servicelist as $itam): ?>
                <tr>
                <td><?= ++$sr;?></td> 
                <td><?= $itam['name']?></td>

                <td><?= $itam['cost']?></td>
                <td><?= $itam['deis']?></td>               
                <td><img src="<?=base_url().'public/uploads/service/'.$itam['img'];?>" alt="" style="width: 200px;"></td>
                
                <td><?= $itam['user']?></td>
                <td><a href="<?= site_url('editservice/' . $itam['id']) ?>"><i class="fa fa-edit text-primary"></i>
&nbsp;&nbsp;
                 <a  onclick="return confirm('Are you sure?')"  href="<?= site_url('deleteservice/' . $itam['id']) ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
 


              
                <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>  </div>  