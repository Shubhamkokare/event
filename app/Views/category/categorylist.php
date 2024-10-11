
<div class="card">
<div class="card-body">

    <div class="table-container table-responsive">
        <table class="table table-bordered" id="datatable">
            <thead>
                <tr>
                   
                    <th>id</th>
                    <th>name</th>
                   
                    <th>user</th> 
                    <th>Opretion</th> 
                </tr>
            </thead>
            <tbody>
                <?php $sr=1; foreach($categorylist as $itam): ?>
                <tr>
                <td><?= $sr++;?></td> 
                <td><?= $itam['name']?></td>
                
                <td><?= $itam['user']?>
                <td><a href="<?= site_url('editcategory/' . $itam['id']) ?>"><i class="fa fa-edit text-primary"></i></a>&nbsp;&nbsp;

                 <a  onclick="return confirm('Are you sure?')"  href="<?= site_url('deletecategory/' . $itam['id']) ?>"><i class="fa fa-trash text-danger"></i></a>
                  </td>
 

              
                <?php endforeach; ?>
               
            </tbody>
        </table>
    </div>  </div>  