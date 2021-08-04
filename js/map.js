const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

let myMap = L.map('mapid').setView([8.64857, -82.94322], 19)

L.tileLayer(tilesProvider,{
    maxZoom: 18,
}) .addTo(myMap)

let marker = L.marker([8.64857, -82.94322]).addTo(myMap)

marker.bindPopup('<b>PHARMATICA</b><br>Farmacia').openPopup();