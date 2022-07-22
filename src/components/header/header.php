<head>
    <title>Main Page</title>
    <link rel = "stylesheet" href = "/src/style/introPage.css?<?php echo time() ?>">
</head>

<body>
    <div>
        <div class = "header">
            <div>
                <a href = "http://localhost/shoppingPage.php">
                    <img src = "/src/imgs/flowers.png" alt = "Logo Image" width = 30 height = 30>
                    <h3 class = "style-express">Style Express</h3>
                </a>
            </div>

        </div>

        <div class = "section-select">
            <form action = "/src/components/clothing/clothing-page.php">
                <button type = "submit" name = "clothing" value = "clothing" class ="button-site">All clothing</inp>
            </form>

            <form action = "/src/components/tops/tops.php" >
                <button type = "submit" name = "clothing" value = "clothing" class ="button-site">Tops</inp>
            </form>

            <form action = "/src/components/bottoms/bottoms-page.php" >
                <button type = "submit" name = "clothing" value = "clothing" class ="button-site">Bottoms</inp>
            </form>

            <form action = "/src/components/accessories/accessories-page.php" >
                <button type = "submit" name = "clothing" value = "clothing" class ="button-site">Accessories</inp>
            </form>
        </div>
    </div>
</body>