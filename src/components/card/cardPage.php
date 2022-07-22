<head>
    <title><?php echo $_POST['item_name']?></title>
    <link rel = "stylesheet" href = "/src/style/itemPage.css?v=<?php echo time() ?>">
</head>

<?php include($_SERVER['DOCUMENT_ROOT'].'/src/components/header/header.php');?>

<div class = "main-container">
    <div class = "image-container" style="background-image : url(<?php echo $_POST['image_url'] ;?>)"></div>
    <div class="info-container">
        <h2>Item : <?php echo $_POST['item_name']?></h2>
        <h2>Price : <?php echo $_POST['item_price']?></h2>
        <h2>Quantity : <?php echo $_POST['item_quantity']?></h2>

        <form action = "/src/components/api/update_price.php" method = "POST">
            <input type = "number" name="price" step = "1" min = "1" value = 1 />
            <button type = "submit"> Update Price </button>
        </form>

        <form action = "/src/components/api/update_quantity.php" method = "POST">
            <input type = "number" name="quantity" step = "1" min = "1" value = 1 />
            <button type = "submit"> Update Quantity </button>
        </form>
    </div>
</div>