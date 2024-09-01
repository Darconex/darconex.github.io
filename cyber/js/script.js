document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    // Ajuster la taille du canvas pour remplir l'écran
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Variables pour la position de la souris
    let mouseX = canvas.width / 2;
    let mouseY = canvas.height / 2;

    // Variables pour la position animée du cercle
    let posX = mouseX;
    let posY = mouseY;

    // Vitesse de suivi
    const speed = 0.1;

    // Fonction pour suivre la souris
    function followMouse() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        posX += (mouseX - posX) * speed;
        posY += (mouseY - posY) * speed;

        // Dessiner le cercle
        ctx.beginPath();
        ctx.arc(posX, posY, 10, 0, Math.PI * 2);
        ctx.fillStyle = 'red';
        ctx.fill();

        requestAnimationFrame(followMouse);
    }

    // Détecter les mouvements de la souris
    canvas.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Démarrer l'animation
    followMouse();

    // Adapter la taille du canvas en cas de redimensionnement de la fenêtre
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
});
