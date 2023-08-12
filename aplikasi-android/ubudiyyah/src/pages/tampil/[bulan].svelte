<script>
  export let params = {};
  import TombolTambah from "../../elemen/tombol-tambah.svelte";
  import title_case from "../../function/title-case";
  import cek_jumlah_bulan from "../../function/cek-jumlah-bulan";
  import TombolJoin from "../../elemen/tombol-join.svelte"

  const banyak_tanggal = cek_jumlah_bulan(decodeURIComponent(params.bulan));
  console.log(banyak_tanggal);

  let nama = "";
  if (localStorage.nama) {
    nama = localStorage.nama;
  }

  let data = [];
  if (localStorage.data) {
    let semua_data = JSON.parse(localStorage.data);
    let semua_data_filter = semua_data.filter(
      (x) => x.bulan == decodeURIComponent(params.bulan)
    );
    data = semua_data_filter;
  }
  console.log(data);

  let gabungan = { ...data[0] };
  data.shift();
  for (let x of data) {
    delete x.bulan;
    delete x.tanggal;
    for (let [a, b] of Object.entries(x)) {
      for (let [c, d] of Object.entries(b)) {
        gabungan[a][c] += d;
      }
    }
  }
  delete gabungan.bulan;
  delete gabungan.tanggal;
  console.log(gabungan);
</script>

<div class="p-3 bg-zinc-500 min-h-screen">
  <div class="flex justify-between text-white">
    <p>{nama}</p>
    <p>{decodeURIComponent(params.bulan)}</p>
  </div>
  <div class="grid grid-cols-1 gap-3 mt-3">
    {#each Object.entries(gabungan) as [n, x]}
      <details class="rounded-xl select-none border bg-white">
        <summary class="p-3 flex justify-between cursor-pointer font-bold">
          <div>
            {title_case(n)} ({Object.entries(x).reduce(
              (total, x) => total + x[1],
              0
            )})
          </div>
          <div>
            {~~(
              ((JSON.stringify(
                Object.entries(x).reduce((total, x) => {
                  return total + x[1];
                }, 0)
              ) /
                JSON.stringify(Object.entries(x).length)) *
                100) /
              banyak_tanggal
            )}%
          </div>
        </summary>
        <div class="p-3 pt-0">
          {#each Object.entries(x) as [a, b]}
            <div>
              {title_case(a)}
              ({+b})
            </div>
            <meter value={b / banyak_tanggal} class="w-full" />
          {/each}
        </div>
      </details>
    {/each}
  </div>
  <TombolJoin></TombolJoin>
</div>
<TombolTambah />
