<?php
/* includes */
include('DataHandle.php');
include("Classes/ProductClass.php");

$dbh = new dataHandle();
echo $dbh->connect();

?>
<!DOCTYPE html public>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <!-- bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Style.css">

    <title>ScandiWeb</title>
</head>
<body>
<?php include('Partials/Header.php');?>
<div class="container content">
    <?php
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/haileyesus.belew.com/ ' :
            require __DIR__ . '/views/list.php';
            break;
        case '/haileyesus.belew.com/add-product' :
            require __DIR__ . '/views/add.php';
            break;
        case '/haileyesus.belew.com/toDB' :
            require __DIR__ . 'haileyesus.belew.com/addToDB.php';
            break;
        default:
            http_response_code(404);
            require __DIR__ . '/views/404.php';
            break;
    }
    ?>
</div>
<?php include('Partials/Footer.php');?>
</body>
</html>

