<div class="p-3">
  <a
    class="bg-green-500 p-2 text-white text-center w-full block rounded"
    href="https://chat.whatsapp.com/DfmZzWvm5Kr6JLBdPW1Jhs">Join Komunitas</a
  >
</div>

<div class="grid mt-3 grid-cols-2">
  {#each Array(23) as x, n}
    <a href="#/{n + 1}">
      <img
        class="w-full object-cover aspect-square"
        src="gambar/{n + 1}.JPG"
        alt=""
      />
    </a>
  {/each}
</div>
