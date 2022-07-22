<?php 
    function update_price($price){
        $servername = "localhost";
        $username = "root";
        $password = "centimut-365:";
        $databasename = "cp476_internet_computing";

        try { 
            $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            
            $sql = $conn->prepare("UPDATE $databasename.Inventory SET Item_price = :item_price");
            $sql->bindParam(":item_price", $price);
            $sql->execute();
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }catch(PDOException $e) {
            echo "Connection Failed!: " .$e->getMessage();
        }
    }

    update_price($_POST['price']);
    header("Location: /src/components/clothing/clothing-page.php");
?>