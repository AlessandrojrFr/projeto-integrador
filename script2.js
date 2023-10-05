// Adicione funcionalidade ao dropdown
const dropdownToggle = document.querySelector('.dropdown-toggle');
const dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', function () {
    dropdownMenu.style.display = (dropdownMenu.style.display === 'block') ? 'none' : 'block';
});

// Feche o dropdown quando clicar fora dele
document.addEventListener('click', function (event) {
    if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = 'none';
    }
});
<<<<<<< HEAD

document.addEventListener("DOMContentLoaded", function () {
    var minhaContaLink = document.getElementById("minha-conta");
    var dropdown = document.querySelector(".dropdown");

    minhaContaLink.addEventListener("click", function () {
        // Adiciona ou remove a classe "open" do dropdown ao clicar
        dropdown.classList.toggle("open");
    });
});
=======
>>>>>>> Talarico
