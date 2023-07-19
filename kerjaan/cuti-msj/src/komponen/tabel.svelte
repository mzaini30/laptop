<script>
  // header yang pertama adalah kunci
  // Harus ada object id yang merupakan UUID
  export let header = [];
  export let link_edit = "";
  export let isi = [];

  import { createEventDispatcher } from "svelte";
  import Cetak from "../fungsi/cetak.svelte";
  import sortable_table_action from "../fungsi/sortable-table-action";

  const dispatch = createEventDispatcher();

  function hapus(id) {
    // alert(id)
    dispatch("perintah_hapus", {
      id,
    });
  }
</script>

{#if isi}
  <div class="w-full overflow-x-auto max-h-[80vh] overflow-h-auto">
    <table class="min-w-full" use:sortable_table_action>
      <thead class="uppercase sticky top-0 bg-gray-200">
        <tr>
          {#each header as h}
            <th class="p-2 border">{h.replaceAll("_", " ")}</th>
          {/each}
        </tr>
      </thead>
      <tbody>
        {#each isi as i}
          <tr class="hover:bg-gray-100">
            {#each header as h, n}
              <td class="p-2 border"
                >{i[h] || "-"}
                {#if n == 0}
                  <a class="underline control" href="{link_edit}{i.id}"
                    >(edit)</a
                  >
                  <a
                    href="/"
                    class="underline control"
                    on:click|preventDefault={() => hapus(i.id)}>(hapus)</a
                  >
                  <!-- <Cetak data={Object.values(i)[0]} /> -->
                {/if}
              </td>
            {/each}
          </tr>
        {/each}
      </tbody>
    </table>
  </div>
{/if}
