// Ajoutez des interactions spécifiques si nécessaire
// Par exemple, une alerte lorsque l'utilisateur clique sur un lien

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn');

    buttons.forEach(button => {
        button.addEventListener('mouseover', () => {
            button.style.boxShadow = "0px 0px 15px #00FFFF";
        });

        button.addEventListener('mouseout', () => {
            button.style.boxShadow = "none";
        });
    });
});
