<script>
  let pembilang;
  let penyebut;
  let hasil;

  $: hasil = `${~~((pembilang / penyebut) * 100)}%`;
</script>

<div class="container py-3">
  <p>Pembilang</p>
  <input type="tel" bind:value={pembilang} data-role="input" />
  <p>Penyebut</p>
  <input type="tel" bind:value={penyebut} data-role="input" />
  <p>Hasil</p>
  <input type="tel" bind:value={hasil} data-role="input" />

  <div class="card">
    <div class="card-content p-3 fg-white bg-black">Support Me</div>
    <div class="card-content p-3">
      Gopay : 0815 4514 3654 <br />
      Paypal : muhzaini30@gmail.com
    </div>
  </div>
</div>
