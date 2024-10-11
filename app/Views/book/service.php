        <!-- ROW-1 OPEN -->
		<!-- Add this line to your HTML head -->
	<h4 class="text-white">EVENT STATUS</h4>

 
<div class="row">
		<?php foreach($service as $itam): ?>

		<div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="<?=base_url().'index.php/sub_service/'.$itam['id'];?>">
        		<div class="card ">
        			<div class="card-body "> 

        						<img class="img img-thumbnail" src="<?=base_url().'public/uploads/service/'.$itam['img'];?>" width="100%">
        					<div class="float-right text-right">
        						<p class="card-text text-muted font-weight-semibold mb-1"><?=$itam['name']?></p>
        						<h2 class="mb-0"><?=$itam['name']?></h2>

        					</div>
        				</div>
        			</div>
        		</div>				
        
			<?php endforeach; ?>	</div>
			</div>
        </div>
</a>
   
    
    
    
</div>
