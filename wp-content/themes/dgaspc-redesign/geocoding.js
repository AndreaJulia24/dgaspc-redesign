const fs = require('fs');
const https = require('https');
const path = require('path');
const dotenv = require('dotenv');

dotenv.config({ path: path.resolve(__dirname, '../../../.env') });

const API_KEY = process.env.API_KEY_GEOCODING;

if (!API_KEY) {
  console.error("Error : API_KEY_GEOCODING is not set in the .env file.");
  process.exit(1);
}

const jsonPath = path.join(__dirname,'assets','data', 'map_locations.json');
const rawData = fs.readFileSync(jsonPath, 'utf8');
const locations = JSON.parse(rawData);

function fetchCoordinates(address) {
  return new Promise((resolve, reject) => {

    const fullAddress = `${address}, Mures, Romania`;
    const url = `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(fullAddress)}&key=${API_KEY}`;

    https.get(url, (res) => {
      let data = '';
      res.on('data', chunk => data += chunk);
      res.on('end', () => {
        const response = JSON.parse(data);
        if (response.status === 'OK' && response.results.length > 0) {
          resolve(response.results[0].geometry.location);
        } else {
          console.warn('NO COORDINATES FOUND: "${address}" (Status: ${response.status})');
          resolve(null);
        }
      });
    }).on('error', err => reject(err));
  });
}

async function processLocations() {
  console.log(`Koordináták lekérése elkezdődött (${locations.length} elem)...`);

  for (let i = 0; i < locations.length; i++) {
    const item = locations[i];
    
    //if it has lat and lng, skip it
    if (item.lat && item.lng && item.lat !== 0) {
      continue;
    }

    try {
      const location = await fetchCoordinates(item.address);
      if (location) {
        item.lat = location.lat;
        item.lng = location.lng;
        console.log(`[${i + 1}/${locations.length}] OK:${item.name} -> ${item.lat},${item.lng}`);
      }
    } catch (e) {
      console.error(`Hiba a lekérés során: ${item.name}`, e);
    }

    // 200s delay to avoid hitting the API rate limit
    await new Promise(r => setTimeout(r, 200));
  }

  // saving the updated locations back to the JSON file
  fs.writeFileSync(jsonPath, JSON.stringify(locations, null, 2), 'utf8');
  console.log('\n Kész! A map_locations.json sikeresen frissítve a koordinátákkal.');
}

processLocations();