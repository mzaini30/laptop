<script setup="" lang="ts">
import Info from "info-zen";
import { Ref, ref, watch } from "vue";

const angka = ref(0);

if (localStorage.angka) {
  angka.value = localStorage.angka;
}

watch(
  () => angka.value,
  (newValue) => {
    localStorage.angka = newValue;
  }
);
</script>

<template>
  <Info></Info>
  <div class="angka cursor-pointer select-none" @click="angka++">
    <div class="text-center isi">{{ angka }}</div>
  </div>
  <div class="fixed bottom-0 right-0 p-2">
    <button
      @click="angka = 0"
      class="w-min rounded bg-red-500 text-white text-sm px-3 py-2"
    >
      reset
    </button>
  </div>
</template>

<style scoped="">
.angka {
  height: calc(100vh - 50px);
  padding-top: calc(50vh - 60px);
}
.isi {
  font-size: 36px;
}
</style>
