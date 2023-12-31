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
        <h1>FUTURE VALUE CALCULATOR</h1>

        <?php if (!empty($error_message)) { ?>
            <p class="error">
                <?php echo $error_message; ?>
            </p>
        <?php } ?>

        <form action="display_results.php" method="post">

            <div id="data">
                <label for="investment">Investment Amount</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>" /><br />

                <label for="interest_rate">Yearly Interest Rate</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>" /><br />

                <label for="years">Number Of Years</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>" /><br />
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>

        </form>
    </div>

</body>

</html>