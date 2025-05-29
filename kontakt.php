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

    <title>DKF's Medlems App | Kontakt</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/Logo.png">
</head>

<body>

<?php
include("includes/navbar.php");
?>

<header class="pictureBg text-white bg-black ps-lg-auto pe-lg-auto p-3 mb-4">
    <p class="h1" style="font-size: 75px;">Lad os rede julen sammen</p>
    <p>Har de brug for hjælp eller har de et spørgsmål de gerne vil stille? Så står vi klar til at hjælpe</p>
</header>

<h1 class="text-center text-secondary fw-bold">Kontakt os</h1>

<!-- Form beginning -->
<section class="p-3 text-primary">
    <div class="mb-3">
        <label for="name" class="form-label">Navn</label>
        <input type="text" class="form-control" id="name" placeholder="Dit fornavn">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Efternavn</label>
        <input type="text" class="form-control" id="lastName" placeholder="Dit Efternavn">
    </div>
    <div class="mb-3">
        <label for="tel" class="form-label">Telefon nummer</label>
        <input type="tel" class="form-control" id="tel" placeholder="+45 12 34 56 78">
    </div>
    <div class="mb-3">
        <label for="emailAdress" class="form-label">Email address</label>
        <input type="email" class="form-control" id="emailAdress" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button class="btn btn-warning border-altWhite border-3 text-white fs-1 rounded-4   ">
        send
    </button>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
