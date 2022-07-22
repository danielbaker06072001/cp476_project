<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'empty';
include($_SERVER['DOCUMENT_ROOT'].'/src/components/api/add_item.php');

// Add item to cart
if ($action == 'add') {

    $name = $_GET['quantity'];
    add_to_cart($name);
    #header("Location: /shoppingPage.php");
    #exit();
    // exit();
}
?>

<head>
    <title><?php echo $_GET['item']?></title>
    <link rel = "stylesheet" href = "/src/style/itemPage.css?v=<?php echo time() ?>">
</head>


<?php include($_SERVER['DOCUMENT_ROOT'].'/src/components/header/header.php');?>

<style>
.hidden {
    display: none
}
</style>

<div class = "main-container">
    <div class = "image-container" style="background-image : url(<?php echo $_GET['url'] ;?>)"></div>
    <div class="info-container">
        <h2>Item : <?php echo $_GET['item']?></h2>
        <h2>Price : <?php echo $_GET['price']?></h2>
        <h2>Quantity : <?php echo $_GET['quantity']?></h2>
        <form action = "#" type = "POST">
            <input class="hidden" name="action" value="add">    
            <input class="hidden" name="item" value="<?=$_GET['item']?>">
            <input class="hidden" name="price" value="<?=$_GET['price']?>">
            <input class="hidden" name="url" value="<?=$_GET['url']?>">
            <input type = "number" name="quantity" step = "1" min = "1" max = <?php echo $_GET['quantity']; ?> value = 1 />
            <button type = "submit"> Add </button>
        </form>
    </div>
</div>