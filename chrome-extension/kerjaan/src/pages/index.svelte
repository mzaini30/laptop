<script>
let data =  $state([])

if (localStorage.data) {
            data = JSON.parse(localStorage.data);
          }

         function  tunda() {
          data = [...data.slice(1), data[0]];
          localStorage.data = JSON.stringify(data);
        }
        function selesai() {
          data = [...data.slice(1)];
          localStorage.data = JSON.stringify(data);
        }

        document.addEventListener("keydown", (event) => {
            // Mengecek apakah tombol yang ditekan adalah F2 (kode tombol F2 adalah 113)
            if (event.keyCode === 113) {
              // Memanggil fungsi olah() jika F2 ditekan
             tambah_baru();
            }
          });

          function tambah_baru() {
          let kerjaan_baru = prompt("Masukkan nama kerjaan baru:");
          if (kerjaan_baru) {
            let data = [];
            if (localStorage.data) {
              data = JSON.parse(localStorage.data);
            }
            data = [...data, kerjaan_baru];
            localStorage.data = JSON.stringify(data);
          }
        }
    </script>

<div class="min-h-screen bg-gray-100">
  <div class="p-5">
    <div class="aplikasi" >
      <div class="grid grid-cols-1 sm:grid-cols-4 gap-5">
        {#each data as x, n}
        <div  class="border rounded shadow p-5 bg-white">
          <div class="pb-3">
            {x}
          </div>
          {#if  n == 0}
          <div
            class="flex justify-between [&_button]:text-sm [&_button]:text-white [&_button]:px-4 [&_button]:py-2 [&_button]:rounded"
            
          >
            <button class="bg-gray-500" onclick="tunda">Tunda</button>
            <button class="bg-green-500" onclick="selesai">Selesai</button>
          </div>
          {/if}
        </div>
        {#each}
      </div>
    </div>
  </div>

  <div class="fixed bottom-5 right-5">
    <div class="aplikasi-tombol" >
      <center>
        <div class="text-sm font-bold">F2</div>
      </center>
      <button
        class=""
        onclick="tambah_baru"
      />
    </div>
  </div>
</div>
<div>
  <script
    data-name="NBJ-Widget"
    data-cfasync="false"
    src="https://www.nihbuatjajan.com/javascripts/widget.prod.min.js?u=mzaini30"
    data-id="mzaini30"
    data-domain="https://www.nihbuatjajan.com"
    data-description=""
    data-message=""
    data-color="#FF813F"
    data-position="left"
    data-x_margin="18"
    data-y_margin="18"
  ></script>
</div>
