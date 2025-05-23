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

    <title>Giv et bidrag</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-secondary">

<!-- Include Navbar -->

<header class="w-75 w-md-50 text-center m-auto text-white mt-5">
    <h1>
        Hjælp børn til en bedre jul!
    </h1>
    <p class="instrument">"Børn buede have en glad jul"</p>

    <!-- Optjente penge -->
    <span class="h1">23.590 DKK</span> <!-- Når vi laver JS til den så lav dynamic font size -->

    <div class="progress mt-3" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
    </div>

    <p class="mt-4">
        Vi mangler kun X DKK for at have opnået vores mål
    </p>
</header>

<main class="rounded-4 bg-white w-md-50 m-auto mt-5 d-flex flex-column align-items-center p-3">
    <div class="btn-group mb-4" role="group">
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
        <label class="btn btn-outline-secondary" for="vbtn-radio1">Engangs Beløb</label>
        <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
        <label class="btn btn-outline-secondary" for="vbtn-radio2">Månedligt beløb</label>
    </div>

    <span>Random line</span>

    <div class="mt-4">
        <input type="radio" class="btn-check" name="options-base" id="option5" autocomplete="off">
        <label class="btn btn-outline-secondary fs-2" for="option5">10 DKK</label>

        <input type="radio" class="btn-check" name="options-base" id="option6" autocomplete="off" checked>
        <label class="btn btn-outline-secondary fs-2" for="option6">20 DKK</label>
    </div>

    <div class="mt-4">
        <input type="radio" class="btn-check" name="options-base" id="option7" autocomplete="off">
        <label class="btn btn-outline-secondary fs-2" for="option7">50 DKK</label>

        <input type="radio" class="btn-check" name="options-base" id="option8" autocomplete="off">
        <label class="btn btn-outline-secondary fs-2" for="option8">100 DKK</label>
    </div>

    <!-- Vælg selv -->
    <div class="input-group mb-3 mt-4 w-50">
        <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
        </div>
        <input type="text" class="form-control" aria-label="Text input with checkbox">
    </div>

    <span>Random line</span>

    <button class="btn fw-bolder border-3 border-altWhite text-altWhite bg-warning w-50">NÆSTE</button>
</main>

<!-- Latest Donations -->
<div class="d-flex justify-content-center pt-5 bg-beige mb-5">
    <div class="bg-white shadow-sm w-25 rounded-4 d-flex align-items-center">
        <img src="images/Logo.png" alt="TempPFP" class="img-fluid" style="max-height: 100px">
        <div class="m-auto">
            <p class="instrument h2 m-0">Anonym</p>
            <p class="m-0">Har doneret <strong>500</strong> DKK</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
