<?php
    $dataString = file_get_contents('https://api.coindesk.com/v1/bpi/currentprice.json/');
    $dataObject = json_decode($dataString);
    $dataValue = $dataObject->values;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinDesk Data</title>
</head>
<body>

    <h4>Disclaimer: <?php echo $dataObject->disclaimer ?></h4>
    <h4>chartName: <?php echo $dataObject->chartName ?></h4>
   
</body>
</html>
