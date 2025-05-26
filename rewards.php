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

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .profile-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 1rem;
            box-sizing: border-box;
        }

        @media (max-width: 600px) {
            .profile-card {
                width: calc(100% - 2rem);
                margin-left: auto;
                margin-right: auto;
            }
        }

        .booster-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.25rem;
        }

        .booster-item {
            padding: 0.25rem 0.5rem;
            border: 1px solid #000;
            border-radius: 0.5rem;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="profile-card border border-primary rounded-3 d-flex align-items-center bg-light">
            <div class="me-3">
                <img src="images/lars.png" alt="Profilbillede" class="img-fluid rounded-circle" style="max-height: 150px; min-height: 70px; min-width: 70px;">
            </div>
            <div class="d-flex flex-column justify-content-center">
                <p class="h2 fw-bold m-0">Hej, Lars</p>
                <span class="fw-bold">Points: <span class="fw-normal">11,200</span></span>
                <span class="fw-bold">Point boosters:</span>
                <div class="booster-list">
                    <span class="booster-item bg-warning">Frivillig <span class="align-content-center fw-light">(x2)</span></span>
                    <span class="booster-item bg-primary">Medlem <span class="align-content-center fw-light">(x1.5)</span></span>
                    <span class="booster-item" style="background-color: #c40000;">Lars <span class="align-content-center fw-light">(x∞)</span></span>
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
