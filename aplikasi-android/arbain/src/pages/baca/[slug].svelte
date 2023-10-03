<script>
  export let params = {};

  import data from "../../tiddlers/published.json";

  let terpilih = data.filter((x) => x.published_date == params.slug)[0];
</script>

<div class="p-4" style="direction: rtl;">
  <h1 class="text-3xl mb-6 font-bold">{terpilih.title.split(". ")[1]}</h1>
  <div
    class="[&_br]:block leading-[2] [&_br]:w-full [&_br]:h-6 [&_br]:content-['']"
  >
    {@html terpilih.text}
  </div>

  <a href="" class="btn w-full mt-6 mb-3">Next</a>
  <a href="#/" class="btn w-full">Home</a>
</div>
