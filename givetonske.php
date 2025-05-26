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

    <title>Giv et ønske</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- Denne underside er grøn, for at vise webappens design ude fra helidags peridoer. -->
<body>
<!-- Nav for mobile sizes -->
<nav class="p-2 d-lg-none sticky-top z-2 bg-Morkegron">
    <div class="d-flex justify-content-between">
        <a href="index.php"><img src="images/GenkendeligtLogoGron.png" alt="navLogo" style="max-height: 50px;"></a>
        <div class="toggleMenu z-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.625 71.875C15.625 71.0462 15.9542 70.2513 16.5403 69.6653C17.1263 69.0792 17.9212 68.75 18.75 68.75H81.25C82.0788 68.75 82.8737 69.0792 83.4597 69.6653C84.0458 70.2513 84.375 71.0462 84.375 71.875C84.375 72.7038 84.0458 73.4987 83.4597 74.0847C82.8737 74.6708 82.0788 75 81.25 75H18.75C17.9212 75 17.1263 74.6708 16.5403 74.0847C15.9542 73.4987 15.625 72.7038 15.625 71.875ZM15.625 46.875C15.625 46.0462 15.9542 45.2513 16.5403 44.6653C17.1263 44.0792 17.9212 43.75 18.75 43.75H81.25C82.0788 43.75 82.8737 44.0792 83.4597 44.6653C84.0458 45.2513 84.375 46.0462 84.375 46.875C84.375 47.7038 84.0458 48.4987 83.4597 49.0847C82.8737 49.6708 82.0788 50 81.25 50H18.75C17.9212 50 17.1263 49.6708 16.5403 49.0847C15.9542 48.4987 15.625 47.7038 15.625 46.875ZM15.625 21.875C15.625 21.0462 15.9542 20.2513 16.5403 19.6653C17.1263 19.0792 17.9212 18.75 18.75 18.75H81.25C82.0788 18.75 82.8737 19.0792 83.4597 19.6653C84.0458 20.2513 84.375 21.0462 84.375 21.875C84.375 22.7038 84.0458 23.4987 83.4597 24.0847C82.8737 24.6708 82.0788 25 81.25 25H18.75C17.9212 25 17.1263 24.6708 16.5403 24.0847C15.9542 23.4987 15.625 22.7038 15.625 21.875Z" fill="#F8F9FB"></path>
            </svg>
        </div>
    </div>

    <!-- Hamburger menu overlay -->
    <div id="navOverlay" class="w-100 h-100 bg-secondary align-items-center justify-content-center position-fixed top-0 start-0" style="display: none; z-index: 1">
        <div class="m-2 overlayHover fs-1 d-flex flex-column gap-5 text-center fw-bolder">
            <a class="text-white" href="index.php">FORSIDE</a>
            <a class="text-white" href="bidrag.php">DONATIONER</a>
            <a class="text-white" href="givetonske.php">GIV ET ØNKSE</a>
            <a class="text-white" href="rewards.php">GEVINSTER</a>
            <a class="text-white" href="aktiviteter.php">ARRANGEMENTER</a>
            <a class="text-white" href="hjaelp.php">HJÆLP</a>
            <a class="text-white" href="info.php">INFO</a>
        </div>
    </div>
</nav>

<script>
    const menu = document.getElementById("navOverlay");
    const toggleMenu = document.querySelector(".toggleMenu")


    toggleMenu.addEventListener("click", () => {
        menu.style.display = menu.style.display === "flex" ? "none" : "flex"
    })
</script>

<!-- Desktop Navbar -->
<nav class="p-3 d-none d-lg-block bg-Morkegron">
    <div class="d-flex justify-content-between">
        <a href="aktiviteter.php"><img src="images/GenkendeligtLogoGron.png" alt="" class="img-fluid" style="max-height: 75px;"></a>

        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.625 71.875C15.625 71.0462 15.9542 70.2513 16.5403 69.6653C17.1263 69.0792 17.9212 68.75 18.75 68.75H81.25C82.0788 68.75 82.8737 69.0792 83.4597 69.6653C84.0458 70.2513 84.375 71.0462 84.375 71.875C84.375 72.7038 84.0458 73.4987 83.4597 74.0847C82.8737 74.6708 82.0788 75 81.25 75H18.75C17.9212 75 17.1263 74.6708 16.5403 74.0847C15.9542 73.4987 15.625 72.7038 15.625 71.875ZM15.625 46.875C15.625 46.0462 15.9542 45.2513 16.5403 44.6653C17.1263 44.0792 17.9212 43.75 18.75 43.75H81.25C82.0788 43.75 82.8737 44.0792 83.4597 44.6653C84.0458 45.2513 84.375 46.0462 84.375 46.875C84.375 47.7038 84.0458 48.4987 83.4597 49.0847C82.8737 49.6708 82.0788 50 81.25 50H18.75C17.9212 50 17.1263 49.6708 16.5403 49.0847C15.9542 48.4987 15.625 47.7038 15.625 46.875ZM15.625 21.875C15.625 21.0462 15.9542 20.2513 16.5403 19.6653C17.1263 19.0792 17.9212 18.75 18.75 18.75H81.25C82.0788 18.75 82.8737 19.0792 83.4597 19.6653C84.0458 20.2513 84.375 21.0462 84.375 21.875C84.375 22.7038 84.0458 23.4987 83.4597 24.0847C82.8737 24.6708 82.0788 25 81.25 25H18.75C17.9212 25 17.1263 24.6708 16.5403 24.0847C15.9542 23.4987 15.625 22.7038 15.625 21.875Z" fill="#F8F9FB"></path>
            </svg>
        </button>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Hvor vil de rejse hen?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="m-2 overlayHover fs-2 d-flex flex-column gap-5 text-center fw-bolder">
                <a class="text-Morkegron" href="aktiviteter.php">FORSIDE</a>
                <a class="text-Morkegron" href="bidrag.php">DONATIONER</a>
                <a class="text-Morkegron" href="givetonske.php">GIV ET ØNKSE</a>
                <a class="text-Morkegron" href="rewards.php">GEVINSTER</a>
                <a class="text-Morkegron" href="hjaelp.php">HJÆLP</a>
                <a class="text-Morkegron" href="info.php">INFO</a>
            </div>
        </div>
    </div>
</nav>

<!-- Start på hjemmeside -->
<canvas id="gifts" class="z-n1 position-absolute">
</canvas>

<main id="giftsMain" class="p-3 d-flex flex-column align-items-center mt-5 mb-5">
<!--    <img src="images/GenkendeligtLogoGron.png" alt="logo" class="img-fluid" style="max-height: 150px;">-->
    <div class="transparentIntro w-lg-50 text-center mt-3">
        <p class="instrument fs-1 text-Morkegron">Giv et ønske og skab glæde</p>
        <p class="fs-5">
            Her kan du se ønsker fra børn i udsatte børnefamilier. Hvert ønske koster højst 500 kr.-  Vælg et ønske og vær med til at gøre julen, en fødselsdag – eller bare en helt almindelig dag – lidt lysere for et barn.
        </p>
    </div>
</main>

<div class="container mb-5">
    <div class="row align-items-baseline justify-content-center">
        <!-- Under 100kr. gaver -->
        <section class="col-12 col-md-6 col-lg-4">
            <p class="instrument h1 text-center">
                under 100 DKK
            </p>
            <div class="d-flex justify-content-center bg-white">
                <hr class="border border-3 border-mint w-90 rounded-5">
            </div>

            <div class="p-3 bg-beige d-flex justify-content-center align-items-center">
                <div class="card border-altWhite border-3 shadow-sm" style="width: 18rem;">
                    <div class="text-center text-Morkegron">
                        <p class="fs-3 instrument text-Morkegron m-0">Kasper</p>
                        <p class="mb-1">Ønsker sig</p>
                    </div>
                    <img src="images/Blyant.png" class="card-img-top img-fluid p-4" alt="Blyant">
                    <div class="card-body text-center">
                        <h5 class="card-title">Faber-Castell Classic farveblyanter 24 stk.</h5>
                        <p class="card-text fw-light">94 DKK</p>
                        <a href="#" class="btn btn-warning text-altWhite w-100 border border-3 border-altWhite">KØB</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Under 250kr. gaver -->
        <section class="mt-5 col-12 col-md-6 col-lg-4">
            <p class="instrument h1 text-center text-Morkegron">
                under 250 DKK
            </p>
            <div class="d-flex justify-content-center bg-white">
                <hr class="border border-3 border-mint w-90 rounded-5">
            </div>

            <div class="p-3 bg-beige d-flex justify-content-center align-items-center">
                <div class="card border-altWhite border-3 shadow-sm" style="width: 18rem;">
                    <div class="text-center text-Morkegron">
                        <p class="fs-3 instrument text-Morkegron m-0">Jens</p>
                        <p class="mb-1">Ønsker sig</p>
                    </div>
                    <img src="images/Lego.png" class="card-img-top img-fluid p-4" alt="Lego">
                    <div class="card-body text-center">
                        <h5 class="card-title">LEGO - Obi-Wan Kenobi™ og Darth Vader™</h5>
                        <p class="card-text fw-light">200 DKK</p>
                        <a href="#" class="btn btn-warning text-altWhite w-100 border border-3 border-altWhite">KØB</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Under 500kr. gaver -->
        <section class="mt-5 col-12 col-md-6 col-lg-4">
            <p class="instrument h1 text-center text-Morkegron">
                under 500 DKK
            </p>
            <div class="d-flex justify-content-center bg-white">
                <hr class="border border-3 border-mint w-90 rounded-5">
            </div>

            <div class="p-3 bg-beige d-flex justify-content-center align-items-center">
                <div class="card border-altWhite border-3 shadow-sm" style="max-width: 18rem;">
                    <div class="text-center text-Morkegron">
                        <p class="fs-3 instrument text-Morkegron m-0">Line</p>
                        <p class="mb-1">Ønsker sig</p>
                    </div>
                    <img src="images/Jbl.png" class="card-img-top img-fluid p-4" alt="Jbl">
                    <div class="card-body text-center">
                        <h5 class="card-title">JBL Wave Beam 2 true wireless in-ear høretelefoner (sort)</h5>
                        <p class="card-text fw-light">399 DKK</p>
                        <a href="#" class="btn btn-warning text-altWhite w-100 border border-3 border-altWhite">KØB</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="js/canvasGifts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
