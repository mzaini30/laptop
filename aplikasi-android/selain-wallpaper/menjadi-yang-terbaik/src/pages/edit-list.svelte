<script>
  import slug from "../fungsi/slug";
  import toast from "only-toast";
  import { push } from "svelte-spa-router";

  let input_baru = "";
  let listnya = []; // id, judul

  if (localStorage.listnya) {
    listnya = JSON.parse(localStorage.listnya);
  }

  function tambahkan_baru() {
    let ada = false;
    if (listnya.length > 0) {
      for (let x of listnya) {
        if (x.judul.toLowerCase() == input_baru.toLowerCase()) {
          ada = true;
        }
      }
    }
    if (ada == false) {
      listnya = [
        ...listnya,
        {
          id: crypto.randomUUID(),
          judul: input_baru,
          slug: slug(input_baru),
          data: [], // tanggal, banyaknya
        },
      ];
      localStorage.listnya = JSON.stringify(listnya);
      input_baru = "";
    } else {
      input_baru = "";
    }
  }
</script>

<div class="p-4">
  <a href="#/" class="">⬅️ Beranda</a>
  <form action="" class="mt-4" on:submit|preventDefault={tambahkan_baru}>
    <p>List Baru:</p>
    <input
      type="text"
      bind:value={input_baru}
      class="input input-bordered w-full"
    />
  </form>
  <div class="join join-vertical w-full mt-5">
    {#each listnya.sort((a, b) => (a.judul > b.judul ? 1 : -1)) as x}
      <button
        on:click={() => push(`/edit-listnya/${x.id}`)}
        class="btn join-item">{x.judul}</button
      >
    {/each}
  </div>
</div>
