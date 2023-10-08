<!-- src/App.svelte -->
<script>
  import { acak } from "kumpulan-tools";
  import pertanyaan from "../data.json";

  let questions = acak(pertanyaan);

  let currentQuestionIndex = 0;
  let score = 0;

  function checkAnswer(correctAnswer, selectedAnswer) {
    if (correctAnswer === selectedAnswer) {
      score++;
    }
    nextQuestion();
  }

  function nextQuestion() {
    currentQuestionIndex++;
    if (currentQuestionIndex === questions.length) {
      //   alert(`Skor Anda: ${score}/${questions.length}`);
      currentQuestionIndex = 0;
      score = 0;
    }
  }
</script>

{#if currentQuestionIndex < questions.length}
  <h2>Pertanyaan {currentQuestionIndex + 1}</h2>
  <p>{questions[currentQuestionIndex].question}</p>
  <ul>
    {#each questions[currentQuestionIndex].options as option}
      <li>
        <label>
          <input
            type="radio"
            bind:group={questions[currentQuestionIndex].selectedOption}
            value={option}
          />
          {option}
        </label>
      </li>
    {/each}
  </ul>
  <button
    on:click={() =>
      checkAnswer(
        questions[currentQuestionIndex].correctAnswer,
        questions[currentQuestionIndex].selectedOption,
      )}
  >
    Next
  </button>
{:else}
  <p>Selesai! Skor Akhir: {score}/{questions.length}</p>
  <button on:click={nextQuestion}>Mulai Ulang</button>
{/if}
