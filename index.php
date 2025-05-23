<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    
    <title>Dansk Folkehjælps medlems platform</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="overflow-x-hidden">

<!-- Desktop Nav -->
<nav class="d-none d-lg-flex justify-content-between align-items-center p-2 pe-3 ps-3">
    <img src="images/Logo.png" alt="logo" class="img-fluid" style="max-height: 75px;">
    <div class="text-center">
        <a href="login.php" class="shadow-sm border border-4 rounded-4 border-altWhite p-2 pe-3 ps-3 m-2 text-secondary">
            Log ind
        </a>
        <a href="signup.php" class="shadow-sm border border-4 rounded-4 border-altWhite p-2 pe-3 ps-3 m-2 text-altWhite bg-warning">
            Bliv medlem
        </a>
    </div>
</nav>

<canvas id="flakes" class="z-n1 position-absolute">
</canvas>

<main id="flakesMain" class="pb-5 p-3 d-flex flex-column align-items-center mt-5 mb-5">
    <img src="images/Logo.png" alt="logo" class="img-fluid" style="max-height: 325px;">
    <p class="text-center z-1 p-2 pe-3 ps-3 fs-2 transparentIntro fw-bolder mt-3">
        Som medlem, har du mulighed for at gøre en forskel for vores udsatte medborgere.
    </p>

    <!-- Intro Buttons -->
    <section class="container mt-5">
        <div class="row d-flex justify-content-center gap-3">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <a href="login.php" class="btn bg-white border border-3 border-altWhite text-secondary fs-1 fw-bolder rounded-4 shadow-sm">
                    Log ind
                </a>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <a href="bidrag.php" class="btn bg-warning border border-3 border-altWhite text-altWhite fs-1 fw-bolder text-nowrap rounded-4 shadow-sm">
                    Giv et bidrag
                </a>
            </div>
        </div>
    </section>
</main>

<article class="bg-secondary p-3 pb-5 pt-5 fs-2 mb-0 d-flex justify-content-center">
    <p class="text-center text-mint instrument w-50">
        Som medlem af Dansk Folkehjælp gør du en forskel for mennesker i nød – du støtter frivillige indsatser som julehjælp, social støtte og nødhjælp både i Danmark og ude i verden, og er med til at skabe håb, fællesskab og tryghed dér, hvor livet gør ondt.
    </p>
</article>

<!-- Om At være medlem -->
<article class="mt-5" style="background: linear-gradient(180deg, #FFF 0%, #F6EEDE 100%);">
    <h1 class="text-center instrument text-secondary">
        Hvad indebærer det at være medlem af Dansk Folkehjælp?
    </h1>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- Puk & Pia -->
            <div class="col-12 col-lg-4">
                <p class="instrument text-secondary text-center fs-2">
                    Mød også Puk og Pia
                </p>
                <video controls src="https://www.folkehjaelp.dk/cvm/wp-content/uploads/2023/12/blivfrivillig_1.mp4" style="max-width: 100%;"></video>
                <video controls src="https://www.folkehjaelp.dk/cvm/wp-content/uploads/2023/12/blivfrivillig_2.mp4" style="max-width: 100%;"></video>
            </div>

            <!-- Ul list -->
            <!-- Fjern ordered list og lav det til ikoner i stedet for -->
            <div class="col-12 col-lg-6 pe-5 ps-5">
                <h2 class="text-secondary text-center instrument">Som Medlem er du med til ...</h2>
                <ul class="fs-4">
                    <li>
                        At gøre en forskel for udsatte familier i Danmark
                    </li>
                    <li>
                        At få indflydelse på Dansk Folkehjælps arbejde i dit nærområde samt udviklingen af organisationen
                    </li>
                    <li>
                        At møde andre, der brænder for samme sag
                    </li>
                    <li>
                        At blive en del af et socialt fællesskab, hvor der skabes gode relationer til øvrige frivillige
                    </li>
                    <li>
                        At udfordre dig selv på det personlige og faglige plan
                    </li>
                    <li>
                        At være en del af de mange aktiviteter, som Dansk Folkehjælp driver i og uden for Danmark
                    </li>
                </ul>
            </div>
        </div>
    </div>
</article>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/canvasBubbles.js"></script>
</body>
</html>
