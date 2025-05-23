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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set donation goal
$donationGoal = 2500000;

// Gather form data with fallbacks
$donorNavn = trim($_POST['donorNavn'] ?? "");
$donorType = $_POST['donorType'] ?? null;

// If name is blank, set to Anonym
if ($donorNavn === "") {
    $donorNavn = "Anonym";
}

// Determine amount
$donorAmount = null;
if (!empty($_POST['customAmount']) && is_numeric($_POST['customAmount'])) {
    $donorAmount = $_POST['customAmount'];
} elseif (!empty($_POST['donorAmount']) && is_numeric($_POST['donorAmount'])) {
    $donorAmount = $_POST['donorAmount'];
}

$responseMessage = "";

// Only insert if all fields are present and it's a POST request
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

// Fetch total donation amount
$result = $conn->query("SELECT SUM(donorAmount) AS total FROM donations");
$totalDonation = 0;
if ($row = $result->fetch_assoc()) {
    $totalDonation = $row['total'] ?? 0;
}

// Fetch latest donations
$latestDonationsResult = $conn->query("SELECT donorNavn, donorAmount FROM donations ORDER BY donorId DESC LIMIT 5");
$latestDonations = [];
while ($donation = $latestDonationsResult->fetch_assoc()) {
    $latestDonations[] = $donation;
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

<header class="w-75 w-md-50 text-center m-auto text-white mt-5">
    <h1>
        Hjælp børn til en bedre jul!
    </h1>
    <p class="instrument">"Børn buede have en glad jul"</p>

    <!-- Optjente penge -->
    <span class="h1"><?php echo number_format($totalDonation, 0, ',', '.'); ?> DKK</span>

    <div class="progress mt-3" role="progressbar" aria-label="Animated striped example" aria-valuenow="<?php echo min(100, ($totalDonation / $donationGoal) * 100); ?>" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo min(100, ($totalDonation / $donationGoal) * 100); ?>%">
            <?php echo round(($totalDonation / $donationGoal) * 100); ?>%
        </div>
    </div>

    <p class="mt-4">
        Vi mangler kun <?php echo number_format(max(0, $donationGoal - $totalDonation), 0, ',', '.'); ?> DKK for at have opnået vores mål
    </p>
</header>

<!-- Donation box -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <main class="rounded-4 bg-white w-lg-50 m-auto mt-5 d-flex flex-column align-items-center p-3 position-relative z-1 shadow-sm">
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
        <div class="mt-4 w-lg-50">
            <input type="number" name="customAmount" maxlength="10" class="form-control" placeholder="Vælg Selv beløb" oninput="clearRadios()">
        </div>

        <div class="w-lg-50 mb-3">
            <input type="text" name="donorNavn" class="form-control mt-3" placeholder="Dit Navn">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
