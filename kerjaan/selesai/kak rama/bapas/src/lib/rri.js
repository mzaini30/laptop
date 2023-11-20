export const rri = {
  bagianA: [
    {
      pertanyaan:
        "Apakah pada saat Narapidana/ Klien Pemasyarakatan pertama kali ditahan masih berusia 16 tahun atau dibawah 16 tahun?",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 3],
    },
    {
      pertanyaan:
        "Apakah Narapidana/ Klien Pemasyarakatan pernah dihukum oleh pengadilan dan divonis hukuman penjara?",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
    {
      pertanyaan:
        "Berapa jumlah pasal yang dipidanakan kepada Narapidana/ Klien Pemasyarakatan untuk kejahatan saat ini?",
      jawaban: ["1 s/d 2 ", "3/ lebih"],
      nilai: [0, 1],
    },
    {
      pertanyaan: `Apakah Narapidana/ Klien Pemasyarakatan pernah melakukan pelanggaran ketika sedang menjalani Program Re-Integrasi?
(Contoh: pelanggaran ketentuan re-integrasi, dan/ atau pelanggaran hukum/ hukum adat/ norma masyarakat)`,
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
    {
      pertanyaan: `Apakah Narapidana/ Klien Pemasyarakatan pernah mendapatkan vonis sebelumnya?
(tidak termasuk vonis untuk kejahatan yang sekarang, dan tidak mempertimbangkan jumlah pasal yang dipidanakan)`,
      jawaban: ["Tidak", "1 s/d 2", "3/ lebih"],
      nilai: [0, 2, 4],
    },
    {
      pertanyaan:
        "Apakah ada catatan perilaku buruk/ menyimpang yang dilakukan oleh Narapidana/ Klien Pemasyarakatan selama berada di dalam Rutan/ Lapas/ Bapas? ",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
    {
      pertanyaan:
        "Apakah Narapidana/ Klien Pemasyarakatan pernah diskors atau dikeluarkan dari sekolah?",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
    {
      pertanyaan:
        "Apakah ada anggota keluarga dan/ atau pasangan Narapidana/ Klien Pemasyarakatan yang pernah diproses secara hukum/ mendapatkan vonis dari Hakim (apapun bentuk vonisnya)",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
    {
      pertanyaan:
        "Apakah Narapidana/ Klien Pemasyarakatan pernah menggunakan narkotika/ obat-obatan terlarang dan/ atau mengkonsumsi minuman berakohol secara berlebihan?",
      jawaban: ["Tidak", "Alkohol", "Narkotika", "Keduanya"],
      nilai: [0, 1, 2, 3],
    },
    {
      pertanyaan:
        "Apakah Narapidana/ Klien Pemasyarakatan pernah menganggur secara terus menerus/ berturut-turut selama 12 bulan atau lebih?",
      jawaban: ["Tidak", "Ya"],
      nilai: [0, 1],
    },
  ],
  bagianB: [
    `Apakah tindak pidana yang dilakukan Narapidana/ Klien Pemasyarakatan pada saat ini merupakan peningkatan dari tindak pidana yang pernah dilakukan sebelumnya?
(pertanyaan ini hanya berlaku pada Narapidana/ Klien Pemasyarakatan yang pernah melakukan tindakan kriminal sebelumnya)`,
    "Apakah ada sejarah tindak kekerasan yang dilakukan oleh Narapidana/ Klien Pemasyarakatan sebelum berusia 15 tahun?",
    "Apakah Narapidana/ Klien Pemasyarakatan pernah menjadi pelaku, atau korban kekerasan dalam rumah tangga?",
    "Apakah Narapidana/ Klien Pemasyarakatan pernah melakukan tindak pidana kekerasan/ kejahatan seksual, atau tindak pidana terorisme/ separatisme, baik pada kasus yang sekarang, maupun kasus sebelumnya?",
  ],
  bagianC: [
    "Apakah Narapidana/ Klien Pemasyarakatan pernah melahirkan sebelum berusia 20 (dua puluh) tahun?",
    "Apakah Narapidana/ Klien Pemasyarakatan pernah mengalami masalah dalam merawat/ membesarkan anak?",
    "Apakah Narapidana/ Klien Pemasyarakatan pernah terlibat dalam praktik dan/atau jaringan prostitusi, baik sebagai orang yang mengelola jaringan prostitusi (mucikari/”mami”), atau sebagai pekerja seks komersil? ",
  ],
  bagianD: [
    "Apakah Narapidana/ Klien Pemasyarakatan pernah terlibat dalam jaringan pengedar narkotika/ obat-obatan terlarang?",
    "Apakah Narapidana/ Klien Pemasyarakatan menilai penggunaan narkotika/ obat-obatan terlarang oleh dirinya adalah sesuatu yang wajar/ tidak apa-apa? Atau Narapidana/ Klien Pemasyarakatan melakukan pembenaran atas penggunaan narkotika/ obat-obatan terlarang yang dilakukannya?",
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki sejarah penggunaan narkotika/ obat-obatan terlarang sebelumnya (penggunaan rutin/berulang)?",
  ],
};
