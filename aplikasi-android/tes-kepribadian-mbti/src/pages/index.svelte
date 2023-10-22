<!-- App.svelte -->
<script>
    import { onMount } from 'svelte';
    
    const statements = [
      // Daftar pernyataan, Anda dapat menggantinya dengan pernyataan Anda sendiri
      { text: 'Saya lebih suka berbicara dengan banyak orang.', extrovert: 1, introvert: -1 },
      { text: 'Saya lebih suka berpikir dalam diri sendiri.', extrovert: -1, introvert: 1 },
      // ...
      // Tambahkan pernyataan sensing, intuition, feeling, thinking, judging, dan perceiving di sini
    ];
    
    let currentStatement = 0;
    let mbtiScores = { extrovert: 0, introvert: 0, sensing: 0, intuition: 0, feeling: 0, thinking: 0, judging: 0, perceiving: 0 };
    
    const handleResponse = (response) => {
      for (const key in response) {
        mbtiScores[key] += response[key];
      }
      nextStatement();
    };
    
    const nextStatement = () => {
      if (currentStatement < statements.length - 1) {
        currentStatement += 1;
      } else {
        // Tampilkan hasil MBTI berdasarkan skor
        let mbtiType = '';
        if (mbtiScores.extrovert > 0) mbtiType += 'E';
        else mbtiType += 'I';
        if (mbtiScores.sensing > 0) mbtiType += 'S';
        else mbtiType += 'N';
        if (mbtiScores.feeling > 0) mbtiType += 'F';
        else mbtiType += 'T';
        if (mbtiScores.judging > 0) mbtiType += 'J';
        else mbtiType += 'P';
        
        alert(`Hasil MBTI Anda: ${mbtiType}`);
      }
    };
    
    $: currentStatementText = statements[currentStatement].text;
    
    onMount(() => {
      nextStatement();
    });
  </script>
  
  <main>
    {#if currentStatement < statements.length}
      <p>{currentStatementText}</p>
      <button on:click={() => handleResponse({ extrovert: 1 })}>Setuju</button>
      <button on:click={() => handleResponse({ introvert: 1 })}>Tidak Setuju</button>
    {/if}
  </main>
  
  <style>
    /* Gaya tampilan Anda di sini */
  </style>
  