<?php 
    function update_quantity($quantity ){
        $servername = "localhost";
        $username = "root";
        $password = "centimut-365:";
        $databasename = "cp476_internet_computing";

        try { 
            $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            
            $sql = $conn->prepare("UPDATE $databasename.Inventory SET Item_quantity = :item_quantity");
            $sql->bindParam(":item_quantity", $quantity);
            $sql->execute();

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }catch(PDOException $e) {
            echo "Connection Failed!: " .$e->getMessage();
        }
    }

    update_quantity($_POST['quantity']);
    header("Location: /src/components/clothing/clothing-page.php");
?>