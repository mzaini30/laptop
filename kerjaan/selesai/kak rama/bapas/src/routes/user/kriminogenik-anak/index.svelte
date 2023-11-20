<script>
  import "./_tombol.css";
  import {
    faktorResikoDanPelindung,
    faktorKriminogenik,
  } from "$lib/penilaianRisikoAnak";
  import { parse } from "@lukeed/ms";
  import { browser } from "$app/env";
  import { dbKriminogenikAnak, sql } from "$lib/api"; // id, acak, data, deadline, nip
  import qs from "qs";
  import axios from "axios";
  import Swal from "sweetalert2";
  import petugas from "$lib/cek-petugas";

  let data = {};
  // $: console.log(JSON.stringify(data))

  const kirim = async () => {
    if (browser) {
      const kirimData = await axios.post(
        sql,
        qs.stringify({
          id: dbKriminogenikAnak,
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
        data = {};
        scrollTo(0, 0);
      }
    }
  };

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

  const pertanyaan = [
    { isi: "Nama Lengkap", variabel: "nama" },
    { isi: "Tempat Lahir", variabel: "tempatLahir" },
    { isi: "Tanggal Lahir", variabel: "tanggalLahir" },
    { isi: "Tindak Pidana", variabel: "pidana" },
    { isi: "Alasan Penilaian Dilakukan", variabel: "alasan" },
    { isi: "Lokasi Pelaksanaan", variabel: "lokasi" },
    { isi: "Nama Pengasuh", variabel: "pengasuh" },
    { isi: "Nama Asesor", variabel: "pk" },
    { isi: "Nomor Registrasi", variabel: "registrasi" },
    { isi: "Jenis Kelamin", variabel: "jenisKelamin" },
    { isi: "Masa Pidana", variabel: "masaPidana" },
    { isi: "Tanggal Penilaian", variabel: "penilaian" },
    { isi: "Blok/Kamar", variabel: "blok" },
    // { isi: "Tingkat Resiko", variabel: "risiko" },
  ];

  async function dapatkanPetugas() {
    const hasil = await petugas();
    data.pk = hasil.nama;
  }
  dapatkanPetugas();

  const penilaian = [
    { teks: "Ya", nilai: 1 },
    { teks: "Tidak", nilai: 0 },
  ];

  const alasanPenilaian = [
    "Penelitian Kemasyarakatan Diversi",
    "Penelitian Kemasyarakatan Sidang Pengadilan",
    "Penelitian Kemasyarakatan Perawatan Anak",
    "Penelitian Kemasyarakatan Pembinaan Awal",
    "Penelitian Kemasyarakatan Asimilasi",
    "Penelitian Kemasyarakatan PB",
    "Penelitian Kemasyarakatan CB",
    "Penelitian Kemasyarakatan CMB",
    "Penelitian Kemasyarakatan CMK",
    "Penelitian Kemasyarakatan Pemindahan",
    "Penelitian Kemasyarakatan Pembimbingan",
    "Penelitian Kemasyarakatan Permintaan Instansi Lain",
    "Sebagai persyaratan dalam memperoleh Hak-Hak Bersyarat",
  ];
</script>

<svelte:head>
  <title>Kriminogenik Anak</title>
</svelte:head>

<!-- {Math.random()}
{Date.now() + parse('7 days')}
{#if browser}
	{localStorage.usernameAsesmen}
{/if} -->

<a href="/user/kriminogenik-anak/data" class="tombol" sveltekit:prefetch
  >Lihat Data</a
>

<p class="judul pb-2 text-center font-bold">
  INSTRUMEN PENILAIAN RISIKO DAN FAKTOR KRIMINOGENIK ANAK
</p>
<form action="" on:submit|preventDefault={kirim}>
  <div class="grid grid-cols-4 gap-2">
    {#each pertanyaan as item, index}
      <p class="label py-1 col-span-1 mb-2">{item.isi}</p>

      <div class="col-span-3">
        {#if item.isi == "Tanggal Penilaian" || item.isi == "Tanggal Lahir"}
          <input
            type="date"
            class="w-full input mb-2 focus:outline-none border-green-500 border p-1 px-2"
            bind:value={data[item.variabel]}
          />
        {:else if item.isi == "Tindak Pidana"}
          <select
            name=""
            id=""
            class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
            bind:value={data[item.variabel]}
          >
            {#each jenisTindakPidana as pidana, index}
              <option value={pidana} class="">{pidana}</option>
            {/each}
          </select>
        {:else if item.isi == "Alasan Penilaian Dilakukan"}
          <select
            name=""
            id=""
            class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
            bind:value={data[item.variabel]}
          >
            {#each alasanPenilaian as x}
              <option value={x} class="">{x}</option>
            {/each}
          </select>
        {:else if item.isi == "Jenis Kelamin"}
          <select
            name=""
            id=""
            class="w-full col-span-3 focus:outline-none p-1 px-2 bg-white border border-green-500 mb-2"
            bind:value={data[item.variabel]}
          >
            <option value="Laki-Laki" class="">Laki-Laki</option>
            <option value="Perempuan" class="">Perempuan</option>
          </select>
        {:else}
          <input
            type="text"
            class="w-full input mb-2 focus:outline-none border-green-500 border p-1 px-2"
            bind:value={data[item.variabel]}
          />
        {/if}

        <!-- {#if item.isi == 'Jenis Kelamin'}
          <div class="tombol" on:click={() => data[item.variabel] = 'Laki-Laki'}>Laki-Laki</div>
          <div class="tombol" on:click={() => data[item.variabel] = 'Perempuan'}>Perempuan</div>
        {/if} -->
      </div>
    {/each}
  </div>
  <p class="judul pb-2 text-center font-bold">
    INSTRUMEN PENILAIAN RISIKO ANAK
  </p>

  <p class="judul pb-2 text-center font-bold">FAKTOR RESIKO (A)</p>
  <ol class="list-decimal list-inside">
    {#each faktorResikoDanPelindung.faktorResiko as item, index}
      <li>
        {item.aitem}
        <div class="block py-2">
          {#each item.jawaban as x, n}
            <label class="labelRadio cursor-pointer p-3 py-2 block">
              <input
                type="radio"
                class=""
                value={n}
                bind:group={data[`faktorResiko_${index}`]}
              />
              {x}
            </label>
          {/each}
        </div>
      </li>
    {/each}
  </ol>

  <p class="judul pb-2 text-center font-bold">FAKTOR PELINDUNG (B)</p>
  <ol class="list-decimal list-inside">
    {#each faktorResikoDanPelindung.faktorPelindung as item, index}
      <li>
        {item.aitem}
        <div class="block py-2">
          {#each item.jawaban as x, n}
            <label class="labelRadio cursor-pointer p-3 py-2 block">
              <input
                type="radio"
                class=""
                value={n}
                bind:group={data[`faktorPelindung_${index}`]}
              />
              {x}
            </label>
          {/each}
        </div>
      </li>
    {/each}
  </ol>

  <p class="judul pb-2 text-center font-bold">
    INSTRUMEN PENILAIAN FAKTOR-FAKTOR KRIMINOGENIK ANAK
  </p>
  <p class="judul pb-2 text-center font-bold">A. FAKTOR KRIMINOGENIK</p>

  {#each faktorKriminogenik as item, index}
    <p class="judul pb-2 text-center font-bold">{index + 1}. {item.aspek}</p>
    <ol class="list-decimal list-inside">
      {#each item.indikator as x, n}
        <li>
          {x}
          <div class="block py-2">
            {#each penilaian as a, b}
              <label class="labelRadio cursor-pointer p-3 py-2 block">
                <input
                  type="radio"
                  class=""
                  value={a.nilai}
                  bind:group={data[`faktorKriminogenik_${index}_${n}`]}
                />
                {a.teks}
              </label>
            {/each}
          </div>
        </li>
      {/each}
    </ol>
    <p class="font-bold">Catatan</p>
    <textarea
      class="input mb-2 focus:outline-none w-full border-green-500 border p-1 px-2 col-span-3"
      rows="5"
      bind:value={data[`catatanKriminogenik_${index}`]}
    />
  {/each}
  <input
    type="submit"
    value="Kirim"
    class="px-5 py-1 rounded shadow bg-green-500 text-white hover:cursor-pointer"
  />
</form>
