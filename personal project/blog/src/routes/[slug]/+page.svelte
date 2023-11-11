<script>
	export let data;
</script>

<svelte:head>
	<title>{data.postingan.title}</title>
</svelte:head>

<div class="prose mx-auto py-10">
	<h1>{data.postingan.title}</h1>
	{@html data.postingan.text}
</div>
