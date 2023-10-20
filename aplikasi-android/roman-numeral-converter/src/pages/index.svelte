<script>
  import { tab_aktif } from "../state/tab-aktif";
  $tab_aktif = "ke romawi";

  let angka_biasa, angka_romawi;

  function integerToRoman(num) {
    const romanNumerals = {
      M: 1000,
      CM: 900,
      D: 500,
      CD: 400,
      C: 100,
      XC: 90,
      L: 50,
      XL: 40,
      X: 10,
      IX: 9,
      V: 5,
      IV: 4,
      I: 1,
    };

    let result = "";
    for (const key in romanNumerals) {
      while (num >= romanNumerals[key]) {
        result += key;
        num -= romanNumerals[key];
      }
    }
    return result;
  }

  const number = 1984;
  const romanNumber = integerToRoman(number);
  console.log(romanNumber); // Output: "MCMLXXXIV"

  $: angka_romawi = integerToRoman(angka_biasa);
</script>

<div class="grid grid-cols-1 gap-3">
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Number </span>
    </label>
    <input
      type="tel"
      placeholder=""
      bind:value={angka_biasa}
      class="input input-bordered w-full"
    />
  </div>
  <div class="form-control w-full">
    <label class="label">
      <span class="label-text">Roman Numeral (Result)</span>
    </label>
    <input
      type="text"
      readonly
      placeholder=""
      bind:value={angka_romawi}
      class="input input-bordered w-full"
    />
  </div>
</div>
