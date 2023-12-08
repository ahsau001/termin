<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butikk</title>
    <link rel='stylesheet' href='style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

<div class="header">
        <header>
            <nav class="shadow">
                <div style="width: 270px;"></div>
                <a href="index.html"><img src="img/barevifter.png" alt="her ser vi logo'en til nettsiden" class="logo"></a>
                <input type="text" placeholder="search" class='search'>
                <ul>
                    <div class="flex">
                        <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                        <li><a href="motta1.php"><i class="fa-sharp fa-solid fa-user"></i></a></li>
                        <li><a href="bag.html"><i class="fa-sharp fa-solid fa-bag-shopping"></i></a></li>

                    </div>
                </ul>
                <div></div>

            </nav>
        </header>
    </div>


    

    

</div>
<br>

<br>
<div class="produkter">
        <div class="produkt">
            <a href="prodside.html"><img src="img/viftebilde.jpg" alt="Her skal vi se vifter" class="imgprodukt"></a>
            <h4>Vifte 999 Kr</h4>
            <button type="button" onclick="kjøpHeadset()">Handlekurv</button>
        </div>
        <div class="produkt">
            <a href="prodside.html"><img src="img/viftebilde.jpg" alt="Her skal vi se vifter" class="imgprodukt"></a>
            <h4>Vifte 1199 Kr</h4>
            <button type="button" onclick="kjøpMus()">Handlekurv</button>
        </div>
        <div class="produkt">
            <a href="prodside.html"><img src="img/viftebilde.jpg" alt="Her skal vi se vifter" class="imgprodukt"></a>
            <h4>Vifte 1099 Kr</h4>
            <button type="button" onclick="kjøpKeyboard()">Handlekurv</button>
        </div>
    </div>


    <script src='script.js'></script>
</body>
</html>