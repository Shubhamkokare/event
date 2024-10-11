<!-- FOOTER -->
<footer class="footer">
	<div class="container">
		<div class="row align-items-center flex-row-reverse">
			<div class="col-md-12 col-sm-12 text-center">
				Copyright © 2019 <a href="#">A TO Z</a>. Designed by <a href="#">DK Techno's</a> All rights reserved.
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER CLOSED -->


<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form id="addCustomerForm">
               <div class="form-group">
                  <label for="customerName" for="name">Name</label>
                  <input type="text" class="form-control" id="customerName" name="name" required>
               </div>
               <div class="form-group">
                  <label for="customerNumber" for="number">Number</label>
                  <input type="number" class="form-control" id="customerNumber" name="number" required>
               </div>
               <div class="form-group">
                  <label for="customerAddress" for="address">Addres</label>
                  <input type="text" class="form-control" id="customerAddress" name="address" required>
               </div>
               <span  class="btn btn-primary" name="save" id="saveCustomerBtn">Save </button>
            </form>
         </div>
      </div>
   </div>
</div>

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY SCRIPTS -->
<script src="<?= base_url(); ?>assets/js/vendors/jquery-3.2.1.min.js"></script>

<!-- BOOTSTRAP SCRIPTS -->
<script src="<?= base_url(); ?>assets/js/vendors/bootstrap.bundle.min.js"></script>

<!-- SPARKLINE -->
<script src="<?= base_url(); ?>assets/js/vendors/jquery.sparkline.min.js"></script>

<!-- CHART-CIRCLE -->
<script src="<?= base_url(); ?>assets/js/vendors/circle-progress.min.js"></script>

<!-- RATING STAR -->
<script src="<?= base_url(); ?>assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- C3.JS CHART PLUGIN -->
<script src="<?= base_url(); ?>assets/plugins/charts-c3/d3.v5.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/charts-c3/c3-chart.js"></script>

<!-- INPUT MASK PLUGIN-->
<script src="<?= base_url(); ?>assets/plugins/input-mask/jquery.mask.min.js"></script>

<!-- SIDE-MENU JS -->
<script src="<?= base_url(); ?>assets/plugins/toggle-menu/sidemenu.js"></script>

<!-- CHARTJS CHART -->
<script src="<?= base_url(); ?>assets/plugins/chart/Chart.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/chart/utils.js"></script>

<!-- PIETYCHART -->
<script src="<?= base_url(); ?>assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/peitychart/peitychart.init.js"></script>

<!-- CUSTOM SCROLL BAR JS-->
<script src="<?= base_url(); ?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- CHARTS PLUGIN -->
<script src="<?= base_url(); ?>assets/plugins/highcharts/highcharts.js"></script>

<!-- SIDEBAR JS -->
<script src="<?= base_url(); ?>assets/plugins/sidebar/sidebar.js"></script>

<!-- DATA TABLE -->
<script src="<?= base_url(); ?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/datatable/dataTables.responsive.min.js"></script>

        <script src="<?= base_url(); ?>assets/plugins/gallery/picturefill.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lightgallery.js"></script>
	     <script src="<?= base_url(); ?>assets/plugins/gallery/lightgallery-1.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-pager.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-autoplay.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-fullscreen.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-zoom.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-hash.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/gallery/lg-share.js"></script>



<!-- INDEX-SCRIPTS -->
<script src="<?= base_url(); ?>assets/js/index.js"></script>
<script src="<?= base_url(); ?>assets/js/index1.js"></script>

<!-- CUSTOM JS-->
<script src="<?= base_url(); ?>assets/js/custom.js"></script>

<script src="<?= base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script>
	function filter_destinations(e) {
		//alert($(e).val());
		$('#destinations option').hide();
		$('#destinations option[data-lodpoint="' + $(e).val() + '"]').show();
	}

	$('.select2').select2({ placeholder: "Select an Option" });

   lightGallery(document.getElementById('lightgallery'));

	$("#datatable").DataTable();
/*
	$("#service").on('change', function () {
		var value = $(this).val();

		if (value > 0) {
			var name = $(this).find(':selected').attr('data-name');
			var rate = $(this).find(':selected').attr('data-cost');

			$("#service_table").append("<tr><td>" + name + "<input type='hidden' name='ser_id[]' value='" + value + "'/></td><td><input type='number' name='cost" + value + "' step='any' value='" + rate + "'/></td><td><input type='number' name='qty" + value + "' step='any'/></td><td><input type='number' name='total" + value + "' class='all_total'  step='any' readonly/></td><td> <i onclick='removeRow(this)' class='fa fa-trash'></i></td></tr>");

			$('input[name="qty' + value + '"], input[name="cost' + value + '"]').on('input', function () {
				var qty = parseFloat($('input[name="qty' + value + '"]').val()) || 0;
				var cost = parseFloat($('input[name="cost' + value + '"]').val()) || 0;
				var total = qty * cost;

				$('input[name="total' + value + '"]').val(total.toFixed(2));

				
				
 				get_total();
			});
		}

	});*/
   $("#service").on('change', function () {
		var value = $(this).val();

		if (value > 0) {
			var id = $(this).find(':selected').attr('id');
			var name = $(this).find(':selected').attr('data-name');
         var serviceId = id;

        getImageUrlsByServiceId(serviceId);
     
			
		}

	});
   function getImageUrlsByServiceId(serviceId) {
    $.ajax({
        url: 'imageall/' + serviceId, 
        type: 'POST',
        dataType: 'json',
        success: function (data) {
    console.log('Response Data:', data);
    if (data.images) {
        console.log('Image URLs:', data.images);
    } else {
        console.error('Error: Image URLs not found');
    }
},

    });
}

function removeRow(e) {
	$(e).closest('tr').remove();
	get_total();
}

function get_total() {
	var sum=0;
	$(".all_total").each(function () {
					sum += parseFloat($(this).val()) || 0;	
				});
			//	alert(sum);
				$("#sum").html("Total : "+sum);
}

      $('#addcustomer').click(function () {
         $('#addCustomerModal').modal('show');
      });
	  $('#saveCustomerBtn').click(function () {
         var formData = $('#addCustomerForm').serialize();

         $.ajax({
            type: 'POST',
            url: '<?=base_url();?>index.php/client_save',
            data: formData,
            success: function (response)
            {
               alert(response);

               $('#addCustomerForm')[0].reset();
               $('#addCustomerModal').modal('hide');
            }
         });
      });
    
</script>
<style> 
	.success_status{
		background: #c3fd8b;
    padding: 5px;
    color: black;
    font-weight: 700;
	}
	.error_status{
		background: #cf0000;
    padding: 5px;
    color: white;
    font-weight: 700;
	}
   </style>
</body>

</html>