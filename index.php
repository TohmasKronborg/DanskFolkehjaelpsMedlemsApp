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
    
    <title>Dansk Folkehjælps medlems platform</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="overflow-x-hidden">

<nav class="d-flex justify-content-between align-items-center p-2 pe-3 ps-3">
    <img src="images/Logo.png" alt="logo" class="img-fluid" style="max-height: 75px;">
    <div class="text-center">
        <a href="login.php" class="shadow-sm border border-4 rounded-4 border-altWhite p-2 pe-3 ps-3 m-2 text-secondary">
            Log ind
        </a>
        <a href="signup.php" class="shadow-sm border border-4 rounded-4 border-altWhite p-2 pe-3 ps-3 m-2 text-altWhite bg-warning">
            Bliv medlem
        </a>
    </div>
</nav>

<canvas id="flakes" class="z-n1 position-fixed">
</canvas>

<main class="p-5 transparentIntro">
    <p class="text-center z-1 instrument te">
        Som medlem af Dansk Folkehjælp gør du en forskel for mennesker i nød – du støtter frivillige indsatser som julehjælp, social støtte og nødhjælp både i Danmark og ude i verden, og er med til at skabe håb, fællesskab og tryghed der, hvor livet gør ondt.
    </p>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/canvasBubbles.js"></script>
</body>
</html>
