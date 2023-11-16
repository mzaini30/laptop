<script>
	import Header from '../bagian/header.svelte';
	import { _ as t } from 'svelte-i18n';
</script>

<svelte:head>
	<title>Zen Hack</title>
</svelte:head>

<div class="prose max-w-full">
	<h2>{$t('apa-aja-yang-ditawarkan-oleh-zen-0')}</h2>
	<ol>
		<li>{$t('perbaikan-website')}</li>
		<li>{$t('perbaikan-template-blogspot')}</li>
		<li>{$t('perbaikan-kode-html-css-dan-javascript')}</li>
		<li>{$t('perbaikan-wordpress')}</li>
		<li>{$t('pembuatan-website')}</li>
		<li>{$t('pembuatan-chrome-extension')}</li>
		<li>{$t('pembuatan-aplikasi-android')}</li>
	</ol>
	<h2>{$t('berapa-biayanya')}</h2>
	<p>
		Biayanya adalah 150 ribu per hari. Bisa dicicil kok. Nanti kesepakatan biaya, di awal. Sehingga,
		bisa dipertimbangkan terlebih dahulu.
	</p>
	<h2>Bagaimana cara memesan jasa perbaikan website?</h2>
	<p>Silahkan kontak WhatsApp di nomor 0815-4514-3654</p>
</div>
