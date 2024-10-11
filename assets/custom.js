$("#para_type").on('change',function(){
    if($(this).val()=="RANGE")
    $(".range_ip").show();
        else
    $(".range_ip").hide();

});


$("#product_id").on('change', function () {
    var value = $(this).val();
    var name = $(this).find(':selected').attr('data-name');
    var rate = $(this).find(':selected').attr('data-cost');

    $("#product_table").append("<tr><td>" + name + "<input type='hidden' name='prd_id[]' value='" + value + "'/></td><td><input type='number' name='prd_rate" + value + "' step='any' value='" + rate + "'/></td><td><input type='number' name='prd_qty" + value + "' step='any'/></td><td><input type='number' name='prd_tot" + value + "' step='any' readonly/></td></tr>");

    // Update prd_tot when prd_qty or prd_rate changes
    $('input[name="prd_qty' + value + '"], input[name="prd_rate' + value + '"]').on('input', function () {
        var qty = parseFloat($('input[name="prd_qty' + value + '"]').val()) || 0;
        var rate = parseFloat($('input[name="prd_rate' + value + '"]').val()) || 0;
        var tot = qty * rate;

        // Update the prd_tot input field
        $('input[name="prd_tot' + value + '"]').val(tot.toFixed(2)); // Adjust the decimal places as needed

        // Calculate and display the sum of prd_tot values
        var sum = 0;
        $('input[name^="prd_tot"]').each(function () {
            sum += parseFloat($(this).val()) || 0;
        });

        // Display the sum in a separate element (you can change this to fit your needs)
        $('#total_amt').text(sum.toFixed(2)); 
    });
}); 


$("#leadgel_id").on('change',function(){
    if($(this).val()=="employee"){
    $(".leadgel_ip").show();
    $(".amount_ip").show();

    }
        else{ 
    $(".amount_ip").show();
    $(".leadgel_ip").hide();
        }
});

