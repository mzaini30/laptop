<div class="p-4">
  <div class="mb-4 flex justify-between">
    <a
      href="https://play.google.com/store/apps/details?id=com.belajar.iqroterbaru"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <div class=" grid grid-cols-2 gap-3">
    {#each Array.from({ length: 6 }, (x, n) => n + 1) as z}
      <a
        href="#/ringkasan-iqro/{z}"
        class="btn text-3xl btn-circle w-full h-[calc(50vw-30px)]">{z}</a
      >
    {/each}
  </div>
</div>
