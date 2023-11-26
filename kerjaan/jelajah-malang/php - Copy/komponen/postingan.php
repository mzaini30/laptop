<style>
  /* <![CDATA[ */


  .kotak-list-konten {
    box-shadow: 10px 10px 0 0 rgb(249 115 22);
  }

  /* ]]> */
</style>

<div hx-boost="true" class="gap-5 grid grid-cols-1">
  <?php foreach ([1, 2, 3, 4, 5] as $x): ?>
    <a href="/" class="kotak-list-konten flex  border overflow-hidden rounded-xl border-orange-500">
      <img class="w-[150px] aspect-square object-cover" src="/gambar-lainnya/1.jpg" alt="" />
      <div class="ringkasan-konten p-5">
        <h2 class="font-bold text-lg">Hello World</h2>
        <p>Ini adalah isinya...</p>
      </div>
    </a>
  <?php endforeach ?>
</div>