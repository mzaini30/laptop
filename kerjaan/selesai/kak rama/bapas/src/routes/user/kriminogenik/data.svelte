<script>
  import "./_laporan.css";
  import { rri } from "$lib/rri";
  import { kriminogenik } from "$lib/kriminogenik";

  import Table from "./Table.svelte";
  import { dataTampil } from "./storeDataTampil";
  import B1 from "./data/B1.svelte";
  import B2 from "./data/B2.svelte";

  // const contohData = {"rriBagianA":[0,1,0,1,0,1,0,1,0,1],"rriBagianB":[1,0,0,1],"rriBagianC":[],"rriBagianD":[],"kriminogenikB1":[0,1,0,1,0,1,0,0,1],"kriminogenikB2":[0,1,0,1,1,0,1,0,1],"alasan":"Awal","keterangan":"Penelitian Kemasyarakatan Pembimbingan","jenisKelamin":"Laki-laki","jenisTindakPidana":"Pembalakan Liar","kriminogenikA_0_0":1,"petugas":"halo","napi":"hai","tanggal":"kemarin","namaKlien":"halo","register":"666","tanggalLahir":"hari ini","pembinaan":"hai","kriminogenikA_0_1":1,"kriminogenikA_0_2":0,"kriminogenikA_1_0":0,"kriminogenikA_1_1":1,"kriminogenikA_1_2":1,"kriminogenikA_1_3":0,"kriminogenikA_1_4":0,"kriminogenikA_1_5":2,"kriminogenikA_1_6":1,"kriminogenikA_1_7":2,"kriminogenikA_2_0":0,"kriminogenikA_2_1":1,"kriminogenikA_2_2":0,"kriminogenikA_2_3":0,"kriminogenikA_2_4":1,"kriminogenikA_2_5":0,"kriminogenikA_3_0":1,"kriminogenikA_3_1":1,"kriminogenikA_3_2":0,"kriminogenikA_3_3":2,"kriminogenikA_4_0":0,"kriminogenikA_4_1":1,"kriminogenikA_5_0":0,"kriminogenikA_5_1":1,"kriminogenikA_6_0":1,"kriminogenikA_6_1":0,"kriminogenikA_6_2":1,"kriminogenikA_6_3":0,"kriminogenikA_6_4":1}

  import TandaTangan from "$lib/TandaTangan.svelte";

  const pertanyaan = [
    {
      isi: `Nama Lengkap Narapidana/Klien Pemasyarakatan`,
      variabel: "napi",
    },
    { isi: "Nomor Register", variabel: "register" },
    { isi: "Tanggal Lahir", variabel: "tanggalLahir" },
    { isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    { isi: "Tindak Pidana", variabel: "jenisTindakPidana" },
    {
      isi: `Lokasi Pidana`,
      variabel: "pembinaan",
    },
    { isi: "Tujuan Asesmen", variabel: "alasan" },
    { isi: "Tanggal Pelaksanaan Asesmen", variabel: "tanggal" },
    { isi: "Nama Petugas Asesmen", variabel: "petugas" },

    //     {
    //       isi: `Nama Lengkap Narapidana/ <br>
    // Klien Pemasyarakatan`,
    //       variabel: "napi",
    //     },
    //     { isi: "Nomor Registrasi", variabel: "register" },
    //     { isi: "Tanggal Lahir", variabel: "tanggalLahir" },
    //     { isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    //     { isi: "Tindak Pidana", variabel: "jenisTindakPidana" },
    //     {
    //       isi: `Lokasi Pembinaan/ <br>
    // Pembimbingan Saat Ini`,
    //       variabel: "pembinaan",
    //     },
    //     { isi: "Tujuan Asesmen", variabel: "alasan" },
    //     { isi: "Tanggal Pelaksanaan Asesmen", variabel: "tanggal" },
    //     { isi: "Nama Petugas Asesmen", variabel: "petugas" },

    // { isi: "Nama Petugas Asesmen", variabel: "petugas" },
    // 		{
    // 			isi: `Nama Narapidana/
    // Klien Pemasyarakatan`,
    // 			variabel: "napi",
    // 		},
    // { isi: "Tanggal Asesmen", variabel: "tanggal" },
    // { isi: "Alasan Asesmen", variabel: "alasan" },
    // { isi: "Keterangan", variabel: "keterangan" },
  ];

  const pertanyaan2 = [
    // 		{ isi: "Nama Klien", variabel: "namaKlien" },
    // 		{ isi: "Nomor Register", variabel: "register" },
    // 		{ isi: "Tanggal Lahir", variabel: "tanggalLahir" },
    // 		{ isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    // 		{ isi: "Jenis Tindak Pidana", variabel: "jenisTindakPidana" },
    // 		{
    // 			isi: `Lokasi Pembinaan/
    // Pembimbingan Saat Ini`,
    // 			variabel: "pembinaan",
    // 		},
  ];

  let totalA;
  $: if ($dataTampil) {
    /*
		{JSON.stringify($dataTampil.rriBagianA)} <br>
		[0,1,0,1,1,1,0,1,1,1]		

		{JSON.stringify(rri.bagianA.map(x => x.nilai))}
		[[0,3],[0,1],[0,1],[0,1],[0,2,4],[0,1],[0,1],[0,1],[0,1,2,3],[0,1]]
		*/

    let jawaban = $dataTampil.rriBagianA;
    let kunci = rri.bagianA.map((x) => x.nilai);
    let kumpulNilai = 0;

    for (let n in jawaban) {
      kumpulNilai += kunci[n][jawaban[n]];
    }

    totalA = kumpulNilai;
  }

  const kategorisasi = [
    "Keluarga dan Pernikahan",
    "Pendidikan dan Pekerjaan",
    "Penggunaan Obat-obatan Terlarang dan Konsumsi Alkohol",
    "Hubungan Sosial",
    "Waktu Luang/ Rekreasi",
    "Manajemen Keuangan",
    "Sikap Anti Sosial/ Pandangan Terhadap Tindak Pidana",
  ];

  let kumpulannya;
  let totalKumpulannya;
  let kategoriKumpulannya;
  $: if ($dataTampil) {
    let listKumpulan = [];
    for (const [index, item] of kriminogenik.bagianA.entries()) {
      let kumpulanNilai = 0;
      for (const [indexList, itemList] of item.list.entries()) {
        kumpulanNilai +=
          itemList.nilai[$dataTampil[`kriminogenikA_${index}_${indexList}`]];
      }
      listKumpulan = [...listKumpulan, kumpulanNilai];
    }
    kumpulannya = listKumpulan;
    totalKumpulannya = kumpulannya.reduce((a, b) => a + b, 0);

    let kategori = [];

    if (kumpulannya[0] <= 1) {
      kategori[0] = "RENDAH";
    } else if (kumpulannya[0] <= 3) {
      kategori[0] = "SEDANG";
    } else if (kumpulannya[0] <= 5) {
      kategori[0] = "TINGGI";
    } else if (kumpulannya[0] <= 6) {
      kategori[0] = "SANGAT TINGGI";
    }

    if (kumpulannya[1] <= 2) {
      kategori[1] = "RENDAH";
    } else if (kumpulannya[1] <= 6) {
      kategori[1] = "SEDANG";
    } else if (kumpulannya[1] <= 8) {
      kategori[1] = "TINGGI";
    } else if (kumpulannya[1] <= 10) {
      kategori[1] = "SANGAT TINGGI";
    }

    if (kumpulannya[2] <= 1) {
      kategori[2] = "RENDAH";
    } else if (kumpulannya[2] <= 4) {
      kategori[2] = "SEDANG";
    } else if (kumpulannya[2] <= 5) {
      kategori[2] = "TINGGI";
    } else if (kumpulannya[2] <= 6) {
      kategori[2] = "SANGAT TINGGI";
    }

    if (kumpulannya[3] <= 1) {
      kategori[3] = "RENDAH";
    } else if (kumpulannya[3] <= 3) {
      kategori[3] = "SEDANG";
    } else if (kumpulannya[3] <= 4) {
      kategori[3] = "TINGGI";
    } else if (kumpulannya[3] <= 5) {
      kategori[3] = "SANGAT TINGGI";
    }

    if (kumpulannya[4] <= 0) {
      kategori[4] = "RENDAH";
    } else if (kumpulannya[4] <= 1) {
      kategori[4] = "SEDANG";
    } else if (kumpulannya[4] <= 2) {
      kategori[4] = "TINGGI";
    }

    if (kumpulannya[5] <= 0) {
      kategori[5] = "RENDAH";
    } else if (kumpulannya[5] <= 1) {
      kategori[5] = "SEDANG";
    } else if (kumpulannya[5] <= 2) {
      kategori[5] = "TINGGI";
    }

    if (kumpulannya[6] <= 1) {
      kategori[6] = "RENDAH";
    } else if (kumpulannya[6] <= 4) {
      kategori[6] = "SEDANG";
    } else if (kumpulannya[6] <= 6) {
      kategori[6] = "TINGGI";
    } else if (kumpulannya[6] <= 7) {
      kategori[6] = "SANGAT TINGGI";
    }

    kategoriKumpulannya = kategori;
  }

  const listNomor = [
    1,
    2,
    3,
    4,
    5,
    "6A",
    "6B",
    7,
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20,
    21,
    22,
    23,
    24,
    25,
    26,
    27,
    28,
    29,
  ];
  let nomor = -1;
  function nomornya() {
    nomor += 1;
    return listNomor[nomor];
  }
</script>

<svelte:head>
  <title>Data Kriminogenik</title>
</svelte:head>

<div class="grid grid-cols-5 kontainer gap-3 <md:grid-cols-1">
  <Table />

  <div class="col-span-3 laporan <md:col-span-1">
    {#if $dataTampil}
      <!-- <img src="/bapas.png" alt="" /> -->
      <div class="text-center mb-3">
        <!-- <p class='judul'>INFORMASI RAHASIA</p> -->
        <p
          class="font-bold border border-black inline-block my-3 px-2 border-3"
        >
          RAHASIA
        </p>
        <h1 class="judul">IDENTITAS <br />NARAPIDANA/KLIEN PEMASYARAKATAN</h1>
        {#if $dataTampil.foto}
          <img class="foto" src={$dataTampil.foto} alt="" />
        {/if}
        <!-- <p>{$dataTampil.bagian}</p> -->
        <!-- <p class="kotak !bg-black">
          INSTRUMEN <br />
          RISIKO RESIDIVISME - INDONESIA (RRI)
        </p> -->
      </div>

      <table>
        <tbody>
          {#each pertanyaan as item, index}
            <tr>
              <td>{@html item.isi}</td>
              <td>:</td>
              <td>{$dataTampil[item.variabel] || "-"}</td>
            </tr>
          {/each}
        </tbody>
      </table>

      <div class="text-center">
        <p class="font-bold underline">PENTING</p>
        <p class="italic">
          Pelaksanaan asesmen risiko residivisme dan kebutuhan kriminogenik
          terhadap narapidana/klien pemasyarakatan <strong>WAJIB</strong> dilakukan
          berdasarkan Pedoman Penggunaan dan Penilaian Instrumen Asesmen Risiko Residivisme
          Indonesia dan Instrumen Asesmen Kebutuhan Kriminogenik versi 02 Tahun 2021
        </p>
      </div>

      <!-- <table>
				<thead class="kotak">
					<tr>
						<th colspan="3">DATA DEMOGRAFI</th>
					</tr>
				</thead>
				<tbody>
					{#each pertanyaan2 as item, index}
						<tr>
							<td>{item.isi}</td>
							<td>:</td>
							<td>{$dataTampil[item.variabel]}</td>
						</tr>
					{/each}
				</tbody>
			</table> -->

      <!-- <p class="tebal">BAGIAN A</p>
			<p>
				Bagian ini adalah bagian langkah awal dalam melakukan asesmen ini,
				sehingga asesmen ini diisi terhadap Narapidana/ Klien Pemasyarakatan
				yang akan dilakukan asesmen.
			</p> -->

      <div class="break" />

      <div class="text-center font-bold">
        <p class="latar-hitam">
          INSTRUMEN ASESMEN RISIKO RESIDIVISME INDONESIA
        </p>
        <p class="underline">RISIKO RESIDIVISME INDONESIA - BAGIAN A</p>
        <p>FAKTOR RISIKO UTAMA</p>
      </div>
      <p>
        Berikan nilai sesuai kriteria jawaban pada tiap pertanyaan di bawah ini.
      </p>

      <table>
        <thead>
          <tr>
            <th>NO</th>
            <th>PERTANYAAN</th>
            <th>JAWABAN</th>
            <th>NILAI</th>
          </tr>
        </thead>
        <tbody>
          {#each rri.bagianA as item, index}
            <tr>
              <td class="text-center">{index + 1}</td>
              <td class="!p-0">
                <table class="">
                  <tbody>
                    <tr>
                      <td class="!border-0">{item.pertanyaan}</td>
                    </tr>
                    <tr>
                      <td class="!border-0 !border-t-1">
                        <p class="italic">Bukti/ informasi pendukung</p>
                        <p>
                          {$dataTampil.catatanRriBagianA[index] == undefined
                            ? "-"
                            : $dataTampil.catatanRriBagianA[index]}
                        </p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td>
                {#each item.jawaban as jawabannya, indexJawaban}
                  {jawabannya} = {item.nilai[indexJawaban]}<br />
                {/each}
              </td>
              <td class="text-center"
                >{item.nilai[$dataTampil.rriBagianA[index]] || "0"}</td
              >
            </tr>
          {/each}
          <tr>
            <td colspan="2" class="font-bold">NILAI TOTAL</td>
            <td class="text-center" colspan="2">
              {totalA}
            </td>
          </tr>
          <tr>
            <td colspan="2" class="font-bold">KATEGORI</td>
            <td class="text-center" colspan="2">
              {#if totalA >= 0 && totalA <= 6}
                RENDAH
              {:else if totalA >= 7 && totalA <= 11}
                SEDANG
              {:else if totalA >= 12 && totalA <= 15}
                TINGGI
              {:else if totalA >= 16 && totalA <= 17}
                SANGAT TINGGI
              {/if}
            </td>
          </tr>
        </tbody>
      </table>

      <!-- <p>RISIKO RESIDIVISME:</p> -->
      <p class="text-center font-bold">
        TABEL ACUAN NILAI KATEGORI TINGKAT RISIKO RESIDIVISME
      </p>
      <table class="tengah">
        <tbody>
          <tr>
            <td>RENDAH</td>
            <td>SEDANG</td>
            <td>TINGGI</td>
            <td>SANGAT TINGGI</td>
          </tr>
          <tr>
            <td>0-6</td>
            <td>7-11</td>
            <td>12-15</td>
            <td>16-17</td>
          </tr>
        </tbody>
      </table>
      {#if $dataTampil.bagian.includes("b")}
        <div class="break" />

        <div class="text-center font-bold">
          <p class="underline">RISIKO RESIDIVISME INDONESIA - BAGIAN B</p>
          <p>FAKTOR RISIKO TAMBAHAN</p>
        </div>
        <p>
          Berikan tanda centang (√) pada tiap pertanyaan yang memenuhi syarat!
        </p>

        <!-- <p>
				Apakah terdapat bukti hal-hal berikut ini terjadi pada Narapidana/
				Klien Pemasyarakatan pada tindak pidana yang sekarang dan/ atau
				tindak pidana sebelumnya. Berikan tanda centang (V) pada tiap
				pertanyaan yang memenuhi syarat.
			</p> -->

        <!-- <p class="tebal">BAGIAN B</p> -->
        <table>
          <thead>
            <tr>
              <th>NO</th>
              <th>PERTANYAAN</th>
              <th>JAWABAN</th>
            </tr>
          </thead>
          <tbody>
            {#each rri.bagianB as item, index}
              <tr>
                <td class="text-center">{index + 1}</td>
                <td class="!p-0">
                  <table>
                    <tbody>
                      <tr>
                        <td class="!border-0">{item}</td>
                      </tr>
                      <tr>
                        <td class="!border-0 !border-t-1">
                          <p class="italic">Bukti/ informasi pendukung</p>
                          <p>
                            {$dataTampil.catatanRriBagianB[index] == undefined
                              ? "-"
                              : $dataTampil.catatanRriBagianB[index]}
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <!-- bagian sini yang aku balik hasil centangnya -->
                <td class="text-center"
                  >{$dataTampil.rriBagianB[index] == undefined
                    ? "-"
                    : $dataTampil.rriBagianB[index] == 0
                    ? "√"
                    : "-"}</td
                >
              </tr>
            {/each}
          </tbody>
        </table>
      {/if}
      {#if $dataTampil.bagian.includes("c")}
        <!-- <p class="tebal">BAGIAN C</p> -->

        <div class="break" />

        <div class="text-center font-bold">
          <p class="underline">RISIKO RESIDIVISME INDONESIA - BAGIAN C</p>
          <p>FAKTOR RISIKO KHUSUS NARAPIDANA/ KLIEN PEMASYARAKATAN PEREMPUAN</p>
        </div>
        <p>
          Berikan tanda centang (√) pada tiap pertanyaan yang memenuhi syarat!
        </p>

        <table>
          <thead>
            <tr>
              <th>NO</th>
              <th>PERTANYAAN</th>
              <th>JAWABAN</th>
            </tr>
          </thead>
          <tbody>
            {#each rri.bagianC as item, index}
              <tr>
                <td class="text-center">{index + 1}</td>
                <td class="!p-0">
                  <table>
                    <tbody>
                      <tr>
                        <td class="!border-0">{item}</td>
                      </tr>
                      <tr>
                        <td class="!border-0 !border-t-1">
                          <p class="italic">Bukti/ informasi pendukung</p>
                          <p>
                            {$dataTampil.catatanRriBagianC[index] == undefined
                              ? "-"
                              : $dataTampil.catatanRriBagianC[index]}
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="text-center"
                  >{$dataTampil.rriBagianC[index] == undefined
                    ? "-"
                    : $dataTampil.rriBagianC[index] == 1
                    ? "√"
                    : "-"}</td
                >
              </tr>
            {/each}
          </tbody>
        </table>
      {/if}
      {#if $dataTampil.bagian.includes("d")}
        <!-- <p class="tebal">BAGIAN D</p> -->

        <div class="break" />

        <div class="text-center font-bold">
          <p class="underline">RISIKO RESIDIVISME INDONESIA - BAGIAN D</p>
          <p>
            FAKTOR RISIKO KHUSUS NARAPIDANA/ KLIEN PEMASYARAKATAN DENGAN <br
            />TINDAK PIDANA NARKOTIKA/ OBAT-OBATAN TERLARANG
          </p>
        </div>
        <p>
          Berikan tanda centang (√) pada tiap pertanyaan yang memenuhi syarat!
        </p>

        <table>
          <thead>
            <tr>
              <th>NO</th>
              <th>PERTANYAAN</th>
              <th>JAWABAN</th>
            </tr>
          </thead>
          <tbody>
            {#each rri.bagianD as item, index}
              <tr>
                <td class="text-center">{index + 1}</td>
                <td class="!p-0">
                  <table>
                    <tbody>
                      <tr>
                        <td class="!border-0">{item}</td>
                      </tr>
                      <tr>
                        <td class="!border-0 !border-t-1">
                          <p class="italic">Bukti/ informasi pendukung</p>
                          <p>
                            {$dataTampil.catatanRriBagianD[index] == undefined
                              ? "-"
                              : $dataTampil.catatanRriBagianD[index]}
                          </p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
                <td class="text-center"
                  >{$dataTampil.rriBagianD[index] == undefined
                    ? "-"
                    : $dataTampil.rriBagianD[index] == 1
                    ? "√"
                    : "-"}</td
                >
              </tr>
            {/each}
          </tbody>
        </table>
      {/if}
      <TandaTangan />
      {#if $dataTampil.bagian.includes("kriminogenik")}
        <div class="break" />

        <p class="latar-hitam text-center font-bold">
          INSTRUMEN ASESMEN KEBUTUHAN KRIMINOGENIK
        </p>
        <!-- <p class="font-bold">BAGIAN A</p> -->
        <p class="text-center font-bold underline">
          KEBUTUHAN KRIMINOGENIK - BAGIAN A
        </p>
        <p>
          Berikan nilai sesuai dengan kriteria jawaban pada tiap pertanyaan di
          bawah ini!
        </p>

        <table>
          <thead>
            <tr>
              <th>NO</th>
              <th>PERTANYAAN</th>
              <th>JAWABAN</th>
              <th>NILAI</th>
            </tr>
          </thead>
          <tbody>
            {#each kriminogenik.bagianA as item, index}
              <tr>
                <td class="font-bold" colspan="4">{item.bagian}</td>
              </tr>
              {#each item.list as itemList, indexList}
                <tr>
                  <td class="text-center">
                    <!-- {indexList + 1} -->
                    <!-- {nomor} -->
                    {nomornya()}
                  </td>
                  <td class="!p-0">
                    <table>
                      <tbody>
                        <tr>
                          <td class="!border-0">{itemList.pertanyaan}</td>
                        </tr>
                        <tr>
                          <td class="!border-0 !border-t-1">
                            <p class="italic">Bukti/ informasi pendukung</p>
                            <p>
                              {$dataTampil[
                                `catatanKriminogenikA_${index}_${indexList}`
                              ] == undefined
                                ? "-"
                                : $dataTampil[
                                    `catatanKriminogenikA_${index}_${indexList}`
                                  ]}
                            </p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                  <td>
                    {#each itemList.jawaban as itemJawaban, indexJawaban}
                      {itemJawaban} = {itemList.nilai[indexJawaban]} <br />
                    {/each}
                  </td>
                  <td class="text-center">
                    {itemList.nilai[
                      $dataTampil[`kriminogenikA_${index}_${indexList}`]
                    ] == undefined
                      ? 0
                      : itemList.nilai[
                          $dataTampil[`kriminogenikA_${index}_${indexList}`]
                        ]}
                  </td>
                </tr>
              {/each}
              <!-- <tr>
							<td colspan="3" class="text-right">Jumlah Nilai</td>
							<td class="text-center">{kumpulannya[index]}</td>
						</tr> -->
            {/each}
          </tbody>
        </table>

        <div class="break" />

        <table class="">
          <thead>
            <tr>
              <th>KEBUTUHAN KRIMINOGENIK</th>
              <th>NILAI</th>
              <th>KATEGORI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="3" class="!text-left font-bold"
                >TOTAL NILAI TIAP FAKTOR</td
              >
            </tr>
            {#each kategorisasi as x, n}
              <tr>
                <td>{x}</td>
                <td class="text-center">{kumpulannya[n] || 0}</td>
                <td class="text-center">{kategoriKumpulannya[n] || "RENDAH"}</td
                >
              </tr>
            {/each}
            <tr>
              <td class="font-bold">TOTAL NILAI KESELURUHAN</td>
              <td class="text-center font-bold">{totalKumpulannya || 0}</td>
              <td class="text-center font-bold">
                {#if totalKumpulannya <= 10}
                  RENDAH
                {:else if totalKumpulannya <= 22}
                  SEDANG
                {:else if totalKumpulannya <= 29}
                  TINGGI
                {:else if totalKumpulannya >= 30}
                  SANGAT TINGGI
                {:else}
                  RENDAH
                {/if}
              </td>
            </tr>
          </tbody>
        </table>

        <p class="text-center font-bold">
          TABEL ACUAN NILAI KATEGORI TINGKAT KEBUTUHAN KRIMINOGENIK
        </p>

        <table class="tengah">
          <thead>
            <tr>
              <th>KEBUTUHAN KRIMINOGENIK</th>
              <th>RENDAH</th>
              <th>SEDANG</th>
              <th>TINGGI</th>
              <th>SANGAT TINGGI</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="font-bold !text-left" colspan="5"
                >TOTAL NILAI TIAP FAKTOR</td
              >
            </tr>
            <tr>
              <td>Keluarga dan Pernikahan</td>
              <td>0-1</td>
              <td>2-3</td>
              <td>4-5</td>
              <td>6</td>
            </tr>
            <tr>
              <td>Pendidikan dan Pekerjaan</td>
              <td>0-2</td>
              <td>3-6</td>
              <td>7-8</td>
              <td>9-10</td>
            </tr>
            <tr>
              <td>
                Penggunaan Obat-obatan Terlarang dan Konsumsi Alkohol (Dulu dan
                Sekarang)
              </td>
              <td>0-1</td>
              <td>2-4</td>
              <td>5</td>
              <td>6</td>
            </tr>
            <tr>
              <td>Hubungan Sosial</td>
              <td>0-1</td>
              <td>2-3</td>
              <td>4</td>
              <td>5</td>
            </tr>
            <tr>
              <td>Waktu Luang/ Rekreasi</td>
              <td>0</td>
              <td>1</td>
              <td>2</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Manajemen Keuangan</td>
              <td>0</td>
              <td>1</td>
              <td>2</td>
              <td>-</td>
            </tr>
            <tr>
              <td>Sikap Anti Sosial/ Pandangan Terhadap Tindak Pidana</td>
              <td>0-1</td>
              <td>2-4</td>
              <td>5-6</td>
              <td>7</td>
            </tr>
            <tr>
              <td class="font-bold">TOTAL NILAI KESELURUHAN</td>
              <td class="font-bold">0-10</td>
              <td class="font-bold">11-22</td>
              <td class="font-bold">23-29</td>
              <td class="font-bold">≥ 30</td>
            </tr>
          </tbody>
        </table>

        <!-- <p class="text-center font-bold">PENILAIAN AKHIR ASESMEN KRIMINOGENIK</p>
			<table class="tengah">
				<thead>
					<tr>
						<th>RENDAH</th>
						<th>SEDANG</th>
						<th>TINGGI</th>
						<th>SANGAT TINGGI</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>0-10</td>
						<td>11-22</td>
						<td>23-29</td>
						<td>30+</td>
					</tr>
				</tbody>
			</table>

			<TandaTangan></TandaTangan> -->

        <div class="break" />

        <B1 />

        <B2 />
      {/if}
    {/if}
  </div>
</div>

<style>
  .tengah * {
    @apply text-center;
  }
  img {
    display: block;
    margin: auto;
    height: auto;
    width: 200px;
  }
  .foto {
    margin-bottom: 2rem;
    object-fit: cover;
    aspect-ratio: 4 / 6;
  }
  .judul {
    margin-top: 0.5rem;
    margin-bottom: 1.5rem;
    font-weight: bold;
  }
  .tebal {
    font-weight: bold;
  }
  .tengah {
    text-align: center;
  }
  .kanan {
    text-align: right;
  }
  .tanpa-border {
    border: none;
  }
  .kotak {
    background-color: gray;
    font-weight: bold;
    color: white;
    line-height: 2;
    --jarak: 15px;
    padding-top: var(--jarak);
    padding-bottom: var(--jarak);
  }
  @media print {
    .list-data {
      display: none;
    }
    .laporan {
      grid-column: span 6 / span 6;
    }
    .kontainer {
      grid-column: span 6 / span 6;
    }
    .break {
      page-break-after: always;
    }
  }
  p.latar-hitam {
    color: white;
    background: black;
  }
</style>
