<script>
  let hasil_pencarian = [];
</script>

<input
  type="text"
  placeholder="Nama barang"
  class="input input-bordered block w-full"
/>
<div class="grid grid-cols-2 gap-2">
  <div>
    <div class="form-control mt-2 w-full">
      <label class="label">
        <span class="label-text">Hasil Pencarian</span>
      </label>
      <ul class="menu bg-base-200 w-full rounded-box">
        <li>
          <a class="" href="#/">
            <span>a</span>
            <span class="badge">5000</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div>
    <p class="[&>*]:text-xl btn mt-2 flex justify-between">
      <span>Total</span>
      <span>3000000</span>
    </p>
    <div class="form-control w-full">
      <label class="label">
        <span class="label-text">List Pembelian</span>
      </label>
      <ul class="menu bg-base-200 w-full rounded-box">
        <li>
          <a class="" href="#/">
            <span>a</span>
            <span class="badge">5000</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<button class="btn fixed bottom-3 right-3">Simpan</button>
