import { writeFileSync } from "fs";
import { slug as generate_slug } from "kumpulan-tools";

let list = `
1. Lomba Tari Tradisional Daerah
10. Lomba Cipta Lagu Kemerdekaan
100. Lomba Panahan dengan Target Bendera
`;

// Membersihkan teks dan memisahkan setiap baris menjadi array
let lines = list.trim().split("\n");

// Mengolah setiap baris untuk membuat objek dalam array
let olah_list = lines.map((line) => {
  let match = line.match(/^(\d+)\.\s(.+)/); // Mencocokkan nomor dan judul
  if (match) {
    let nomor = parseInt(match[1]);
    let judul = match[2].trim();
    let slug = generate_slug(judul); //.toLowerCase().replace(/\s+/g, "-"); // Membuat slug

    return { judul, slug };
  }
});

// console.log(olah_list);
for (let x of olah_list) {
  writeFileSync(
    `src/pages/uraian/${x.slug}.md`,
    `---
judul: ${x.judul}
---

`,
  );
}
