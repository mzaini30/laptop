<script setup>
import { ref } from "vue";

const data = ref([]);

if (localStorage.kartu_rencana) {
  data.value = JSON.parse(localStorage.kartu_rencana).sort((a, b) =>
    a.title > b.title ? 1 : -1
  );
}
</script>

<template>
  <router-link class="no-underline fixed top-2 right-2" to="/hapus-semua-data"
    >❌</router-link
  >
  <div class="p-3">
    <!-- <p>Kucing</p> -->
    <!-- <pre>{{ data }}</pre> -->
    <div v-for="x in data">
      <p class="font-bold">{{ x.title }}</p>
      <p class="content">{{ x.content }}</p>
    </div>
  </div>
</template>

<style scoped>
p.content {
  white-space: pre-wrap;
}
</style>
