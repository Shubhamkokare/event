<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body ">
                <?= session()->getFlashdata('result'); ?>
                <form class="contact-form-inner" method="post" action="<?= base_url() . 'index.php/' . ((@$edit) ? 'editcategory/' . $edit->id : 'addcategory') ?>">
                    <div class="row">
                        <div class="form-group col-12">
                            <label class="form-label"> name</label>
                            <input type="text" class="form-control" <?= ((@$edit && $edit->name) ? ' value="' . $edit->name . '"' : ''); ?> name="name" placeholder="name" required>
                        </div>
                        <button class="btn  btn-primary " name="save"><?= (@$edit) ? 'UPDATE' : 'SAVE'; ?></button>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
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
                    <?php $sr = 1;
                    foreach ($categorylist as $itam): ?>
                        <tr>
                            <td><?= $sr++; ?></td>
                            <td><?= $itam['name'] ?></td>

                            <td><?= $itam['user'] ?>
                            <td><a href="<?= site_url('editcategory/' . $itam['id']) ?>"><i
                                        class="fa fa-edit text-primary"></i></a>&nbsp;&nbsp;

                                <a onclick="return confirm('Are you sure?')"
                                    href="<?= site_url('deletecategory/' . $itam['id']) ?>"><i
                                        class="fa fa-trash text-danger"></i></a>
                            </td>




                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>




</div>