//DGASPC MURES -- DECLARATII DE AVERE DOKUMENTUMOK
//USING A SCRIPT IN THE OLD WEBSITE F12 -CONSOLE MODE

const results = [];
document.querySelectorAll('a[href*="dec-avere"], a[href*="declaratii"]').forEach(a => {
    const text = a.textContent.trim();
    const href = a.href;
    
    let year = 2025;
    if (href.includes('/2024/') || href.includes('2024')) year = 2024;
    else if (href.includes('/2023/') || href.includes('2023')) year = 2023;

    if (text.length > 2) {
        results.push({
            name: text,
            year: year,
            type: "pdf",
            url: href
        });
    }
});

const blob = new Blob([JSON.stringify({ category: "Declaratii de avere", count: results.length, documents: results }, null, 2)], { type: "application/json" });
const link = document.createElement("a");
link.href = URL.createObjectURL(blob);
link.download = "declaratii_avere.json";
link.click();
//---------------------------------------------------------------
// DGASPC MURES -- TISZTÍTOTT TÉRKÉP ADAT KINYERŐ (F12 Console)
//---------------------------------------------------------------
(function() {
    const rawRows = document.querySelectorAll('table tr');
    const seen = new Set();
    const cleanResults = [];

    rawRows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length < 5) return;

        const nr = cells[0]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const name = cells[1]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const address = cells[2]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const contactPerson = cells[3]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const phone = cells[4]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const fax = cells[5]?.textContent.trim().replace(/\s+/g, ' ') || '';
        const beneficiaries = cells[6]?.textContent.trim().replace(/\s+/g, ' ') || '';

        //Filtering out invalid or duplicate entries
        if (!name || name.length < 5) return;
        if (name.includes('Denumirea') || name.includes('Home') || nr.includes('DGASPC')) return;
        if (seen.has(name + '|' + address)) return;
        if (address.includes('Adresa') || address.includes('Home')) return;
        if (phone.includes('Telefon') || phone.includes('Home')) return;
        if (fax.includes('Fax') || fax.includes('Home')) return;
        if (beneficiaries.includes('Beneficiari') || beneficiaries.includes('Home')) return;    
        seen.add(name + '|' + address);

        // Kategória meghatározása
        const isAdult = beneficiaries.toLowerCase().includes('adult') || 
                        name.toLowerCase().includes('adult') || 
                        beneficiaries.toLowerCase().includes('handicap');

        cleanResults.push({
            id: cleanResults.length + 1,
            nr_crt: nr,
            category: isAdult ? "Servicii Sociale Adulți" : "Servicii Sociale Copii",
            name: name,
            address: address,
            contact_person: contactPerson,
            phone: phone,
            fax: (fax && fax !== '-') ? fax : '',
            beneficiaries: beneficiaries
        });
    });

    console.log(`Tisztított intézmények száma: ${cleanResults.length}`);

    // Letöltés
    const blob = new Blob([JSON.stringify(cleanResults, null, 2)], { type: "application/json" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "map_locations.json";
    link.click();
})();

// ---------------------------------------------------------------
// DGASPC MURES -- TELJES DINAMIKUS KAPCSOLAT KINYERŐ (F12 Console)
//---------------------------------------------------------------
(function() {
    const extractedData = {
        extracted_at: new Date().toISOString(),
        emails: [],
        phones: [],
        text_blocks: []
    };

    // 1. E-mail addresses
    document.querySelectorAll('a[href^="mailto:"]').forEach(a => {
        const email = a.href.replace('mailto:', '').trim();
        if (!extractedData.emails.includes(email)) {
            extractedData.emails.push(email);
        }
    });

    // 2. Phone numbers
    document.querySelectorAll('a[href^="tel:"]').forEach(a => {
        const phone = a.href.replace('tel:', '').trim();
        if (!extractedData.phones.includes(phone)) {
            extractedData.phones.push(phone);
        }
    });

    // 3. Text blocks (p, td, font, b, strong, li)
    document.querySelectorAll('p, td, font, b, strong, li').forEach(el => {
        const text = el.textContent.trim().replace(/\s+/g, ' ');
        // Csak a hasznos, nem üres vagy túl rövid blokkokat mentjük
        if (text && text.length > 3 && !extractedData.text_blocks.includes(text)) {
            extractedData.text_blocks.push(text);
        }
    });

    console.log("Dinamikusan kinyert adatok a DOM-ból:", extractedData);

    // JSON file download
    const blob = new Blob([JSON.stringify(extractedData, null, 2)], { type: "application/json" });
    const link = document.createElement("a");
    link.href = URL.createObjectURL(blob);
    link.download = "dgaspc_contact_dynamic.json";
    link.click();
})();