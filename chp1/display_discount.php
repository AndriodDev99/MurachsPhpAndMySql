<?php
//get data from form
$productDescription = $_POST['productDescription'];
$listPrice = $_POST['listPrice'];
$discountPercentage = $_POST['discountPercentage'];

//calculate discount
$discount = $listPrice * $discountPercentage * .01;
$discount_price = $listPrice - $discount;

// apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$" .number_format($listPrice, 2);
$discount_price_formatted = "$" .number_format($discount_price, 2);
$discount_percentage_formatted = $discountPercentage;
$discount_formatted = "$" .number_format($discount, 2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div id="content">

        <h1>Product Discount Calculator</h1>

        <label>Product Description :</label>
        <span><?php echo $productDescription; ?></span><br>

        <label>List Price :</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount :</label>
        <span><?php echo $discount_percentage_formatted ?></span><br>

        <label>Discount Amount :</label>
        <span><?php echo $discount_formatted ?></span><br>

        <label>Discount Price :</label>
        <span><?php echo $discount_price_formatted ?></span>
    </div>
    
</body>
</html>
