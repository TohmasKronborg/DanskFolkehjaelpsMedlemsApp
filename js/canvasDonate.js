const canvas = document.getElementById("money");
const ctx = canvas.getContext("2d");

// Resize canvas to full window
function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

// Updated SVG path from provided SVG
const path = new Path2D("M22.5 6H1.5V18H22.5V6ZM1.5 4.5C1.10218 4.5 0.720644 4.65804 0.43934 4.93934C0.158035 5.22064 0 5.60218 0 6L0 18C0 18.3978 0.158035 18.7794 0.43934 19.0607C0.720644 19.342 1.10218 19.5 1.5 19.5H22.5C22.8978 19.5 23.2794 19.342 23.5607 19.0607C23.842 18.7794 24 18.3978 24 18V6C24 5.60218 23.842 5.22064 23.5607 4.93934C23.2794 4.65804 22.8978 4.5 22.5 4.5H1.5Z");
const path2 = new Path2D("M19.5 6C19.5 6.79565 19.8161 7.55871 20.3787 8.12132C20.9413 8.68393 21.7044 9 22.5 9V6H19.5ZM4.5 6C4.5 6.79565 4.18393 7.55871 3.62132 8.12132C3.05871 8.68393 2.29565 9 1.5 9V6H4.5ZM19.5 18C19.5 17.2044 19.8161 16.4413 20.3787 15.8787C20.9413 15.3161 21.7044 15 22.5 15V18H19.5ZM4.5 18C4.5 17.2044 4.18393 16.4413 3.62132 15.8787C3.05871 15.3161 2.29565 15 1.5 15V18H4.5ZM15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12Z");

const pathBounds = {
    minX: 0,
    minY: 0,
    maxX: 24,
    maxY: 24
};
const centerX = (pathBounds.minX + pathBounds.maxX) / 2;
const centerY = (pathBounds.minY + pathBounds.maxY) / 2;

class Particle {
    constructor() {
        this.reset();
    }

    reset() {
        this.x = Math.random() * canvas.width;
        this.y = -50 - Math.random() * 200;
        this.size = 0.3 + Math.random() * 2;
        this.speed = 0.5 + Math.random();
        this.angle = Math.random() * Math.PI / 4 - Math.PI / 8;
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
        ctx.translate(-centerX, -centerY);

        ctx.strokeStyle = "#F6EEDE";
        ctx.lineWidth = 1.5;
        ctx.globalAlpha = 1;
        ctx.lineCap = "round";
        ctx.lineJoin = "round";

        ctx.stroke(path);
        ctx.stroke(path2);
        ctx.restore();
    }
}

const particles = Array.from({ length: 25 }, () => new Particle());

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (const p of particles) {
        p.update();
        p.draw(ctx);
    }
    requestAnimationFrame(animate);
}

animate();
