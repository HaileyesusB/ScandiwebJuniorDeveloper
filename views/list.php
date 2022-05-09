<h1 id="addTitle">Products</h1>
<form method="post">
  <input type="submit" name="btnDelete" value="MASS DELETE"class="btn btn-danger ">
  <div class="allItems">

    <?php
    require_once '../Classes/ProductClass.php';
    
    $Product = new Products();
    $prod = $Product->getproducts($connect);


    foreach ($prod as $row) {
      ?>

      <div id="<?php echo $row['ProductName'];  ?>" class="span-3 itembox">
        <input class="delete-checkbox" type="checkbox" name="checkbox[]" value="<?php  echo $row['ID'] ?>">
        <ul>
          <?php
          echo "<li>".$row['SKU']."</li>";
          echo "<li>".$row['ProductName']."</li>";
          echo "<li>".$row['ProductPrice']."</li>";
          echo "<li>".$row['Type']."</li>";
          ?>

          <li><?php
          switch ($row['Type']) {
            //Furniture
            case '0':
            echo "Demensions in meters: ".$row['Height']."x".$row['Width']."x".$row['Length'].$row["Add Furniture"];
            
            break;
            //books
            case '1':
             echo "Weight: ".$row['Weight']."KG";
            break;
            //Dvd
            case '2':
             echo "Size:  ".$row['Size']."MB";
            break;
          }
          ?>
        </li>
      </ul>

    </div>

  <?php   } ?>
</form>
</div>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Something posted

  if (isset($_POST['btnDelete'])) {
    try {
      $boxes = $_POST['checkbox'];
      foreach ($boxes as $box) {
        $Product->DelleteSelected($connect,$box);
      }
      header("refresh:0");

    } catch (PDOException $e) {
      //echo "delete failled: ".$e->getMessage();
    }

  } else {
    //echo "delete btn doesnt exist";
  }
}
?>
