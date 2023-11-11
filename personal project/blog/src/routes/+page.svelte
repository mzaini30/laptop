<script>
	import semua_tulisan from '../tiddlers/published.json';
</script>

<svelte:head>
	<title>Blog Zen</title>
</svelte:head>

<ul class="menu bg-base-200 w-full rounded-box">
	{#each semua_tulisan as x}
		<li><a href="/{x.slug}">{x.title}</a></li>
	{/each}
</ul>
