<script>
  let sumber =
    "https://raw.githack.com/mzaini30/sinyal-trading/master/data.json";

  let data = [];

  if (localStorage.data_crypto) {
    data = JSON.parse(localStorage.data_crypto);
  }

  async function dapatkan_data() {
    let ambil = await fetch(sumber);
    ambil = await ambil.json();
    data = ambil;
    localStorage.data_crypto = JSON.stringify(ambil);
  }
  dapatkan_data();
</script>

<div class="p-5 grid grid-cols-1 gap-5">
  {#if data.length > 0}
    {#each data.reverse() as x}
      <div class="border-2 border-gray-300 p-5">
        <div class="mb-4">
          <div class="text-[40px]">{x.coin}</div>
          <div class="text-[12px]">{x.tanggal}</div>
        </div>
        <div class="flex justify-between [&>*]:text-[30px]">
          <div class="text-red-600">-{x.stop_loss}</div>
          <div class="text-green-600">+{x.take_profit}</div>
        </div>
      </div>
    {/each}
  {/if}
</div>
