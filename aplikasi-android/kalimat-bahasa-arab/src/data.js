export default function () {
  let data = [
    {
      arab: "أُرِيدُ إِلَى المَدرَسَةِ",
      terjemah: "Saya ingin pergi ke sekolah.",
    },
    {
      arab: "أَنَا ذَاهِبٌ إِلَى الْمَطْعَمِ لِتَنَاوُلِ وَجْبَةِ الْغَدَاءِ",
      terjemah: "Saya pergi ke restoran untuk makan siang.",
    },
    {
      arab: "الجَوُّ جَمِيلٌ الْيَوْمِ",
      terjemah: "Cuaca sangat bagus hari ini.",
    },
    {
      arab: "شُكْرًا عَلَى مُسَاعَدَتِكَ",
      terjemah: "Terima kasih atas bantuanmu.",
    },
    {
      arab: "هَلْ تُحِبُّ السَفَرَ؟",
      terjemah: "Apakah kamu suka bepergian?",
    },
    {
      arab: "أَنَا أَحْبُّ الْقِرَاءَةَ",
      terjemah: "Saya suka membaca.",
    },
    {
      arab: "هَلْ يُمْكِنُنِي مُسَاعَدَتُكَ؟",
      terjemah: "Bisakah saya membantu Anda?",
    },
    {
      arab: "الْمَرْحَبَا",
      terjemah: "Selamat datang.",
    },
    {
      arab: "هَلْ لَدَيْكَ سُؤَالٌ؟",
      terjemah: "Apakah kamu punya pertanyaan?",
    },
    {
      arab: "عِيد مِيلَاد سَعِيد!",
      terjemah: "Selamat ulang tahun!",
    },
    {
      arab: "هَلْ يُمْكِنُنِي الْحُصُولُ عَلَى الْفَاتُورَةِ، مِن فَضْلِكَ؟",
      terjemah: "Bisakah saya mendapatkan tagihannya, tolong?",
    },
    {
      arab: "أَنَا مَشْغُوْلٌ الْيَوْمِ، وَلَكِنَّنَا يُمْكِنُ أَنْ نَتَحَدَثَ غَدًا",
      terjemah: "Saya sibuk hari ini, tapi kita bisa bicara besok.",
    },
    {
      arab: "هَلْ يُمْكِنُنِي الْحُصُولُ عَلَى كَوْبٍ مِنْ الْقَهْوَةِ؟",
      terjemah: "Bisakah saya mendapatkan secangkir kopi?",
    },
    {
      arab: "أَنَا أُحِبُّ السَفَرَ وَاِسْتِكْشَافَ الْعَالَمِ",
      terjemah: "Saya suka bepergian dan menjelajahi dunia.",
    },
    {
      arab: "هَلْ تَسْتَطِيْعُ تَوْجِيْهِيْ إِلَى الْمُسْتَشْفَى؟",
      terjemah: "Bisakah kamu memberi petunjuk saya ke rumah sakit?",
    },
    {
      arab: "أَنَا أُحِبُّ مُشَاهَدَةَ الْأَفْلَامِ فِي السِّيْنِمَا",
      terjemah: "Saya suka menonton film di bioskop.",
    },
    {
      arab: "كَمْ السَّاعَةُ الْآنَ؟",
      terjemah: "Jam berapa sekarang?",
    },
    {
      arab: "أَنَا أَتَعَلَّمُ اللُّغَةَ الإِنْجْلِيزِيَّةَ",
      terjemah: "Saya sedang belajar bahasa Inggris.",
    },
  ];
  let data2 = [
    {
      arab: "الصداقة هي كنز نفيه لا يفنى",
      terjemah: "Persahabatan adalah harta yang tak ternilai.",
    },
    {
      arab: "العمل الجاد يؤدي إلى النجاح",
      terjemah: "Kerja keras membawa kepada kesuksesan.",
    },
    {
      arab: "الابتسامة هي لغة القلب",
      terjemah: "Senyuman adalah bahasa hati.",
    },
    {
      arab: "التعليم هو مفتاح المستقبل",
      terjemah: "Pendidikan adalah kunci masa depan.",
    },
    {
      arab: "الصدق هو أساس أي علاقة قوية",
      terjemah: "Kejujuran adalah dasar hubungan yang kuat.",
    },
    {
      arab: "الوقت من ذهب",
      terjemah: "Waktu adalah emas.",
    },
    {
      arab: "الصبر مفتاح الفلاح",
      terjemah: "Sabar adalah kunci keberhasilan.",
    },
    {
      arab: "العلم نور",
      terjemah: "Ilmu adalah cahaya.",
    },
    {
      arab: "الصحة هي أغلى نعمة",
      terjemah: "Kesehatan adalah nikmat yang paling berharga.",
    },
    {
      arab: "الحياة قصيرة، لذا استمتع بها",
      terjemah: "Hidup singkat, jadi nikmatilah.",
    },
    {
      arab: "العائلة هي أهم شيء في العالم",
      terjemah: "Keluarga adalah yang terpenting di dunia.",
    },
    {
      arab: "الحب هو لغة تفهمها القلوب",
      terjemah: "Cinta adalah bahasa yang dipahami oleh hati.",
    },
    {
      arab: "السلام هو هدفنا جميعًا",
      terjemah: "Kedamaian adalah tujuan kita semua.",
    },
    {
      arab: "الإخلاص هو مفتاح النجاح",
      terjemah: "Kesetiaan adalah kunci kesuksesan.",
    },
    {
      arab: "القراءة توسع آفاق العقل",
      terjemah: "Membaca melebarkan cakrawala pikiran.",
    },
    {
      arab: "العمل الجماعي ينجح دائمًا",
      terjemah: "Kerja tim selalu berhasil.",
    },
    {
      arab: "العلم يجعل العالم أفضل",
      terjemah: "Ilmu membuat dunia menjadi lebih baik.",
    },
    {
      arab: "السعادة تأتي من الداخل",
      terjemah: "Kebahagiaan berasal dari dalam.",
    },
    {
      arab: "الاحترام هو مفتاح العلاقات الجيدة",
      terjemah: "Hormat adalah kunci hubungan yang baik.",
    },
    {
      arab: "العقلية الإيجابية تجلب النجاح",
      terjemah: "Pikiran positif membawa kesuksesan.",
    },
  ];
  let data3 = [
    {
      arab: "التعلم مفتاح النجاح",
      terjemah: "Belajar adalah kunci kesuksesan.",
    },
    {
      arab: "الصداقة تزدهر مع الوقت",
      terjemah: "Persahabatan tumbuh dengan waktu.",
    },
    {
      arab: "السفر يفتح آفاقًا جديدة",
      terjemah: "Mengembara membuka jalan baru.",
    },
    {
      arab: "العمل الجماعي يقود إلى الإنجاز",
      terjemah: "Kerja sama tim menghasilkan prestasi.",
    },
    {
      arab: "التفاؤل يجلب النجاح",
      terjemah: "Optimisme membawa kesuksesan.",
    },
    {
      arab: "الصحة النفسية مهمة جدًا",
      terjemah: "Kesehatan mental sangat penting.",
    },
    {
      arab: "الثقة بالنفس تساعدك على التفوق",
      terjemah: "Percaya diri membantu Anda meraih kesuksesan.",
    },
    {
      arab: "النجاح يأتي لأولئك الذين يصممون على تحقيقه",
      terjemah: "Kesuksesan datang bagi mereka yang tekad untuk meraihnya.",
    },
    {
      arab: "العقل الهادئ يفكر بوضوح",
      terjemah: "Pikiran yang tenang berpikir dengan jelas.",
    },
    {
      arab: "العطاء يثري الروح",
      terjemah: "Memberi memperkaya jiwa.",
    },
    {
      arab: "التواضع يجلب الاحترام",
      terjemah: "Kerendahan hati mendatangkan penghargaan.",
    },
    {
      arab: "العمل الجاد يؤتي ثماره",
      terjemah: "Kerja keras membuahkan hasil.",
    },
    {
      arab: "الصدق هو أساس أي علاقة ناجحة",
      terjemah: "Kejujuran adalah dasar setiap hubungan yang sukses.",
    },
    {
      arab: "الابتسامة تنقل السعادة",
      terjemah: "Senyuman membawa kebahagiaan.",
    },
    {
      arab: "التخطيط يقود إلى النجاح",
      terjemah: "Perencanaan membawa kepada kesuksesan.",
    },
    {
      arab: "العائلة هي ملجأ القلب",
      terjemah: "Keluarga adalah tempat hati berlindung.",
    },
    {
      arab: "الإصرار يتغلب على الصعاب",
      terjemah: "Keberanian mengatasi kesulitan.",
    },
    {
      arab: "السعادة هي حق الإنسان",
      terjemah: "Kebahagiaan adalah hak setiap manusia.",
    },
    {
      arab: "التفكير الإيجابي يغير العالم",
      terjemah: "Pemikiran positif mengubah dunia.",
    },
    {
      arab: "التواضع يجعلك عظيمًا",
      terjemah: "Kerendahan hati membuatmu hebat.",
    },
  ];

  return [...data, ...data2, ...data3];
}
