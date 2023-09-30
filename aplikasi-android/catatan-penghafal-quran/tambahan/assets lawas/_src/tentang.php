<?php ob_start() ?>
Aplikasi ini adalah kumpulan motivasi yang ditulis oleh santri-santri Madrasah Quran Baitul Izzah Samarinda (Mabaiz). Mabaiz ini adalah sebuah pondok pesantren khusus menghafal Al-Quran tingkatan SMP dengan sistem menghafal setiap harinya minimal satu halaman dan diulangi sebanyak lima kali. Lalu, pada malam harinya, memurajaah hafalan satu juz. Pada Sabtu, murajaah minimal lima juz.

Jika kamu suka dengan aplikasi ini, bisa memberikan [komentar positif di Play Store](https://play.google.com/store/apps/details?id=com.mzaini30.catatanpenghafalquran).
<?php $markdown = ob_get_clean() ?>

<?php ob_start() ?>
	
	<?php  
		require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
		use Michelf\Markdown;
		$html = Markdown::defaultTransform($markdown);
	?>

	<h1>Tentang Aplikasi</h1>
	<div class="content"><?= $html ?></div>

<style>
h1 {margin-bottom: .5rem;}
</style>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base.php' ?>