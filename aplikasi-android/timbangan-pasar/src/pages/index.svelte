<script>
  let kilo;
  let harga;
  let total;

  $: total = !isNaN((kilo * harga * 1000).toLocaleString("id"))
    ? (kilo * harga * 1000).toLocaleString("id")
    : 0;
</script>

<div class="container py-3">
  <p>Berapa kilo?</p>
  <input type="tel" bind:value={kilo} data-role="input" data-append="kg" />

  <p>Harga per kilo? <em>(dalam ribuan)</em></p>
  <input
    type="tel"
    data-role="input"
    bind:value={harga}
    data-prepend="Rp"
    data-append="000"
  />

  <p>Total</p>
  <input type="tel" bind:value={total} data-role="input" data-prepend="Rp" />

  <div class="card">
    <div class="card-content p-3 fg-white bg-black">Support Me</div>
    <div class="card-content p-3">
      Gopay : 0815 4514 3654 <br />
      Paypal : muhzaini30@gmail.com
    </div>
  </div>
</div>
