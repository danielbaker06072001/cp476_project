<?php   
    include($_SERVER['DOCUMENT_ROOT'].'/src/components/card/card-display.php');

    function get_cart() {
        $servername = "localhost";
        $username = "username";
        $password = "centimut-365:";
        $databasename = "cp476_internet_computing";
        try { 
            $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            
            $sql = $conn->prepare("SELECT * FROM $databasename.Customer LEFT JOIN  $databasename.Cart ON $databasename.Customer.Cart_id = 
                                    $databasename.Cart.Cart_id");
            $sql->bindParam(":item_type", $item_type);
            $sql->execute();

            foreach($sql as $row){
                Card($row['Item_name'],$row['Item_price'],$row['Item_quantity'], $row['Image_URL']);    
            }
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }catch(PDOException $e) {
            echo "Connection Failed!: " .$e->getMessage();
        }
    }   

?>