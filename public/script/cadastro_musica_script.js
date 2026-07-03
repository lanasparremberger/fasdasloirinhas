
dtinymce.init({

    selector:'#description',

    height:400,

    menubar:true,

    plugins:[
        'lists',
        'link',
        'image',
        'table',
        'code',
        'fullscreen',
        'wordcount'
    ],

    toolbar:
    'undo redo | blocks | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist | image link table | fullscreen | code'

});


    const stars = document.querySelectorAll('.star-icon');
    const container = document.querySelector('.avaliacao');
    const inputAvaliacao = document.getElementById('avaliacao');
    const notaDisplay = document.getElementById('nota-display');

    let notaSelecionada = 0; // Armazena o clique final

    // Função para atualizar as cores das estrelas na tela
    function renderizarEstrelas(nota) {
        stars.forEach(star => {
            const valorEstrela = parseFloat(star.getAttribute('data-avaliacao'));

            // Limpa os estados anteriores
            star.classList.remove('star-vazia', 'star-cheia', 'star-meia');

            if (valorEstrela <= nota) {
                star.classList.add('star-cheia');
            } else if (valorEstrela - 0.5 === nota) {
                star.classList.add('star-meia');
            } else {
                star.classList.add('star-vazia');
            }
        });
    }

    stars.forEach(star => {
        // Evento de hover (passar o mouse)
        star.addEventListener('mousemove', function (e) {
            const valorEstrela = parseFloat(this.getAttribute('data-avaliacao'));
            const rect = this.getBoundingClientRect();

            // Posição X do mouse relativa à estrela
            const x = e.clientX - rect.left;
            // Se o mouse estiver antes da metade da largura, é meia estrela
            const ehMeia = x < rect.width / 2;

            const notaHover = valorEstrela - (ehMeia ? 0.5 : 0);
            renderizarEstrelas(notaHover);
        });

        // Evento de clique (salvar a nota)
        star.addEventListener('click', function (e) {
            const valorEstrela = parseFloat(this.getAttribute('data-avaliacao'));
            const rect = this.getBoundingClientRect();

            const x = e.clientX - rect.left;
            const ehMeia = x < rect.width / 2;

            notaSelecionada = valorEstrela - (ehMeia ? 0.5 : 0);

            // Atualiza o input hidden e o texto na tela
            inputAvaliacao.value = notaSelecionada;
            notaDisplay.innerText = notaSelecionada;

            renderizarEstrelas(notaSelecionada);
        });
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
        number: { value: 80 },
        size: { value: 2 },
        move: { speed: 0.5 },
        color: { value: "#ffffff" },
        links: {
            enable: true,
            distance: 120,
            opacity: 0.3
        }
    }
});