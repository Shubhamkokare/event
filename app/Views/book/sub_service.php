<style>
    .rate {
        padding: 2px;
        border-radius: 10px;
        height: 25px;
    }

    .qty {
        padding: 2px;
        border-radius: 10px;
        height: 25px;
    }
</style>

<form method="post" action="<?= base_url().'index.php/save_serice'; ?>">
    <div class="row row-cards">
        <div class="row">
            <?php foreach ($sub_serviceList as $item): 
                $service_images=$serviceModel->getServiceImagesById($item['id']);
                ?>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card card-img-holder">
                        <div class="card-body list-type">
                            <div class="clearfix">
                            <div id="carousel-controls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
                                        <ul id="lightgallery" class="list-unstyled row" lg-uid="lg0" lg-event-uid="">
                                             <?php 
                                             $active="active";
                                             foreach ($service_images as $image){
                                                /*  echo '
                                                <div class="demo-gallery card">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                   
                                                </div>
                                                <div class="card-body">
                                                    <ul id="lightgallery" class="list-unstyled row">
                                                        <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="'.base_url().'public/uploads/service/'.$image['img_name'].'" data-src="'.base_url().'public/uploads/service/'.$image['img_name'].'" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                            <a href="">
                                                                <img class="img-responsive" src="'.base_url().'public/uploads/service/'.$image['img_name'].'" alt="Thumb-1">
                                                            </a>
                                                        </li>
                                                        </ul>
						</div>
                         </div>
					</div>';
                                   */             
                                                
                                                echo ' 
                                                    <div class="carousel-item '.$active.'">
                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-5 border-bottom-0" data-responsive="'.base_url().'public/uploads/service/'.$image['img_name'].'" data-src="'.base_url().'public/uploads/service/'.$image['img_name'].'" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
                                                          
                                                            <img class="d-block w-100" alt="" src="'.base_url().'public/uploads/service/'.$image['img_name'].'" data-holder-rendered="true">
                                                    </li>
                                                    </div>';
                                                    $active="";
                                            }  ?>
                                            </ul>
										</div>
										<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>

                                <div class="float-left mt-2">
                               
                                </div>
                                <div class="">
                                    <p class="card-text text-muted font-weight-semibold"><?= $item['name']; ?></p>
                                    <h4 class="mb-0">₹.<?= $item['cost']; ?></h4>
                                    <div class="col-12 row">
                                        <input type="number" step="any" class="form-control col-6 qty" name="qty[]" placeholder="Qty"/>
                                        <input type="number" step="any" class="form-control col-6 rate" name="rate[]" placeholder="Rate"/>
                                    </div>
                                    <input type="hidden" step="any" class="form-control" name="item_id[]" value="<?= $item['id']; ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <input type="hidden" class="form-control" name="booking_id" value="<?= $booking_id; ?>"/>
        </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary" name="save" >Submit</button>
    </div></div>
</form>
