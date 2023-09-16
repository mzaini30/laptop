export const faktorResikoDanPelindung = {
  faktorResiko: [
    {
      aitem: "Pertama kali ditahan atau melakukan pelanggaran berusia 12 tahun",
      jawaban: ["Ya", "Tidak"],
      kunciSkor: [4, 1],
    },
    {
      aitem:
        "Melakukan tindak pidana dalam kurun waktu 5 tahun (sebelum tindak pidana saat ini)",
      jawaban: [
        "Pertama kali melakukan",
        "1 kali",
        "2 kali",
        "3 kali",
        "3 kali lebih",
      ],
      kunciSkor: [0, 1, 2, 3, 4],
    },
    {
      aitem: "Usia pada saat melakukan tindak pidana yang sekarang",
      jawaban: ["12-13", "14-15", "16-17", "17 ke atas"],
      kunciSkor: [1, 2, 3, 4],
    },
    {
      aitem: "Pidana berkaitan dengan",
      jawaban: [
        "Kategori A (Penadahan, Pengerusakan, Perkelahian, Pelanggaran Lalu Lintas, Kepemilikan Senjata Tajam, Cyber Crime)",
        "Kategori B (Penculikan, Penggelapan)",
        "Kategori C (Perdagangan Orang, Perjudian, KDRT)",
        "Kategori D (Penganiayaan, Pencurian, Pemerasan, Penipuan)",
        "Kategori E (Perampokan, Narkotika, Pelecehan dan Penyimpangan Seksual, Terorisme, Pembunuhan) ",
      ],
      kunciSkor: [0, 1, 2, 3, 4],
    },
    {
      aitem:
        "Apakah Anak melakukan pelanggaran selama proses peradilan/ program pembinaan",
      jawaban: ["Tidak Pernah", "Pernah", "Jarang", "Sering", "Sering Sekali"],
      kunciSkor: [0, 1, 2, 3, 4],
    },
    {
      aitem: "Pendidikan tertinggi hingga tamat",
      jawaban: [
        "SD tidak lulus",
        "SD lulus",
        "SMP tidak lulus",
        "SMP lulus",
        "SMA",
      ],
      kunciSkor: [0, 1, 2, 3, 4],
    },
    {
      aitem: "Status pekerjaan sebelum pemidanaan yang sekarang ",
      jawaban: ["Pelajar", "Pekerja", "Wirausaha", "Menganggur"],
      kunciSkor: [1, 2, 3, 4],
    },
    {
      aitem: "Hubungan dengan orang tua atau wali",
      jawaban: [
        "Baik (akrab)",
        "Cukup Baik (biasa)",
        "Kurang Baik (jaga jarak)",
        "Tidak Baik/ Buruk (putus)",
      ],
      kunciSkor: [1, 2, 3, 4],
    },
    {
      aitem:
        "Memiliki hubungan dengan teman/ kerabat yang terlibat tindak kriminal di masyarakat",
      jawaban: ["Tidak ada", "Tidak akrab", "Akrab", "Sangat akrab (Sahabat)"],
      kunciSkor: [1, 2, 3, 4],
    },
    {
      aitem: "Pandangan Anak terhadap pidana yang sekarang",
      jawaban: [
        "Kriminal tidak dapat diterima/ Kriminal adalah perbuatan yang salah",
        "Kriminal mungkin dapat diterima",
        "Kriminal adalah perbuatan yang benar/ dapat diterima",
        "Kriminal murni direncanakan",
        "Kriminal sebagai kebiasaan/ pekerjaan",
      ],
      kunciSkor: [0, 1, 2, 3, 4],
    },
  ],
  faktorPelindung: [
    {
      aitem: "Kemampuan pola asuh orangtua (terkait dengan kemampuan menjamin)",
      jawaban: ["Tidak Mampu", "Kurang Mampu", "Cukup Mampu", "Mampu"],
      kunciSkor: [0, 1, 2, 3],
    },
    {
      aitem:
        "Pihak yang melakukan peran pendampingan, pengawasan, perhatian, perlindungan sebelum terjadinya tindak pidana",
      jawaban: [
        "Orang tua/ Wali/ Lembaga/ Badan Sosial",
        "Masyarakat",
        "Sekolah",
      ],
      kunciSkor: [0, 1, 2],
    },
  ],
};

export const faktorKriminogenik = [
  {
    aspek: "Pendidikan dan Pekerjaan/ Latihan Kerja",
    indikator: [
      "Tidak menyelesaikan pendidikan akhir",
      "Tidak mengenyam bangku sekolah",
      "Tidak mampu menulis/ membaca",
      "Tidak memiliki keterampilan",
      "Pernah di-skors atau dikeluarkan dari sekolah karena alasan tidak disiplin",
      "Sudah tidak banyak aktivitas selama lebih dari 12 bulan",
      "Tidak aktif ketika di masyarakat/ sekolah",
      "Kesulitan mencari pekerjaan atau mempertahankan pekerjaan",
      "Tidak akur dengan atasan di tempat kerja/ guru di sekolah",
      "Tidak akur dengan sesama teman kerja/ murid",
      "Prestasi yang buruk di sekolah/ tempat kerja",
      "Tidak ada/ sedikit keterampilan kerja",
    ],
  },
  {
    aspek: "Penyalahgunaan Alkohol, Narkoba, dan Zat Adiktif Lainnya",
    indikator: [
      "Penggunaan narkoba, alkohol, dan zat adiktif lainnya menyebabkan masalah dalam keluarga.",
      "Penggunaan narkoba, alkohol, dan zat adiktif lainnya menyebabkan masalah di lingkungan pergaulan, sekolah atau tempat kerja.",
      "Apakah anak memiliki sejarah “penyalahgunaan obat- obatan, alkohol, dan zat adiktif lainnya” dalam jangka panjang, atau di masa lalu.",
      "Narkoba, alkohol, dan zat adiktif lainnya menyebabkan masalah medis bagi Anak.",
    ],
  },
  {
    aspek: "Keuangan dan Waktu Luang",
    indikator: [
      "Orangtua/ wali/ keluarga tidak memiliki kemampuan finansial untuk memenuhi kebutuhan Anak",
      "Menjadi tulang punggung ekonomi keluarga",
      "Memiliki hutang pribadi saat ini",
      "Memiliki hutang keluarga yang dibebankan kepada Anak saat ini",
      "Anak tidak mengikuti kegiatan, organisasi terstruktur pada saat sebelum pidana.",
      "Anak memiliki terlalu banyak waktu luang di masyarakat",
    ],
  },
  {
    aspek: "Hubungan keluarga dan sosial",
    indikator: [
      "Hubungan yang bermasalah dengan keluarga/teman sebaya/ lingkungan pada masa menjelang tindak pidana.",
      "Anggota keluarga pernah terlibat dalam kegiatan kriminal.",
      "Teman atau rekan pernah terlibat dalam kegiatan kriminal.",
      "Anggota keluarga memiliki riwayat penyalahgunaan narkotika, obat-obatan, alkohol, atau zat adiktif lainnya",
      "Anggota keluarga memiliki riwayat kecanduan narkotika, obat-obatan, alkohol, atau zat adiktif lainnya",
      "Tidak memiliki teman-teman yang pro-sosial (non-kriminal)",
      "Tindak pidana dilakukan bersama orang lain.",
      "Pergaulan selama proses peradilan/ pembinaan mengakibatkan Anak menjadi lebih bermasalah.",
    ],
  },
  {
    aspek: "Sikap prokriminal/anti sosial",
    indikator: [
      "Menunjukan sikap yang tidak sesuai dengan norma di masyarakat.",
      "Percaya bahwa pelanggaran/kejahatan adalah metode yang sah atau diperlukan untuk memenuhi kebutuhan.",
      "Sedikit atau tidak ada rasa iba/kasihan terhadap para korban kejahatan.",
      "Menunjukan sikap penolakan terhadap peraturan dan norma hukum.",
      "Menunjukan sikap penolakan terhadap pembinaan untuk memperbaiki perilaku kriminal.",
    ],
  },
  {
    aspek: "Faktor-faktor lainnya",
    indikator: [
      "Memiliki masalah berjudi (online, kartu, dll) dan atau kecanduan lainnya (kartu/ game online/ pornografi/ mengutil)",
      "Memiliki masalah dalam pengendalian emosi dan konflik dalam keluarga.",
      "Pelaku pidana asusila.",
      "Bergabung dalam jaringan kriminal atau geng.",
      "Tindak pidana terorganisir/ tindak pidana atas kebencian/ tindak pidana terorisme",
      "Kurangnya dukungan keluarga atau masyarakat.",
      "Berada dibawah ancaman orang lain.",
    ],
  },
];
