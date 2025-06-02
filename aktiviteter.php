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

    <title>DKF's Medlems App | Aktiviteter</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgivfer">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/Logo.png">
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

<div class="container mb-5 mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            <p class="instrument fw-bolder h3">Hvordan tilmelder man sig?</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-6 d-flex justify-content-center">
            <ul class="list-group w-100">
                <li class="list-group-item">1. Tryk på knappen "Tilmeld"</li>
                <li class="list-group-item">2. Udfyld tilmeldings-formularen</li>
                <li class="list-group-item">3. Få tilsendt en invitation i din email</li>
                <li class="list-group-item">4. Ankom til eventet!</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="images/juleby.png" class="card-img-top cardFixer" alt="Julemarked">
                <div class="card-body">
                    <h5 class="card-title">Julemarked</h5>
                    <p class="card-text">Kom og kig ind til vores loppemarked i Torebyhallen! Der vil være forskellige boder med julegodter, f.eks. gløgg, æbleskiver, klegner, osv.</p>
                    <p class="card-text text-black-50 fst-italic">05/12/2025 • Gamle Landevej 17, 4891 Toreby L</p>
                    <a href="#" class="text-warning text-decoration-underline fw-bold h4" data-bs-toggle="modal" data-bs-target="#infoJulemarked">Mere info</a>
                    <hr>
                    <button type="button" class="btn btn-warning fw-semibold text-white w-100" data-bs-toggle="modal" data-bs-target="#tilmeldModal">
                        <span class="h5">Tilmeld</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/hike.png" class="card-img-top cardFixer" alt="Nisse March">
                <div class="card-body">
                    <h5 class="card-title">Nisse March</h5>
                    <p class="card-text">Tag familien med, og tag ud på en tur i sneen sammen. Der vil være gratis kakao og æbleskiver, samt en skattejagt lidt senere... 👀</p>
                    <p class="card-text text-black-50 fst-italic">13/12/2025 • Bangsebro Skov, 4800 Nykøbing Falster</p>
                    <a href="#" class="text-warning text-decoration-underline fw-bold h4" data-bs-toggle="modal" data-bs-target="#infoNissemarch">Mere info</a>
                    <hr>
                    <button type="button" class="btn btn-warning fw-semibold text-white w-100" data-bs-toggle="modal" data-bs-target="#tilmeldModal">
                        <span class="h5">Tilmeld</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="images/christmasconcert.png" class="card-img-top cardFixer" alt="Julekoncerten">
                <div class="card-body">
                    <h5 class="card-title">Julekoncerten</h5>
                    <p class="card-text">Kom til Musikskolen og syng med på nogle klassiske julesange! Musikskolens eget kor og bands optræder, og spreder juleglæde.</p>
                    <p class="card-text text-black-50 fst-italic">17/12/2025 • Skolegade 3C, 4800 Nykøbing Falster</p>
                    <a href="#" class="text-warning text-decoration-underline fw-bold h4" data-bs-toggle="modal" data-bs-target="#infoJulekoncerten">Mere info</a>
                    <hr>
                    <button type="button" class="btn btn-warning fw-semibold text-white w-100" data-bs-toggle="modal" data-bs-target="#tilmeldModal">
                        <span class="h5">Tilmeld</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tilmeldModal" tabindex="-1" aria-labelledby="tilmeldModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tilmeldModalLabel">Succes</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Luk"></button>
            </div>
            <div class="modal-body">
                Du har tilmeldt dig eventet!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning w-100 text-white" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoJulemarked" tabindex="-1" aria-labelledby="infoJulemarkedLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="infoJulemarkedLabel">Julemarked</h1>
            </div>
            <div class="modal-body">
                Kom og kig ind til vores hyggelige loppemarked i Torebyhallen!<br>
                Vi byder på en skøn dag fyldt med stemning, julehygge og masser af gode fund. Rundt omkring i hallen vil der være forskellige boder med alt fra fine loppefund, hjemmelavede juledekorationer og håndværk til lækre julegodter – blandt andet gløgg, varme æbleskiver, sprøde klegner og andre lækkerier.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning w-100 text-white" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoNissemarch" tabindex="-1" aria-labelledby="infoNissemarchLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="infoNissemarchLabel">Julemarked</h1>
            </div>
            <div class="modal-body">
                Pak jer godt ind og tag ud på en tur i sneen sammen – og lad dagen ende med varme smil og søde sager. Vi byder på gratis kakao og friskbagte æbleskiver, som kan nydes i godt selskab.
                <br>
                For de eventyrlystne venter der en spændende skattejagt senere på dagen... 👀
                <br>
                Vi glæder os til at dele dagen med jer!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning w-100 text-white" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoJulekoncerten" tabindex="-1" aria-labelledby="infoJulekoncertenLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="infoJulekoncertenLabel">Julekoncerten</h1>
            </div>
            <div class="modal-body">
                Glæd dig til en stemningsfuld eftermiddag, hvor Musikskolens eget kor og dygtige bands optræder med alle de kendte og elskede julesange.
                <br>
                Du får mulighed for selv at synge med, når vi sammen spreder juleglæde og varme toner ud i vinterkulden. Der vil være både festlige indslag og rørende øjeblikke – en musikalsk oplevelse for hele familien!
                <br>
                Arrangementet er åbent for alle, og julestemningen er garanteret. 🎶✨
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning w-100 text-white" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
