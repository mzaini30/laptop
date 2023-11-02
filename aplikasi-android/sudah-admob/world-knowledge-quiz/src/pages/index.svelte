<!-- src/App.svelte -->
<script>
  import { acak } from "kumpulan-tools";
  import pertanyaan from "../data.json";

  let questions = acak(pertanyaan).slice(0, 10);
  let final_score = 0;
  let currentQuestionIndex = 0;
  let score = 0;

  $: final_score = ~~((score / questions.length) * 100);

  function checkAnswer(correctAnswer, selectedAnswer) {
    if (correctAnswer === selectedAnswer) {
      score++;
    }
    nextQuestion();
  }

  function nextQuestion() {
    currentQuestionIndex++;
    // if (currentQuestionIndex === questions.length) {
    //   //   alert(`Skor Anda: ${score}/${questions.length}`);
    //   currentQuestionIndex = 0;
    //   score = 0;
    // }
  }

  function mulai_ulang() {
    location.reload();
    // currentQuestionIndex = 0;
    // score = 0;
    // questions = acak(pertanyaan);
  }
</script>

<div class="p-4 grid grid-cols-1 gap-4">
  {#if currentQuestionIndex < questions.length}
    <h2>Question {currentQuestionIndex + 1}</h2>
    <p>{questions[currentQuestionIndex].question}</p>
    <ul class="grid grid-cols-1 gap-3">
      {#each questions[currentQuestionIndex].options as option}
        <li>
          <label class="flex content-center gap-3">
            <input
              type="radio"
              class="radio"
              bind:group={questions[currentQuestionIndex].selectedOption}
              value={option}
            />
            <span>{option}</span>
          </label>
        </li>
      {/each}
    </ul>
    {#if questions[currentQuestionIndex].selectedOption}
      <button
        class="btn"
        on:click={() =>
          checkAnswer(
            questions[currentQuestionIndex].correctAnswer,
            questions[currentQuestionIndex].selectedOption,
          )}
      >
        Next
      </button>
    {/if}
  {:else}
    <p>
      Done! Final Score: <span class="bg-orange-500 text-white px-2"
        >{final_score}</span
      >
    </p>
    <div
      class="radial-progress text-primary"
      style="--value:{final_score}; --size:100px"
    >
      {final_score}%
    </div>
    <button class="btn" on:click={mulai_ulang}>Play Again</button>
  {/if}
</div>
