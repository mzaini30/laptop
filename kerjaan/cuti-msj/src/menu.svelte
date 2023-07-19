<script>
  import { backup, restore } from "backup-state";
  import localforage from "localforage";
  import Kartu from "./komponen/kartu.svelte";
  import { replace } from "svelte-spa-router";
  import { is_login } from "./state/login";
  import BackupRestore from "./komponen/backup-restore.svelte";

  let data;

  // variabel tanggalSekarang berformat YYYY-MM-DD
  let tanggalSekarang = new Date().toISOString().slice(0, 10);

  async function ambilData() {
    // const datanya = await localforage.getItem("dataKaryawan");
    // data = datanya;
  }
  ambilData();

  async function backupData() {
    // backup(data, `data msj - ${tanggalSekarang}.json`);
  }

  async function restoreData() {
    // const datanya = await restore();
    // const simpan = await localforage.setItem("dataKaryawan", datanya);
    // if (simpan) {
    //   location.reload();
    // }
  }

  async function logout() {
    let hapus_username = await localforage.setItem(
      "username_tersimpan",
      "aiwklnasfhgainfkjaksrjfklajm"
    );
    let hapus_password = await localforage.setItem(
      "password_tersimpan",
      "klaiufjakldjkfajhioenahjdfjaklf"
    );
    if (hapus_username && hapus_password) {
      $is_login = false;
      replace("/");
    }
  }

  let tampil_formulir = false;
  async function cek_karyawan_dan_ketua_divisi() {
    let karyawan = await localforage.getItem("dataKaryawan");
    let ketua_divisi = await localforage.getItem("data ketua divisi");
    if (karyawan && ketua_divisi) {
      tampil_formulir = true;
    }
  }
  cek_karyawan_dan_ketua_divisi();

  let semua_cuti = false;
  async function cek_cuti() {
    let cek = await localforage.getItem("input data cuti");
    if (cek) {
      semua_cuti = true;
    }
  }
  cek_cuti();
</script>

<Kartu judul="Ringkasan">
  <a href="#/semua-cuti" class="">Semua Cuti</a>
</Kartu>

<Kartu judul="Formulir">
  <a href="#/form-cuti" class="">Form Cuti</a>
</Kartu>

<Kartu judul="Data">
  <a href="#/data-petugas" class="">Data Petugas</a>
  <a href="#/data-karyawan" class="">Data Karyawan</a>
  <a href="#/data-keluarga" class="">Data Keluarga</a>
  <a href="#/data-ketua-divisi" class="">Data Ketua Divisi</a>
</Kartu>

<Kartu judul="Akun">
  <a href="#/ganti-username-dan-password">Ganti Username dan Password</a>
  <a href="#/" on:click|preventDefault={logout}>Logout</a>
</Kartu>

<BackupRestore />
