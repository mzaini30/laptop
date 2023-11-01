<script>
  import { push } from "svelte-spa-router";
  import toast from "only-toast";

  let halaman_terbaru = "";
  let halaman_terakhir = 1;
  let semua_data = []; // terbaru = paling atas (tanggal, banyaknya)

  if (localStorage.semua_data) {
    semua_data = JSON.parse(localStorage.semua_data);
  }

  let tanggalan = new Date();
  //   tanggalan = new Date("2023-09-15");
  let tanggal = tanggalan.getDate();

  if (localStorage.halaman_terakhir) {
    halaman_terakhir = JSON.parse(localStorage.halaman_terakhir);
  }

  function tambahkan_baru() {
    let selisih = hitungSelisihHalaman(halaman_terbaru, halaman_terakhir);
    if (selisih == "Halaman tidak valid") {
      toast("Halaman tidak valid");
      halaman_terbaru = "";
    } else {
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
        }
      }
      localStorage.semua_data = JSON.stringify(semua_data);
      localStorage.halaman_terakhir = JSON.stringify(halaman_terbaru);
      push("/");
    }
  }

  function hitungSelisihHalaman(halamanSekarang, halamanSebelumnya) {
    const jumlahHalaman = 604;

    // Pastikan input berada dalam rentang yang valid
    if (
      +halamanSekarang < 1 ||
      +halamanSekarang > jumlahHalaman ||
      +halamanSebelumnya < 1 ||
      +halamanSebelumnya > jumlahHalaman
    ) {
      return "Halaman tidak valid";
    }

    // Hitung selisih halaman
    let selisihHalaman;
    if (+halamanSekarang >= +halamanSebelumnya) {
      selisihHalaman = +halamanSekarang - +halamanSebelumnya;
    } else {
      selisihHalaman = jumlahHalaman - +halamanSebelumnya + +halamanSekarang;
    }

    return selisihHalaman;
  }
</script>

<div class="p-3">
  <form action="" on:submit|preventDefault={tambahkan_baru}>
    <div class="card card-compact w-full bg-base-100 shadow-xl">
      <div class="card-body">
        <div class="form-control w-full">
          <label class="label">
            <span class="label-text">Halaman Terbaru</span>
          </label>
          <input
            type="tel"
            bind:value={halaman_terbaru}
            required
            placeholder="Sebelumnya: Halaman {halaman_terakhir}"
            class="input input-bordered w-full"
          />
        </div>
        <div class="card-actions justify-end">
          <button class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </form>
</div>
