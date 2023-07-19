<script>
  import latar from "./gambar/tambang-update.jpg";
  import Input from "./halaman-login/inputan.svelte";
  import Label from "./halaman-login/label.svelte";
  import localforage from "localforage";
  import harum from "./gambar/harum-energy.png";
  import { is_login } from "./state/login";

  let input_username;
  let input_password;

  async function init() {
    let username = await localforage.getItem("username");
    let password = await localforage.getItem("password");
    if (!username && !password) {
      localforage.setItem("username", "admin");
      localforage.setItem("password", "admin");
    }

    let username_tersimpan = await localforage.getItem("username_tersimpan");
    let password_tersimpan = await localforage.getItem("password_tersimpan");
    if (username_tersimpan && password_tersimpan) {
      if (username_tersimpan == username && password_tersimpan == password) {
        $is_login = true;
      }
    }
  }
  init();

  async function login() {
    let username = await localforage.getItem("username");
    let password = await localforage.getItem("password");
    if (username == input_username && password == input_password) {
      $is_login = true;
      localforage.setItem("username_tersimpan", input_username);
      localforage.setItem("password_tersimpan", input_password);
    } else {
      new Notification("Username dan password salah");
    }
  }
</script>

<img
  src={latar}
  class="w-full h-screen object-cover fixed top-0 -z-99"
  alt=""
/>
<div class="grid grid-cols-1 min-h-screen place-items-center">
  <div class="bg-white rounded-lg p-7 border">
    <div class="">
      <img src={harum} class="h-auto w-50 mx-auto block" alt="" />
    </div>
    <form action="" on:submit|preventDefault={login} class="grid grid-cols-1 gap-5">
      <Label teks="Username" />
      <Input bind:data={input_username} />
      <Label teks="Password" />
      <Input bind:data={input_password} type="password" />
      <div>
        <input
          type="submit"
          value="Login"
          class="bg-black text-white p-3 px-6 rounded inline-block cursour select-none"
        />
      </div>
    </form>
  </div>
</div>
