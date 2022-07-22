<!DOCTYPE html>
<html lang = "en">

<head>
    <title >Bottoms</title>
    <link rel = "stylesheet" href = "../../style/clothPage.css">
</head>

<?php 
include($_SERVER['DOCUMENT_ROOT'].'/src/components/api/get_clothing.php')

?>

<body>
    <?php include("../header/header.php") ?>
    <div class = "display-item">
            <?php get_inventory("bottoms")?>
    </div>
</body>