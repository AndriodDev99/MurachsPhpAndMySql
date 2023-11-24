<?php
#get the data from form
$investment = $_POST['investment'];
$interest_rate = $_POST['interest_rate'];
$years = $_POST['years'];

#validate investment entry
$error_message = '';
if (empty($investment)) {
    $error_message = 'Investment is a required field.';
} else if (!is_numeric($investment)) {
    $error_message = 'Investment must be a valid number.';
} else if ($investment <= 0) {
    $error_message = 'Investment must be greater than zero.';
}

#validate interest entry
else if (empty($interest_rate)) {
    $error_message = 'Interest rate is a required field.';
} else if (!is_numeric($interest_rate)) {
    $error_message = 'Interest rate must be a valid number.';
} else if ($interest_rate <= 0) {
    $error_message = 'Interest rate must be greater than zero.';
}

#if an error message exists, go to the index page
if (!empty($error_message)) {
    include('index.php');
    exit();
}

#calculate the future value
$future_value = $investment;
for ($i = 0; $i < $years; $i++) {
    $future_value = ($future_value + ($future_value * $interest_rate * 0.01));
}

#apply formatting in currency and percentage
$investment_f = "R" . number_format($investment, 2);
$interest_rate_f = $interest_rate . '%';
$future_value_f = "R" . number_format($future_value, 2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUTURE VALUE CALCULATOR</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>

    <div id="content">
        <h1>Future Value Calculator</h1>

        <label>Investment Amount :</label>
        <span>
            <?php echo $investment_f ?>
        </span>

        <label>Yearly Interest Rate :</label>
        <span>
            <?php echo $interest_rate_f ?>
        </span>

        <label>Future Value :</label>
        <span>
            <?php echo $future_value_f ?>
        </span>
    </div>

</body>

</html>