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

<body>

<div class="container d-flex justify-content-center flex-column">
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
    <div class="row mt-3 d-flex justify-content-center flex-row">
        <div class="col d-flex justify-content-center">
            <div id="countdown" class="text-darkRed fw-bolder h3"></div>
        </div>
        <div class="col"
        <hr>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Set your target date/time here
    const countdownDate = new Date("2025-07-11T23:59:59").getTime();

    const timer = setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        if (distance < 0) {
            clearInterval(timer);
            document.getElementById("countdown").innerHTML = "Countdown expired";
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

</body>
</html>
