<div class="contents [&+*]:-mt-12   bagian-menu ">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="w-full bg-blue-300 text-white p-10 flex justify-between" id="bagian-kepala-navbar" hx-preserve="true">
        <a href="/" wire:navigate class=" flex items-center" hx-boost="true">
            <img src="/gambar/mabaiz.png" class="w-[60px]" alt="">
        </a>
        <div class="flex items-center">
            <livewire:tombol-pendaftaran />
        </div>
    </div>
    <?php $linknya = [['nama' => 'Beranda', 'link' => '/'], ['nama' => 'Program', 'link' => '/program'], ['nama' => 'Lokasi', 'link' => '/lokasi']]; ?>
    <center class="z-[10] sticky top-10 " id="bagian-menu" hx-preserve="true">
        <div hx-boost="true" class="bg-white rounded shadow border p-5 -mt-[7.5rem] inline-block px-[3.75rem] ">
            <div class="flex gap-7 flex-col sm:flex-row font-bold mainan-vue" x-data="{
                toggle: false,
                balik_toggle() {
                    this.toggle = !this.toggle;
                    if (this.toggle == true) {
                        document.querySelector(`.bagian-menu + *`).style.marginTop = `-12.8rem`;
                    } else {
                        document.querySelector(`.bagian-menu + *`).style.marginTop = `-3rem`;
                    }
                }
            }">
                <a class="cursor-pointer sm:hidden hover:underline  hover:underline-offset-5 hover:decoration-3"
                    @click.prevent="balik_toggle">
                    <template x-if="toggle"><span>Close Menu</span></template>
                    <template x-if="!toggle"><span>Open Menu</span></template>
                </a>

                <!-- menu mobile -->
                <template x-if="toggle">
                    <span class="flex gap-7 flex-col sm:flex-row font-bold">
                        <?php foreach($linknya as $x): ?>
                        <a href="<?= $x['link'] ?>" wire:navigate
                            class=" hover:underline block  hover:underline-offset-5 hover:decoration-3">
                            <?= $x['nama'] ?>
                        </a>
                        <?php endforeach ?>
                    </span>
                </template>

                <?php foreach($linknya as $x): ?>
                <a href="<?= $x['link'] ?>" wire:navigate
                    class="hidden sm:block hover:underline  hover:underline-offset-5 hover:decoration-3">
                    <?= $x['nama'] ?>
                </a>
                <?php endforeach ?>
            </div>
            {{-- <script>
                htmx.onLoad(() => {
                    PetiteVue.createApp({
                        toggle: false,
                        balik_toggle() {
                            this.toggle = !this.toggle;
                            if (this.toggle == true) {
                                document.querySelector(".bagian-menu + *").style.marginTop = "-16rem";
                            } else {
                                document.querySelector(".bagian-menu + *").style.marginTop = "-3rem";
                            }
                        }
                    }).mount(".mainan-vue");
                });
            </script> --}}
        </div>
    </center>
</div>
