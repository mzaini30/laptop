<script>
  import { sql, akun } from "$lib/api";
  import axios from "axios";
  import qs from "qs";
  import Swal from "sweetalert2";

  let isian = {};

  // $: console.log(isian)

  // Swal.fire('hello world')
  // Swal.fire({
  // 	title: 'Terima kasih sudah mendaftar',
  // 	text: 'Silahkan tunggu konfirmasi dari admin',
  // 	icon: 'success'
  // })
  const daftar = async () => {
    const data = await axios.post(
      sql,
      qs.stringify({
        id: akun,
        kunci: "tambah",
        ...isian,
      })
    );
    if (data) {
      Swal.fire({
        title: "Terima kasih sudah mendaftar",
        text: "Silahkan tunggu konfirmasi dari admin",
        icon: "success",
      });
    }
  };
</script>

<svelte:head>
  <title>Daftar</title>
</svelte:head>

<div class="w-full p-5 konten">
  <div
    class="bg-white p-5 mx-auto w-full md:w-[70%] border shadow rounded border-t-4 border-red-500"
  >
    <h1 class="text-5xl mb-3 before-md:text-xl">Form Pendaftaran</h1>
    <form action="" on:submit|preventDefault={daftar}>
      <p class="">Nama Lengkap Beserta Gelar</p>
      <input
        required
        type="text"
        bind:value={isian.nama}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">NIP (akan menjadi username Anda)</p>
      <input
        required
        bind:value={isian.nip}
        type="tel"
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Golongan/Ruang</p>
      <input
        required
        type="text"
        bind:value={isian.golongan}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Tempat Bertugas</p>
      <input
        required
        type="text"
        bind:value={isian.tempatBertugas}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Jabatan Saat Ini</p>
      <input
        required
        type="text"
        bind:value={isian.jabatan}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Alamat Email</p>
      <input
        required
        type="email"
        bind:value={isian.email}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Nomor HP</p>
      <input
        required
        type="tel"
        bind:value={isian.hp}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="">Password</p>
      <input
        required
        type="text"
        bind:value={isian.password}
        class="mb-3 w-full focus:outline-none p-2 border-b-2 border-gray-200 focus:border-red-500"
      />

      <p class="italic text-blue-800 mb-3">
        Data yang saya isikan di atas adalah benar dan dapat
        dipertanggungjawabkan, serta saya menyetujui syarat dan ketentuan atas
        kebijakan privasi yang berlaku.
      </p>

      <input
        required
        type="submit"
        value="Daftar"
        class="bg-green-500 cursor-pointer rounded px-5 py-2 text-white"
      />
    </form>
  </div>
</div>

<style>
  .konten {
    @apply bg-gradient-5;
  }
</style>
