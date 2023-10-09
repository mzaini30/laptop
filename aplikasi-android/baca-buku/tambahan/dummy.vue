<script setup>
import { ref } from "vue";

const nama = ref("Zen");
</script>

<p>Halo {{nama}}</p>

<style scoped>
p {
  background: blue;
}
</style>
