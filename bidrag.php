<?php
/**
 * @var db $db
 */

require "settings/init.php";


// Connect to database
$host = 'mariadb';
$user = 'user';
$pass = 'password';
$db = 'dkfma';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Donations mål
$donationGoal = 2500000;

// Gather form data with fallbacks
$donorNavn = trim($_POST['donorNavn'] ?? "");
$donorType = $_POST['donorType'] ?? null;

// Hvis donorNavn er blankt anlæg det som være en Anonym
if ($donorNavn === "") {
    $donorNavn = "Anonym";
}

// Mængde af penge doneret
$donorAmount = null;
if (!empty($_POST['customAmount']) && is_numeric($_POST['customAmount'])) {
    $donorAmount = $_POST['customAmount'];
} elseif (!empty($_POST['donorAmount']) && is_numeric($_POST['donorAmount'])) {
    $donorAmount = $_POST['donorAmount'];
}

$responseMessage = "";

// POST'er kun når alle felter er udfyldt
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $donorNavn !== null && $donorType !== null && $donorAmount !== null) {
    $stmt = $conn->prepare("INSERT INTO donations (donorNavn, donorAmount, donorType) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $donorNavn, $donorAmount, $donorType);

    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $responseMessage = "<div class='mt-3 alert alert-danger text-center w-100'>Noget gik galt: " . $stmt->error . "</div>";
    }

    $stmt->close();
}

// Hent alle donationer
$result = $conn->query("SELECT SUM(donorAmount) AS total FROM donations");
$totalDonation = 0;
if ($row = $result->fetch_assoc()) {
    $totalDonation = $row['total'] ?? 0;
}

// Hent de seneste doneringer
$latestDonationsResult = $conn->query("SELECT donorNavn, donorAmount FROM donations ORDER BY donorId DESC LIMIT 5");
$latestDonations = [];
while ($donation = $latestDonationsResult->fetch_assoc()) {
    $latestDonations[] = $donation;
}

$progressProcent = round(($totalDonation / $donationGoal) * 100);
if ($progressProcent >= 100) {
    $progressProcent = 100;
}

$conn->close();
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

<body class="bg-secondaryToWhiteGradient">

<!-- Include Navbar -->
<?php include "includes/navbar.php"; ?>

<canvas id="money" class="z-n1 position-absolute">
</canvas>

<header class="w-75 w-md-50 text-center m-auto text-white mt-5">
    <h1>
        Dansk Julehjælps jule indsamling
    </h1>
    <p class="instrument">"Børn burde have en god jul"</p>

    <!-- Optjente penge -->
    <p class="fs-1 fw-bolder text-gul"><?php echo number_format($totalDonation, 0, ',', '.'); ?> DKK</p>

    <div class="progress mt-3" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?php echo min(100, ($totalDonation / $donationGoal) * 100); ?>" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo min(100, ($totalDonation / $donationGoal) * 100); ?>%">
            <?php echo $progressProcent; ?>%
        </div>
    </div>

    <p class="mt-4">
        Vi mangler kun <?php echo number_format(max(0, $donationGoal - $totalDonation), 0, ',', '.'); ?> DKK for at have opnået vores mål
    </p>
</header>

<!-- Donation box -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <main class="rounded-4 bg-white w-lg-25 m-auto mt-5 d-flex flex-column align-items-center p-3 position-relative z-1 shadow-sm">
        <div class="btn-group mb-4" role="group">
            <input type="radio" class="btn-check" name="donorType" value="0" id="vbtn-radio1" autocomplete="off" checked>
            <label class="btn btn-outline-secondary" for="vbtn-radio1">Engangs Beløb</label>

            <input type="radio" class="btn-check" name="donorType" value="1" id="vbtn-radio2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="vbtn-radio2">Månedligt beløb</label>
        </div>

        <hr class="border border-3 border-secondary w-75 rounded-5">
        <span class="h1">Vælg et beløb</span>

        <div class="mt-4">
            <input type="radio" class="btn-check" name="donorAmount" value="10" id="option5" autocomplete="off">
            <label class="btn btn-outline-secondary fs-2" for="option5">10 DKK</label>

            <input type="radio" class="btn-check" name="donorAmount" value="20" id="option6" autocomplete="off">
            <label class="btn btn-outline-secondary fs-2" for="option6">20 DKK</label>
        </div>

        <div class="mt-4">
            <input type="radio" class="btn-check" name="donorAmount" value="50" id="option7" autocomplete="off">
            <label class="btn btn-outline-secondary fs-2" for="option7">50 DKK</label>

            <input type="radio" class="btn-check" name="donorAmount" value="100" id="option8" autocomplete="off">
            <label class="btn btn-outline-secondary fs-2" for="option8">100 DKK</label>
        </div>

        <!-- Vælg selv -->
        <div class="w-lg-100">
            <label for="customAmount"></label>
            <input id="customAmount" type="number" name="customAmount" maxlength="10" class="form-control" placeholder="Vælg Selv beløb" oninput="clearRadios()" step="1" min="1">
        </div>

        <div class="w-lg-100 mb-3">
            <label for="donorName"></label>
            <input type="text" name="donorNavn" class="form-control" placeholder="Dit Navn" id="donorName">
        </div>

        <hr class="border border-3 border-secondary w-75 rounded-5">

        <button type="submit" class="btn fw-bolder border-3 border-altWhite text-altWhite bg-warning w-50 fs-2">NÆSTE</button>

        <?php echo $responseMessage; ?>
    </main>
</form>

<!-- Latest Donations -->
<div class="d-flex flex-column align-items-center pt-5 bg-beige pb-5 mb-5 position-relative z-n1" style="margin-top: -15px;">
    <?php foreach ($latestDonations as $donation): ?>
        <div class="bg-white shadow-sm rounded-4 d-flex donationCardW mb-3 border border-5 border-altWhite">
            <img src="images/Logo.png" alt="TempPFP" class="img-fluid p-2" style="max-height: 100px">
            <div class="ms-3 me-3 mt-auto mb-auto">
                <p class="instrument h2 m-0"><?php echo htmlspecialchars($donation['donorNavn']); ?></p>
                <p class="m-0">Har doneret <strong><?php echo htmlspecialchars($donation['donorAmount']); ?></strong> DKK</p>
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
