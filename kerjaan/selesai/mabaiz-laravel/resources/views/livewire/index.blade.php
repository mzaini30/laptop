@section('title', 'Madrasah Baitul Izzah')
@section('head')
    <script src="/js/dotlottie-player.js" type="module"></script>
@endsection

<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <livewire:navbar />
    <div class="grid grid-cols-12 ">
        <div class="col-span-12 sm:col-span-5">

            <div class="w-full h-screen relative aplikasi-lottie" x-data="{ tampil_video: false }">
                <img class="w-full h-screen object-cover opacity-30 absolute top-0" src="/gambar/murojaah.jpg"
                    alt="">
                <div class="absolute w-full h-screen top-0 p-10 flex items-center">
                    <div>
                        <p class="text-blue-800 text-5xl leading-[1.15] mb-10 font-bold">Madrasah Tahfidz Quran dan
                            Bahasa Arab
                        </p>
                        <livewire:tombol-pendaftaran />
                    </div>
                </div>

                <?php $ukuran_lottie_play = '100'; ?>
                <div class="z-[9] absolute right-[calc(50vw-50px)] sm:-right-[50px] top-[50vh] cursor-pointer"
                    @click="tampil_video = true">
                    <dotlottie-player autoplay loop mode="normal" src="/komponen/tombol-play.lottie"
                        style="width:<?= $ukuran_lottie_play ?>px;height:<?= $ukuran_lottie_play ?>px"></dotlottie-player>
                </div>
                <template x-if="tampil_video == true">
                    <div>
                        <div class="latar fixed w-full h-screen bg-black/50 top-0 left-0 z-[998] cursor-pointer"
                            @click="tampil_video = false"></div>
                        <div class="video-youtube fixed top-[calc(50vh-157px)] left-[calc(50vw-280px)] z-[999]">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/XuaOT2WgwLc?si=OveIclHqVQL39twT?&autoplay=1"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </template>

            </div>
        </div>
        <div class="col-span-12 sm:col-span-7 hidden sm:block">
            <img src="/gambar/wisuda.jpg" class="w-full h-screen object-cover" alt="">
        </div>
    </div>
    <div class="py-4 px-[5%] grid grid-cols-1 sm:grid-cols-2 gap-5">
        <img src="/gambar/setoran-berpasangan.jpg" class="w-full h-auto rounded shadow" alt="">
        <div class="flex items-center">
            <div
                class="[&_h2]:text-5xl [&_h3]:text-2xl [&>*]:mb-3 last:[&>*]:mb-0 [&_h2,h3]:text-blue-800 [&_h2,h3]:pt-5">
                <h2>Visi & Misi</h2>
                <h3>Visi</h3>
                <p>Terbentuknya Generasi Qur’ani yang berilmu dan beradab calon pemimpin bangsa.</p>

                <h3>Misi</h3>
                <p>1. Menanamkan adab dan nilai-nilai al-Qur’an dalam semua aspek kehidupan.</p>
                <p>2. Mencetak Hafidz Al-Qur’an yang berpegang teguh kepada al-Qur’an dan as-Sunnah.</p>
                <p>3. Mewujudkan Lembaga Tahfidz yang menjawab tantangan zaman.</p>
            </div>
        </div>
    </div>
    <img src="/gambar/angkatan-pertama.png" class="w-full h-auto" alt="">
    <livewire:footer />
</div>
