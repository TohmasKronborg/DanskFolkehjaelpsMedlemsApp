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

    <title>DKF's Medlems App | Info</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/Logo.png">
</head>
<style>
    .pictureBgInfo{
        background-image: url("images/christmas_tree.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
<body>


<!-- Nav for mobile sizes -->
<nav class="p-2 d-lg-none sticky-top z-2 bg-secondary">
    <div class="d-flex justify-content-between">
        <a href="index.php"><img src="images/Logo.png" alt="navLogo" style="max-height: 50px;"></a>
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
            <a class="text-white" href="kontakt.php">KONTAKT</a>
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
<nav class="p-3 d-none d-lg-block bg-secondary">
    <div class="d-flex justify-content-between">
        <a href="aktiviteter.php"><img src="images/Logo.png" alt="" class="img-fluid" style="max-height: 75px;"></a>

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
                <a class="text-primary" href="aktiviteter.php">FORSIDE</a>
                <a class="text-primary" href="bidrag.php">DONATIONER</a>
                <a class="text-primary" href="givetonske.php">GIV ET ØNKSE</a>
                <a class="text-primary" href="rewards.php">GEVINSTER</a>
                <a class="text-primary" href="kontakt.php">KONTAKT</a>
                <a class="text-primary" href="info.php">INFO</a>
            </div>
        </div>
    </div>

</nav>


<!-- Card med image og text -->

<header class="pictureBgInfo text-white bg-black ps-lg-auto pe-lg-auto p-3 mb-4 pt-lg-5 pb-lg-5">
    <p class="h1" style="font-size: 65px; font-weight: 900;">BØRNENE FØRST</p>
    <p>Vi bestræber os efter at give børn den magiske jul de fortjæner</p>
</header>


<div class="w-lg-50  ms-auto me-auto">
    <div class="pt-3">
        <h3 class="mb-2 fs-25 text-secondary fw-black text-start px-4 pt-4">Hvad er dansk julehjælp?</h3>
        <h5 class="px-4 fw-normal">Dansk Julehjælp, drevet af Dansk Folkehjælp, støtter økonomisk trængte familier i juletiden
            ved at give dem mulighed for at fejre en klassisk jul med julemad og gaver præcis som den burde holdes.
            Hjælpen består af 800 kr. til julemad og 500 kr. pr. barn til gaver (op til 2.800 kr. pr. familie).
            Formålet er at sikre, at børn ikke udelukkes fra julens fællesskab og dens fantastiske traditioner på grund af
            økonomiske udfordringer.</h5>
        <p><a href="https://www.folkehjaelp.dk/julehjaelp/" class="px-4 fs-5 link-primary text-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">- Til Dansk Julehjælp for mere info</a></p>
    </div>

    <div>
        <h3 class="mb-2 fs-25 text-secondary fw-black text-start px-4 pt-4">Hvad er dansk julehjælp?</h3>
        <h5 class="px-4 fw-normal">Julehjælpen er målrettet enlige forsørgere på overførselsindkomst med hjemmeboende børn under 18 år.
            Det kunne for eksempel være den egentlige mor med to børn der bor på SU og prøver at kæmpe sig igennem sit studie samtidig
            med at tage sig af sine to børn og give dem den magiske jul de fortjæner.
        </h5>
    </div>


    <!-- ofte stillede spørgsmål accordion -->
    <h2 class="mb-4 fs-30 text-secondary fw-black text-center pt-4">Ofte stillede spørgsmål</h2>

    <div class="pb-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Hvordan donerer jeg?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> <strong>1.</strong> Gå til forsiden og tryk på "Giv et bidrag"</p><br>
                        <p class="pt-2"> <strong>2.</strong>  På vores donations side kan du så vælge eller indtaste beløbet du vil donere</p><br>
                        <p class="pb-1"><strong>3.</strong> Tryk derefter på "Næste" knappen for at donere</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Hvem går pengene til?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Pengene doneret til Julehjælp går direkte til de mest udsatte familier i danmark, det vil sige dem med flest børn
                        og de færreste resourcer til at give dem den jul de fortjæner. Typisk vil dette være enlige mødre på overførselsindkomst
                        som har en eller flere børn.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Hvordan bliver jeg frivilig?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p> <strong>1.</strong> Gå til "Dansk Folkehjælp Hjemmesiden"</p><br>
                        <p class="pt-2"> <strong>2.</strong>  Udfyld Formularen</p><br>
                        <p class="pb-1"><strong>3.</strong> Vent på svar i din Email Inbox</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>