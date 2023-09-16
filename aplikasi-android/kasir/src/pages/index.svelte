<script>
  let hasil_pencarian = [];
  let teks_cari = "";

  let total = 0;

  function dapatkan_total() {
    let jumlahnya = 0;
    for (let x of list_pembelian) {
      jumlahnya += x.harga_jual * x.banyak;
    }
    total = jumlahnya;
  }
  $: if (list_pembelian) {
    dapatkan_total();
  }

  let semua_data = [];
  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }

  let list_pembelian = []; // id_transaksi, nama_barang, harga_beli, harga_jual, banyak (1)
  if (localStorage.list_pembelian) {
    list_pembelian = JSON.parse(localStorage.list_pembelian);
  }

  function tambahkan_ke_list_pembelian(nama_barang, harga_beli, harga_jual) {
    let sudah_ada = false;
    for (let x of list_pembelian) {
      if (x.nama_barang == nama_barang) {
        sudah_ada = true;
      }
    }
    if (sudah_ada == false) {
      list_pembelian = [
        ...list_pembelian,
        {
          id_transaksi: crypto.randomUUID(),
          nama_barang,
          harga_beli,
          harga_jual,
          banyak: 1,
        },
      ];
    } else {
      let dapatkan_banyak = [...list_pembelian].filter(
        (x) => x.nama_barang == nama_barang,
      )[0].banyak;
      let data_baru = {
        id_transaksi: crypto.randomUUID(),
        nama_barang,
        harga_beli,
        harga_jual,
        banyak: +dapatkan_banyak + 1,
      };
      let data_terfilter = [...list_pembelian].filter(
        (x) => x.nama_barang != nama_barang,
      );
      list_pembelian = [...data_terfilter, data_baru];
    }
    localStorage.list_pembelian = JSON.stringify(list_pembelian);
  }
</script>

<input
  type="search"
  bind:value={teks_cari}
  placeholder="Nama barang"
  class="input input-bordered block w-full"
/>
<div class="grid grid-cols-2 gap-2">
  <div>
    <div class="form-control mt-2 w-full">
      <label class="label">
        <span class="label-text">Hasil Pencarian</span>
      </label>
      <ul class="menu bg-base-200 w-full rounded-box">
        {#each semua_data.filter((y) => y.nama_barang
            .toLowerCase()
            .includes(teks_cari.toLowerCase())) as x}
          <li>
            <a
              class=""
              href="#/"
              on:click|preventDefault={() =>
                tambahkan_ke_list_pembelian(
                  x.nama_barang,
                  x.harga_beli,
                  x.harga_jual,
                )}
            >
              <span>{x.nama_barang}</span>
              <span class="badge">{(+x.harga_jual).toLocaleString()} ➡️</span>
            </a>
          </li>
        {/each}
      </ul>
    </div>
  </div>
  <div>
    <p class="[&>*]:text-xl btn mt-2 flex justify-between">
      <span>Total</span>
      <span>{total.toLocaleString()}</span>
    </p>
    <div class="form-control w-full">
      <label class="label">
        <span class="label-text">List Pembelian</span>
      </label>
      <ul class="menu bg-base-200 w-full rounded-box">
        {#each list_pembelian.sort( (a, b) => (a.nama_barang > b.nama_barang ? 1 : -1), ) as x}
          <li>
            <a class="" href="#/edit-keranjang/{x.id_transaksi}">
              <span>{x.nama_barang} ({x.banyak})</span>
              <span class="badge">{(+x.harga_jual).toLocaleString()}</span>
            </a>
          </li>
        {/each}
      </ul>
    </div>
  </div>
</div>
<button class="btn fixed bottom-3 right-3">Simpan</button>
