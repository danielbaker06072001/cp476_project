<head>
    <link rel ="stylesheet" href = "../../style/card.css?v=<?php echo time() ?>" type = "text/css"></link>
</head>

<style>
    .hidden { 
        display:none
    }
</style>

<?php
    function Card($item_name, $item_price, $item_quantity, $image_url){ ?>
        <form key = "test" action = "/src/components/card/cardPage.php"  method = "POST">
            <div class = "card-container">
                <div class = "image-in-card" style="background-image : url(<?php echo $image_url ;?>)"></div>
                <h3><?php echo $item_name ?></h3>
                <h3>$<?php echo $item_price ?></h3>
                <h3>In stock: <?php echo $item_quantity ?></h3>

                <input class = "hidden" name = "item_name" value = "<?php echo $item_name?>">
                <input class = "hidden" name = "item_price" value = "<?php echo $item_price?>">
                <input class = "hidden" name = "item_quantity" value = "<?php echo $item_quantity?>">
                <input class = "hidden" name = "image_url" value = "<?php echo $image_url?>">
                <button type = "submit"></button>
            </div>
        </form>

<?php } 
    ?>
