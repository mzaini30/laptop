<?php ob_start() ?>
	<h1>Angkatan 2020</h1>

	<div class="list">
		<?php  
			$konten = [
				[
					'judul' => 'Menghafal Al-Quran', 
					'nama' => 'Jafar Ash-Shadiq Habibullah Fatah', 
					'file' => 'habib'
				],
				[
					'judul' => 'Kata-Kata Penyemangat untuk Para Hafidz dan Hafidzah', 
					'nama' => 'Muhammad Raffa Az-Zura', 
					'file' => 'raffa'
				],
				[
					'judul' => 'Pantang Menyerah Menghafal Al-Quran',
					'nama' => 'Royyan Abdullah Assariy',
					'file' => 'royyan'
				],
				[
					'judul' => 'Menghafal Al-Quran dengan Rileks',
					'nama' => 'Syamil Muwahiduddin',
					'file' => 'syamil'
				],
				[
					'judul' => 'Kemuliaan Al-Quran',
					'nama' => 'Abdurrahman Al-Zuhdi',
					'file' => 'zuhdi'
				],
				[
					'judul' => 'Menghafal Al-Quran Itu Mudah',
					'nama' => 'Dzakir Hawary Arbie',
					'file' => 'dzakir'
				],
				[
					'judul' => 'Ahlul Quran',
					'nama' => 'Muhammad Firmansyah',
					'file' => 'firman'
				],
				[
					'judul' => 'Cara Menghafal Al-Quran',
					'nama' => 'Muhammad Fatih Yusuf Rahman',
					'file' => 'fatih'
				]
			];
			usort($konten, function($a, $b){
				return strcmp($a['judul'], $b['judul']);
			});
		?>
		<?php foreach ($konten as $x): ?>
			<a href="../konten/2020/<?= $x['file'] ?>.php">
				<?= $x['judul'] ?>
				<small><?= $x['nama'] ?></small>
			</a>
		<?php endforeach ?>
	</div>
<?php $slot = ob_get_clean() ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/base-anak.php' ?>