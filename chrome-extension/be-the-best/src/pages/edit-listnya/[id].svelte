<script>
  export let params = {};

  import { push, replace } from "svelte-spa-router";
  import { onMount } from "svelte";

  let teks = "";
  let elemen_input;

  onMount(() => elemen_input.focus());

  let datanya = JSON.parse(localStorage.listnya).filter(
    (x) => x.id == params.id,
  )[0];
  teks = datanya.judul;

  function update() {
    let semua_data = JSON.parse(localStorage.listnya);
    let ketemu = semua_data.find((x) => x.id == params.id);
    if (ketemu) {
      ketemu.judul = teks;
    }
    teks = "";
    localStorage.listnya = JSON.stringify(semua_data);
    push("/edit-list");
  }

  function hapus() {
    let semua_data = JSON.parse(localStorage.listnya);
    semua_data = semua_data.filter((x) => x.id != params.id);
    teks = "";
    localStorage.listnya = JSON.stringify(semua_data);
    replace("/edit-list");
  }
</script>

<div class="p-4">
  <form action="" on:submit|preventDefault={update}>
    <input
      bind:this={elemen_input}
      bind:value={teks}
      type="text"
      class="input input-bordered w-full mb-5"
    />
    <div class="flex justify-between">
      <button class="btn">Update</button>
      <button class="btn btn-error" on:click|preventDefault={hapus}
        >Delete</button
      >
    </div>
  </form>
</div>
