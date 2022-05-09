<?php

require_once './Classes/ProductClass.php';
require_once './DataHandle.php';
$dbh = new dataHandle();
$connect = $dbh->connect();

    //checks for dropdown selected
    if (isset($_POST['productType'])) {

      try {
        //assign input value's to variables
        $sku = $_POST['sku'];
        $Name = $_POST['name'];
        $Price = $_POST['price'];
        //
        $Height = $_POST['height'];
        $Width = $_POST['width'];
        $Length = $_POST['length'];
        //
        $Weight = $_POST['weight'];
        //
        $Size = $_POST['size'];
        //
        $Type = $_POST['productType'];

        $Product = new Products();
        $Product->setproducts($sku,$Name,$Price,$Height,$Width,$Length,$Weight,$Size,$Type);



        header("refresh:0;url=/");

      } catch (PDOException $e) {
        //echo "Post failled: ".$e->getMessage();
      }

    }else{
      //echo "<script type='text/javascript'>CreateAllert('else','type isnt available');</script>";
    }
?>
