


  
<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-body ">
        <?=session()->getFlashdata('result');?>

        <form class="contact-form-inner" method="post" action="<?= base_url() . 'index.php/'.((@$edit)?'editclient/'.$edit->id:'client') ?>">
          <div class="row">
          
           
          <div class="form-group col-6">
                            <label class="form-label">Enter Name</label>
                            <input type="text" class="form-control" <?=((@$edit && $edit->name)?' value="'.$edit->name.'"':'');?> name="name" placeholder="name" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter Number</label>
                            <input type="number" class="form-control" <?=((@$edit && $edit->number)?' value="'.$edit->number.'"':'');?> name="number" placeholder="name" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Enter Address</label>
                            <input type="text" class="form-control" <?=((@$edit && $edit->address)?' value="'.$edit->address.'"':'');?> name="address" placeholder="Address" required>
                        </div>
                
                 <button class="btn  btn-primary col-12" name="save"><?=(@$edit)?'UPDATE':'SAVE';?></button>
                 </div>
            </div>
        </div>
    </div></form>
</div>





</div>