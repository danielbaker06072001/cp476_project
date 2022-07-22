<head>
    <link rel ="stylesheet" href = "../../style/cartPage.css?v=<?php echo time() ?>" type = "text/css"></link>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'].'/src/components/header/header.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/src/components/cart/card-display.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/src/components/cart/cartCard.php'); ?>

<div>
    <h1>Cart</h1>
    <?php cartCard()?>
</div>