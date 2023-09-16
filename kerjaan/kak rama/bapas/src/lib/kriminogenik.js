export const kriminogenik = {
  bagianA: [
    {
      bagian: "Keluarga dan Pernikahan",
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mempunyai hubungan yang baik dengan pasangan mereka?",
          jawaban: ["Tidak", "Sebagian", "Ya"],
          nilai: [2, 1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mempunyai hubungan yang baik dengan orangtua atau wali mereka?",
          jawaban: ["Tidak", "Hanya Satu", "Keduanya"],
          nilai: [2, 1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mempunyai hubungan yang baik dengan anggota keluarga lainnya?",
          jawaban: ["Tidak", "Sebagian", "Ya"],
          nilai: [2, 1, 0],
        },
      ],
    },
    {
      bagian: "Pendidikan dan Pekerjaan",
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan dapat membaca dan menulis?",
          jawaban: ["Tidak", "Ya"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan menyelesaikan pendidikan yang tinggi?",
          jawaban: ["Tidak", "Ya"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan menganggur sebelum menjalani pidana sekarang?",
          jawaban: ["Tidak", "Ya"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mengikuti program pembinaan kemandirian di dalam lapas/bapas selama 12 bulan terakhir?",
          jawaban: ["Tidak", "Ya"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan menghabiskan kurang lebih setengah waktunya dalam keadaan menganggur/ tidak bekerja ketika berada di masyarakat?",
          jawaban: ["Tidak", "Ya"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan merasa kegiatan nya di tempat kerja/ sekolah/ universitas bermakna?",
          jawaban: ["Tidak", "Perlu dikembangkan", "Ya"],
          nilai: [2, 1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan dapat berhubungan baik dengan rekan kerja/ teman sekolah/ kuliah? ",
          jawaban: ["Tidak", "Perlu dikembangkan", "Ya"],
          nilai: [2, 1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan berhubungan baik dengan atasan di tempat kerja, atau dengan pengajar di institusi pendidikan tempat dia belajar?",
          jawaban: ["Tidak", "Perlu dikembangkan", "Ya"],
          nilai: [2, 1, 0],
        },
      ],
    },
    {
      bagian:
        "Penggunaan Obat-obatan Terlarang dan Konsumsi Alkohol (Dulu dan Sekarang)",
      // tidak 0, ya 1
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan secara rutin menggunakan narkotika, obat-obatan terlarang, dan/atau alkohol sebelum mengalami permasalahan hukum?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah tindakan kriminal Narapidana/ Klien Pemasyarakatan  disebabkan oleh penggunaan narkotika, obat-obatan terlarang, dan/atau alkohol?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan menggunakan narkotika, obat-obatan terlarang, dan/atau alkohol selama di dalam Rutan, atau pada saat menjalani proses reintegrasi?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah penggunaan narkotika/obat-obatan terlarang/alkohol oleh Narapidana/Klien Pemasyarakatan berdampak negatif pada pekerjaan dan/atau pendidikannya?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah penggunaan narkotika/obat-obatan terlarang/alkohol oleh Narapidana/Klien Pemasyarakatan berdampak negatif pada hubungan dengan pasangannya dan/atau hubungan dengan anggota keluarga?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah penggunaan narkotika/obat-obatan terlarang/alkohol oleh Narapidana/Klien Pemasyarakatan berdampak negatif pada kesehatan dirinya?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
      ],
    },
    {
      bagian: "Hubungan Sosial",
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan melakukan tindak kriminal yang sekarang dengan teman/ rekannya?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan anggota dari kelompok/ organisasi/ grup yang melakukan aktivitas kriminal?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mempunyai teman selama di dalam Lapas/Rutan?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan mempunyai teman dan rekan yang pro-sosial?",
          jawaban: ["Ya", "Terbatas", "Tidak"],
          nilai: [0, 1, 2],
        },
      ],
    },
    {
      bagian: "Waktu Luang/ Rekreasi",
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan melibatkan diri dalam kegiatan yang konstruktif dan bermanfaat?",
          jawaban: ["Ya", "Tidak"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan memiliki terlalu banyak waktu luang?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
      ],
    },
    {
      bagian: "Manajemen Keuangan",
      list: [
        {
          pertanyaan:
            "Apakah masalah kesulitan keuangan menyebakan Narapidana/ Klien Pemasyarakatan melakukan tindak pidana yang sekarang?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan memiliki utang yang sulit dibayarkan?",
          jawaban: ["Tidak", "Ya"],
          nilai: [0, 1],
        },
        // tidak 0, ya 1
      ],
    },
    {
      bagian: "Sikap Anti-Sosial/ Pandangan terhadap Tindak Kriminal",
      list: [
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan memiliki sikap/ penilaian negatif terhadap Sistem Peradilan Pidana?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan menunjukan rasa empati terhadap korban dari kejahatannya?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan memiliki riwayat kejahatan menggunakan kekerasan dan/ atau kekerasan seksual yang berulang?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan memiliki sikap negatif terhadap rehabilitasi/ program layanan lainnya?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
        {
          pertanyaan:
            "Apakah Narapidana/ Klien Pemasyarakatan meyakini bahwa kejahatan adalah cara yang sah untuk memenuhi kebutuhan mereka?",
          jawaban: ["Ya", "Tidak"],
          nilai: [1, 0],
        },
      ],
    },
  ],
  bagianB1: [
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki sejarah melakukan kekerasan?",
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki kejahatan karena tindakan tidak bermoral?",
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki kejahatan karena kekerasan ekstremis atau terorisme?",
    "Apakah Narapidana/ Klien Pemasyarakatan menjadi korban kekerasan (termasuk kekerasan dalam rumah tangga)?",
    "Apakah Narapidana/Klien Pemasyarakatan terlibat dalam kejahatan luar biasa yang seharusnya diproses Peradilan?",
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki kejahatan karena tindakan seperti korupsi atau penipuan?",
    "Apakah Narapidana/ Klien Pemasyarakatan kesulitan dalam mengelola emosi mereka?",
    "Apakah Narapidana/Klien Pemasyarakatan terlibat dalam kejahatan rasial (contoh: kejahatan berdasarkan ras atau agama)?",
    "Apakah Narapidana/Klien Pemasyarakatan terlibat dalam kejahatan terkait dengan narkotika, seperti menyimpan, memanen, atau mengimpor?",
  ],
  bagianB2: [
    "Apakah ada ancaman terhadap Narapidana/ Klien Pemasyarakatan dari pihak ketiga?",
    "Apakah Narapidana/ Klien Pemasyarakatan berkemungkinan menjadi tunawisma setelah dibebaskan?",
    "Apakah Narapidana/Klien Pemasyarakatan memiliki masalah akomodasi/tempat tinggal (selain tunawisma)?",
    "Apakah Narapidana/ Klien Pemasyarakatan pernah dan/atau sedang menjadi target operasi oleh aparat penegak hukum?",
    "Apakah Narapidana/Klien Pemasyarakatan memiliki masalah kepatuhan terhadap pihak otoritas?",
    "Apakah Narapidana/ Klien Pemasyarakatan memiliki kemampuan bersosialisasi yang kurang baik/buruk?",
    "Apakah Narapidana/ Klien Pemasyarakatan penyandang disabilitas?",
    "Apakah Narapidana/Klien Pemasyarakatan pernah memiliki permasalahan terkait keimigrasian?",
  ],
};
