<?php  

    //get the data from the request
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Test</title>
</head>
<body>
    <h2>Welcome</h2>
    <p><?php echo "Hello ". $first_name .' '. $last_name; ?></p>
    
</body>
</html>