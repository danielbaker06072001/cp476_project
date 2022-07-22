<?php   

    $servername = "brynikglqwpbdrnw1eak-mysql.services.clever-cloud.com";
    $username = "u6fnkpqowy4jrcly";
    $password = "CeIXTM6WjPOFDrK8A5z2";
    $databasename = "brynikglqwpbdrnw1eak";

    // $servername = "localhost";
    // $username = "root";
    // $password = "centimut-365:";
    // $databasename = "mysql";

    try { 
        $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $sql = "SELECT ITEM_ID FROM brynikglqwpbdrnw1eak.Inventory";
        foreach($conn->query($sql) as $row){
            print $row['ITEM_ID'];
        }
        echo("Connected sucessfuly");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        echo "Connection Failed!: " .$e->getMessage();
    }
    

?>