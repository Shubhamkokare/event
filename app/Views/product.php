<!-- app/Views/product/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Product</title>
</head>
<body>

   <h2>Add Product</h2>

   <form id="productForm">
      <label for="name">Product Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="price">Price:</label>
      <input type="number" id="price" name="price" step="0.01" required>

      <label for="description">Description:</label>
      <textarea id="description" name="description"></textarea>

      <button type="button" id="saveProduct">Save Product</button>
   </form>

   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script>
      $(document).ready(function () {
         $('#saveProduct').on('click', function () {
            // Collect form data
            var formData = $('#productForm').serialize();

            // Send an AJAX request to save product data
            $.ajax({
               type: 'POST',
               url: '<?= base_url('index.php/product/saveProduct'); ?>',
               data: formData,
               success: function (response) {
                  // Handle the response (e.g., show a success message)
                  alert('Product saved successfully!');

                  // Clear input fields
                  $('#productForm')[0].reset();
               },
               error: function (error) {
                  // Handle errors
                  alert('Error saving product data!');
               }
            });
         });
      });
   </script>
</body>
</html>
