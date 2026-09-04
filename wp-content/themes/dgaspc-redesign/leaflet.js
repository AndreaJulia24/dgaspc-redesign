setTimeout(() => {
const mapElement = document.getElementById("map");
if (mapElement) {
  const map = L.map('map', {
    center: [46.55, 24.56],
    zoom: 10,
    minZoom: 9,
    maxZoom: 15,
    maxBounds: [
      [46.05, 23.80],
      [47.18, 25.30]
    ]
  });

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  const muresCoords = [
    [47.12, 24.15], [47.15, 24.85], [46.85, 25.22],
    [46.35, 25.12], [46.08, 24.65], [46.12, 24.12],
    [46.45, 23.85], [46.85, 23.95]
  ];

  L.polygon(muresCoords, {
    color: "#4f46e5",
    weight: 2,
    fillColor: "#6366f1",
    fillOpacity: 0.1
  }).addTo(map);

  const allMarkers = [];
  const labels = typeof MapConfig !== 'undefined' ? MapConfig.labels : {};
  const currentLang = typeof MapConfig !== 'undefined' ? MapConfig.currentLang : 'ro';

  const legendTexts = {
    ro: {
      title: "Legenda - Servicii Sociale",
      adultTitle: "Servicii rezidențiale pentru adulți:",
      adult1: "Centre de îngrijire și asistență",
      adult2: "Centre de recuperare neuropsihiatrică",
      adult3: "Locuințe protejate",
      adult4: "Centre de integrare prin terapie ocupațională",
      childDayTitle: "Servicii de zi pentru copii:",
      childDay1: "Centru de zi (copil exploatat economic)",
      childDay2: "Centru recuperare zi (copil cu dizabilități)",
      childResTitle: "Servicii rezidențiale pentru copii:",
      childRes1: "Case de tip familial DGASPC",
      childRes2: "Centre de plasament",
      childRes3: "Centre deficiente neuropsihiatrice",
      childRes4: "Centre maternale"
    },
    hu: {
      title: "Jelmagyarázat - Szociális Szolgáltatások",
      adultTitle: "Felnőtt lakóhelyi szolgáltatások:",
      adult1: "Gondozási és segítő központok",
      adult2: "Neuropszichiátriai rehabilitációs központok",
      adult3: "Védett lakások",
      adult4: "Foglalkozási terápia általi integrációs központok",
      childDayTitle: "Napközbeni gyermekellátások:",
      childDay1: "Napközi otthon (gazdaságilag kizsákmányolt gyermek)",
      childDay2: "Napközbeni rehabilitációs központ (fogyatékos gyermek)",
      childResTitle: "Gyermek lakóhelyi szolgáltatások:",
      childRes1: "DGASPC család típusú házak",
      childRes2: "Elhelyezési központok",
      childRes3: "Neuropszichiátriai fogyatékos központok",
      childRes4: "Anyaotthonok"
    }
  };

  const t = legendTexts[currentLang] || legendTexts.ro;

  const LegendControl = L.Control.extend({
    options: { position: 'topright' },
    onAdd: function () {
      const div = L.DomUtil.create('div', 'custom-map-legend');
      div.style.cssText = "background: #ffffff; padding: 12px 16px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); font-family: sans-serif; font-size: 11px; color: #1f2937; max-height: 400px; overflow-y: auto;";
      div.innerHTML = `
        <strong style="display: block; margin-bottom: 6px; font-size: 13px; color: #111827;">${t.title}</strong>
        <div style="font-weight: bold; margin-top: 4px; color: #374151;">${t.adultTitle}</div>
        <div><span style="color: #2e7d32;">■</span> ${t.adult1}</div>
        <div><span style="color: #1565c0;">■</span> ${t.adult2}</div>
        <div><span style="color: #ef6c00;">■</span> ${t.adult3}</div>
        <div><span style="color: #fbc02d;">■</span> ${t.adult4}</div>
        <div style="font-weight: bold; margin-top: 8px; color: #374151;">${t.childDayTitle}</div>
        <div><span style="color: #7e0707;">●</span> ${t.childDay1}</div>
        <div><span style="color: #0288d1;">●</span> ${t.childDay2}</div>
        <div style="font-weight: bold; margin-top: 8px; color: #374151;">${t.childResTitle}</div>
        <div><span style="color: #f97316;">▲</span> ${t.childRes1}</div>
        <div><span style="color: #10b981;">▲</span> ${t.childRes2}</div>
        <div><span style="color: #3b82f6;">▲</span> ${t.childRes3}</div>
        <div><span style="color: #9333ea;">▲</span> ${t.childRes4}</div>
      `;
      return div;
    }
  });
  map.addControl(new LegendControl());

  if (MapConfig && MapConfig.jsonUrl) {
    const FilterControl = L.Control.extend({
      options: { position: 'topleft' },
      onAdd: function () {
        const div = L.DomUtil.create('div', 'custom-map-filter');
        div.style.cssText = "background: #ffffff; padding: 10px 14px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); font-family: sans-serif; font-size: 12px; color: #111876; display: flex; flex-direction: column; gap: 6px;";
        div.innerHTML = `
          <div style="font-weight: bold; color: #0f145c !important; margin-bottom: 2px;">${currentLang === 'hu' ? 'Szűrés:' : 'Filtru:'}</div>
          <div style="display: flex; flex-direction: row; gap: 6px;">
            <button data-shape="all" style="padding: 6px 10px; cursor: pointer; background: #4f46e5; color: #fff; border: none; border-radius: 4px; font-weight: 600; text-align: left;">${currentLang === 'hu' ? 'Összes' : 'Toate'}</button>
            <button data-shape="triangle" style="padding: 6px 10px; cursor: pointer; background: #e5e7eb; color: #1f2937; border: none; border-radius: 4px; font-weight: 600; text-align: left;">▲ ${currentLang === 'hu' ? 'Gyermek lakóhelyi szolgáltatások' : 'Servicii rezidențiale pentru copii'}</button>
            <button data-shape="circle" style="padding: 6px 10px; cursor: pointer; background: #e5e7eb; color: #1f2937; border: none; border-radius: 4px; font-weight: 600; text-align: left;">● ${currentLang === 'hu' ? 'Napközbeni gyermekellátások' : 'Servicii de îngrijire zilnică pentru copii'}</button>
            <button data-shape="square" style="padding: 6px 10px; cursor: pointer; background: #e5e7eb; color: #1f2937; border: none; border-radius: 4px; font-weight: 600; text-align: left;">■ ${currentLang === 'hu' ? 'Felnőtt lakóhelyi szolgáltatások' : 'Servicii rezidențiale pentru adulți'}</button>
          </div>
        `;
        L.DomEvent.disableClickPropagation(div);
        return div;
      }
    });
    map.addControl(new FilterControl());

    fetch(MapConfig.jsonUrl)
      .then((res) => res.json())
      .then((locations) => {
        locations.forEach((item) => {
          if (item.lat && item.lng) {
            const nameLower = (item.name || "").toLowerCase();
            let shape = "pin"; 
            let bgColor = "#4f46e5";

            if (nameLower.includes('îngrijire') || nameLower.includes('ingrijire') || nameLower.includes('asistență') || nameLower.includes('gondozás')) {
              bgColor = "#2e7d32"; shape = "square";
            } else if (nameLower.includes('neuropsihiatr')) {
              bgColor = "#1565c0"; shape = "square";
            } else if (nameLower.includes('locuințe protejate') || nameLower.includes('locuinte protejate') || nameLower.includes('védett')) {
              bgColor = "#ef6c00"; shape = "square";
            } else if (nameLower.includes('terapie') || nameLower.includes('ocupațional') || nameLower.includes('terápia')) {
              bgColor = "#fbc02d"; shape = "square";
            } else if (nameLower.includes('zi') && (nameLower.includes('copil') || nameLower.includes('exploatat') || nameLower.includes('gyermek'))) {
              bgColor = "#d32f2f"; shape = "circle";
            } else if (nameLower.includes('recuperare') && (nameLower.includes('dizabilități') || nameLower.includes('fogyatékos'))) {
              bgColor = "#0288d1"; shape = "circle";
            } else if (nameLower.includes('familial') || nameLower.includes('család')) {
              bgColor = "#f97316"; shape = "triangle";
            } else if (nameLower.includes('plasament') || nameLower.includes('elhelyezési')) {
              bgColor = "#10b981"; shape = "triangle";
            } else if (nameLower.includes('maternal') || nameLower.includes('anyaotthon')) {
              bgColor = "#9333ea"; shape = "triangle";
            } else if (nameLower.includes('tranzit')) {
              bgColor = "#795548"; shape = "triangle";
            }

            let htmlContent = `<div style="background-color: ${bgColor}; width: 16px; height: 16px; border: 2px solid #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.3); cursor: pointer;"></div>`;
            if (shape === "circle") {
              htmlContent = `<div style="background-color: ${bgColor}; width: 16px; height: 16px; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.3); cursor: pointer;"></div>`;
            } else if (shape === "triangle") {
              htmlContent = `<div style="width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 18px solid ${bgColor}; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.3)); cursor: pointer;"></div>`;
            } else if (shape === "square") {
              htmlContent = `<div style="background-color: ${bgColor}; width: 16px; height: 16px; border: 2px solid #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.3); cursor: pointer;"></div>`;
            }

            const customIcon = L.divIcon({
              className: 'custom-leaflet-marker',
              html: htmlContent,
              iconSize: [16, 16]
            });

            const marker = L.marker([Number(item.lat), Number(item.lng)], { icon: customIcon }).addTo(map);

            const popupContent = `
              <div style="max-width: 250px; font-family: sans-serif; font-size: 13px; line-height: 1.5; color: #111827 !important;">
                <h4 style="margin: 0 0 6px; font-size: 15px; font-weight: 700; color: #000000 !important;">${item.name}</h4>
                <p style="margin: 0 0 6px; color: #1f2937 !important;">${item.address}</p>
                ${item.phone ? `<p style="margin: 0 0 4px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.phone || 'Telefon'}:</strong> ${item.phone}</p>` : ''}
                ${item.contact_person ? `<p style="margin: 0 0 4px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.contact || 'Persoană de contact'}:</strong> ${item.contact_person}</p>` : ''}
                ${item.beneficiaries ? `<p style="margin: 0 0 2px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.beneficiary || 'Beneficiari'}:</strong> ${item.beneficiaries}</p>` : ''}
              </div>
            `;
            marker.bindPopup(popupContent);

            allMarkers.push({ marker: marker, shape: shape });
          }
        });

        setTimeout(() => {
          const buttons = document.querySelectorAll(".custom-map-filter button");
          buttons.forEach(btn => {
            btn.addEventListener("click", (e) => {
              buttons.forEach(b => { b.style.background = "#e5e7eb"; b.style.color = "#1f2937"; });
              e.target.style.background = "#4f46e5";
              e.target.style.color = "#ffffff";

              const selectedShape = e.target.getAttribute("data-shape");

              allMarkers.forEach(item => {
                if (selectedShape === "all" || item.shape === selectedShape) {
                  if (!map.hasLayer(item.marker)) item.marker.addTo(map);
                } else {
                  if (map.hasLayer(item.marker)) map.removeLayer(item.marker);
                }
              });
            });
          });
        }, 500);
      })
      .catch((err) => console.error("Error at JSON fetch:", err));
  }
}
}, 1000);