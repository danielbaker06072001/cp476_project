<head>
    <link rel ="stylesheet" href = "../../style/card.css?v=<?php echo time() ?>" type = "text/css"></link>
</head>

<?php
    function Card($item_name, $item_price, $item_quantity, $image_url){ ?>
        <form key = "test" action = "/src/components/card/cardPage.php"  method = "POST">
            <div class = "card-container">
                <div class = "image-in-card" style="background-image : url(<?php echo $image_url ;?>)"></div>
                <h3><?php echo $item_name ?></h3>
                <h3>$<?php echo $item_price ?></h3>
                <h3>In stock: <?php echo $item_quantity ?></h3>
                <form action = "" >
                    <a href = "/src/components/card/cardPage.php?action=show&item=<?php echo $item_name?>&price=
                        <?php echo $item_price?>&quantity=<?php echo $item_quantity?>&url=<?php echo $image_url?>">SUBMIT</a>
                </form>
            </div>
        </form>

<?php } 
    ?>
