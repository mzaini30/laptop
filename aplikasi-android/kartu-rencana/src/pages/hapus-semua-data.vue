<script setup>
import { useRouter } from "vue-router";

const router = useRouter();

function hapus_semua_data() {
  localStorage.removeItem("kartu_rencana");
  router.push("/");
}
</script>

<template>
  <div class="p-3">
    <p>Hapus semua data?</p>
    <button class="btn btn-danger w-full text-white" @click="hapus_semua_data">
      Iya
    </button>
  </div>
</template>
