<script>
  import { xlink_attr } from "svelte/internal";

  let persenan = 0;
  let namamu = "";
  let nama_dia = "";

  $: if (namamu) {
    temukan();
  }

  $: if (nama_dia) {
    temukan();
  }

  function temukan() {
    let total = 0;
    for (let x of namamu) {
      total = total + x.charCodeAt(0);
    }
    for (let x of nama_dia) {
      total = total + x.charCodeAt(0);
    }
    total = ~~(total % 100);
    persenan = total;
  }

  /*
$(".form-control").on("keyup", () => {
  namamu = $(".namamu").val()
  nama_dia = $(".nama-dia").val()
  total = 0
  for (x of namamu){
    total += x.charCodeAt(0)
  }
  for (x of nama_dia){
    total += x.charCodeAt(0)
  }
  total = Math.round(total % 100)
  $(".progress-bar").css("width", `${total}%`)
  $(".kekuatan").html(total)
})

$(".navbar-nav a").click(() => $(".navbar-toggle").click())
  */
</script>

<div class="p-4">
  <div class="flex justify-between mb-4">
    <a
      href="https://play.google.com/store/apps/details?id=com.mzaini30.jodoh"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <div class="w-full gap-4">
    <div class="flex justify-center">
      <div
        class="radial-progress mx-auto text-pink-500"
        style="--value:{persenan}; --size: 200px; --thickness: 2px"
      >
        {persenan}%
      </div>
    </div>
    <div class="[&_*]:text-pink-500">
      <div class="form-control w-full max-w-full">
        <label class="label">
          <span class="label-text">Your Name</span>
        </label>
        <input
          type="text"
          placeholder="Write Here"
          class="input input-bordered w-full max-w-full"
          bind:value={namamu}
        />
      </div>
      <div class="form-control w-full max-w-full">
        <label class="label">
          <span class="label-text">His/Her Name</span>
        </label>
        <input
          type="text"
          placeholder="Write Here"
          class="input input-bordered w-full max-w-full"
          bind:value={nama_dia}
        />
      </div>
    </div>
  </div>
</div>
