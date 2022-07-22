<head>
    <title>Main Page</title>
    <link rel = "stylesheet" href = "/src/style/introPage.css?v=<?php echo time() ?>">
</head>



<body>
    <div>
        <?php include('./src/components/header/header.php')?>

        <div class = "slider-container">
            <div class="image-slider">
                <div class="sliders-div" id="slide-1">
                    <img src = "./src/imgs/image5.png" alt = "" class = "img" id ="img1">
                </div>
                <div class="sliders-div" id="slide-2">
                    <img src = "./src/imgs/image4.png" alt = "" class = "img" id ="img2">
                </div>
                <div class="sliders-div" id="slide-3">
                    <img src = "./src/imgs/image6.png" alt = "" class = "img" id ="img3">
                </div>
            </div>
        </div>

        <div class = "sale">
            <h3>Summer 2022</h3>
            <h3>FLASH SALE 40% off</h3>
        </div>
    </div>
</body>