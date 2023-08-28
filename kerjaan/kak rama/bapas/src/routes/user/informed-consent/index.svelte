<script>
  // import {dimensiRisiko, pendidikan, tindakPidana} from '$lib/penempatanNapi'
  import { sql, persetujuan } from "$lib/api"; // id, acak, data, deadline, nip
  import { parse } from "@lukeed/ms";
  import { browser } from "$app/env";
  import { stringify } from "qs";
  import { pertanyaan } from "./_pertanyaan";
  import axios from "axios";
  const { post } = axios;
  import Swal from "sweetalert2";
  import "../kriminogenik-anak/_tombol.css";
  import IconHapus from "./IconHapus.svelte";
  import { createDrauu } from "drauu";
  import { onMount } from "svelte";

  let ttdPembimbing;
  onMount(() => {
    ttdPembimbing = createDrauu({
      el: ".pembimbing",
      brush: {
        mode: "stylus",
        color: "black",
        size: 1,
      },
    });
  });
  let ttdKlien;
  onMount(() => {
    ttdKlien = createDrauu({
      el: ".klien",
      brush: {
        mode: "stylus",
        color: "black",
        size: 1,
      },
    });
  });

  let data = {};

  const kirim = async () => {
    data.ttdPembimbing = ttdPembimbing.el.outerHTML;
    data.ttdKlien = ttdKlien.el.outerHTML;
    if (browser) {
      const kirimData = await post(
        sql,
        stringify({
          id: persetujuan,
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
        //              data.pidana = []
        data = {};
        scrollTo(0, 0);
      }
    }
  };

  const pertanyaanTambahan = [
    { isi: "Kota", variabel: "kota" },
    { isi: "Tanggal Sekarang", variabel: "tanggalSekarang" },
  ];
</script>

<svelte:head>
  <title>Informed Consent</title>
</svelte:head>

<a href="/user/informed-consent/data" class="tombol" sveltekit:prefetch
  >Lihat Data</a
>

<div class="petunjuk">
  <p>
    Saya yang bertanda tangan di bawah ini, setelah mendapatkan informasi dari
    petugas asesmen terkait tujuan pelaksanaan asesmen risiko residivisme dan
    asesmen kebutuhan kriminogenik, dengan ini saya menyatakan bersedia untuk:
  </p>
  <ol>
    <li>
      Diwawancarai sebagai subjek asesmen risiko residivisme dan asesmen
      kebutuhan kriminogenik;
    </li>
    <li>
      Memberikan informasi yang sebenar-benarnya, baik selama proses wawancara
      ataupun saat dibutuhkan wawancara ulang/ tambahan setelahnya;
    </li>
    <li>Bersikap kooperatif selama proses wawancara hingga selesai;</li>
    <li>
      Menjalankan program pembinaan dan/atau program pembimbingan yang telah
      direkomendasikan kepada saya berdasarkan hasil asesmen.
    </li>
  </ol>
  <p>
    Pernyataan ini saya tandatangani dalam keadaan sadar dan tidak ada paksaan
    dari pihak manapun.
  </p>
</div>

<form action="" on:submit|preventDefault={kirim}>
  <p class="pb-2 font-bold text-center judul">Biodata</p>

  <div class="grid grid-cols-4 gap-2">
    {#each pertanyaan as item, index}
      <p class="py-1 mb-2 label">{@html item.isi}</p>
      <section class="!col-span-3">
        {#if item.isi == "Tanggal Lahir"}
          <input
            type="date"
            class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none w-full"
            bind:value={data[item.variabel]}
            required
          />
        {:else if item.variabel == "jenisKelamin"}
          <!-- <input
            type="text"
            class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none w-full"
            bind:value={data[item.variabel]}
            required
          /> -->
          <select
            class="p-1 px-2 bg-white mb-2 border border-green-500 input focus:outline-none w-full"
            name=""
            bind:value={data[item.variabel]}
            id=""
          >
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        {:else if item.variabel == "statusPidana"}
          <select
            class="p-1 px-2 bg-white mb-2 border border-green-500 input focus:outline-none w-full"
            name=""
            bind:value={data[item.variabel]}
            id=""
          >
            <option value="Narapidana">Narapidana</option>
            <option value="Klien Pemasyarakatan">Klien Pemasyarakatan</option>
            <option value="Tahanan">Tahanan</option>
          </select>
        {:else}
          <input
            type="text"
            class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none w-full"
            bind:value={data[item.variabel]}
            required
          />
        {/if}

        <!-- {item.variabel} -->

        <!-- {#if item.variabel == "jenisKelamin"}
          <button
            class="tombol"
            on:click|preventDefault={() => (data.jenisKelamin = "Laki-laki")}
            >Laki-laki</button
          >
          <button
            class="tombol"
            on:click|preventDefault={() => (data.jenisKelamin = "Perempuan")}
            >Perempuan</button
          >
        {/if}

        {#if item.variabel == "statusPidana"}
          <button
            class="tombol"
            on:click|preventDefault={() => (data.statusPidana = "Narapidana")}
            >Narapidana</button
          >
          <button
            class="tombol"
            on:click|preventDefault={() =>
              (data.statusPidana = "Klien Pemasyarakatan")}
            >Klien Pemasyarakatan</button
          >
        {/if} -->
      </section>
    {/each}
  </div>

  <p class="pb-2 font-bold text-center judul">Bagian Tanda Tangan</p>

  <div class="grid grid-cols-4 gap-2">
    {#each pertanyaanTambahan as item, index}
      <p class="py-1 mb-2 label col-span-1">{item.isi}</p>
      <!-- {item.variabel} -->

      {#if item.variabel == "tanggalSekarang"}
        <input
          type="date"
          class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
          bind:value={data[item.variabel]}
          required
        />
      {:else}
        <input
          type="text"
          class="p-1 px-2 mb-2 border border-green-500 input focus:outline-none col-span-3"
          bind:value={data[item.variabel]}
          required
        />
      {/if}
    {/each}
  </div>

  <div class="svg-tanda-tangan">
    <div>
      <p>Tanda Tangan Asesor</p>
      <div class="wadah w-min">
        <svg class="pembimbing" />
      </div>
      <div class="hapus" on:click={ttdPembimbing.clear()}>
        <IconHapus />
        Hapus Tanda Tangan
      </div>
      <!-- <div on:click={console.log(ttdPembimbing.el.outerHTML)}>Cek</div> -->
    </div>

    <div>
      <p>Tanda Tangan Klien Pemasyarakatan</p>
      <div class="wadah w-min">
        <svg class="klien" />
      </div>
      <div class="hapus" on:click={ttdKlien.clear()}>
        <IconHapus />
        Hapus Tanda Tangan
      </div>
    </div>
  </div>

  <input
    type="submit"
    value="Kirim"
    class="px-5 py-1 text-white bg-green-500 rounded shadow hover:cursor-pointer"
  />
</form>

<style>
  .svg-tanda-tangan {
    @apply grid grid-cols-2 my-3 <md:(grid-cols-1 gap-3);
  }
  .wadah {
    @apply bg-white border border-gray-500 rounded;
    cursor: cell;
    touch-action: none;
  }
  .hapus {
    @apply text-sm bg-gray-300 px-4 py-1 mt-3 cursor-pointer border border-gray-500 inline-block;
  }
  .petunjuk {
    @apply my-3 grid gap-3;
  }
  ol li {
    @apply ml-5 list-decimal;
  }
</style>
