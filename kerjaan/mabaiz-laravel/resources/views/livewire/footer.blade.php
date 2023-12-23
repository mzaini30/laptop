<div>
    {{-- Success is as dangerous as failure. --}}
    <div id="bagian-footer" hx-preserve="true"
        class="p-10 sm:p-[7.5rem] gap-5 bg-blue-200 text-blue-900 grid grid-cols-1 sm:grid-cols-4 [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:pb-5">
        <img src="/gambar/mabaiz.png" class="w-[60px] h-auto" alt="">
        <div>
            <h2>Pilihan Menu</h2>
            <?php $linknya = [['nama' => 'Dashboard', 'link' => '/dashboard']]; ?>
            <?php foreach($linknya as $x): ?>
            <p><a class="hover:text-black hover:pl-3 duration-100" hx-boost="true" href="<?= $x['link'] ?>">
                    >
                    <?= $x['nama'] ?>
                </a></p>
            <?php endforeach ?>
        </div>
        <div>
            <h2>Kontak</h2>
            <p>Humas - +62 822-5130-3132</p>
        </div>
        <div>
            <h2>Alamat</h2>
            <p>Gang Kaganangan, Jalan Padat Karya, Samarinda</p>
        </div>
    </div>
</div>
