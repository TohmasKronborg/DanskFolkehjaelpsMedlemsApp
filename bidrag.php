<?php
/**
 * @var db $db
 */

require "settings/init.php";

// Donations mål
$donationGoal = 2500000;

if (!empty($_POST['data'])) {
    $data = $_POST['data'];

    // Assign donor name or default to "Anonym"
    $donorNavn = trim($data['donorNavn']);
    if ($donorNavn === "") {
        $donorNavn = "Anonym";
    }

    // Determine donorAmount - prioritize custom input if filled
    $donorAmount = 0;
    if (!empty($_POST['customAmount'])) {
        $donorAmount = (int)$_POST['customAmount'];
    } elseif (!empty($data['donorAmount'])) {
        $donorAmount = (int)$data['donorAmount'];
    }

    // Ensure donorAmount is valid
    if ($donorAmount < 1) {
        $donorAmount = 10; // fallback default
    }

    $bind = [
        "donorNavn" => $donorNavn,
        "donorAmount" => $donorAmount,
        "donorType" => (int)$data['donorType']
    ];

    $sql = "INSERT INTO donations (donorNavn, donorAmount, donorType) VALUES (:donorNavn, :donorAmount, :donorType)";
    $db->sql($sql, $bind, false);

    // Redirect to thank you page
    header("Location: thankYou.php");
    exit();
}

// Sum the total donations
$result = "SELECT SUM(donorAmount) AS total FROM donations";
$totalResult = $db->sql($result);

$totalDonation = 0;
if (!empty($totalResult) && isset($totalResult[0]->total)) {
    $totalDonation = $totalResult[0]->total;
}

$progressProcent = ($donationGoal > 0) ? round(($totalDonation / $donationGoal) * 100) : 0;

// Fetch latest donations
$latestDonationResult = "SELECT donorNavn, donorAmount, donorType FROM donations ORDER BY donorId DESC LIMIT 5";
$latestDonations = $db->sql($latestDonationResult);

?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>DKF's Medlems App | Giv et bidrag</title>

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
<style> /* Sass vil ikke compile */
    .simpleHover {
        transition: transform 0.3s ease-in-out;
    }

    .simpleHover:hover {
        transform: translateY(-5px);
    }
</style>
<body class="bg-secondaryToWhiteGradient overflow-x-hidden">

<!-- Include Navbar -->
<?php include "includes/navbar.php"; ?>

<canvas id="money" class="z-n1 position-absolute">
</canvas>

<header class="w-75 w-md-50 text-center m-auto text-white mt-5 transparentIntro p-2">
    <h1>
        Dansk Julehjælps jule indsamling
    </h1>
    <p class="instrument">"Børn burde have en god jul"</p>

    <!-- Optjente penge -->
    <p class="fs-1 fw-bolder text-gul"><?php echo $totalDonation ?> DKK</p>

    <div class="progress mt-3" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?php echo $progressProcent ?>" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $progressProcent ?>%">
            <?php echo $progressProcent; ?>%
        </div>
    </div>

    <p class="mt-4">
        Vi mangler kun <?php echo number_format(max(0, $donationGoal - $totalDonation), 0, ',', '.'); ?> DKK for at have opnået vores mål
    </p>
</header>

<!-- Donation box -->
<form action="" method="post">
    <main class="rounded-4 bg-white w-lg-25 m-auto mt-5 d-flex flex-column align-items-center p-3 position-relative z-1 shadow-sm">
        <div class="btn-group mb-4" role="group">
            <input type="radio" class="btn-check" name="data[donorType]" value="0" id="vbtn-radio1" autocomplete="off" checked>
            <label class="btn btn-outline-secondary" for="vbtn-radio1">Engangs Beløb</label>

            <input type="radio" class="btn-check" name="data[donorType]" value="1" id="vbtn-radio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="vbtn-radio2">Månedligt beløb</label>
        </div>

        <hr class="border border-3 border-secondary w-75 rounded-5">
        <span class="h1">Vælg et beløb</span>

        <div class="mt-4 d-flex gap-2">
            <div class="simpleHover">
                <input type="radio" class="btn-check" name="data[donorAmount]" value="10" id="option5" autocomplete="off">
                <label class="btn btn-outline-secondary fs-2" for="option5">10 DKK</label>
            </div>

            <div class="simpleHover">
                <input type="radio" class="btn-check" name="data[donorAmount]" value="20" id="option6" autocomplete="off">
                <label class="btn btn-outline-secondary fs-2" for="option6">20 DKK</label>
            </div>
        </div>

        <div class="mt-4 d-flex gap-2">
            <div class="simpleHover">
                <input type="radio" class="btn-check" name="data[donorAmount]" value="50" id="option7" autocomplete="off">
                <label class="btn btn-outline-secondary fs-2" for="option7">50 DKK</label>
            </div>

            <div class="simpleHover">
                <input type="radio" class="btn-check" name="data[donorAmount]" value="100" id="option8" autocomplete="off">
                <label class="btn btn-outline-secondary fs-2" for="option8">100 DKK</label>
            </div>
        </div>

        <!-- Vælg selv -->
        <div class="w-lg-100">
            <label for="customAmount"></label>
            <input id="customAmount" type="number" name="customAmount" maxlength="10" class="form-control" placeholder="Vælg Selv beløb" oninput="clearRadios()" step="1" min="1">
        </div>

        <div class="w-lg-100 mb-3">
            <label for="donorName"></label>
            <input type="text" name="data[donorNavn]" class="form-control" placeholder="Dit Navn" id="donorName">
        </div>

        <hr class="border border-3 border-secondary w-75 rounded-5">

        <button type="submit" class="btn fw-bolder border-3 border-altWhite text-altWhite bg-warning w-50 fs-2 rounded-4 simpleHover">NÆSTE</button>
    </main>
</form>

<!-- Latest Donations -->
<div class="d-flex flex-column align-items-center pt-5 bg-beige pb-5 mb-5 position-relative z-n1" style="margin-top: -15px;">
    <?php foreach ($latestDonations as $donation): ?>
        <div class="bg-white shadow-sm rounded-4 d-flex donationCardW mb-3 border border-5 border-altWhite">
            <img src="images/Logo.png" alt="TempPFP" class="img-fluid p-2" style="max-height: 100px">
            <div class="ms-3 me-3 mt-auto mb-auto">
                <p class="instrument h2 m-0"><?php echo $donation->donorNavn; ?></p>
                <?php if (!empty($donation->donorType) && $donation->donorType == 1): ?>
                    <p class="m-0">Donere nu <strong><?php echo number_format($donation->donorAmount, 0, ',', '.'); ?></strong> DKK om måneden</p>
                <?php else: ?>
                    <p class="m-0">Har doneret <strong><?php echo number_format($donation->donorAmount, 0, ',', '.'); ?></strong> DKK</p>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script>
    function clearRadios() {
        const radios = document.querySelectorAll('input[name="donorAmount"]');
        radios.forEach(r => r.checked = false);
    }
</script>

<script src="js/canvasDonate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
