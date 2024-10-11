<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body ">
            <?=session()->getFlashdata('result');?>

                <form class="contact-form-inner" method="post" enctype="multipart/form-data" action="<?= base_url() . 'index.php/' . ((@$edit) ? 'editproduct/' . $edit->id : 'addservice') ?>">
                    
                    <div class="row">

                    <div class="form-group col-12">
                <label class="form-label">Select Service </label>
                <select class="form-control" name="sub_ser">
                        <option value="0" disabled selected>--SELECT Service--</option>
                        <?php
                        foreach ($sub_ser as $row) {
                            echo '<option value="'.$row['id'].'" '.((@$edit && $edit->id == $row['id']) ? 'SELECTED' : '').'>'.$row['name'].'</option>';
                        }
                        ?>
                </select>
                  </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter name</label>
                            <input type="text" class="form-control" <?= ((@$edit && $edit->name) ? ' value="' . $edit->name . '"' : ''); ?> name="name" placeholder="name" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter Cost</label>
                            <input type="number" class="form-control" <?= ((@$edit && $edit->cost) ? ' value="' . $edit->cost . '"' : ''); ?> name="cost" placeholder=" cost" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter description</label>
                            <input type="text" class="form-control" <?= ((@$edit && $edit->deis) ? ' value="' . $edit->deis . '"' : ''); ?> name="deis" placeholder=" deis" required>
                        </div>



                        <div class="form-group col-6">
                            <label class="form-label">Select Image</label>
                            <input type="file" multiple="multiple" class="form-control" name="image[]" placeholder="name" required>
                            <?= ((@$edit && $edit->img) ? ' <img src="' . base_url() . 'public/uploads/service/' . $edit->img . '" width="150" />' : ''); ?>
                        </div>
                        <div class="form-group col-12">
                            <button class="btn  btn-primary" name="save">
                                <?= (@$edit) ? 'UPDATE' : 'SAVE'; ?>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>

</div>