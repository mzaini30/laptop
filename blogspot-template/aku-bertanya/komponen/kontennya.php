<div class="col-span-4 sm:col-span-2">
    <?php foreach ([1, 2, 3] as $x): ?>
        <a href="/"
            class="bg-white [&_img]:w-full rounded shadow border block mb-3 last:mb-0 overflow-hidden [&>*:not(.separator)]:pb-3 [&>*:not(.separator)]:px-3 pt-3"
            hx-boost="true">
            <p class="font-bold">Ini adalah Judulnya</p>
            <p>Ini adalah bagian deskripsinya yang lumayan agak panjang. Iya kan?...</p>
            <img class="separator"
                src="https://ramenparados.com/wp-content/uploads/2022/09/frieren-anime-destacado-1000x600.jpg"
                alt="Ini gambar cover">
        </a>
    <?php endforeach ?>
</div>