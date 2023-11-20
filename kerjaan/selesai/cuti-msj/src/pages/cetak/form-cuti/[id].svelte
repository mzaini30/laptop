<script>
  import localforage from "localforage";
  import gambar from "../../../gambar/logo-msj.png";
  import romawi from "../../../fungsi/convert ke romawi";
  import olah_tanggal from "../../../fungsi/olah tanggal";
  import Kotak from "../../../icon/kotak.svelte";
  import Lebar from "../../../komponen/lebar.svelte"

  export let params;

  let admin;
  let hrd;

  async function dapatkan_admin_dan_hrd() {
    admin = await localforage.getItem("admin");
    hrd = await localforage.getItem("hrd");
  }
  dapatkan_admin_dan_hrd();

  let data;
  let data_tambahan;
  let data_cuti_tahunan;
  let data_ketua_divisi;

  async function ambil_data() {
    let datanya = await localforage.getItem("input data cuti");
    datanya = datanya.filter((x) => x.id == params.id)[0];
    data = datanya;
    console.log(data);

    let olah_data_tambahan = await localforage.getItem("dataKaryawan");
    olah_data_tambahan = olah_data_tambahan.filter(
      (x) => x.npk == datanya.npk
    )[0];
    data_tambahan = olah_data_tambahan;

    let olah_data_cuti_tahunan = await localforage.getItem("cuti_tahunan");
    olah_data_cuti_tahunan = olah_data_cuti_tahunan.filter(
      (x) => x.npk == datanya.npk
    )[0];
    data_cuti_tahunan = olah_data_cuti_tahunan;

    let olah_data_ketua_divisi = await localforage.getItem("data ketua divisi");
    data_ketua_divisi = olah_data_ketua_divisi;
  }
  ambil_data();

  function ambil_ketua_divisi(nama) {
    let data = data_ketua_divisi.filter((x) => x.nama == nama);
    return data[0].divisi;
  }
</script>

{#if data && data_tambahan && data_cuti_tahunan && data_ketua_divisi}
  <table
    class="[&_td]:(w-auto) [&_.garis]:(border-b relative)  [&_div.garis]:inline-block table-auto w-full [&_svg]:inline-block [&_svg]:-mt-1 after:[&_.tanpa-garis]:(inline-block w-full h-2 bg-white content-[''] absolute -bottom-2 left-0)"
  >
    <tbody class="">
      <tr>
        <td><img class="" src={gambar} alt="" /></td>
        <td colspan="5">
          <span class="font-bold text-lg">PT. MAHAKAM SUMBER JAYA</span> <br />
          Jl. Batubara No. 8 Samarinda -75123 <br />
          Telp. (0541) 733 277 Fax. (0541) 742 848
        </td>
      </tr>
      <tr class="py-5">
        <td colspan="6" class="text-center py-5">
          <span class="font-bold text-lg underline"
            >PERMOHONAN CUTI KARYAWAN</span
          > <br />
          No. {data.nomor} / SPC-MSJ / HRDS / {romawi(data.bulan)} / {data.tahun}
        </td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td class="garis">{data.nama}</td>
        <td />
        <td  colspan="2" class="garis">
          <span class="relative">
          <span class="tanpa-garis">No. Id <pre> .</pre>: </span>
        </span>
          <span class="">{data.npk}</span>
        </td>
        <!-- <td>: {data.npk}</td> -->
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td class="garis">{data.jabatan}</td>
        <td />
        <td class="garis" colspan="2">
          <span class="relative"><span class="tanpa-garis">POH <pre>.....</pre>:</span></span> {data.poh}
          
        </td>
        <!-- <td>: {data.poh}</td> -->
      </tr>
      <tr>
        <td>Divisi/Dept./Bagian/Seksi</td>
        <td>:</td>
        <td class="garis"
          >{data.departemen}/{data_tambahan.subDepartemen}/{data_tambahan.seksi}</td
        >
        <td />
        <td colspan="2" class="garis">
          <span class="relative"><span class="tanpa-garis">Status <pre> .</pre>:</span></span>
          
           {data.status}</td>
        <!-- <td>: {data.status}</td> -->
      </tr>
      <tr>
        <td>Alamat cuti</td>
        <td>:</td>
        <td class="garis">{data.alamat_cuti || ""}</td>
        <td />
        <td colspan="2" class="garis">
          <span class="relative"><span class="tanpa-garis">Telp. <pre>  ...</pre>:</span></span>
          
           {data.telpon || ""}</td>
        <!-- <td>: {data.telpon || ""}</td> -->
      </tr>
      <tr>
        <td>Tanggal mulai kerja</td>
        <td>:</td>
        <td colspan="4" class="garis">{data.tanggal_masuk}</td>
      </tr>
      <tr>
        <td>Sisa cuti saat ini</td>
        <td>:</td>
        <td colspan="4" class="garis"
          >cuti tahunan ({data_cuti_tahunan.hak_cuti} hari)
          <!-- / cuti panjang (0 hari) -->
        </td>
      </tr>
      <tr>
        <td>Dengan ini mengajukan</td>
        <td>:</td>
        <td class="garis" colspan="4">{data.jenis_cuti} ({data.jumlah_hari} hari)</td>
      </tr>
      <tr>
        <td>Mulai tanggal</td>
        <td>:</td>
        <td colspan="4"
          ><span class="font-bold garis">{olah_tanggal(data.tanggal_mulai)}</span> s/d
          <span class="font-bold garis">{olah_tanggal(data.tanggal_akhir)}</span></td
        >
      </tr>
      <tr>
        <td colspan="6">Catatan</td>
      </tr>
      <tr>
        <td colspan="6"
          >- Masuk kembali tanggal : <span class="font-bold garis"
            >{olah_tanggal(data.tanggal_kembali)}</span
          ></td
        >
      </tr>
      <tr>
        <td colspan="3">- Agar lapor ke HRDS setelah selesai cuti</td>
        <td colspan="3"><span class="garis">Samarinda</span>, <span class="garis">{olah_tanggal(new Date(), true)}</span></td>
      </tr>
      <tr>
        <td colspan="3">- Tanggal lapor : </td>
        <td colspan="3">Pemohon,</td>
      </tr>
      <tr>
        <td colspan="6">Perjalanan : {data.perjalanan || "............."} hari</td>
      </tr>
      <tr>
        <td colspan="3" />
        <td colspan="3" class="font-bold text-center pt-20 underline">(<Lebar/>{data.nama}<Lebar/>)</td>
      </tr>
      <tr>
        <td colspan="3" />
        <td><Kotak /> Disetujui</td>
        <td><Kotak /> Ditunda</td>
        <td><Kotak /> Dikompensasi</td>
      </tr>
      <tr>
        <td colspan="3" class="text-center">Diperiksa,</td>
        <td><Kotak /> Ditolak</td>
        <td colspan="2"><Kotak /> Dipercepat</td>
      </tr>
      <tr class="text-center">
        <td colspan="3" class="font-bold pt-20 underline">(<Lebar></Lebar>{admin}<Lebar/>)</td>
        <td colspan="3" class="font-bold pt-20 underline">(<Lebar/>{data.disetujui}<Lebar/>)</td>
      </tr>
      <tr class="text-center">
        <td colspan="3">Admin</td>
        <td colspan="3">{ambil_ketua_divisi(data.disetujui)}</td>
      </tr>
      <tr class="text-center">
        <td colspan="3">Dicatat,</td>
        <td colspan="3">Diketahui,</td>
      </tr>
      <tr class="text-center">
        <td colspan="3" class="font-bold pt-20 underline">(<Lebar/>{hrd}<Lebar/>)</td>
        <td colspan="3" class="font-bold pt-20 underline">(<Lebar/>{data.mengetahui}<Lebar/>)</td>
      </tr>
      <tr class="text-center">
        <td colspan="3">HRDS</td>
        <td colspan="3">{ambil_ketua_divisi(data.mengetahui)}</td>
      </tr>
    </tbody>
  </table>
{/if}

<style>
  /* td {
    border: 1px solid black;
  } */
  pre {
    display: inline-block;
    visibility: hidden;
    font-family: inherit;
  }
</style>
