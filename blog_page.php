<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog_page.css">
    <title>Blog</title>
</head>
<body>
    <?php include 'php/header.php' ?>
    <div class="app">
        <div class="cardList">
            <button class="cardList_btn btn btn--left">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </button>
            <div class="cards_wrapper">
                <div class="current--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/Z8dtTatMVMw" alt="">
                    </div>
                </div>
                <div class="card next--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/9dmycbFE7mQ" alt="">
                    </div>
                </div>
                <div class="card previous--card">
                    <div class="card__image">
                        <img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="">
                    </div>
                </div>
            </div>
            <div class="infoList">
                <div class="info__wrapper">
                    <div class="info current--info">
                        <h1 class="text name">Highland</h1>
                        <h4 class="text location">Scotland</h4>
                        <p class="text description">The mountains are calling</p>
                    </div>
                    <div class="info next--info">
                        <h1 class="text name">Machu pichu</h1>
                        <h4 class="text location">Peru</h4>
                        <p class="text description">Adventure is never far away</p>
                    </div>
                    <div class="info previous--info">
                        <h1 class="text name">Chaoonix</h1>
                        <h4 class="text location">France</h4>
                        <p class="text description">Let your dreams come true</p>
                    </div>
                </div>
            </div>

        </div>




    </div>



</body>
<?php include 'php/footer.php' ?>
</html>