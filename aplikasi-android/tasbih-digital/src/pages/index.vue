<script setup="" lang="ts">
import Info from "info-zen";
import { Ref, ref, watch } from "vue";

const angka = ref(0);
const dark_mode = ref(false);

if (localStorage.angka) {
  angka.value = localStorage.angka;
}
if (localStorage.dark_mode) {
  dark_mode.value = JSON.parse(localStorage.dark_mode);
}

watch(
  () => angka.value,
  (newValue) => {
    localStorage.angka = newValue;
  }
);

watch(
  () => dark_mode.value,
  (newValue) => {
    localStorage.dark_mode = JSON.stringify(newValue);
  }
);
</script>

<template>
  <div
    class="angka cursor-pointer select-none"
    :class="!dark_mode ? 'terang' : 'gelap'"
    @click="angka++"
  >
    <div class="text-center isi">{{ angka }}</div>
  </div>
  <div class="fixed bottom-0 right-0 p-2">
    <button
      @click="angka = 0"
      class="w-min rounded bg-red-500 text-white text-sm px-3 py-2"
    >
      Reset
    </button>
  </div>
  <a
    href="https://play.google.com/store/apps/details?id=com.mzaini30.tasbihdigital"
    class="fixed top-2 right-2 rounded bg-green-500 text-white text-sm px-3 py-2"
    >Review</a
  >
  <button
    @click="dark_mode = !dark_mode"
    class="fixed bottom-2 left-2 rounded bg-orange-500 text-white text-sm px-3 py-2"
  >
    <span v-if="!dark_mode">Dark Mode</span>
    <span v-else>Light Mode</span>
  </button>
</template>

<style scoped="">
.angka {
  height: 100vh;
  padding-top: calc(50vh - 60px);
}
.terang {
  background-color: rgba(220, 252, 231, 1);
  color: black;
}
.gelap {
  color: rgba(220, 252, 231, 1);
  background-color: black;
}
.isi {
  font-size: 36px;
}
</style>
