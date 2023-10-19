<script setup>
import { ref } from "vue";
import LinkTelegram from "../components/link-telegram.vue";

const data = ref([]);
if (localStorage.kartu_rencana) {
  data.value = JSON.parse(localStorage.kartu_rencana).sort((a, b) =>
    a.title > b.title ? 1 : -1
  );
}
</script>

<template>
  <div class="p-3">
    <div class="mb-3 kumpulan-tombol">
      <router-link :to="`/${Math.random()}`" class="btn btn-success"
        >Create</router-link
      >
      <router-link to="/semua-data" class="btn btn-success"
        >Semua Data</router-link
      >
    </div>
    <div class="list-group">
      <router-link
        :to="`/${x.id}`"
        v-for="x in data"
        class="list-group-item list-group-item-action"
        >{{ x.title }}
      </router-link>
    </div>

    <div class="mt-3 kumpulan-tombol">
      <a
        href="https://play.google.com/store/apps/details?id=com.chitandaeru.karturencana"
        class="btn btn-success"
        >Review App</a
      >
      <a
        href="https://play.google.com/store/apps/dev?id=5401138465689796048"
        class="btn btn-success"
        >Other Apps</a
      >
    </div>
    <!-- <LinkTelegram></LinkTelegram> -->
  </div>
</template>

<style scoped>
.kumpulan-tombol {
  display: flex;
  /* align-content: space-between; */
  /* flex-wrap: wrap; */
  justify-content: space-between;
}
</style>
