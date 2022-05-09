<?php
require_once 'DataHandle.php';
class Products extends DataHandle
{
    /** properties **/
    protected $SKU;
    protected $productName;
    protected $productPrice;

    protected $height;
    protected $width;
    protected $length;

    protected $weight;

    protected $size;
    protected $type;

    /** Methods **/
    function __construct(){
        //create empty object for using methods
    }

    //Deletes Selected products depending on the given ID
    public function DelleteSelected($connect,$num){
        try {
            $statement = $connect->query("DELETE FROM products WHERE id = $num");
            return $statement;

        } catch (PDOException $e) {
            echo "delete failled: ".$e->getMessage();
        }
    }

    //gets all table returns object of table
    function getproducts($connect){
        try {
            $statement = $connect->query("SELECT * FROM products");
            $results = $statement->fetchAll();

            return $results;

        } catch (PDOException $e) {
            echo "Fetch failled: ".$e->getMessage();
        }

    }

    //Creates a record in table with given values
    function setproducts($connect,$sku,$name,$price,$he,$wi,$le,$kg,$mb,$type){
        try {
            $this->SKU = $sku;
            $this->productName = $name;
            $this->productPrice = $price;

            $this->height = $he;
            $this->width = $wi;
            $this->length = $le;

            $this->weight = $kg;

            $this->size = $mb;
            $this->type = $type;
            $sqlquery = "INSERT INTO products (SKU, ProductName, ProductPrice,Height, Width, Length, Weight, Size, Type)
                         VALUES ('$sku','$name','$price','$he','$wi','$le','$kg','$mb','$type')";
            $statement = $connect->query($sqlquery);

            return $statement;

        } catch (PDOException $e) {
            echo "Insert failled: ".$e->getMessage();
        }
    }

}


?>
