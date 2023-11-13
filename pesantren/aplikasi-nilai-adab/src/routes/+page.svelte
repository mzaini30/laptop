<script lang="ts">
	import list_pelajaran from '../data/list-pelajaran.json';
	import kelompok_santri from '../data/kelompok-santri.json';
	import { browser } from '$app/environment';

	let pelajaran_terpilih = $state('');
	let tanggal_terpilih = $state('');
	let kelas_terpilih = $state('Kelas 1');
	let kelompok_kelas = $state([]);
	let nama_santri = $state([]);
	let list_isian = $state([]);
	let ujian = $state(false);
	let isi_download = $state('');
	let isi_download_text = $state('');

	function backup(state, filename) {
		if (browser) {
			const blob = new Blob([state], {
				type: 'application/csv'
			});
			const url = URL.createObjectURL(blob);

			const a = document.createElement('a');
			a.href = url;
			a.download = filename;
			a.click();
		}
	}

	$effect(() => {
		for (let x of kelompok_santri) {
			if (x.kelompok == kelas_terpilih) {
				nama_santri = x.santri;
			}
		}
	});

	$effect(() => {
		if (['Adab', 'Bahasa Arab', 'Fiqh', 'Hadits', 'Siroh'].includes(pelajaran_terpilih)) {
			kelompok_kelas = ['Kelas 1', 'Kelas 2', 'Kelas 3'];
		}
		if (pelajaran_terpilih == 'Tahsin') {
			kelompok_kelas = ['Kelas Dasar', 'Kelas Tengah', 'Kelas Siap'];
		}
		if (pelajaran_terpilih == 'Komputer') {
			kelompok_kelas = ['Kelas Senin', 'Kelas Selasa', 'Kelas Rabu', 'Kelas Kamis', 'Kelas Jumat'];
		}
	});

	$effect(() => {
		generate_santri();
	});

	function generate_santri() {
		list_isian = [];
		for (let x of nama_santri) {
			list_isian = [
				...list_isian,
				{
					nama: x,
					kedisiplinan: [25, 25.1],
					ketertiban: 30,
					keaktifan: [25, 25.1],
					kejujuran: 30
				}
			];
		}
	}

	// Daftar nama bulan dalam bahasa Indonesia
	const namaBulan = [
		'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	];

	// Mendapatkan tanggal saat ini
	const tanggalSekarang = new Date();

	// Mendapatkan tanggal, bulan, dan tahun dari tanggal saat ini
	const tanggal = tanggalSekarang.getDate();
	const bulan = namaBulan[tanggalSekarang.getMonth()];
	const tahun = tanggalSekarang.getFullYear();

	// Membuat string dengan format "tanggal Bulan tahun"
	const tanggalDalamFormat = `${tanggal} ${bulan} ${tahun}`;

	Number.prototype.batasi = function () {
		if (this > 30) {
			return 30;
		}
		if (this == 25.1 || this == 25) {
			return 25;
		} else {
			return 20;
		}
	};

	tanggal_terpilih = tanggalDalamFormat;

	function generate_isi_download() {
		// isi_download = list_isian
		isi_download = [];
		for (let x of list_isian) {
			let total_kedisiplinan = 0;
			for (let y of x.kedisiplinan) {
				total_kedisiplinan += y;
			}

			let total_keaktifan = 0;
			for (let z of x.keaktifan) {
				total_keaktifan += z;
			}

			isi_download = [
				...isi_download,
				{
					nama: x.nama,
					kedisiplinan: total_kedisiplinan.batasi(),
					ketertiban: x.ketertiban,
					keaktifan: total_keaktifan.batasi(),
					kejujuran: x.kejujuran
				}
			];
		}

		isi_download_text = '';
		for (let q of isi_download) {
			isi_download_text += `${q.nama},${q.kedisiplinan},${q.ketertiban},${
				ujian ? q.kejujuran : q.keaktifan
			}\n`;
		}
		backup(
			isi_download_text,
			`${tanggalDalamFormat} - ${kelas_terpilih} - ${pelajaran_terpilih}.csv`
		);
	}

	function simpan() {
		generate_isi_download();
	}
</script>

<svelte:head>
	<title>Nilai Adab</title>
</svelte:head>

<div class="p-3">
	<p>Pelajaran terpilih: {pelajaran_terpilih}</p>
	<p>Kelompok kelas: {JSON.stringify(kelompok_kelas)}</p>
	<div
		class="bagian-menu [&>.kotak]:border-2 [&>.kotak]:p-2 [&>.kotak]:shadow-green-200 [&>.kotak]:inline-block [&>.kotak]:shadow [&>.kotak_select]:w-full [&>.kotak_select]:border [&>.kotak_select]:mt-2"
	>
		<div class="kotak">
			<p>Pilih Pelajaran</p>
			<select bind:value={pelajaran_terpilih} name="" id="">
				{#each list_pelajaran as x}
					<option>{x}</option>
				{/each}
			</select>
		</div>
		<div class="kotak">
			<p>Pilih Kelompok Kelas</p>
			<select bind:value={kelas_terpilih} name="" id="">
				{#each kelompok_kelas as x}
					<option>{x}</option>
				{/each}
			</select>
		</div>
		<div class="kotak">
			<p>Ujian?</p>
			<label><input bind:group={ujian} value={true} type="radio" name="" id="" /> Iya</label>
			<label><input type="radio" bind:group={ujian} value={false} name="" id="" /> Tidak</label>
		</div>
	</div>
	<div class="grid grid-cols-1">
		<div class="bagian-isian mt-5">
			<!-- <pre>{JSON.stringify(list_isian[0], null, 2)}</pre> -->
			<div class="overflow-auto mb-15">
				<table class="w-full border">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Kedisiplinan</th>
							<th>Ketertiban</th>
							{#if !ujian}
								<th>Keaktifan</th>
							{:else}
								<th>Kejujuran</th>
							{/if}
						</tr>
					</thead>
					<tbody class="odd:[&_tr]:bg-slate-200 [&_td]:px-2 [&_label]:whitespace-nowrap">
						{#each list_isian as x}
							<tr>
								<td>{x.nama}</td>
								<td class="[&>label]:block">
									<label>
										<input bind:group={x.kedisiplinan} value={25} type="checkbox" name="" id="" /> Mengerjakan
										tugas
									</label>
									<label>
										<input bind:group={x.kedisiplinan} value={25.1} type="checkbox" name="" id="" />
										Kelengkapan alat belajar
									</label>
								</td>
								<td
									><label class="block"
										><input type="radio" bind:group={x.ketertiban} name="" id="" value={30} /> Tanpa
										ditegur</label
									><label class="block"
										><input type="radio" bind:group={x.ketertiban} name="" id="" value={25} /> Ditegur
										1-2 kali</label
									><label class="block"
										><input type="radio" bind:group={x.ketertiban} name="" id="" value={20} /> Ditegur
										>3 kali</label
									></td
								>
								{#if !ujian}
									<td
										><label class="block"
											><input type="checkbox" bind:group={x.keaktifan} value={25} name="" id="" /> Bertanya</label
										><label class="block"
											><input type="checkbox" bind:group={x.keaktifan} value={25.1} name="" id="" />
											Menjawab pertanyaan</label
										></td
									>
								{:else}
									<td
										><label class="block"
											><input type="radio" bind:group={x.kejujuran} value={30} name="" id="" /> Mandiri</label
										><label class="block"
											><input type="radio" bind:group={x.kejujuran} value={25} name="" id="" /> Nanya
											jawaban ke guru</label
										><label class="block"
											><input type="radio" bind:group={x.kejujuran} value={20} name="" id="" /> Nyontek</label
										></td
									>
								{/if}
							</tr>
						{/each}
					</tbody>
				</table>
			</div>
			<button class="fixed bottom-2 right-2 rounded p-2 bg-green-500 text-white" on:click={simpan}
				>Simpan</button
			>
		</div>
	</div>
</div>
