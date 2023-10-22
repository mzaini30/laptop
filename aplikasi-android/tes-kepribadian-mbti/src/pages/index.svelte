<!-- App.svelte -->
<script>
  import statements_rapi from "../data.json";
  import { acak } from "kumpulan-tools";
  import { push } from "svelte-spa-router";

  const statements = acak(statements_rapi);

  let currentStatement = 0;
  let mbtiScores = {
    extrovert: 15,
    introvert: 15,
    sensing: 15,
    intuition: 15,
    feeling: 15,
    thinking: 15,
    judging: 15,
    perceiving: 15,
  };

  const handleResponse = (response, kebalikan = false) => {
    for (const key in response) {
      if (kebalikan) {
        mbtiScores[key] -= response[key];
      } else {
        mbtiScores[key] += response[key];
      }
      mbtiScores.text = "";
    }
    console.log(mbtiScores);
    nextStatement();
  };

  const nextStatement = () => {
    if (currentStatement < statements.length - 1) {
      currentStatement += 1;
      // di bagian sini untuk menambahkan perhitungan
    } else {
      // Tampilkan hasil MBTI berdasarkan skor
      let mbtiType = "";
      if (mbtiScores.extrovert > mbtiScores.introvert) mbtiType += "E";
      else mbtiType += "I";
      if (mbtiScores.sensing > mbtiScores.intuition) mbtiType += "S";
      else mbtiType += "N";
      if (mbtiScores.feeling > mbtiScores.thinking) mbtiType += "F";
      else mbtiType += "T";
      if (mbtiScores.judging > mbtiScores.perceiving) mbtiType += "J";
      else mbtiType += "P";

      push(`/hasil/${mbtiType}`);

      // toast(`Hasil MBTI Anda: ${mbtiType}`);
    }
  };

  $: currentStatementText = statements[currentStatement].text;

  // nextStatement();
</script>

<div class="flex justify-between fixed top-3 px-3 w-full">
  <a
    href="https://play.google.com/store/apps/details?id=com.teskepribadian.mbti"
    class="btn">Review App</a
  >
  <a
    href="https://play.google.com/store/apps/dev?id=5401138465689796048"
    class="btn">Other Apps</a
  >
</div>

<main>
  <div class="flex items-center h-screen">
    <div class="">
      {#if currentStatement < statements.length}
        <p class="text-center mb-10 w-[80%] mx-auto">{currentStatementText}</p>
      {/if}
      <div class="[&>*]:text-3xl">
        <div
          class="radial-progress text-primary"
          style="--value:{(mbtiScores.extrovert * 100) / 30};"
        >
          {#if mbtiScores.extrovert > 15}
            E
          {:else}
            I
          {/if}
        </div>
        <div
          class="radial-progress text-error"
          style="--value:{(mbtiScores.sensing * 100) / 30};"
        >
          {#if mbtiScores.sensing > 15}
            S
          {:else}
            N
          {/if}
        </div>
        <div
          class="radial-progress text-warning"
          style="--value:{(mbtiScores.feeling * 100) / 30};"
        >
          {#if mbtiScores.feeling > 15}
            F
          {:else}
            T
          {/if}
        </div>
        <div
          class="radial-progress text-success"
          style="--value:{(mbtiScores.judging * 100) / 30};"
        >
          {#if mbtiScores.judging > 15}
            J
          {:else}
            P
          {/if}
        </div>
      </div>
    </div>
  </div>
  {#if currentStatement < statements.length}
    <div class="fixed bottom-3 left-0 w-full">
      <div class="flex justify-between px-3">
        <button
          on:click={() => handleResponse({ ...statements[currentStatement] })}
          class="btn btn-success">Setuju</button
        >
        <button
          on:click={() =>
            handleResponse({ ...statements[currentStatement] }, true)}
          class="btn btn-error">Tidak Setuju</button
        >
      </div>
    </div>
  {/if}
</main>

<style>
  /* Gaya tampilan Anda di sini */
</style>
