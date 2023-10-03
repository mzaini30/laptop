<script>
  import data from "../tiddlers/published.json";
</script>

<div class="p-3">
  <div class="flex justify-between mb-3">
    <a
      href="https://play.google.com/store/apps/details?id=com.arbainnawawi.ibnurajab"
      class="btn">Review App</a
    >
    <a
      href="https://play.google.com/store/apps/dev?id=5401138465689796048"
      class="btn">Other Apps</a
    >
  </div>
  <ul class="menu bg-base-200 w-full rounded-box">
    {#each data.sort((a, b) => (a.title > b.title ? 1 : -1)) as x}
      <li class="" style="">
        <a
          href="#/baca/{x.published_date}"
          style="direction: rtl;"
          class="text-right">{x.title.split(". ")[1]}</a
        >
      </li>
    {/each}
  </ul>
</div>
