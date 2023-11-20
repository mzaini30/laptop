<script>
  import { goto } from "$app/navigation";
  import { browser } from "$app/env";
  if (browser) {
    goto("/user");
  }
  // async function menuju(){
  // 	await goto('/user')
  // }
  // menuju()
</script>

<svelte:head>
  <title>Bapas</title>
</svelte:head>
