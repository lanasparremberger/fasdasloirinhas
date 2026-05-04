const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

 const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('bg-white', 'shadow-md');
            header.classList.remove('bg-white/60');
        } else {
            header.classList.remove('bg-white', 'shadow-md');
            header.classList.add('bg-white/60');
        }
    });

const canvas = document.getElementById("stars")
const ctx = canvas.getContext("2d")

canvas.width = window.innerWidth
canvas.height = window.innerHeight

let stars = []

for (let i = 0; i < 120; i++) {

    stars.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        size: Math.random() * 2,
        speed: Math.random() * 0.3
    })

}

function animate() {

    ctx.clearRect(0, 0, canvas.width, canvas.height)

    stars.forEach(star => {

        ctx.fillStyle = "white"
        ctx.beginPath()
        ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2)
        ctx.fill()

        star.y += star.speed

        if (star.y > canvas.height) {
            star.y = 0
        }

    })

    requestAnimationFrame(animate)

}

animate()

tsParticles.load("particles", {
    particles: {
        number: {
            value: 60
        },
        size: {
            value: 3
        },
        move: {
            speed: 1
        },
        links: {
            enable: true,
            color: "#ffffff"
        },
        color: {
            value: "#ffffff"
        }
    },
    background: {
        color: "transparent"
    }
})