@section('title', 'Program Unggulan Madrasah Baitul Izzah')

<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <livewire:navbar />
    <?php $data_program = [['foto' => '/gambar/percakapan.jpeg', 'judul' => 'Bahasa Arab', 'keterangan' => 'Percakapan bahasa Arab sehari-hari'], ['foto' => '/gambar/camping.jpeg', 'judul' => 'Kegiatan Fisik', 'keterangan' => 'Berenang, memanah, dan bermain bola'], ['foto' => '/gambar/komputer.jpeg', 'judul' => 'Keterampilan Komputer', 'keterangan' => 'Menguasai dasar-dasar mengetik 10 jari dan Microsoft Office'], ['foto' => '/gambar/belajar.jpg', 'judul' => 'Pelajaran Diniyah', 'keterangan' => 'Membekali santri dengan ilmu-ilmu agama'], ['foto' => '/gambar/murojaah.jpg', 'judul' => 'Tahfidz Quran', 'keterangan' => 'Menghapal Quran dalam waktu 3 tahun dengan fokus pada kelancaran hapalan']]; ?>
    <div class="px-[10%] py-[7.5rem] grid grid-cols-1 sm:grid-cols-2 gap-5">
        <?php foreach($data_program as $x): ?>
        <div class="bg-white flex w-full shadow border rounded overflow-hidden">
            <img src="<?= $x['foto'] ?>" class="w-40 aspect-square object-cover" alt="">
            <div class="p-3 flex items-center">
                <div>
                    <p class="font-bold text-xl pb-2">
                        <?= $x['judul'] ?>
                    </p>
                    <p>
                        <?= $x['keterangan'] ?>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    <livewire:footer />
</div>
