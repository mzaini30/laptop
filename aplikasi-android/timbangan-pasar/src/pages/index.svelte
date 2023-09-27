<script>
  let kilo;
  let harga;
  let total;

  let tab_aktif = "kg";
  let mencari_kg = false;

  let uang_yang_dimiliki = "";
  let harga_per_kilo = "";
  let hasil = 0;

  $: hasil = (uang_yang_dimiliki / harga_per_kilo).toLocaleString("id");

  $: total = !isNaN((kilo * harga * 1000).toLocaleString("id"))
    ? (kilo * harga * 1000).toLocaleString("id")
    : 0;
</script>

<div class="container py-3">
  <ul data-role="tabs" data-expand="true">
    <li
      class:active={tab_aktif == "kg"}
      on:click={() => {
        tab_aktif = "kg";
        mencari_kg = false;
      }}
    >
      <a href="#">Kg</a>
    </li>
    <li
      class:active={tab_aktif == "ons"}
      on:click={() => {
        tab_aktif = "ons";
        mencari_kg = false;
      }}
    >
      <a href="#">Ons</a>
    </li>
    <li
      class:active={tab_aktif == "mencari_kg"}
      on:click={() => {
        mencari_kg = true;
        tab_aktif = "mencari_kg";
      }}
    >
      <a href="#">Mencari Kg</a>
    </li>
  </ul>

  {#if mencari_kg == false}
    <p>
      Berapa {#if tab_aktif == "kg"}kilo{:else}ons{/if}?
    </p>
    <div class="input">
      <input
        type="tel"
        bind:value={kilo}
        data-role="input"
        data-role-input="true"
        class=""
      />

      <div class="append">
        {tab_aktif}
      </div>
    </div>

    <p>
      Harga per {#if tab_aktif == "kg"}kilo{:else}ons{/if}?
      <em>(dalam ribuan)</em>
    </p>
    <div class="input">
      <input
        bind:value={harga}
        type="tel"
        data-role="input"
        data-prepend="Rp"
        data-append="000"
        data-role-input="true"
        class=""
      />

      <div class="prepend">Rp</div>
      <div class="append">000</div>
    </div>

    <p>Total</p>
    <div class="input">
      <input
        bind:value={total}
        type="tel"
        data-role="input"
        data-prepend="Rp"
        data-append="000"
        data-role-input="true"
        class=""
      />

      <div class="prepend">Rp</div>
    </div>
  {:else}
    <p>Uang yang Dimiliki?</p>
    <div class="input">
      <input
        bind:value={uang_yang_dimiliki}
        type="tel"
        data-role="input"
        data-prepend="Rp"
        data-append="000"
        data-role-input="true"
        class=""
      />

      <div class="prepend">Rp</div>
      <div class="append">000</div>
    </div>

    <p>
      Harga per kilo?
      <em>(dalam ribuan)</em>
    </p>
    <div class="input">
      <input
        bind:value={harga_per_kilo}
        type="tel"
        data-role="input"
        data-prepend="Rp"
        data-append="000"
        data-role-input="true"
        class=""
      />

      <div class="prepend">Rp</div>
      <div class="append">000</div>
    </div>

    <p>Hasil</p>
    <div class="input">
      <input
        type="tel"
        bind:value={hasil}
        data-role="input"
        data-role-input="true"
        class=""
      />

      <div class="append">kg</div>
    </div>
  {/if}

  <div class="pt-10">
    <button
      class="button"
      on:click={() =>
        (location.href =
          "https://play.google.com/store/apps/details?id=com.mzaini30.timbanganpasar")}
      >Review App</button
    >
    <button
      class="button"
      on:click={() =>
        (location.href =
          "https://play.google.com/store/apps/dev?id=5401138465689796048")}
      >Other Apps</button
    >
  </div>
</div>
