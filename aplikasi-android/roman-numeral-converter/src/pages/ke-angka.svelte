<script>
  import { tab_aktif } from "../state/tab-aktif";
  $tab_aktif = "ke angka";

  let angka_biasa = 0;
  let angka_romawi = "";

  function romanToInteger(roman) {
    const romanNumerals = {
      M: 1000,
      D: 500,
      C: 100,
      L: 50,
      X: 10,
      V: 5,
      I: 1,
      m: 1000,
      d: 500,
      c: 100,
      l: 50,
      x: 10,
      v: 5,
      i: 1,
    };

    let result = 0;
    for (let i = 0; i < roman.length; i++) {
      const currentSymbolValue = romanNumerals[roman[i]];
      const nextSymbolValue = romanNumerals[roman[i + 1]];
      if (nextSymbolValue && currentSymbolValue < nextSymbolValue) {
        result -= currentSymbolValue;
      } else {
        result += currentSymbolValue;
      }
    }
    return result;
  }

  const romanNumber = "MCMLXXXIV";
  const number = romanToInteger(romanNumber);
  console.log(number); // Output: 1984

  $: angka_biasa = romanToInteger(angka_romawi);
</script>

<div class="grid grid-cols-1 gap-3">
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Roman Numeral</span>
    </label>
    <input
      type="text"
      placeholder=""
      bind:value={angka_romawi}
      class="input input-bordered w-full"
    />
  </div>
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Number (Result)</span>
    </label>
    <input
      type="tel"
      placeholder=""
      readonly
      bind:value={angka_biasa}
      class="input input-bordered w-full"
    />
  </div>
</div>
