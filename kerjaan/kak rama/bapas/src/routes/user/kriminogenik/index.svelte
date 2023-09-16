<script>
  import { rri } from "$lib/rri";
  import { kriminogenik } from "$lib/kriminogenik";

  import { parse } from "@lukeed/ms";
  import { browser } from "$app/env";
  import { dbKriminogenik, sql } from "$lib/api"; // id, acak, data, deadline, nip
  import qs from "qs";
  import axios from "axios";
  import Swal from "sweetalert2";
  import cekPetugas from "$lib/cek-petugas";

  let data = {
    rriBagianA: [],
    rriBagianB: [],
    rriBagianC: [],
    rriBagianD: [],
    kriminogenikB1: [],
    kriminogenikB2: [],
    catatanRriBagianA: [],
    catatanRriBagianB: [],
    catatanRriBagianC: [],
    catatanRriBagianD: [],
    catatanKriminogenikB1: [],
    catatanKriminogenikB2: [],
  };
  // $: console.log(JSON.stringify(data))
  let bagian = [];

  const kirim = async () => {
    if (browser) {
      data.bagian = bagian;
      const kirimData = await axios.post(
        sql,
        qs.stringify({
          id: dbKriminogenik,
          kunci: "kirim",
          acak: Math.random(),
          data: JSON.stringify(data),
          deadline: Date.now() + parse("7 days"),
          nip: localStorage.usernameAsesmen,
        })
      );
      if (kirimData) {
        Swal.fire({
          title: "Data Sudah Terkirim",
          icon: "success",
        });
        data = {
          foto: "",
          rriBagianA: [],
          rriBagianB: [],
          rriBagianC: [],
          rriBagianD: [],
          kriminogenikB1: [],
          kriminogenikB2: [],
          catatanRriBagianA: [],
          catatanRriBagianB: [],
          catatanRriBagianC: [],
          catatanRriBagianD: [],
          catatanKriminogenikB1: [],
          catatanKriminogenikB2: [],
        };
        function atas() {
          scrollTo(0, 0);
        }
        setTimeout(atas, 3000);
      }
    }
  };

  let bagianA = true;
  let bagianB = false;
  let bagianC = false;
  let bagianD = false;
  let bagianKriminogenik = false;

  // let kriminogenikOpsional = false;

  let nilaiA = [];

  $: for (let n in data.rriBagianA) {
    nilaiA[n] = rri.bagianA[n].nilai[data.rriBagianA[n]];
  }
  // $: console.log(JSON.stringify(nilaiA))
  $: totalA = nilaiA.reduce((total, x) => total + x, 0);
  // $: console.log(totalA)

  $: if (totalA < 7 || totalA >= 7) {
    // rri_a = totalA;
    // rri_b = bagianB;
    // rri_c = bagianC;
    // rri_d = bagianD;
    // gender = data.jenisKelamin;
    // kasus = data.jenisTindakPidana;
    // kriminogenik = bagianKriminogenik;

    function aslinya() {
      bagianB = false;
      bagianC = false;
      bagianD = false;
      bagianKriminogenik = false;
    }

    if (
      totalA < 7 &&
      data.jenisKelamin == "Laki-laki" &&
      data.jenisTindakPidana == "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianB = true;
      bagianD = true;
      bagianKriminogenik = true;
      bagian = ["b", "d", "kriminogenik"];
      // if bagianB or bagianD is "dicentang"
      //   bagianKriminogenik
      // else if bagianB or bagianD isnt "dicentang"
      //   bagianKriminogenik
    } else if (
      totalA < 7 &&
      data.jenisKelamin == "Laki-laki" &&
      data.jenisTindakPidana != "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianB = true;
      bagian = ["b"];
      // if bagianB is "dicentang"
      //   bagianKriminogenik
      // else if bagianB isnt "dicentang"
      //   "done"
    } else if (
      totalA < 7 &&
      data.jenisKelamin == "Perempuan" &&
      data.jenisTindakPidana == "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianB = true;
      bagianC = true;
      bagianD = true;
      bagianKriminogenik = true;
      bagian = ["b", "c", "d", "kriminogenik"];
      // if bagianB or bagianC or bagianD is "dicentang"
      //   bagianKriminogenik
      // else if bagianB or bagianC or bagianD isnt "dicentang"
      //   bagianKriminogenik
    } else if (
      totalA < 7 &&
      data.jenisKelamin == "Perempuan" &&
      data.jenisTindakPidana != "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianB = true;
      bagianC = true;
      bagian = ["b", "c"];
      // if bagianB or bagianC is "dicentang"
      //   bagianKriminogenik
      // else if bagianB or bagianC isnt "dicentang"
      //   "done"
    } else if (
      totalA >= 7 &&
      data.jenisKelamin == "Laki-laki" &&
      data.jenisTindakPidana == "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianD = true;
      bagianKriminogenik = true;
      bagian = ["d", "kriminogenik"];
      // if bagianD is "dicentang"
      //   bagianKriminogenik
      // else if bagianD isnt "dicentang"
      //   bagianKriminogenik
    } else if (
      totalA >= 7 &&
      data.jenisKelamin == "Laki-laki" &&
      data.jenisTindakPidana != "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianKriminogenik = true;
      bagian = ["kriminogenik"];
      // bagianKriminogenik
    } else if (
      totalA >= 7 &&
      data.jenisKelamin == "Perempuan" &&
      data.jenisTindakPidana == "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianC = true;
      bagianD = true;
      bagianKriminogenik = true;
      bagian = ["c", "d", "kriminogenik"];
      // if bagianC or bagianD is "dicentang"
      //   bagianKriminogenik
      // else if bagianC or bagianD isnt "dicentang"
      //   bagianKriminogenik
    } else if (
      totalA >= 7 &&
      data.jenisKelamin == "Perempuan" &&
      data.jenisTindakPidana != "Narkoba/Psikotropika"
    ) {
      aslinya();
      bagianC = true;
      bagianKriminogenik = true;
      bagian = ["c", "kriminogenik"];
    }
  }

  // $: if (totalA < 7) {
  //   if (
  //     data.jenisKelamin == "Perempuan" &&
  //     (data.jenisTindakPidana == "Narkoba/Psikotropika" ||
  //       data.jenisTindakPidana == "Farmasi/Kesehatan")
  //   ) {
  //     bagianB = true;
  //     bagianC = true;
  //     bagianD = true;
  //     kriminogenikOpsional = false;
  //   } else if (
  //     data.jenisKelamin == "Laki-laki" &&
  //     (data.jenisTindakPidana == "Narkoba/Psikotropika" ||
  //       data.jenisTindakPidana == "Farmasi/Kesehatan")
  //   ) {
  //     bagianB = true;
  //     bagianC = false;
  //     bagianD = true;
  //     kriminogenikOpsional = false;
  //   } else if (
  //     data.jenisKelamin == "Perempuan" &&
  //     (data.jenisTindakPidana != "Narkoba/Psikotropika" ||
  //       data.jenisTindakPidana != "Farmasi/Kesehatan")
  //   ) {
  //     bagianB = true;
  //     bagianC = true;
  //     bagianD = false;
  //     kriminogenikOpsional = true;
  //   } else if (
  //     data.jenisKelamin == "Laki-laki" &&
  //     (data.jenisTindakPidana != "Narkoba/Psikotropika" ||
  //       data.jenisTindakPidana != "Farmasi/Kesehatan")
  //   ) {
  //     bagianB = true;
  //     bagianC = false;
  //     bagianD = false;
  //     kriminogenikOpsional = true;
  //   }
  // } else {
  //   bagianB = false;
  //   bagianC = false;
  //   bagianD = false;
  //   kriminogenikOpsional = false;
  // }

  const pilihanJawaban = ["Ya", "Tidak"];

  const alasanAsesmen = ["Awal", "Ulang"];

  const jenisTindakPidana = [
    "Politik",
    "Terhadap Keamanan Negara",
    "Perdagangan Manusia",
    "Pembunuhan",
    "Terorisme",
    "Kekerasan Dalam Rumah Tangga",
    "Informasi dan Transaksi Elektronik",
    "Minyak dan Gas",
    "Pembalakan Liar",
    "Korupsi",
    "Pencucian Uang",
    "Perbankan",
    "Pajak",
    "Cukai",
    "Tindak Pidana Khusus Lainnya",
    "Penyuapan",
    "Mata Uang",
    "Pemalsuan Materai/Surat/Lainnya",
    "Penipuan",
    "Penggelapan",
    "Penggelapan Dalam Jabatan",
    "Penyelundupan",
    "Perikanan",
    "Keimigrasian",
    "Pangan",
    "Kesusilaan",
    "Perampokan",
    "Pornografi",
    "Perlindungan Anak",
    "Narkoba/Psikotropika",
    "Farmasi/Kesehatan",
    "Kecelakaan Lalu Lintas",
    "Penculikan",
    "Pengeroyokan",
    "Penganiayaan",
    "Perusakan",
    "Senjata Api",
    "Senjata Tajam",
    "Ketertiban",
    "Pembakaran",
    "Pencurian",
    "Pemerasan",
    "Pengancaman",
    "Penadahan",
    "Perjudian",
    "Pelanggaran",
  ];

  // ini yang diambil edit
  const keterangan = [
    "Penelitian Kemasyarakatan Tersangka Dewasa",
    "Penelitian Kemasyarakatan Perawatan Tahanan",
    "Penelitian Kemasyarakatan Pembinaan Awal",
    "Penelitian Kemasyarakatan Pembinaan Lanjutan",
    "Penelitian Kemasyarakatan Asimilasi",
    "Penelitian Kemasyarakatan PB",
    "Penelitian Kemasyarakatan CB",
    "Penelitian Kemasyarakatan CMB",
    "Penelitian Kemasyarakatan CMK",
    "Penelitian Kemasyarakatan Pemindahan",
    "Penelitian Kemasyarakatan Perubahan Pidana Mati Menjadi Seumur Hidup",
    "Penelitian Kemasyarakatan Perubahan Pidana Seumur Hidup Menjadi Sementara",
    "Penelitian Kemasyarakatan Pembimbingan",
    "Penelitian Kemasyarakatan Permintaan Instansi Lain",
    "Sebagai persyaratan dalam memperoleh Hak-Hak Bersyarat",
  ];
  const jenisKelamin = ["Laki-laki", "Perempuan"];

  const pertanyaan = [
    {
      isi: `Nama Lengkap Narapidana/Klien Pemasyarakatan`,
      variabel: "napi",
    },
    { isi: "Nomor Registrasi", variabel: "register" },
    { isi: "Tanggal Lahir", variabel: "tanggalLahir" },
    { isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    { isi: "tindak pidana", variabel: "jenisTindakPidana" },
    {
      isi: `Lokasi pembinaan/ pembimbingan saat ini`,
      variabel: "pembinaan",
    },
    { isi: "tujuan asesmen", variabel: "alasan" },
    { isi: "tanggal pelaksanaan asesmen", variabel: "tanggal" },
    { isi: "nama petugas assessment", variabel: "petugas" },

    // { isi: "Keterangan", variabel: "keterangan" },
    // { isi: "Nama Klien", variabel: "namaKlien" },
  ];

  async function cobaCek() {
    if (browser) {
      const hasil = await cekPetugas();
      data.petugas = hasil.nama;
    }
  }
  cobaCek();

  // let statusFoto
  // let files
  function uploadFoto(event) {
    const body = new FormData();
    body.append("image", event.target.files[0]);
    fetch("https://gambar.assessment-pemasyarakatan.com/", {
      method: "post",
      body,
    })
      .then((x) => x.json())
      .then((x) => {
        console.log(x.status);
        if (x.status == "sukses") {
          data.foto = x.nama;
        }
      })
      .catch((x) => console.log(x.status));
  }
</script>

<svelte:head>
  <title>Kriminogenik</title>
</svelte:head>

<!-- <p>{JSON.stringify(data)}</p><br> -->

<a
  href="/user/kriminogenik/data"
  sveltekit:prefetch
  class="px-5 py-1 rounded shadow bg-green-500 text-white hover:cursor-pointer inline-block"
  >Lihat Data</a
>
<form action="" on:submit|preventDefault={kirim}>
  <p class="judul pb-2 text-center font-bold">
    LEMBAR ISIAN INSTRUMEN ASESMEN RISIKO RESIDIVISME - INDONESIA (RRI)
  </p>
  <div class="grid grid-cols-4 gap-2">
    <p>Foto Klien</p>
    <input
      accept="image/*"
      on:change={(x) => uploadFoto(x)}
      class="col-span-3"
      type="file"
    />

    {#if data.foto}
      <div />
      <img class="col-span-3" src={data.foto} alt="" />
    {/if}

    {#each pertanyaan as item, index}
      <p class="label py-1 col-span-1 mb-2">{item.isi}</p>
      {#if item.variabel == "alasan"}
        <select
          name=""
          id=""
          class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
          bind:value={data.alasan}
        >
          <!-- edit bagian ini -->
          {#each keterangan as alasannya, index}
            <option value={alasannya} class="">{alasannya}</option>
          {/each}
        </select>
      {:else if item.variabel == "keterangan"}
        <select
          name=""
          id=""
          class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
          bind:value={data.keterangan}
        >
          {#each keterangan as keterangannya, index}
            <option value={keterangannya} class="">{keterangannya}</option>
          {/each}
        </select>
      {:else if item.variabel == "jenisTindakPidana"}
        <select
          name=""
          id=""
          class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
          bind:value={data.jenisTindakPidana}
        >
          {#each jenisTindakPidana as pidana, index}
            <option value={pidana} class="">{pidana}</option>
          {/each}
        </select>
      {:else if item.variabel == "jenisKelamin"}
        <select
          name=""
          id=""
          class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
          bind:value={data.jenisKelamin}
        >
          {#each jenisKelamin as gender, index}
            <option value={gender} class="">{gender}</option>
          {/each}
        </select>
      {:else if item.isi == "Tanggal Lahir"}
        <input
          type="date"
          class="input mb-2 focus:outline-none border-green-500 border p-1 px-2 col-span-3"
          bind:value={data[item.variabel]}
        />
      {:else if item.isi == "tanggal pelaksanaan asesmen"}
        <input
          type="date"
          class="input mb-2 focus:outline-none border-green-500 border p-1 px-2 col-span-3"
          bind:value={data[item.variabel]}
        />
      {:else}
        <input
          type="text"
          class="input mb-2 focus:outline-none border-green-500 border p-1 px-2 col-span-3"
          bind:value={data[item.variabel]}
        />
      {/if}
    {/each}
  </div>

  {#if bagianA}
    <p class="judul pb-2 text-center font-bold">BAGIAN A</p>
    <p class="judul pb-2 text-center italic">
      Bagian ini adalah bagian langkah awal dalam melakukan asesmen ini,
      sehingga asesmen ini diisi terhadap Narapidana/ Klien Pemasyarakatan yang
      akan dilakukan asesmen.
    </p>
    <ol class="list-decimal ml-5">
      {#each rri.bagianA as item, index}
        <li>
          {item.pertanyaan}
          <div class="block py-2">
            {#each item.jawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`rriBagianA`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <p>Bukti/informasi pendukung:</p>
          <!-- <textarea
            name=""
            bind:value={data[`catatanRriBagianA`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
          <input
            type="text"
            bind:value={data[`catatanRriBagianA`][index]}
            class="pendukung"
          />
        </li>
      {/each}
    </ol>
  {/if}

  {#if bagianB}
    <p class="judul pb-2 text-center italic">
      Apakah terdapat bukti hal-hal berikut ini terjadi pada Narapidana/ Klien
      Pemasyarakatan pada tindak pidana yang sekarang dan/ atau tindak pidana
      sebelumnya. Berikan tanda centang (V) pada tiap pertanyaan yang memenuhi
      syarat.
    </p>
    <p class="judul pb-2 text-center font-bold">BAGIAN B</p>
    <ol class="list-decimal ml-5">
      {#each rri.bagianB as item, index}
        <li>
          {item}
          <div class="block py-2">
            {#each pilihanJawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`rriBagianB`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <p>Bukti/informasi pendukung:</p>
          <!-- <textarea
            name=""
            bind:value={data[`catatanRriBagianB`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
          <input
            type="text"
            class="pendukung"
            bind:value={data[`catatanRriBagianB`][index]}
          />
        </li>
      {/each}
    </ol>
  {/if}

  {#if bagianC}
    <p class="judul pb-2 text-center font-bold">BAGIAN C</p>
    <ol class="list-decimal ml-5">
      {#each rri.bagianC as item, index}
        <li>
          {item}
          <div class="block py-2">
            {#each pilihanJawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`rriBagianC`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <p>Bukti/informasi pendukung:</p>
          <!-- <textarea
            name=""
            bind:value={data[`catatanRriBagianC`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
          <input
            type="text"
            class="pendukung"
            bind:value={data[`catatanRriBagianC`][index]}
          />
        </li>
      {/each}
    </ol>
  {/if}

  {#if bagianD}
    <p class="judul pb-2 text-center font-bold">BAGIAN D</p>
    <ol class="list-decimal ml-5">
      {#each rri.bagianD as item, index}
        <li>
          {item}
          <div class="block py-2">
            {#each pilihanJawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`rriBagianD`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <p>Bukti/informasi pendukung:</p>
          <!-- <textarea
            name=""
            bind:value={data[`catatanRriBagianD`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
          <input
            type="text"
            class="pendukung"
            bind:value={data[`catatanRriBagianD`][index]}
          />
        </li>
      {/each}
    </ol>
  {/if}

  <!-- <label
    class="p-2 rounded border border-blue-500 bg-blue-300 block select-none my-1"
  >
    <input type="checkbox" bind:checked={bagianKriminogenik} name="" id="" />
    Kriminogenik
  </label> -->

  {#if bagianKriminogenik}
    <p class="judul pb-2 text-center font-bold">
      LEMBAR ISIAN INSTRUMEN ASESMEN KRIMINOGENIK INDONESIA
    </p>
    <p class="judul pb-2 text-center font-bold">BAGIAN A</p>
    {#each kriminogenik.bagianA as item, index}
      <p class="judul pb-2 text-center font-bold">{item.bagian}</p>
      <ol class="list-decimal ml-5">
        {#each item.list as x, n}
          <li>
            {x.pertanyaan}
            <div class="block py-2">
              {#each x.jawaban as itemJawaban, keyJawaban}
                <label class="labelRadio cursor-pointer p-3 py-2 block">
                  <input
                    type="radio"
                    class=""
                    value={keyJawaban}
                    bind:group={data[`kriminogenikA_${index}_${n}`]}
                  />
                  {itemJawaban}
                </label>
              {/each}
            </div>
            <p>Bukti/informasi pendukung:</p>
            <!-- <textarea
              name=""
              bind:value={data[`catatanKriminogenikA_${index}_${n}`]}
              class="pendukung"
              id=""
              cols="30"
              rows="5"
            /> -->
            <input
              type="text"
              class="pendukung"
              bind:value={data[`catatanKriminogenikA_${index}_${n}`]}
            />
          </li>
        {/each}
      </ol>
    {/each}

    <!-- kriminogenik 2 -->

    <p class="pb-2 text-center font-bold">
      BAGIAN B.1 - Pertimbangan Lain - Jenis Tindak Kriminal Tertentu
    </p>
    <p class="pb-2 text-center">
      Apakah ada dari fitur berikut di profil Narapidana/ Klien Pemasyarakatan?
    </p>
    <ol class="list-decimal ml-5">
      {#each kriminogenik.bagianB1 as item, index}
        <li>
          {item}
          <div class="block py-2">
            {#each pilihanJawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`kriminogenikB1`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <!-- <p>Bukti/informasi pendukung:</p>
          <textarea
            name=""
            bind:value={data[`catatanKriminogenikB1`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
        </li>
      {/each}
    </ol>
    <p class="pb-2 text-center italic">
      Keterangan: Kehadiran pertimbangan lain di atas, menunjukkan kebutuhan
      atau penilaian Bagian B1 dengan menggunakan Asesmen khusus/Pertimbangan
      untuk Intervensi khusus.
    </p>

    <p class="pb-2 text-center font-bold">
      BAGIAN B.2 - Pertimbangan Lain - Faktor Kebutuhan Tambahan
    </p>
    <ol class="list-decimal ml-5">
      {#each kriminogenik.bagianB2 as item, index}
        <li>
          {item}
          <div class="block py-2">
            {#each pilihanJawaban as x, n}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={n}
                  bind:group={data[`kriminogenikB2`][index]}
                />
                {x}
              </label>
            {/each}
          </div>
          <!-- <p>Bukti/informasi pendukung:</p>
          <textarea
            name=""
            bind:value={data[`catatanKriminogenikB2`][index]}
            class="pendukung"
            id=""
            cols="30"
            rows="5"
          /> -->
        </li>
      {/each}
    </ol>
    <p class="pb-2 text-center italic">
      Keterangan: Kehadiran B2 pertimbangan lainnya, menunjukan masalah
      responsif atau manajemen risiko
    </p>
  {/if}

  <input
    type="submit"
    value="Kirim"
    class="px-5 py-1 rounded shadow bg-green-500 text-white hover:cursor-pointer"
  />
</form>

<style>
  label {
    @apply hover:bg-green-200;
  }
  .pendukung {
    @apply w-full focus:outline-none border border-yellow-700 p-3 my-1 rounded;
  }
</style>
