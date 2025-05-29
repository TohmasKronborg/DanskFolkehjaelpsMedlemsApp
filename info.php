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
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "rqa4chuyoz");
    </script>
</head>

<body>

<?php
include("includes/navbar.php");
?>

<div class="d-flex flex-column align-items-center mb-5">
    <div class="w-lg-50 p-3">
        <h1 class="text-center text-secondary">
            Hvad er dansk julehjælp?
        </h1>
        <p>
            Dansk Julehjælp, drevet af Dansk Folkehjælp, støtter økonomisk trængte familier i juletiden ved at give dem mulighed for at fejre en klassisk jul med julemad og gaver præcis som den burde holdes. Hjælpen består af 800 kr. til julemad og 500 kr. pr. barn til gaver (op til 2.800 kr. pr. familie). Formålet er at sikre, at børn ikke udelukkes fra julens fællesskab og dens fantastiske traditioner på grund af økonomiske udfordringer.
            <a href="https://www.folkehjaelp.dk/julehjaelp/" target="_blank" class="text-primary text-decoration-underline">Læs mere...</a>
        </p>
    </div>

    <div class="w-lg-50 p-3">
        <h1 class="text-center text-secondary">
            Hvem donerer jeg til?
        </h1>
        <p>
            Julehjælpen er målrettet enlige forsørgere på overførselsindkomst med hjemmeboende børn under 18 år.
            Det kunne for eksempel være den egentlige mor med to børn der bor på SU og prøver at kæmpe sig igennem sit studie samtidig med at tage sig af sine to børn og give dem den magiske jul de fortjæner.
        </p>
    </div>
    <div class="w-lg-50 p-3">
        <h1 class="text-center text-secondary">
            Ofte stillede spørgsmål
        </h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Hvordan donerer jeg?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Det kan du gøre her på appen. Men hver opmærksom på, at her skifter hvilken del af Dansk Folkehjælp du donerer til. Skifter i overens med årstiderne eller anden relevant dato. Hvis du vil donere til specifkt til enten: skolestarthjælp, feriehjælp, konfirmatinoshjælp eller julehjælp. Skal det gøre på Dansk folkehjælps egen hjemmeside.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Hvem går penge til?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Pengene, der samles ind af både Dansk Folkehjælp og Dansk Julehjælp, går til mennesker i nød i Danmark. De hjælper især udsatte familier, ældre, enlige forsørgere og personer med meget begrænsede økonomiske midler. Formålet er at give dem støtte til basale fornødenheder, mad, varme og juleglæde i den kolde tid.
                        <br> <br>
                        Dansk Julehjælp fokuserer især på at sikre, at familier med små eller ingen økonomiske ressourcer kan få en god jul — med madpakker, gaver og varme i hjemmet.
                        <br> <br>
                        Dansk Folkehjælp har et bredere fokus, hvor hjælpen også kan gå til sociale indsatser året rundt, som støtte til hjemløse, ensomme og andre udsatte grupper.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Hvordan bliver jeg frivilig?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Det kan du blive, på enten Dansk Folkehjælps egen hjemmeside.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
