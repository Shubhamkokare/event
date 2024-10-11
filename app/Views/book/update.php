<div class="card">
    <div class="card-body">
    <div class="table-container table-responsive">
        <form class="contact-form-inner" method="post" enctype="multipart/form-data"
            action="<?= base_url() . 'index.php/' . ((@$edit) ? '#/' . $edit->id : 'orderlist/' . $bookingordelist->id) ?>">

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


                    <tr>
                        <td>
                            <?= $bookingordelist->id ?>
                        </td>
                        <td>
                            <?= $bookingordelist->product_name ?>
                        </td>
                        <td>
                            <?= $bookingordelist->rate ?>
                        </td>
                        <td>
                            <?= $bookingordelist->qty ?>
                        </td>
                        <td>
                            <?= $bookingordelist->total ?>
                        </td>


                        <td>
                            <div class="form-group col-12">
                                <label class="form-label">
                                    <select class="form-control custom-select" data-placeholder="SELECT TYPE"
                                        name="status" required id="para_type">
                                        <option value="new">new</option>
                                        <option value="process">process</option>
                                        <option value="PAID">PAID</option>
                                    </select>
                                </label>
                            </div>
                        </td>
                        <td> <input type="text" class="form-control" name="remark" placeholder=" Remark"></td>
                 </tbody>
            </table>
            <button type="submit" class="btn btn-primary" name="save">Update</button>
        </form>
    </div>
</div>