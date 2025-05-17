const canvas = document.getElementById("flakes");
const ctx = canvas.getContext("2d");

// Resize canvas to full window
function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight-100;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

// Your SVG path as a Path2D object
const path = new Path2D("M45.0429 114.021L66.816 108.186M66.816 108.186L72.6501 129.96M66.816 108.186L97.1002 55.7327M118.873 49.8986L97.1002 55.7327M97.1002 55.7327L91.2661 33.9596M35.7382 66.0226L51.6773 81.9616M51.6773 81.9616L35.7382 97.9007M51.6773 81.9616L112.246 81.9616M128.185 97.9007L112.246 81.9616M112.246 81.9616L128.185 66.0226M72.6535 33.9616L66.8194 55.7348M66.8194 55.7348L45.0462 49.9007M66.8194 55.7348L97.1035 108.189M91.2694 129.962L97.1035 108.189M97.1035 108.189L118.877 114.023");

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
        this.speed = 0.5 + Math.random() * 1;
        this.angle = Math.random() * Math.PI / 4 - Math.PI / 8; // Slight angle left or right
        this.rotation = Math.random() * Math.PI * 2;
        this.rotationSpeed = Math.random() * 0.01 - 0.005;
    }

    update() {
        this.x += Math.sin(this.angle) * this.speed;
        this.y += Math.cos(this.angle) * this.speed;
        this.rotation += this.rotationSpeed;

        if (this.y > canvas.height + 100) {
            this.reset();
        }
    }

    draw(ctx) {
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.rotate(this.rotation);
        ctx.scale(this.size, this.size);

        // Translate the path so its center is at the origin (0,0)
        ctx.translate(-centerX, -centerY);

        // Create gradient matching SVG
        const grad = ctx.createLinearGradient(0, 0, 100, 100);
        grad.addColorStop(0.17, "#0209A0");
        grad.addColorStop(1, "#0C61E2");

        ctx.strokeStyle = grad;
        ctx.lineWidth = 10;
        ctx.globalAlpha = 0.75;
        ctx.lineCap = "round";
        ctx.lineJoin = "round";
        ctx.stroke(path);
        ctx.restore();
    }
}

// Create multiple particles
const particles = Array.from({ length: 25 }, () => new Particle());

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
