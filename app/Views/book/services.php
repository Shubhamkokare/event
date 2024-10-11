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

	<form method="post" action="<?= base_url() . 'index.php/save_serice'; ?>">
	<div class="panel-group1" id="accordion1">
		<?php foreach ($service as $item):
			$service_images =$serviceModel->getServiceImagesById($item['id']);
			?>

										<div class="panel panel-default mb-4">
											<div class="panel-heading1 ">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#<?="accord_".$item['id'] ?>" aria-expanded="false"><?=$item['name'] ?> 1</a>
												</h4>
											</div>
											<div id="<?="accord_".$item['id'] ?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
												<div class="panel-body">
												<?php foreach ($service_images as $itxem): ?>
							<ul id="lightgallery" class="list-unstyled row">

								<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-0 mb-xl-0 border-bottom-0"
									data-responsive="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
									data-src="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
									data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
									<a href="">
										<img class="img-responsive mb-0"
											src="<?= base_url(); ?>public/uploads/service/<?= $itxem['img_name']; ?>"
											alt="Thumb-2">
									</a>
									<div class="">
										<p class="card-text text-muted font-weight-semibold">
											<!--<?= $itxem['name']; ?>-->
											</p>
										<h4 class="mb-0">₹.
											<?= $itxem['cost']; ?>
										</h4>
										<div class="col-12 row">
											<input type="number" step="any" class="form-control col-6 qty" name="qty[]"
												placeholder="Qty" />
											<input type="number" step="any" class="form-control col-6 rate" name="rate[]"
												placeholder="Rate" />
												<br>
												<input type="text"  class="form-control col-6 rate" name="remark[]"
												placeholder="Remark" />
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

										<?php endforeach; ?>
										<input type="hidden" class="form-control" name="booking_id" value="<?= $booking_id; ?>"/>

			</div>
			<div class="col-12">
        <button type="submit" class="btn btn-primary" name="save" >Submit</button>
    </div>
	</form>