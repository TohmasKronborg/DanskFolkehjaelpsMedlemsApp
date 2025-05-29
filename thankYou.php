<?php
/**
 * @var db $db
 */

require "settings/init.php";

// Connect to database
$host = 'mysql12.unoeuro.com';
$user = 'slamsluger_dk';
$pass = '4gadH6BtpmR3DywEGh2b';
$db = 'slamsluger_dk_db';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->query("SELECT donorNavn, donorAmount FROM donations ORDER BY donorId DESC LIMIT 1");
$row = $stmt->fetch_assoc();

$donorNavn = $row['donorNavn'];
$donorAmount = $row['donorAmount'];
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Tak for din donation</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/Logo.png">
</head>

<body>

<canvas id="stars" class="z-n1 position-absolute">
</canvas>

<p class="text-white" style="margin-bottom: 50px;">&#0020;</p>
<div class="w-75 w-md-50 text-center m-auto mt-auto mb-5 text-black transparentIntro p-2 text-center">
    <p class="fw-bolder" style="font-size: 75px;">
        Tak for din donation
    </p>
    <p class="fs-3">Tak <strong><?php echo $donorNavn ?></strong> for dine <strong><?php echo $donorAmount ?></strong> DKK</p>
</div>

<div class="text-center">
    <a href="bidrag.php" class="text-altWhite border border-altWhite border-5 bg-warning p-2 rounded-4 fs-1">Tag tilbage</a>
</div>

<script>
    const canvas = document.getElementById("stars");
    const ctx = canvas.getContext("2d");

    const colorPairs = [
        ["#004032", "#b0ffc5"], // Grønne farver
        ["#0209a0", "#0c61e2"], // Blå farver
        ["#ff5e37", "#ffd300"] // Gule farver
    ]

    // Resize canvas to full window
    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    // Your SVG path as a Path2D object
    const path = new Path2D("M4.29698 22.2749C4.17998 22.9409 4.83698 23.4614 5.41598 23.1644L12.001 19.7804L18.5845 23.1644C19.1635 23.4614 19.8205 22.9409 19.7035 22.2764L18.4585 15.1814L23.743 10.1474C24.2365 9.67638 23.98 8.81538 23.3185 8.72238L15.9715 7.67838L12.6955 1.18788C12.6331 1.05632 12.5346 0.945159 12.4115 0.867323C12.2885 0.789487 12.1458 0.748169 12.0002 0.748169C11.8546 0.748169 11.712 0.789487 11.5889 0.867323C11.4658 0.945159 11.3674 1.05632 11.305 1.18788L8.02898 7.67988L0.68198 8.72388C0.0204801 8.81688 -0.23602 9.67788 0.25748 10.1489L5.54198 15.1829L4.29698 22.2779V22.2749ZM11.6545 18.1244L6.12548 20.9654L7.16648 15.0299C7.19087 14.8933 7.18133 14.7527 7.13869 14.6206C7.09606 14.4886 7.02164 14.369 6.92198 14.2724L2.56298 10.1174L8.64098 9.25338C8.76684 9.23438 8.88621 9.18515 8.98888 9.10991C9.09155 9.03467 9.17445 8.93567 9.23048 8.82138L12.001 3.33438L14.77 8.82138C14.826 8.93567 14.9089 9.03467 15.0116 9.10991C15.1142 9.18515 15.2336 9.23438 15.3595 9.25338L21.4375 10.1159L17.0785 14.2709C16.9785 14.3675 16.9038 14.4874 16.8612 14.6198C16.8186 14.7522 16.8092 14.893 16.834 15.0299L17.875 20.9654L12.346 18.1244C12.2391 18.0693 12.1205 18.0405 12.0002 18.0405C11.8799 18.0405 11.7614 18.0693 11.6545 18.1244Z");

    // Manually calculated bounding box for the path
    const pathBounds = {
        minX: 35,
        minY: 33,
        maxX: 129,
        maxY: 130
    };
    const centerX = (pathBounds.minX + pathBounds.maxX) / 2;
    const centerY = (pathBounds.minY + pathBounds.maxY) / 2;

    // Particle class representing one floating shape
    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.x = Math.random() * canvas.width;
            this.y = -50 - Math.random() * 200;
            this.size = 0.3 + Math.random() * 0.7;
            this.speed = 0.5 + Math.random();
            this.angle = Math.random() * Math.PI / 4 - Math.PI / 8;
            this.rotation = Math.random() * Math.PI * 2;
            this.rotationSpeed = Math.random() * 0.01 - 0.005;

            // Start fully visible
            this.opacity = 0.75;

            const pair = colorPairs[Math.floor(Math.random() * colorPairs.length)];
            this.colorStart = pair[0];
            this.colorEnd = pair[1];
        }

        update() {
            this.x += Math.sin(this.angle) * this.speed;
            this.y += Math.cos(this.angle) * this.speed;
            this.rotation += this.rotationSpeed;

            // Begin fading near the bottom
            const fadeStart = canvas.height * 0.8;
            if (this.y > fadeStart) {
                const fadeProgress = (this.y - fadeStart) / (canvas.height - fadeStart);
                this.opacity = Math.max(0, 0.75 * (1 - fadeProgress));
            }

            if (this.y > canvas.height + 100) {
                this.reset();
            }
        }

        draw(ctx) {
            ctx.save();
            ctx.translate(this.x, this.y);
            ctx.rotate(this.rotation);
            ctx.scale(this.size, this.size);
            ctx.translate(-centerX, -centerY);

            const grad = ctx.createLinearGradient(0, 0, 100, 100);
            grad.addColorStop(0.15, this.colorStart);
            grad.addColorStop(1, this.colorEnd);

            ctx.strokeStyle = grad;
            ctx.lineWidth = 10;
            ctx.globalAlpha = this.opacity;
            ctx.lineCap = "round";
            ctx.lineJoin = "round";
            ctx.stroke(path);
            ctx.restore();
        }

    }

    // Create multiple particles
    const particles = Array.from({ length: 100 }, () => new Particle());

    // Animation loop
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (const p of particles) {
            p.update();
            p.draw(ctx);
        }
        requestAnimationFrame(animate);
    }

    animate();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
