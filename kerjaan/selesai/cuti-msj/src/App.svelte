<script>
  import Router from "svelte-spa-router";
  import HalamanLogin from "./halaman-login.svelte";
  // @ts-ignore
  import routes from "virtual:generated-pages-svelte";
  // import "virtual:windi.css";
  import Menu from "./menu.svelte";
  // @ts-ignore
  import logo from "./gambar/harum-energy.png";
  import "@unocss/reset/tailwind.css";
  import "warna-tailwind/warna.css";
  import "uno.css";
  import latar from "./gambar/tambang-update.jpg";
  import "./App.css";
  import { is_login } from "./state/login";
  import localforage from "localforage";
  import reset_cuti_tahunan from "./fungsi/reset-cuti-tahunan";
  import { location } from "svelte-spa-router";

  // Notification.requestPermission();

  function hapus_dua_karakter_pertama(angka) {
    let jadi_teks = "" + angka;
    return jadi_teks.substring(2);
  }

  let tanggalan = new Date();
  let tahun_sekarang = tanggalan.getFullYear();
  let sebelum_tahun_sekarang = tahun_sekarang - 1;
  let periode = `${hapus_dua_karakter_pertama(
    sebelum_tahun_sekarang
  )}/${hapus_dua_karakter_pertama(tahun_sekarang)}`;
  console.log(periode);

  async function cek_periode() {
    let periode_tersimpan = await localforage.getItem("periode");
    let ada_data_karyawan = await localforage.getItem("dataKaryawan");
    if (
      (!periode_tersimpan || periode_tersimpan != periode) &&
      ada_data_karyawan
    ) {
      let periode_baru = await localforage.setItem("periode", periode);
      if (periode_baru) {
        reset_cuti_tahunan();
      }
    }
  }
  cek_periode();

  async function cek_admin_dan_petugas() {
    let cek_admin = await localforage.getItem("admin");
    if (!cek_admin) {
      localforage.setItem("admin", "Nina Z");
    }
    let cek_petugas = await localforage.getItem("hrd");
    if (!cek_petugas) {
      localforage.setItem("hrd", "Fadliansyah");
    }
  }
  cek_admin_dan_petugas();
</script>

{#if $is_login}
  {#if $location.includes("/cetak")}
    <Router {routes} />
  {:else}
    <img
      src={latar}
      class="w-full min-h-screen fixed -z-999 object-cover"
      alt=""
    />
    <div class="grid grid-cols-12 gap-4 p-4">
      <div class="col-span-2">
        <div class="top-4 sticky">
          <div class="bg-white rounded mb-2 p-2">
            <img src={logo} class="rounded block overflow-hidden" alt="" />
          </div>
          <Menu />
        </div>
      </div>
      <div class="col-span-10">
        <div class="rounded shadow bg-white p-2">
          <Router {routes} />
        </div>
      </div>
    </div>
  {/if}
{:else}
  <HalamanLogin />
{/if}

<svelte:head>
  <link rel="shortcut icon" href={logo} type="image/x-icon" />
</svelte:head>

<style>
  /* .latar {
    background: url("/latar.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    min-height: 100vh;
  } */
  /* chrome extension */
  /* :global(body) {
    width: 350px;
    height: 500px;
    font-size: 16px;
  } */
</style>
