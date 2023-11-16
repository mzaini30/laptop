<script>
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
		{$t(
			'biayanya-adalah-150-ribu-per-hari-bisa-dicicil-kok-nanti-kesepakatan-biaya-di-awal-sehingga-bisa-dipertimbangkan-terlebih-dahulu'
		)}
	</p>
	<h2>{$t('bagaimana-cara-memesan-jasa-perbaikan-website')}</h2>
	<p>{$t('silahkan-kontak-whatsapp-di-nomor-0815-4514-3654')}</p>
</div>
