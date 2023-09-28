// Função de inicialização do mapa
function initMap() {
    // Coordenadas da sua loja
    var lojaCoords = { lat: -23.5505, lng: -46.6333 };

    // Criação do mapa
    var map = new google.maps.Map(document.getElementById('map'), {
        center: lojaCoords,
        zoom: 15 // Ajuste o nível de zoom conforme necessário
    });

    // Marcador da loja
    var marker = new google.maps.Marker({
        position: lojaCoords,
        map: map,
        title: 'Sua Loja'
    });
}
