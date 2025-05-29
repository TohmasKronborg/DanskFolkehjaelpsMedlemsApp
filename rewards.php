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

    <title>DKF's Medlems App | Gevinster</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "rqa4chuyoz");
    </script>
</head>

<body>
<!-- Include Navbar -->
<?php include "includes/navbar.php"; ?>

<div class="container mt-3">
    <div class="row justify-content-center d-flex">
        <div class="profile-card border border-primary rounded-3 d-flex align-items-center bg-light shadow my-0 mx-auto p-3">
            <div class="me-3">
                <img src="images/lars.png" alt="Profilbillede" class="img-fluid rounded-circle" style="max-height: 150px; min-height: 70px; min-width: 70px;">
            </div>
            <div class="d-flex flex-column justify-content-center">
                <p class="h2 fw-bold m-0">Hej, Lars</p>
                <span class="fw-bold">Points: <span class="fw-normal">11,200</span></span>
                <span class="fw-bold">Point boosters:</span>
                <div class="booster-list mt-1 d-flex flex-wrap gap-2">
                    <span class="py-1 px-2 border border-blackBorder rounded-2 text-white bg-warning fw-bold">Frivillig <span class="fw-light">(x2)</span></span>
                    <span class="py-1 px-2 border border-blackBorder rounded-2 text-white bg-primary fw-bold">Medlem <span class="fw-light">(x1.5)</span></span>
                    <span class="py-1 px-2 border border-blackBorder rounded-2 text-white fw-bold" style="background-color: #c40000;">Lars <span class="fw-light">(x∞)</span></span>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <div class="d-flex justify-content-center">
        <p class="h1 fw-bold">Udvalgte produkter</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/lidl.png" class="card-img-top cardFixer" alt="Lidl gavekort 500 kr.">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Lidl gavekort 500 kr.</h5>
                    <p class="card-text">5,000 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/toolbox.png" class="card-img-top cardFixer" alt="Værktøjssæt">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Værktøjssæt <span class="badge text-white border border-blackBorder rounded-2 bg-saleGreen">-20%</span></h5>
                    <p class="card-text"><span class="text-white-50 text-decoration-line-through">10,000</span> 8,000 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <div class="d-flex justify-content-center">
        <p class="h1 fw-bold">Alle</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/tickets.png" class="card-img-top cardFixer" alt="Biografbilletter til 2">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Biografbilletter til 2 + popcorn & drikkelse</h5>
                    <p class="card-text">2,000 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/cakecoffee.png" class="card-img-top cardFixer" alt="Kage og kaffe for 2 på lokal café">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Kage og kaffe for 2 på lokal café</h5>
                    <p class="card-text">1,750 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/office_365.png" class="card-img-top cardFixer" alt="Office 365 abonnement (1 år)">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Office 365 abonnement (1 år)</h5>
                    <p class="card-text">7,500 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 d-flex justify-content-center border-primary text-white shadow">
                <div class="d-flex justify-content-center">
                    <img src="images/kurv.png" class="card-img-top cardFixer" alt="Gourmet-olier & krydderisæt i trækasse">
                </div>
                <div class="card-body bg-lightPrimary" style="border-bottom-right-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                    <h5 class="card-title">Gourmet-olier & krydderisæt i trækasse</h5>
                    <p class="card-text">4,500 point</p>
                    <button type="button" class="btn btn-outline-altWhite bg-white text-black fw-bold w-100">Indløs</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
