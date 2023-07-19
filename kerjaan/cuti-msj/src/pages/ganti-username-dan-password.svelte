<script>
  import Judul from "../komponen/judul.svelte";
  import Inputan from "../halaman-login/inputan.svelte";
  import Label from "../halaman-login/label.svelte";
  import Tombol from "../komponen/tombol.svelte";
  import localforage from "localforage";
  import toast from 'only-toast'

  document.title = "Ganti Username dan Password";

  let username;
  let password;

  async function dapatkan_data() {
    username = await localforage.getItem("username");
    password = await localforage.getItem("password");
  }
  dapatkan_data();

  async function ubah_username_dan_password() {
    await localforage.setItem("username", username);
    await localforage.setItem("password", password);
    await localforage.setItem("username_tersimpan", username);
    await localforage.setItem("password_tersimpan", password);
    toast("Username dan password sudah diubah");
  }
</script>

<Judul isi="Ganti Username dan Password" />
<form
  on:submit|preventDefault={ubah_username_dan_password}
  action=""
  class="grid grid-cols-1 gap-2"
>
  <Label teks="Username" />
  <Inputan bind:data={username} />
  <Label teks="Password" />
  <Inputan bind:data={password} type="password" />
  <div>
    <Tombol teks="Ganti" />
  </div>
</form>
