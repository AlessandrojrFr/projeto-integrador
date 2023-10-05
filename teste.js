function toggleMenu() {
    const menu = document.querySelector('.menu');
    const bars = document.querySelectorAll('.bar');

    menu.classList.toggle('active');

    bars.forEach(bar => {
        bar.classList.toggle('active');
    });
}

const menuIcon = document.querySelector('.menu-icon');
menuIcon.addEventListener('click', toggleMenu);
