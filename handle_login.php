<?php   
    $servername = "localhost";
    $username = "root";
    $password = "centimut-365:";
    $databasename = "cp476_internet_computing";

    try { 
        $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);

        $sql = $conn->prepare("SELECT * FROM $databasename.User WHERE Username = :username AND User_password = :pass ");
        $sql->bindParam(":username", $_POST['username']);
        $sql->bindParam(":pass", $_POST['pass']);
        $sql->execute();
        echo($sql->rowCount());
        if($sql->rowCount() == 0 ){
            header("Location: mainPage.php");
        }
        if ($sql->rowCount() != 0) {
            header("Location: /src/components/clothing/clothing-page.php");
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {
        echo "Connection Failed!: " .$e->getMessage();
    }
    

?>