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
    <link rel="icon" href="images/Logo.png">
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "rqa4chuyoz");
    </script>
</head>
<style>
    .simpleHover {
        transition: transform 0.3s ease-in-out;
    }

    .simpleHover:hover {
        transform: translateY(-5px);
    }
</style>
<body class="overflow-x-hidden">

<canvas id="user" class="z-n1 position-absolute">
</canvas>

<main class="pb-5 p-3 d-flex flex-column align-items-center pt-5 position-relative">
    <div class="text-primary text-center">
        <div>
            <label for="navn" class="form-label">Navn</label>
            <input type="text" class="form-control" id="navn" placeholder="Indtast dit fornavn">
        </div>

        <div class="mt-3 pt-md-0">
            <label for="efternavn" class="form-label">Efternavn</label>
            <input type="text" class="form-control" id="efternavn" placeholder="Indtast dit efternavn">
        </div>

        <div class="mt-3 pt-md-0">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="navn@example.com">
        </div>
        <a href="aktiviteter.php" class="btn btn-warning text-altWhite border border-3 border-altWhite text center mt-5 w-50">
            Fortsæt
        </a>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/canvasUserForm.js"></script>
</body>
</html>
