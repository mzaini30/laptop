<script>
  import toast from "only-toast";
  import flatpickr from "flatpickr";
  import { onMount } from "svelte";
  import "flatpickr/dist/flatpickr.min.css";

  let dateInput;
  let tanggal_baru;

  onMount(() => {
    flatpickr(dateInput, {
      dateFormat: "Y-m-d", // Sesuaikan dengan format yang Anda inginkan
    });
  });

  let hasil_pencarian = [];
  let teks_cari = "";

  let total = 0;
  let input_tanggal;

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
          tanggal,
          bulan,
          tahun,
          keuntungan: harga_jual - harga_beli,
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
        tanggal,
        bulan,
        tahun,
        keuntungan: (harga_jual - harga_beli) * (+dapatkan_banyak + 1),
      };
      let data_terfilter = [...list_pembelian].filter(
        (x) => x.nama_barang != nama_barang,
      );
      list_pembelian = [...data_terfilter, data_baru];
    }
    localStorage.list_pembelian = JSON.stringify(list_pembelian);
  }

  let tanggalan = new Date();
  let list_bulan = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember",
  ];
  let tanggal = `${tanggalan.getDate()} ${
    list_bulan[tanggalan.getMonth()]
  } ${tanggalan.getFullYear()}`;
  let bulan = `${list_bulan[tanggalan.getMonth()]} ${tanggalan.getFullYear()}`;
  let tahun = tanggalan.getFullYear();

  let data_tersimpan = [];
  if (localStorage.data_tersimpan) {
    data_tersimpan = JSON.parse(localStorage.data_tersimpan); // id, keuntungan, tanggal, bulan, tahun
  }

  function simpan() {
    data_tersimpan = [
      // {
      //   id: crypto.randomUUID(),
      //   keuntungan: total,
      //   tanggal,
      //   bulan,
      //   tahun,
      // },
      ...list_pembelian,
      ...data_tersimpan,
    ];
    localStorage.data_tersimpan = JSON.stringify(data_tersimpan);
    localStorage.removeItem("list_pembelian");
    list_pembelian = [];
    toast("Transaksi tersimpan");
  }

  function reset() {
    list_pembelian = [];
    localStorage.removeItem("list_pembelian");
  }

  $: if (tanggal_baru) {
    mengubah_tanggal();
  }

  function mengubah_tanggal() {
    tanggalan = new Date(tanggal_baru);

    tanggal = `${tanggalan.getDate()} ${
      list_bulan[tanggalan.getMonth()]
    } ${tanggalan.getFullYear()}`;
    bulan = `${list_bulan[tanggalan.getMonth()]} ${tanggalan.getFullYear()}`;
    tahun = tanggalan.getFullYear();

    for (let n in list_pembelian) {
      list_pembelian[n].tanggal = tanggal;
      list_pembelian[n].bulan = bulan;
      list_pembelian[n].tahun = tahun;
    }
    localStorage.list_pembelian = JSON.stringify(list_pembelian);
  }
</script>

<!-- {tanggal_baru}
{JSON.stringify(list_pembelian)} -->

<input
  type="search"
  bind:value={teks_cari}
  placeholder="Nama barang"
  class="input input-bordered block w-full"
/>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
  <div>
    <div class="form-control mt-2 w-full">
      <label class="label">
        <span class="label-text">Hasil Pencarian</span>
      </label>
      <div class="overflow-auto h-[calc(100vh-120px)]">
        <ul class="menu bg-base-200 w-full">
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
  </div>
  <div>
    <p class="[&>*]:text-xl btn mt-2 flex justify-between">
      <span>Total</span>
      <span>{total.toLocaleString()}</span>
    </p>
    <div class="form-control w-full">
      <label class="label">
        <span class="label-text">List Penjualan</span>
        <input
          type="date"
          bind:this={dateInput}
          bind:value={tanggal_baru}
          class="w-0 h-0 overflow-hidden"
          name=""
          id=""
        />
        <span
          class="label-text cursor-pointer"
          on:click={() => dateInput.click()}>{tanggal} ( Ubah )</span
        >
        <span class="label-text cursor-pointer" on:click|preventDefault={reset}
          >( Reset )</span
        >
      </label>
      <div class="overflow-auto h-[calc(100vh-170px)]">
        <ul class="menu bg-base-200 w-full">
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
</div>
<div class="fixed bottom-3 right-3">
  <button class="btn btn-success" on:click={simpan}>Simpan</button>
</div>
