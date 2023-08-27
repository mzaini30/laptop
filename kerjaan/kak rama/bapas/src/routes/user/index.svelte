<script>
  // import {role, username, email} from '$lib/store'
  const link = [
    "Pedoman Penggunaan Aplikasi SAKU-PK",
    "KepDirjenPas No. PAS-31.OT.02.02 Tahun 2021 Asesmen Risiko dan Kebutuhan Versi 02",
    "KepDirjenPas No. PAS-120.PK.01.04.03 Tahun 2019 Instrumen Penilaian Risiko dan Kriminogenik Anak",
    "KepDirjenPas No. PAS-58.OT.02.02 Tahun 2019 Instrumen Screening Penempatan Narapidana (ISPN)",
  ];
</script>

<svelte:head>
  <title>Asesmen Permasyarakatan</title>
</svelte:head>

<p class="pesan">
  Selamat Datang di Sistem Aplikasi <em>Assessment</em> Khusus Pembimbing
  Kemasyarakatan. <br />
  Presented by: Tamyis Ade Rama, S.Psi. (NIP.19931009 201712 1 001) <br />
  Supported by: Direktorat Jenderal Pemasyarakatan
  <!-- Powered by: Tamyis Ade Rama, S.Psi. (NIP.19931009 201712 1 001) -->
  <!-- Powered by: Direktorat Jenderal Pemasyarakatan -->
</p>

<div class="p-3">
  <p class="pb-2">
    Silahkan klik link di bawah ini, untuk mendapatkan panduan dalam menggunakan
    aplikasi SAKU-PK.
  </p>
  <ol>
    {#each link as x}
      <li class="ml-5 list-decimal">
        <a target="_blank" class="hover:underline" href="/bukuPanduan/{x}.pdf"
          >{x}</a
        >
      </li>
    {/each}
  </ol>
</div>

<!-- {Math.random()} -->
<!-- {new Date(Date.now() + parse('1 day'))} -->

<!-- {$role} - {$username} - {$email} -->
<style>
  .pesan {
    @apply bg-green-300/50 rounded px-5 py-2;
    line-height: 2;
  }
</style>
