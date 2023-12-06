<div class="col-span-1 hidden sm:block">
    <?php foreach ([1, 2, 3, 4] as $x): ?>
        <div class="rounded mb-3 last:mb-0 bordered overflow-hidden last:sticky last:top-20 shadow bg-white">
            <?php foreach ([1, 2, 3, 4, 5] as $y): ?>
                <a href="/" hx-boost="true" class="block p-2 text-sm border-b last:border-b-none">Mengapa Bumi Ini Berwarna
                    Biru, Nggak Hijau
                    Aja?</a>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
</div>