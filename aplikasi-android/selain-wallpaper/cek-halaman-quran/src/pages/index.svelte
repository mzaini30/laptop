<script>
  import Olah from "../worker/olah-surat?worker";
  const olah = new Olah();

  let halaman = "";
  let hasil = "";

  $: olah.postMessage(halaman);

  olah.addEventListener("message", (x) => (hasil = x.data));
</script>

<div class="container py-3">
  <p>Halaman Quran</p>
  <input type="tel" bind:value={halaman} data-role="input" />
  <p>Hasil</p>
  <textarea
    name=""
    bind:value={hasil}
    data-role="textarea"
    id=""
    cols="30"
    rows="10"
  />
  <div class="card">
    <div class="card-content bg-black fg-white p-2">Support Me</div>
    <div class="card-content p-2">
      Gopay : 0815-4514-3654 <br />
      Paypal : muhzaini30@gmail.com
    </div>
  </div>
</div>
