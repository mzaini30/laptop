<script type="text/javascript">
  let data;

  import qs from "qs";
  import axios from "axios";
  import { sql, akun } from "$lib/api";
  import { browser } from "$app/env";
  import Swal from "sweetalert2";

  const init = async () => {
    if (browser) {
      let datanya = await axios.post(
        sql,
        qs.stringify({
          id: akun,
          kunci: "ambil-data",
          username: localStorage.usernameAsesmen,
          password: localStorage.passwordAsesmen,
        })
      );
      datanya = datanya.data;
      data = datanya;
    }
  };
  init();

  const aktifkan = async (nip) => {
    if (browser) {
      const datanya = await axios.post(
        sql,
        qs.stringify({
          id: akun,
          kunci: "aktifkan",
          nip,
          username: localStorage.usernameAsesmen,
          password: localStorage.passwordAsesmen,
        })
      );
      if (datanya) {
        init();
      }
    }
  };

  const matikan = async (nip) => {
    if (browser) {
      const datanya = await axios.post(
        sql,
        qs.stringify({
          id: akun,
          kunci: "matikan",
          nip,
          username: localStorage.usernameAsesmen,
          password: localStorage.passwordAsesmen,
        })
      );
      if (datanya) {
        init();
      }
    }
  };

  const hapus = async (nip, nama) => {
    if (browser) {
      const tanya = await Swal.fire({
        title: `Hapus ${nama}?`,
      });
      if (tanya.isConfirmed) {
        const mulaiHapus = await axios.post(
          sql,
          qs.stringify({
            id: akun,
            kunci: "hapus",
            nip,
            username: localStorage.usernameAsesmen,
            password: localStorage.passwordAsesmen,
          })
        );
        if (mulaiHapus) {
          init();
        }
      }
    }
  };
</script>

<svelte:head>
  <title>Atur Akun</title>
</svelte:head>

<div class="overflow-auto h-95vh">
  <table class="w-full">
    <thead class="sticky top-0">
      <tr class="bg-gray-200">
        <th class="th p-2 px-4">Nama</th>
        <th class="th p-2 px-4">NIP</th>
        <th class="th p-2 px-4">Golongan</th>
        <th class="th p-2 px-4">Tempat Bertugas</th>
        <th class="th p-2 px-4">Jabatan</th>
        <th class="th p-2 px-4">Email</th>
        <th class="th p-2 px-4">HP</th>
        <th class="th p-2 px-4" />
        <th class="th p-2 px-4" />
      </tr>
    </thead>
    <tbody class="">
      {#if data}
        {#each data as item, index}
          <tr class="hover:bg-gray-100 bg-white">
            <td class="td p-2 px-4">{item.nama}</td>
            <td class="td p-2 px-4">{item.nip}</td>
            <td class="td p-2 px-4">{item.golongan}</td>
            <td class="td p-2 px-4">{item.tempatBertugas}</td>
            <td class="td p-2 px-4">{item.jabatan}</td>
            <td class="td p-2 px-4">{item.email}</td>
            <td class="td p-2 px-4">{item.hp}</td>
            {#if item.isAktif == "false"}
              <td
                ><a
                  href="/"
                  on:click|preventDefault={() => aktifkan(item.nip)}
                  class="tombol m-2 p-2 px-3 bg-green-200 rounded-md text-green-900"
                  >aktifkan</a
                ></td
              >
            {:else}
              <td
                ><a
                  href="/"
                  on:click|preventDefault={() => matikan(item.nip)}
                  class="tombol m-2 p-2 px-3 bg-red-200 rounded-md text-red-900"
                  >matikan</a
                ></td
              >
            {/if}
            <td
              ><a
                href="/"
                on:click|preventDefault={() => hapus(item.nip, item.nama)}
                class="tombol m-2 p-2 px-3 bg-yellow-200 rounded-md text-yellow-900"
                >hapus</a
              ></td
            >
          </tr>
        {/each}
      {/if}
    </tbody>
  </table>
</div>
