<?php
  
  // get the data from the form
  $product_description = $_POST['product_description'];
  


  // escape the unformatted input
   $product_description_escaped = htmlspecialchars($product_description);
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
	<span><?php echo $product_description_escaped; ?></span><br>


  </main>
</body>

</html>

