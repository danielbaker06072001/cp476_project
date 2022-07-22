<head>
    <link rel ="stylesheet" href = "../../style/cartCard.css?v=<?php echo time() ?>" type = "text/css"></link>
</head>

<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/src/components/card/card-display.php');
    function cartCard(){ ?>
        <div class = "test">
            <?php Card("hats", "20","10","");?>
        </div>


    <?php };
?>