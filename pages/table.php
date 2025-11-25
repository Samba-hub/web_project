<!DOCTYPE html>
<html>

    <head>
    <meta name="author" content="Ultimate Life Form">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Table</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/print.css" media="print">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation bar -->
         
        <?php include '../includes/navbar.php'; ?>
        <h1>Table Page</h1>
        <table border="10" class="Table">
    <caption>Best Selling Games</caption>

    <tr>
        <th colspan="2">Game</th>
        <th colspan="2">Genre</th>
        <th colspan="2">Amount</th>
    </tr>

    <tr>
        <th rowspan="2">Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
    </tr>

    <tr>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
    </tr>

    <tr>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
        <th>Best Sell</th>
    </tr>
</table>
        <?php include '../includes/footer.php'; ?>
    </body>

</html>