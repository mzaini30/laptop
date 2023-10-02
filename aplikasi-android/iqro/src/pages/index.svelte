<div class="p-4">
  <div class=" grid grid-cols-2 gap-3">
    {#each Array.from({ length: 6 }, (x, n) => n + 1) as z}
      <a
        href="#/ringkasan-iqro/{z}"
        class="btn text-3xl btn-circle w-full h-[calc(50vw-20px)]">{z}</a
      >
    {/each}
  </div>
</div>
