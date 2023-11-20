<script>
  import { backup, restore } from "backup-state";
  import localforage from "localforage";
  import toast from "only-toast";

  let datanya = {
    admin: "",
    cuti_tahunan: [],
    data_ketua_divisi: [],
    dataKaryawan: [],
    dataKeluarga: [],
    hrd: "",
    input_data_cuti: [],
    password: "",
    password_tersimpan: "",
    periode: "",
    username: "",
    username_tersimpan: "",
  };

  async function cek_admin() {
    let cek = await localforage.getItem("admin");
    if (cek) {
      datanya.admin = cek;
    }
    console.log("1/12");
  }

  async function cek_cuti_tahunan() {
    let cek = await localforage.getItem("cuti_tahunan");
    if (cek) {
      datanya.cuti_tahunan = cek;
    }
    console.log("2/12");
  }

  async function cek_data_ketua_divisi() {
    let cek = await localforage.getItem("data ketua divisi");
    if (cek) {
      datanya.data_ketua_divisi = cek;
    }
    console.log("3/12");
  }

  async function cek_data_karyawan() {
    let cek = await localforage.getItem("dataKaryawan");
    if (cek) {
      datanya.dataKaryawan = cek;
    }
    console.log("4/12");
  }

  async function cek_data_keluarga() {
    let cek = await localforage.getItem("dataKeluarga");
    if (cek) {
      datanya.dataKeluarga = cek;
    }
    console.log("5/12");
  }

  async function cek_hrd() {
    let cek = await localforage.getItem("hrd");
    if (cek) {
      datanya.hrd = cek;
    }
    console.log("6/12");
  }

  async function cek_input_data_cuti() {
    let cek = await localforage.getItem("input data cuti");
    if (cek) {
      datanya.input_data_cuti = cek;
    }
    console.log("7/12");
  }

  async function cek_password() {
    let cek = await localforage.getItem("password");
    if (cek) {
      datanya.password = cek;
    }
    console.log("8/12");
  }

  async function cek_password_tersimpan() {
    let cek = await localforage.getItem("password_tersimpan");
    if (cek) {
      datanya.password_tersimpan = cek;
    }
    console.log("9/12");
  }

  async function cek_periode() {
    let cek = await localforage.getItem("periode");
    if (cek) {
      datanya.periode = cek;
    }
    console.log("10/12");
  }

  async function cek_username() {
    let cek = await localforage.getItem("username");
    if (cek) {
      datanya.username = cek;
    }
    console.log("11/12");
  }

  async function cek_username_tersimpan() {
    let cek = await localforage.getItem("username_tersimpan");
    if (cek) {
      datanya.username_tersimpan = cek;
    }
    console.log("12/12");
  }

  async function backup_data() {
    await Promise.all([
      cek_admin(),
      cek_cuti_tahunan(),
      cek_data_ketua_divisi(),
      cek_data_karyawan(),
      cek_data_keluarga(),
      cek_hrd(),
      cek_input_data_cuti(),
      cek_password(),
      cek_password_tersimpan(),
      cek_periode(),
      cek_username(),
      cek_username_tersimpan(),
    ]);
    console.log("sudah semua");
    console.log(datanya);
    backup(datanya, "cuti-msj.json");
  }
  async function restore_data() {
    const {
      admin,
      cuti_tahunan,
      data_ketua_divisi, // jadi spasi
      dataKaryawan,
      dataKeluarga,
      hrd,
      input_data_cuti, // jadi spasi
      password,
      password_tersimpan,
      periode,
      username,
      username_tersimpan,
    } = await restore();
    console.log(cuti_tahunan);
    await Promise.all([
      localforage.setItem("admin", admin),
      localforage.setItem("cuti_tahunan", cuti_tahunan),
      localforage.setItem("data ketua divisi", data_ketua_divisi),
      localforage.setItem("dataKaryawan", dataKaryawan),
      localforage.setItem("dataKeluarga", dataKeluarga),
      localforage.setItem("hrd", hrd),
      localforage.setItem("input data cuti", input_data_cuti),
      localforage.setItem("password", password),
      localforage.setItem("password_tersimpan", password_tersimpan),
      localforage.setItem("periode", periode),
      localforage.setItem("username", username),
      localforage.setItem("username_tersimpan", username_tersimpan),
    ]);
    toast("Data telah dikembalikan");
  }

  import Kartu from "./kartu.svelte";
</script>

<Kartu judul="Backup & Restore">
  <a on:click|preventDefault={backup_data} href="#/backup" class="">Backup </a>
  <a on:click|preventDefault={restore_data} href="#/restore" class="">Restore</a
  >
</Kartu>
