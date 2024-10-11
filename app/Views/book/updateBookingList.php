<!-- ROW-1 OPEN -->
<style>
	.rate {
		padding: 3px;
		border-radius: 10px;
		height: 25px;
		margin: 2px;

	}

	.qty {
		padding: 2px;
		border-radius: 10px;
		height: 25px;
		margin: 2px;
	}
</style>
<link rel="stylesheet" href="path/to/custom-icons.css" />

<div class="card">
	<div class="card-header">
		<h3 class="card-title">Accordion style</h3>
	</div>

	<form method="post" action="<?= base_url() . 'index.php/editorderlist/'.@$book_id; ?>">
	<div class="panel-group1" id="accordion1">
		<?php foreach ($edit as $item):
			$service_images =$serviceModel->getServiceImagesByIdupdate($item['service_id']);
			?>

										<div class="panel panel-default mb-4">
											<div class="panel-heading1 ">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?="accord_".$item['id'] ?>" aria-expanded="false"><?=$item['name'] ?> </a>
												</h4>
											</div>
											<div id="<?="accord_".$item['id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
												<div class="panel-body">
												<?php foreach ($service_images as $itxem): ?>
							<ul id="lightgallery" class="list-unstyled row">

								<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-0 mb-xl-0 border-bottom-0"
									data-responsive="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
									data-src="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
									data-sub-html="">

									<a href="">
										<img class="img-responsive mb-0"
											src="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
											alt="Thumb-2">
									</a>
                                    &nbsp;&nbsp;<a onclick="return confirm('Are you sure?')" href="<?= site_url('deleteorderBookig/' . $item['id'].'/'.$item['booking_id']) ?>" title="Delete"><i class="fa fa-trash text-danger"></i></a>

									<div class="">
										<p class="card-text text-muted font-weight-semibold">
											<!--<?= $itxem['name']; ?>-->
											</p>
										<h4 class="mb-0">₹.
											<?= $itxem['cost']; ?>
										</h4>
										<div class="col-12 row">
											<input type="number" step="any" class="form-control col-6 qty" name="qty[]" value="<?= $item['qty']; ?>" />
											<input type="number" step="any" class="form-control col-6 rate" name="rate[]" value="<?= $item['rate']; ?>" />
												<br>
												<input type="text"  class="form-control col-6 rate" name="remark[]" value="<?= $item['remark']; ?>" />
										</div>
										<input type="hidden" step="any" class="form-control" name="item_id[]"
											value="<?= $itxem['id']; ?>" />
									</div>
								</li>
							</ul>
						<?php endforeach; ?>
											</div>
											</div>
										</div>
										<input type="hidden" class="form-control" name="id[]" value="<?= $item['id']; ?>"/>

										<?php endforeach; ?>

			</div>
			<div class="col-6">
        <button type="submit" class="btn btn-primary" name="save" >update</button>
    </div>
    <div style="text-align: right;">
    <span>
        <a href="<?= site_url('services/' . @$book_id) ?>" title="Add">
        <i class="fa fa-plus" style="font-size: 1.5em; background-color: #ff0000; padding: 0.5em 0.5em; border-radius: 70%; color: #ffffff;"></i>
        </a>
    </span>
</div>
	</form>