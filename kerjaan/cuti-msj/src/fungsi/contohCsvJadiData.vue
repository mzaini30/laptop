<script setup="">
  import {restore} from 'backup-state'
  import {ref} from 'vue'
  
  const data = ref({})

  async function getNow(){
    data.value = await restore()
  }
</script>

<template>
  <button @click='getNow'>restore</button>
</template>