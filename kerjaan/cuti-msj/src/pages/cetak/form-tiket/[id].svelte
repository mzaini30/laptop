<script>
  import BagianLogo from "./bagian-logo.svelte";
</script>

<div class="grid grid-cols-115">
  <div class="kiri col-span-65">
    <div class="invisible">
      <BagianLogo />
    </div>
    <p class="font-bold mb-3">PT. MAHAKAM SUMBER JAYA</p>
    <p>Dengan hormat,</p>
    <p>Sehubungan dengan pelaksanaan cuti saya pada</p>
    <p>tanggal 3-Jan-23 s/d 7-Jan-23</p>
    <p>mengajukan permohonan tiket perjalanan cuti periode</p>
    <p>dengan tujuan Yogyakarta</p>
    <p><span class="icon">Ø</span> Point of hire : Yogyakarta</p>
    <p><span class="icon">Ø</span> Date of hire : 01 November 2000</p>
    <p><span class="icon">Ø</span> Adapun tiket akan saya minta dalam bentuk</p>
    <p class="font-bold underline">uang tunai</p>
    <table
      class="[&_td]:(border border-black px-1) [&_th]:(border border-black px-1)"
    >
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Hubungan</th>
          <th>Biaya Tiket</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1.</td>
          <td>Siswanto</td>
          <td>Karyawan ybs.</td>
          <td>Rp 1.720.000</td>
        </tr>
        <tr>
          <td class="text-center">2.</td>
          <td>Yulia</td>
          <td>Istri</td>
          <td>Rp 1.000.000</td>
        </tr>
        <tr>
          <td class="text-center">3.</td>
          <td>Hendra</td>
          <td>Anak ke 1</td>
          <td>Rp 1.000.000</td>
        </tr>
        <tr>
          <td class="text-center">4.</td>
          <td>Rico</td>
          <td>Anak ke 2</td>
          <td>Rp 1.000.000</td>
        </tr>
        <tr>
          <td />
          <td />
          <td />
          <td>Rp 10.000.000</td>
        </tr>
      </tbody>
    </table>
    <p>Demikian disampaikan, atas perhatiannya saya</p>
    <p>ucapkan terima kasih.</p>
    <p class="py-10 pb-16">Hormat saya,</p>
    <p class="font-bold underline">Siswanto</p>
    <p>Karyawan ybs.</p>
  </div>
  <div
    class="kanan col-span-50 last:[&_.kotak]:border-b [&_.kotak]:(border border-black border-b-0 p-1)"
  >
    <BagianLogo />
    <!-- <div class="bagian-logo">
      <img src={logo} alt="" />
      <p class="font-bold text-sm">COAL MINING</p>
      <p class="text-sm">Jl. Batubara No. 8 Samarinda - 75123</p>
      <p class="text-sm">Tel. (0541) 733 277</p>
      <p class="text-sm">Fax. (0541) 742 848</p>
    </div> -->
    <div class="kotak mt-15 [&>*]:pb-3">
      <p>Samarinda, 14 Agustus 2023</p>
      <p>No. 491 /SPC/MSJ/ XII /LAMP/ 2022</p>
    </div>
    <div class="kotak !py-3">
      <p>Kepada Yth.</p>
      <div class="py-3">
        <p class="pl-5">
          <span class="icon">Ø</span>
          <span>Finance Manager </span>
        </p>
        <p class="pl-10">Bpk. Hendra Tjoa</p>
      </div>
    </div>
    <div class="kotak !py-3">
      <p>Perihal :</p>
      <p class="py-3 pl-5"><span class="icon">Ø</span> Permohonan Tiket Cuti</p>
    </div>
    <div class="kotak !py-3">
      <p class="pt-7 pb-20">Mengetahui,</p>
      <div class="text-center">
        <p class="font-bold underline">AGUS WINARTO</p>
        <p>(HRDS DEPT. HEAD)</p>
      </div>
    </div>
  </div>
</div>

<style>
  @font-face {
    src: url("/wingding.ttf");
    font-family: wingdings;
  }
  .icon {
    font-family: wingdings;
  }
</style>
