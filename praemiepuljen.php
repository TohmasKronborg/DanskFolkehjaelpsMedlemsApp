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

    <title>Præmiepuljen</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg">

<div class="container d-flex justify-content-center flex-column w-75"> <!-- gør dig klar til at se noget ækelt kode (som jeg helt klart kunne have lavet på en bedre måde) -->
    <div class="row mt-3 mb-3">
        <div class="col d-flex justify-content-center">
            <p class="instrument fw-bold h1">Præmiepuljen</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <div class="ratio ratio-1x1">
                <img src="images/cruise.png" alt="Krydstur til Oslo" class="w-100 h-100 object-fit-cover border border-5 border-gul rounded-3 shadow">
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center flex-row">
        <div class="col d-flex justify-content-center">
            <p class="instrument h3">Krydstogt til Oslo</p>
        </div>
    </div>
    <div class="row mt-3 d-flex justify-content-center flex-row">
        <div class="col d-flex justify-content-center">
            <div id="countdown" class="text-darkRed fw-bolder h2"></div>
        </div>
        <hr>
    </div>
    <div
</div>

<div class="container-fluid d-flex justify-content-center">
    <div class="row d-flex flex-column">
        <div class="col-12 d-flex justify-content-center">
            <p class="text-gray">100 point = 1 billet</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p class="h4">Dit billet antal:</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p class="h4">47</p> <!-- tallet skal erstattes med noget php halløjsa når databasen er sat op -->
        </div>
    </div>
</div>

<hr>

<div class="container-fluid d-flex justify-content-center">
    <div class="row d-flex flex-column">
        <div class="col-12 d-flex justify-content-center">
            <p class="h4 fw-bolder">Køb flere billetter</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <input class="form-control border-gray" type="number" placeholder="Antal"  aria-label="antal billetter" id="billetInput" step="1" min="0" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
        </div>
        <div class="col-12 d-flex justify-content-center mt-2">
            <div class="d-grid gap-2 w-100">
                <button class="btn btn-primary" type="button">
                    <p class="h4 d-flex mb-1 mt-1 justify-content-center">Køb</p>
                </button>
            </div>
        </div>
        <p class="col-12 d-flex justify-content-center mt-3">
            <p class="text-gray h4">Pris: <span class="text-gray h4" id="prisResult">0</span></p> <!-- Igen, når databasen er sat op, så kan vi lave noget php her der udregner prisen. -->
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const countdownDate = new Date("2025-07-11T23:59:59").getTime();

    const timer = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        if (distance < 0) {
            clearInterval(timer);
            document.getElementById("countdown").innerHTML = "En vinder er blevet trukket!";
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML =
            `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }, 1000);
</script>

<script>
    const input = document.getElementById('billetInput');
    const resultDisplay = document.getElementById('prisResult');
    const multiplier = 100;

    input.addEventListener('input', () => {
        const value = parseFloat(input.value);
        const multiplied = isNaN(value) ? 0 : value * multiplier;
        resultDisplay.textContent = Math.floor(multiplied);
    });
</script>

</body>
</html>
