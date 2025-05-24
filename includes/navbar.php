<!-- Nav for mobile sizes -->
<nav class="p-2 d-lg-none sticky-top z-2 bg-secondary">
    <div class="d-flex justify-content-between">
        <a href="index.php"><img src="../images/Logo.png" alt="navLogo" style="max-height: 50px;"></a>
        <div class="toggleMenu z-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.625 71.875C15.625 71.0462 15.9542 70.2513 16.5403 69.6653C17.1263 69.0792 17.9212 68.75 18.75 68.75H81.25C82.0788 68.75 82.8737 69.0792 83.4597 69.6653C84.0458 70.2513 84.375 71.0462 84.375 71.875C84.375 72.7038 84.0458 73.4987 83.4597 74.0847C82.8737 74.6708 82.0788 75 81.25 75H18.75C17.9212 75 17.1263 74.6708 16.5403 74.0847C15.9542 73.4987 15.625 72.7038 15.625 71.875ZM15.625 46.875C15.625 46.0462 15.9542 45.2513 16.5403 44.6653C17.1263 44.0792 17.9212 43.75 18.75 43.75H81.25C82.0788 43.75 82.8737 44.0792 83.4597 44.6653C84.0458 45.2513 84.375 46.0462 84.375 46.875C84.375 47.7038 84.0458 48.4987 83.4597 49.0847C82.8737 49.6708 82.0788 50 81.25 50H18.75C17.9212 50 17.1263 49.6708 16.5403 49.0847C15.9542 48.4987 15.625 47.7038 15.625 46.875ZM15.625 21.875C15.625 21.0462 15.9542 20.2513 16.5403 19.6653C17.1263 19.0792 17.9212 18.75 18.75 18.75H81.25C82.0788 18.75 82.8737 19.0792 83.4597 19.6653C84.0458 20.2513 84.375 21.0462 84.375 21.875C84.375 22.7038 84.0458 23.4987 83.4597 24.0847C82.8737 24.6708 82.0788 25 81.25 25H18.75C17.9212 25 17.1263 24.6708 16.5403 24.0847C15.9542 23.4987 15.625 22.7038 15.625 21.875Z" fill="#F8F9FB"></path>
            </svg>
        </div>
    </div>

    <!-- Hamburger menu overlay -->
    <div id="navOverlay" class="w-100 h-100 bg-secondary align-items-center justify-content-center position-fixed top-0 start-0" style="display: none; z-index: 1">
        <div class="m-2 overlayHover fs-1 d-flex flex-column gap-5 text-center fw-bolder">
            <a class="text-white" href="index.php">FORSIDE</a>
            <a class="text-white" href="bidrag.php">DONATIONER</a>
            <a class="text-white" href="givetonske.php">GIV ET ØNKSE</a>
            <a class="text-white" href="reward.php">GEVINSTER</a>
            <a class="text-white" href="aktiviteter.php">ARRANGEMENTER</a>
            <a class="text-white" href="hjaelp.php">HJÆLP</a>
            <a class="text-white" href="info.php">INFO</a>
        </div>
    </div>
</nav>

<script>
    const menu = document.getElementById("navOverlay");
    const toggleMenu = document.querySelector(".toggleMenu")


    toggleMenu.addEventListener("click", () => {
        menu.style.display = menu.style.display === "flex" ? "none" : "flex"
    })
</script>

<!-- Desktop Navbar -->
<nav class="p-3 d-none d-lg-block bg-secondary">
    <div class="d-flex justify-content-between">
        <a href="aktiviteter.php"><img src="images/Logo.png" alt="" class="img-fluid" style="max-height: 75px;"></a>
        
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.625 71.875C15.625 71.0462 15.9542 70.2513 16.5403 69.6653C17.1263 69.0792 17.9212 68.75 18.75 68.75H81.25C82.0788 68.75 82.8737 69.0792 83.4597 69.6653C84.0458 70.2513 84.375 71.0462 84.375 71.875C84.375 72.7038 84.0458 73.4987 83.4597 74.0847C82.8737 74.6708 82.0788 75 81.25 75H18.75C17.9212 75 17.1263 74.6708 16.5403 74.0847C15.9542 73.4987 15.625 72.7038 15.625 71.875ZM15.625 46.875C15.625 46.0462 15.9542 45.2513 16.5403 44.6653C17.1263 44.0792 17.9212 43.75 18.75 43.75H81.25C82.0788 43.75 82.8737 44.0792 83.4597 44.6653C84.0458 45.2513 84.375 46.0462 84.375 46.875C84.375 47.7038 84.0458 48.4987 83.4597 49.0847C82.8737 49.6708 82.0788 50 81.25 50H18.75C17.9212 50 17.1263 49.6708 16.5403 49.0847C15.9542 48.4987 15.625 47.7038 15.625 46.875ZM15.625 21.875C15.625 21.0462 15.9542 20.2513 16.5403 19.6653C17.1263 19.0792 17.9212 18.75 18.75 18.75H81.25C82.0788 18.75 82.8737 19.0792 83.4597 19.6653C84.0458 20.2513 84.375 21.0462 84.375 21.875C84.375 22.7038 84.0458 23.4987 83.4597 24.0847C82.8737 24.6708 82.0788 25 81.25 25H18.75C17.9212 25 17.1263 24.6708 16.5403 24.0847C15.9542 23.4987 15.625 22.7038 15.625 21.875Z" fill="#F8F9FB"></path>
            </svg>
        </button>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Hvor vil de rejse hen?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="m-2 overlayHover fs-2 d-flex flex-column gap-5 text-center fw-bolder">
                <a class="text-primary" href="aktiviteter.php">FORSIDE</a>
                <a class="text-primary" href="bidrag.php">DONATIONER</a>
                <a class="text-primary" href="givetonske.php">GIV ET ØNKSE</a>
                <a class="text-primary" href="rewards.php">GEVINSTER</a>
                <a class="text-primary" href="hjaelp.php">HJÆLP</a>
                <a class="text-primary" href="info.php">INFO</a>
            </div>
        </div>
    </div>

</nav>

