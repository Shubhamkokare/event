<div class="card">
    <div class="card-body">

        <div class="table-container table-responsive">
            <form class="contact-form-inner" method="post" enctype="multipart/form-data"
                action="<?= base_url() . 'index.php/' . ((@$edit) ? '#/' . $edit->id : 'updatestatus') ?>">

                <table class="table table-bordered" id="datatable">
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
                               
                                <td> <input type="hidden" class="form-control" name="id[]" value="<?= $itam['id'] ?>"><?= $itam['id'] ?></td>
                                <td><?= $itam['product_name'] ?></td>
                                <td> <input type="text" class="form-control" name="rate_<?= $itam['id'] ?>" value="<?= $itam['rate'] ?>"></td>
                                <td> <input type="text" class="form-control" name="qty_<?= $itam['id'] ?>" value="<?= $itam['qty'] ?>"></td>
                                <td> <input type="text" class="form-control" name="total_<?= $itam['id'] ?>" value="<?= $itam['total'] ?>"></td>

                                <!--  <td><a href="<?= site_url('updatestatus/' . $itam['id']) ?>"><?= $itam['status'] ?></td> -->
                                <td>
                                    <div class="form-group col-12">
                                        <label class="form-label">
                                            <select class="form-control custom-select" data-placeholder="SELECT TYPE"
                                                name="status_<?= $itam['id'] ?>" required id="para_type">
                                                <option value="new">new</option>
                                                <option value="process">process</option>
                                                <option value="PAID">PAID</option>
                                            </select>
                                        </label>
                                    </div>
                                </td>
                                <td> <input type="text" class="form-control" name="remark_<?= $itam['id'] ?>" placeholder=" Remark"></td>

                            <?php endforeach; ?>

                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary" name="save">Update</button>
            </form>
        </div>
    </div>
</div>