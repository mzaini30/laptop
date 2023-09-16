<script>
  let data = {};

  import { sql, akun } from "$lib/api";
  import { goto } from "$app/navigation";
  import { browser } from "$app/env";
  import axios from "axios";
  import qs from "qs";
  import Swal from "sweetalert2";

  async function login() {
    const banyak = await axios.post(
      sql,
      qs.stringify({
        id: akun,
        kunci: "cek-password",
        username: data.username,
        password: data.password,
      })
    );
    if (banyak.data[0].banyak < 1) {
      // alert('Username dan Password Salah')
      Swal.fire({
        title: "Username dan Password Salah",
        text: "Atau mungkin akun belum diaktifkan",
        icon: "warning",
      });
    } else {
      if (browser) {
        localStorage.setItem("usernameAsesmen", data.username);
        localStorage.setItem("passwordAsesmen", data.password);
        goto("/user");
      }
    }
  }
</script>

<svelte:head>
  <title>Login</title>
</svelte:head>

<div
  class="h-screen bg-center opacity-30 fixed top-0 bg-no-repeat bg-contain background w-full"
/>
<div class="h-screen grid fixed p-3 top-0 place-items-center w-full">
  <div class="">&nbsp;</div>
  <form action="" on:submit|preventDefault={login}>
    <div class="">
      <div class="text-center mb-5 font-bold">
        <p>Selamat Datang di</p>
        <p>Sistem Aplikasi Assessment Khusus</p>
        <p>Pembimbing Kemasyarakatan</p>
        <p>(SAKU-PK)</p>
      </div>

      <div class="grid grid-cols-2">
        <p class="py-3 text-right pr-5">NIP :</p>
        <input
          type="text"
          bind:value={data.username}
          required
          class="input focus:outline-none"
        />
        <p class="py-3 text-right pr-5">Password :</p>
        <input
          type="password"
          bind:value={data.password}
          required
          class="input focus:outline-none"
        />
      </div>

      <center>
        <div class="mt-5">
          <input
            type="submit"
            class="focus:outline-none mb-3 text-white bg-green-500 py-2 px-4 rounded cursor-pointer block"
            value="Sign In (Masuk)"
          />
          <a href="/daftar" class="focus:outline-none underline block"
            >Daftar Pengguna Baru</a
          >
        </div>
      </center>
    </div>
  </form>
  <div class="">&nbsp;</div>
</div>

<style>
  .background {
    background-image: url("/background.png");
  }
  .input {
    @apply p-2 bg-transparent border-b-2 border-black;
  }
</style>
