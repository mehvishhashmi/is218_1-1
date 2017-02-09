<?php
  
  // get the data from the form
  $product_description = $_POST['product_description'];

?>
<!DOCTYPE html>
<html>
<head>
        <title> Product Discount Calculator </title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <main>
	<h1> Product Discount Calculator </h1>
	<label> Product Description:</label>
	<span><?php echo $product_description; ?></span><br>


  </main>
</body>

</html>

