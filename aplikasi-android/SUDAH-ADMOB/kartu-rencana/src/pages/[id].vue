<script setup>
import { ref, watch } from "vue";
import { useRoute, useRouter } from "vue-router";
import Swal from "sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";

const route = useRoute();
const router = useRouter();

const title = ref("");
const content = ref("");
const tersimpan = ref(true);

watch(
  () => [title.value, content.value],
  () => {
    tersimpan.value = false;
  }
);

if (localStorage.kartu_rencana) {
  let data = JSON.parse(localStorage.kartu_rencana);
  data = data.find((x) => x.id == route.params.id);
  if (data) {
    title.value = data.title;
    content.value = data.content;
  }
}
function simpan() {
  if (localStorage.kartu_rencana) {
    let data = JSON.parse(localStorage.kartu_rencana);
    let index = data.findIndex((x) => x.id == route.params.id);
    if (index > -1) {
      data[index].title = title.value;
      data[index].content = content.value;
      localStorage.kartu_rencana = JSON.stringify(data);
    } else {
      data.push({
        id: route.params.id,
        title: title.value,
        content: content.value,
      });
      localStorage.kartu_rencana = JSON.stringify(data);
    }
  } else {
    localStorage.kartu_rencana = JSON.stringify([
      {
        id: route.params.id,
        title: title.value,
        content: content.value,
      },
    ]);
  }
  tersimpan.value = true;
}
async function hapus() {
  let proses = await Swal.fire({
    title: "Delete?",
    icon: "warning",
  });
  if (proses.isConfirmed) {
    let data = JSON.parse(localStorage.kartu_rencana);
    let index = data.findIndex((x) => x.id == route.params.id);
    if (index > -1) {
      data.splice(index, 1);
      localStorage.kartu_rencana = JSON.stringify(data);
      router.push("/");
    }
  }
}
</script>
<template>
  <div class="p-3">
    <input
      type="text"
      v-model="title"
      placeholder="Title"
      class="mb-3 form-control"
    />
    <textarea
      v-model="content"
      name=""
      class="mb-3 form-control"
      placeholder="Content"
      id=""
      cols="30"
      rows="10"
    ></textarea>
    <div class="action">
      <button class="btn btn-danger" @click="hapus">Delete</button>
      <div class="bagian-simpan">
        <div v-if="!tersimpan" class="indikator"></div>
        <button class="btn btn-success" @click="simpan">Save</button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.action {
  display: flex;
  justify-content: space-between;
}
.bagian-simpan {
  width: min-content;
  position: relative;
}
.indikator {
  width: 10px;
  height: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 50%;
  position: absolute;
  top: -3px;
  right: -3px;
}
</style>
