<script>
  import "../bahan/font.css";
  import namaFont from "../bahan/nama-font";
  import { push } from "svelte-spa-router";
  //   import iklan from "../gambar/your-ad-here.jpg";
  // import dom_to_image from "dom-to-image";
  // import { slug } from "kumpulan-tools";
  // import iklan from "../gambar/Jasa Perbaikan Website 0815 4514 3654 (WA).jpg";
  import iklan from "../data/afiliasi.json";
  import { acak } from "kumpulan-tools";

  let iklan_terpilih = acak(iklan)[0];
  let support_me = true;
  let fontSize = 50;
  let teks = "";
  let warna = "#000";
  let element;

  // async function download(id) {
  //   const blob_gambar =          await dom_to_image.toBlob(
  //     document.querySelector(`.isi-${id}`)
  //   );
  //   console.log(blob_gambar);
  // }
</script>

<div class="p-2">
  <div class="">
    <div class={teks ? "" : "mt-[20vh] rounded text-center"}>
      <!-- <div > -->
      {#if !teks}
        <div class="pb-3 text-[30px] font-bold">خط</div>
      {/if}

      <input
        dir="rtl"
        class="w-full border border-blue-500 p-2 px-3 rounded {teks
          ? ''
          : 'text-center'}"
        type="text"
        data-role="input"
        placeholder="اكتب هنا"
        bind:value={teks}
      />
    </div>

    {#if teks}
      <div class="grid grid-cols-1 gap-3">
        <div class="mt-3">
          <a href="https://t.me/apktrihandayani" class="btn w-full">Join Team</a
          >
        </div>

        <!-- <img src={iklan} class="block mt-3" alt="" /> -->
        <!-- <a href={iklan_terpilih.link} class="">
          <img src={iklan_terpilih.gambar} alt="" />
        </a> -->
        <!-- <a
          class="bg-blue-500 text-white p-3 rounded text-center mt-3"
          href="https://play.google.com/store/apps/dev?id=5401138465689796048"
          >Other Apps</a
        >  -->
        {#each namaFont as item}
          <div class="first:mt-3 bg-white border-2 border-gray-300 p-4">
            <div class="text-center text-gray-700 mb-3">
              <div>{item}</div>
              <!-- <button>download</button> -->
            </div>
            <div
              style="font-size: {fontSize}px; font-family: '{item}';
            color: {warna}"
              dir="rtl"
              class=""
            >
              {teks}
            </div>
          </div>
        {/each}
        <!-- <a
          href="https://support-zen.vercel.app"
          class="rounded-[50px] mb-5 bg-orange-500 p-3 w-[50%] mx-auto block text-center text-white"
          >Support Me</a
        > -->
      </div>
    {/if}

    <!-- <div class="py-4 mx-auto flex justify-center">
      <a
        href="https://chat.whatsapp.com/HFVW22P2dpeKOMBJFpSqUd"
        class="inline-block mx-auto no-underline black text-sm border border-black rounded text-black p-2"
        >Join Community</a
      >
    </div> -->

    <!-- <a href="https://wa.me/6281545143654" class="block mt-3"
        ><img src={iklan} alt="" /></a
      > -->

    {#if teks}
      <div class="[&>*]:fixed [&>*]:bottom-2">
        <select
          name=""
          id=""
          bind:value={fontSize}
          class="left-2 block border border-gray-200 rounded"
        >
          {#each Array(100) as x, n}
            {#if (+n + 1) % 5 == 0}
              <option value={+n + 1}>{+n + 1}</option>
            {/if}
          {/each}
        </select>
        <!-- <input
        data-role="slider"
        data-hint="true"
        class="slider"
        data-value={fontSize}
        on:change={(x) => (fontSize = x.detail.val)}
      /> -->
        <input type="color" class=" right-2" bind:value={warna} />
      </div>
    {/if}
  </div>
</div>
