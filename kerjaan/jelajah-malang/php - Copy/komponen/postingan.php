<style>
  /* <![CDATA[ */


  .kotak-list-konten {
    box-shadow: 10px 10px 0 0 rgb(249 115 22);
  }

  /* ]]> */
</style>

<?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>

<b:section id="konten">
  <b:widget type="Blog" id="Blog1"></b:widget>
</b:section>

<div hx-boost="true" class="gap-5 grid grid-cols-1">
  <?php foreach ([1, 2, 3, 4, 5] as $x): ?>
    <a href="/" class="kotak-list-konten flex  border overflow-hidden rounded-xl border-orange-500">
      <img class="w-[150px] aspect-square object-cover" src="<?= $gambar_1 ?>" alt="" />
      <div class="ringkasan-konten p-5">
        <h2 class="font-bold text-lg">Hello World</h2>
        <p>Ini adalah isinya...</p>
      </div>
    </a>
  <?php endforeach ?>
</div>