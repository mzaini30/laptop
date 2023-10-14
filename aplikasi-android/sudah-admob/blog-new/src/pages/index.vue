<script setup="">
	import localforage from 'localforage'
	import {ref} from 'vue'

	const data = ref([])

	async function init(){
		const getData = await localforage.getItem('dataBlog')
		data.value = getData
	}
	init()
</script>

<template>
	<div class="m-2">
		<router-link class='border px-3 py-2 w-full block border-b-0 last:border-b-2' v-for='x in data' :to="'/read/' + x.id">{{ x.title }}</router-link>
	</div>
	<router-link class='bottom-0 right-0 m-2 bg-green-500 text-white px-2 py-1 rounded fixed' to="/new">Add</router-link>
</template>
