document.addEventListener('mousemove', function(e) {
    const light = document.querySelector('.light');
    light.style.left = `${e.pageX}px`;
    light.style.top = `${e.pageY}px`;
});
