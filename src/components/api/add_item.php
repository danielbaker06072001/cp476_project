<?php 
    function add_to_cart($item ){
        $servername = "localhost";
        $username = "root";
        $password = "centimut-365:";
        $databasename = "cp476_internet_computing";

        echo ($item);
        try { 
            $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            
            $sql = $conn->prepare("SELECT * FROM boiuuvtnh6shtf1xsyg4.Inventory WHERE Item_type = :item_type");
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