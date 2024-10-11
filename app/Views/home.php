        <!-- ROW-1 OPEN -->
		<!-- Add this line to your HTML head -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

		<link rel="stylesheet" href="path/to/custom-icons.css" />
        <h4 class="text-white">EVENT STATUS</h4>
        <div class="row row-cards">

        	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
				<a href="<?=Base_url();?>index.php/running_vehicles" target="_blank">
        		<div class="card card-img-holder">
        			<div class="card-body list-type">
        				<div class="clearfix">
        					<div class="float-left mt-2">
        						<span class="">
								<i class="custom-icon-star"></i>

        						</span>
        					</div>
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1">Customer </p>
        						<h2 class="mb-0"><?= @$totalcustomer; ?></h2>
        					</div>
        				</div>
        			</div>
        		</div>
				</a>
        	</div>

        	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<a href="<?=Base_url();?>index.php/parking_vehicles" target="_blank">
        		<div class="card card-img-holder">
        			<div class="card-body list-type">
        				<div class="clearfix">
        					<div class="float-left mt-2">
        						<span class="">
								<i class="custom-icon-star"></i>
        						</span>
        					</div>
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1"> Total Booking</p>
        						<h2 class="mb-0"><?= @$totalbooking; ?></h2>
        					</div>
        				</div>
        			</div>
        		</div>
				</a>
        	</div>
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<a href="<?=Base_url();?>index.php/this_month_order" target="_blank">
        		<div class="card card-img-holder">
        			<div class="card-body list-type">
        				<div class="clearfix">
        					<div class="float-left mt-2">
        						<span class="">
								<i class="custom-icon-star"></i>
        						</span>
        					</div>
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1">This Month</p>
        						<h2 class="mb-0"><?= @$thismonth; ?></h2>
        					</div>
        				</div>
        			</div>
        		</div>
				</a>
        	</div>

        	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<a href="<?=Base_url();?>index.php/next_month_order" target="_blank">
        		<div class="card card-img-holder">
        			<div class="card-body list-type">
        				<div class="clearfix">
        					<div class="float-left mt-2">
        						<span class="">
								<i class="custom-icon-star"></i>
        						</span>
        					</div>
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1">Next Month</p>
        						<h2 class="mb-0"><?= @$nextmonth; ?></h2>
        					</div>
        				</div>
        			</div>
        		</div>
				</a>
        	</div>

        	<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
				<a href="<?=Base_url();?>index.php/parking_vehicles" target="_blank">
        		<div class="card card-img-holder">
        			<div class="card-body list-type">
        				<div class="clearfix">
        					<div class="float-left mt-2">
        						<span class="">
								<i class="custom-icon-star"></i>
        						</span>
        					</div>
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1">Tody Order</p>
        						<h2 class="mb-0"><?= @$totalorder; ?></h2>
        					</div>
        				</div>
        			</div>
        		</div>
				</a>
        	</div>

        	
        </div>
   