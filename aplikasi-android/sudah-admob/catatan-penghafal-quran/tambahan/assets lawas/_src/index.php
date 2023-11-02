<?php ob_start() ?>
	<img src="gambar/logo-mabaiz.png" alt="" />
	<h1>Catatan Penghafal Quran</h1>

	<?php 
		$angkatan = [2020];
		rsort($angkatan);
	?>

	<div class="list">
		<?php foreach ($angkatan as $x): ?>
			<a href="angkatan/<?= $x ?>.php">Angkatan <?= $x ?></a>
		<?php endforeach ?>
		<a href="tentang.php">Tentang Aplikasi</a>
	</div>

<style>


img {width: 5rem;display: block;margin: auto;margin-bottom: 1rem;}


</style>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>