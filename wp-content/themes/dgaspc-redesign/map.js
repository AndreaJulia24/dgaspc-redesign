window.initMap = function () {
  const mapCenter = { lat: 46.5480, lng: 24.5729 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 9,
    center: mapCenter,
  });

  const infoWindow = new google.maps.InfoWindow();
  const labels = MapConfig.labels; // Assuming MapConfig is defined in map-config.js

  fetch(MapConfig.jsonUrl)
    .then((res) => res.json())
    .then((locations) => {
      locations.forEach((item) => {
        if (item.lat && item.lng) {
          const marker = new google.maps.Marker({
            position: { lat: Number(item.lat), lng: Number(item.lng) },
            map: map,
            title: item.name,
          });

          marker.addListener("click", () => {
            const content = `
              <div style="max-width: 250px; font-family: sans-serif; font-size: 13px; line-height: 1.4;">
                <h4 style="margin: 0 0 6px; font-size: 14px; color: #1a365d;">${item.name}</h4>
                <p style="margin: 0 0 4px; color: #555;">📍 ${item.address}</p>
                ${item.phone ? `<p style="margin: 0 0 2px;"><strong>${labels.phone}:</strong> ${item.phone}</p>` : ''}
                ${item.contact_person ? `<p style="margin: 0 0 2px;"><strong>${labels.contact}:</strong> ${item.contact_person}</p>` : ''}
                ${item.beneficiaries ? `<p style="margin: 0 0 2px;"><strong>${labels.beneficiary}:</strong> ${item.beneficiaries}</p>` : ''}
              </div>
            `;
            infoWindow.setContent(content);
            infoWindow.open(map, marker);
          });
        }
      });
    })
    .catch((err) => console.error("Hiba a JSON betöltésekor:", err));
};