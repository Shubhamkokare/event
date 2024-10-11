<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body ">
            <?=session()->getFlashdata('result');?>

                <form class="contact-form-inner" method="post" enctype="multipart/form-data"
                    action="<?= base_url() . 'index.php/' . ((@$edit) ? 'editproduct/' . $edit->id : 'book') ?>">
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Select client </label>
                            <div class="input-group">
                                <select class="form-control select2" name="client" id="client" required>
                                    <option value="0" disabled selected>--SELECT client --</option>
                                    <?php
                                    foreach ($client as $row) {
                                        echo '<option value="' . $row['id'] . '" data-lodpoint="' . $row['name'] . '" ' . ((@$edit && $edit->id == $row['id']) ? 'SELECTED' : '') . '>' . $row['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <span class="input-group-append">
                                    <button class="btn btn-primary" id="addcustomer" type="button">+</button>
                                </span>
                            </div>



                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Select function</label>
                            <select class="form-control select2" name="function" id="function" required>
                                <option value="0" disabled selected>--SELECT function --</option>
                                <?php
                                foreach ($function as $row) {
                                    echo '<option value="' . $row['id'] . '" data-lodpoint="' . $row['name'] . '" ' . ((@$edit && $edit->id == $row['id']) ? 'SELECTED' : '') . '>' . $row['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group col-6">
                            <label class="form-label">Enter Date</label>
                            <input type="date" class="form-control" <?= ((@$edit && $edit->func_date) ? ' value="' . $edit->func_date . '"' : ''); ?> name="func_date" placeholder="date" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Function Address</label>
                            <input type="text" class="form-control" <?= ((@$edit && $edit->address) ? ' value="' . $edit->address . '"' : ''); ?> name="address" placeholder="Enter Here" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter Remark</label>
                            <input type="text" class="form-control" <?= ((@$edit && $edit->remark) ? ' value="' . $edit->remark . '"' : ''); ?> name="remark" placeholder="Enter Remark" required>
                        </div>
                      
                       
                        <div class="col-12">
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