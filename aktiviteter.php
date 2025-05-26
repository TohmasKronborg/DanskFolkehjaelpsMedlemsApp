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

    <title>Aktiviteter</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!-- Include Navbar -->
<?php include "includes/navbar.php"; ?>

<!-- <div class="bg-secondaryToWhiteGradient position-absolute z-n1"></div> Jeg må kigge på det på et andet tidspunkt...hvis jeg gider. -noah-->

<div class="container d-flex justify-content-center z-0">
    <div class="row d-flex">
        <div class="col-12 d-flex justify-content-center mt-4 mb-2">
            <p class="h1 fw-bolder">Arrangementer</p>
        </div>
        <div class="col-12 d-flex justify-content-center mb-2">
            <p class="h3 instrument fst-italic">En god jul for dig og børnene</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="images/juleby.png" class="card-img-top" alt="Julemarked">
                <div class="card-body">
                    <h5 class="card-title">Julemarked</h5>
                    <p class="card-text">Kom og kig ind til vores loppemarked i Torebyhallen! Der vil være forskellige boder med julegodter, f.eks. gløgg, æbleskiver, klegner, osv.</p>
                    <p class="card-text text-black-50 fst-italic">05/12/2025 • Gamle Landevej 17, 4891 Toreby L</p>
                    <a href="#" class="text-warning text-decoration-underline fw-bold h4">Mere info</a>
                    <hr>
                    <button type="button" class="btn btn-warning fw-semibold text-white w-100">
                        <span class="h5">Tilmeld</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/hike.png" class="card-img-top" alt="Nisse March">
                <div class="card-body">
                    <h5 class="card-title">Nisse March</h5>
                    <p class="card-text">Tag familien med, og tag ud på en tur i sneen sammen. Der vil være gratis kakao og æbleskiver, samt en skattejagt lidt senere... 👀</p>
                    <p class="card-text text-black-50 fst-italic">13/12/2025 • Bangsebro Skov, 4800 Nykøbing Falster</p>
                    <a href="#" class="text-warning text-decoration-underline fw-bold h4">Mere info</a>
                    <hr>
                    <button type="button" class="btn btn-warning fw-semibold text-white w-100">
                        <span class="h5">Tilmeld</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
