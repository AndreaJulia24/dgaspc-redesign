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