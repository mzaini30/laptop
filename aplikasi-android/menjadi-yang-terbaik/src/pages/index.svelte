<script>
  import Chartnya from "../komponen/chart.svelte";
  import { push } from "svelte-spa-router";

  let reset = false;

  let listnya = [];
  if (localStorage.listnya) {
    listnya = JSON.parse(localStorage.listnya);
  } else {
    localStorage.listnya = JSON.stringify([]);
  }

  function tambahkan(id, selisih) {
    let listnya = JSON.parse(localStorage.listnya);
    let terpilih = listnya.find((x) => x.id == id);
    console.log("terpilih");
    console.log(terpilih);

    let tanggalan = new Date();
    // tanggalan = new Date("2023-09-29");
    let tanggal = tanggalan.getDate();

    let semua_data = terpilih.data;
    console.log("semua_data");
    console.log(semua_data);
    if (
      semua_data.length > 0 &&
      semua_data[semua_data.length - 1].tanggal == tanggal
    ) {
      semua_data[semua_data.length - 1].banyaknya += selisih;
    } else {
      if (semua_data.length > 0) {
        let cek_tanggal_terakhir = semua_data[semua_data.length - 1].tanggal;
        let sisipan_tanggal = [];
        if (
          tanggal - cek_tanggal_terakhir > 1 &&
          cek_tanggal_terakhir != 28 &&
          cek_tanggal_terakhir != 29 &&
          cek_tanggal_terakhir != 30 &&
          cek_tanggal_terakhir != 31
        ) {
          let selisih_tanggal = tanggal - cek_tanggal_terakhir;
          for (let n = 1; n < selisih_tanggal; n++) {
            sisipan_tanggal = [
              ...sisipan_tanggal,
              {
                tanggal: +cek_tanggal_terakhir + +n,
                banyaknya: 0,
              },
            ];
          }
        }
        semua_data = [
          ...semua_data,
          ...sisipan_tanggal,
          {
            tanggal,
            banyaknya: selisih,
          },
        ];
      } else {
        semua_data = [
          {
            tanggal,
            banyaknya: selisih,
          },
        ];
        console.log("di sini");
      }
    }
    terpilih.data = semua_data;
    console.log(listnya);
    reset = !reset;
    // listnya = [...listnya];
    localStorage.listnya = JSON.stringify(listnya);
  }

  // let halaman_terakhir = 1;
  // let semua_data = []; // terbaru = paling atas (tanggal, banyaknya)

  // if (localStorage.halaman_terakhir) {
  //   halaman_terakhir = JSON.parse(localStorage.halaman_terakhir);
  // }
  // if (localStorage.semua_data) {
  //   semua_data = JSON.parse(localStorage.semua_data);
  // }
</script>

<div class="p-3 grid grid-cols-1 gap-3">
  <div>
    <button class="btn" on:click={() => push("/edit-list")}>Edit List</button>
  </div>
  {#key reset}
    {#each [...JSON.parse(localStorage.listnya)].sort( (a, b) => (a.judul > b.judul ? 1 : -1), ) as x (x.id)}
      <div class="bg-neutral">
        <Chartnya semua_data={x.data}></Chartnya>
      </div>
      <div class="card card-compact w-full bg-neutral shadow-xl">
        <div class="card-body">
          <h2 class="card-title text-center block">{x.judul}</h2>
          <div class="flex justify-between">
            <button
              class="btn btn-circle"
              on:click={() => {
                tambahkan(x.id, -1);
              }}>➖</button
            >
            <button>
              {#if x.data.length > 0 && x.data[x.data.length - 1].tanggal == new Date().getDate()}
                {x.data[x.data.length - 1].banyaknya}
              {:else}
                0
              {/if}
            </button>
            <button class="btn btn-circle" on:click={() => tambahkan(x.id, 1)}
              >➕</button
            >
          </div>
        </div>
      </div>
    {/each}
  {/key}
</div>
