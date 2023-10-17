<script>
  import iklan from "../gambar/Jasa perbaikan website.png";

  let persentase = 1;
  let harga;
</script>

<div
  class="p-2 grid grid-rows-1 gap-2 focus:[&_input]:(outline-none border-orange-500) [&_input]:(w-full p-1 block border-green-500 border)"
>
  <p>Harga Saat Ini</p>
  <input bind:value={harga} type="tel" name="" id="" />
  <p>Persentase</p>
  <div class="grid grid-cols-5 gap-2">
    {#each Array(5) as x, n}
      <button
        class="text-red-700 bg-orange-100 border border-orange-500 rounded"
        on:click={() => (persentase = +n + 1)}>{+n + 1}</button
      >
    {/each}
  </div>
  <p class="text-green-700">Take Profit {persentase}%</p>
  <input
    type="text"
    value={((harga * (100 + persentase)) / 100 || 0).toLocaleString()}
    readonly
  />
  <p class="text-red-700">Stop Loss {persentase}%</p>
  <input
    type="text"
    value={((harga * (100 - persentase)) / 100 || 0).toLocaleString()}
    readonly
  />
  <img src={iklan} class="w-full" alt="" />
</div>
