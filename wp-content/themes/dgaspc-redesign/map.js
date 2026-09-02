window.initMap = async function () {
  const mapElement = document.getElementById("map");
  if (!mapElement) {
    return;
  }

  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
  const allMarkers = []; // Array to hold all markers for potential future use

  // Mures county bounds
  const muresBounds = {
    north: 47.18,
    south: 46.05,
    west: 23.80,
    east: 25.30,
  };

  const mapCenter = {
    lat: (muresBounds.north + muresBounds.south) / 2,
    lng: (muresBounds.west + muresBounds.east) / 2
  };

  const map = new Map(mapElement, {
    zoom: 10,
    center: mapCenter,
    mapId: "DEMO_MAP_ID",
    restriction: {
      latLngBounds: muresBounds,
      strictBounds: false,
    },
    minZoom: 9,
    maxZoom: 15,
  });

  //megyehatar poligon
  const muresCoords = [
    { lat: 47.12, lng: 24.15 }, 
    { lat: 47.15, lng: 24.85 }, 
    { lat: 46.85, lng: 25.22 },
    { lat: 46.35, lng: 25.12 }, 
    { lat: 46.08, lng: 24.65 }, 
    { lat: 46.12, lng: 24.12 },
    { lat: 46.45, lng: 23.85 }, 
    { lat: 46.85, lng: 23.95 }
  ];

  const muresPolygon = new google.maps.Polygon({
    paths: muresCoords,
    strokeColor: "#4f46e5",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#6366f1",
    fillOpacity: 0.04,
  });
  muresPolygon.setMap(map);

  const infoWindow = new google.maps.InfoWindow();
  const labels = typeof MapConfig !== 'undefined' ? MapConfig.labels : {};
  const currentLang = typeof MapConfig !== 'undefined' ? MapConfig.currentLang : 'ro';

  // probabilistic legend texts based on the current language
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

  // Legenda container dinamikus nyelvi szövegekkel
  const legendDiv = document.createElement("div");
  legendDiv.style.cssText = "background: #ffffff; padding: 12px 16px; margin: 10px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); font-family: sans-serif; font-size: 11px; color: #1f2937; z-index: 5; max-height: 400px; overflow-y: auto;";
  legendDiv.innerHTML = `
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
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(legendDiv);

  if (typeof MapConfig === 'undefined' || !MapConfig.jsonUrl) {
    console.error("MapConfig or jsonUrl is missing.");
    return;
  }

  //Filter panel 
  const filterDiv = document.createElement("div");
  filterDiv.style.cssText = "background: #ffffff; padding: 8px 12px; margin: 10px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); font-family: sans-serif; font-size: 12px; color: #111876; z-index: 5; display: flex; gap: 6px; align-items: center;";
  filterDiv.innerHTML = `
    <span style="font-weight: bold; margin-right: 4px; color: #0f145c !important;">Filter:</span>
    <button data-shape="all" style="padding: 4px 8px; cursor: pointer; background: #4f46e5; color: #fff; border: none; border-radius: 4px;">All</button>
    <button data-shape="triangle" style="padding: 4px 8px; cursor: pointer; background: #e5e7eb; border: none; border-radius: 4px;">▲</button>
    <button data-shape="circle" style="padding: 4px 8px; cursor: pointer; background: #e5e7eb; border: none; border-radius: 4px;">●</button>
    <button data-shape="square" style="padding: 4px 8px; cursor: pointer; background: #e5e7eb; border: none; border-radius: 4px;">■</button>
  `;
  map.controls[google.maps.ControlPosition.TOP_RIGHT].push(filterDiv);

  fetch(MapConfig.jsonUrl)
    .then((res) => res.json())
    .then((locations) => {
      locations.forEach((item) => {
        if (item.lat && item.lng) {
          const nameLower = (item.name || "").toLowerCase();

          let shape = "pin"; 
          let bgColor = "#4f46e5";

          // FORMS AND COLORS AUTOMATIC APPARANCE BASED ON NAME KEYWORDS
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

          const markerEl = document.createElement("div");
          if (shape === "square") {
            markerEl.style.cssText = `background-color: ${bgColor}; width: 16px; height: 16px; border: 2px solid #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.3); cursor: pointer;`;
          } else if (shape === "circle") {
            markerEl.style.cssText = `background-color: ${bgColor}; width: 16px; height: 16px; border-radius: 50%; border: 2px solid #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.3); cursor: pointer;`;
          } else if (shape === "triangle") {
            markerEl.style.cssText = `width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 18px solid ${bgColor}; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.3)); cursor: pointer;`;
          } else {
            markerEl.innerHTML = `<span style="font-size: 18px; filter: drop-shadow(0 2px 2px rgba(0,0,0,0.3));">📍</span>`;
          }

          const marker = new AdvancedMarkerElement({
            position: { lat: Number(item.lat), lng: Number(item.lng) },
            map: map,
            title: item.name,
            content: markerEl,
          });

          allMarkers.push({ marker: marker, shape: shape }); // Store marker with its shape for filtering

          marker.element.addEventListener("click", () => {
            const content = `
              <div style="max-width: 250px; font-family: sans-serif; font-size: 13px; line-height: 1.5; color: #111827 !important;">
                <h4 style="margin: 0 0 6px; font-size: 15px; font-weight: 700; color: #000000 !important;">${item.name}</h4>
                <p style="margin: 0 0 6px; color: #1f2937 !important;">${item.address}</p>
                ${item.phone ? `<p style="margin: 0 0 4px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.phone || 'Telefon'}:</strong> ${item.phone}</p>` : ''}
                ${item.contact_person ? `<p style="margin: 0 0 4px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.contact || 'Persoană de contact'}:</strong> ${item.contact_person}</p>` : ''}
                ${item.beneficiaries ? `<p style="margin: 0 0 2px; color: #1f2937 !important;"><strong style="color: #000000 !important; font-weight: 700;">${labels.beneficiary || 'Beneficiari'}:</strong> ${item.beneficiaries}</p>` : ''}
              </div>
            `;
            infoWindow.setContent(content);
            infoWindow.open({
              anchor: marker,
              map,
            });
          });
        }
      });
     // Filter buttons event listeners
      const buttons = filterDiv.querySelectorAll("button");
      buttons.forEach(btn => {
        btn.addEventListener("click", (e) => {
          // button active state
          buttons.forEach(b => { b.style.background = "#e5e7eb"; b.style.color = "#1f2937"; });
          e.target.style.background = "#4f46e5";
          e.target.style.color = "#ffffff";

          const selectedShape = e.target.getAttribute("data-shape");

          // Show/hide markers based on the selected shape
          allMarkers.forEach(item => {
            if (selectedShape === "all" || item.shape === selectedShape) {
              item.marker.map = map; // Show 
            } else {
              item.marker.map = null; // hide marker
            }
          });
        });
      }); 
    })
    .catch((err) => console.error("Error at JSON fetch:", err));
};