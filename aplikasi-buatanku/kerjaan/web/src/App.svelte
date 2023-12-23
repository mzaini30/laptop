<script>
  let data = [];

  if (localStorage.data) {
    data = JSON.parse(localStorage.data);
  }

  window.addEventListener("keydown", (x) => {
    console.log(x);
    if (x.key == "F2") {
      tambah();
    }
  });

  function tambah() {
    let tanya = prompt("Apa kerjaan yang baru lagi:");
    if (tanya) {
      data = [...data, tanya];
      localStorage.data = JSON.stringify(data);
    }
  }

  function tunda() {
    data = [...data.slice(1), data[0]];
    localStorage.data = JSON.stringify(data);
  }
  function selesai() {
    data = [...data.slice(1)];
    localStorage.data = JSON.stringify(data);
  }
</script>

<div class="p-3">
  <button on:click={tambah} class="bg-green-500 rounded text-white px-4 py-2"
    >Tambah (F2)</button
  >
  <div class="grid grid-cols-4 gap-3 mt-3">
    {#each data as x, n}
      <div class="border rounded shadow p-3">
        {x}
        {#if n == 0}
          <div
            class="flex justify-between mt-3 text-gray-500 [&_button]:uppercase text-sm"
          >
            <button on:click={tunda}>Tunda</button><button on:click={selesai}
              >Selesai</button
            >
          </div>
        {/if}
      </div>
    {/each}
  </div>
</div>
