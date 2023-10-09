<script setup="">
	import localforage from 'localforage'
	import {ref} from 'vue'
	import {useRouter, useRoute} from 'vue-router'

	const {push} = useRouter()
	const {params} = useRoute()

	const title = ref('')
	const content = ref('')

	async function getData(){
		let data = await localforage.getItem('dataBlog')
		data = data.filter(x => x.id == params.id)[0]
		title.value = data.title
		content.value = data.content
	}
	getData()

	async function save(){
		let data = await localforage.getItem('dataBlog')
		for (let x of data){
			if (x.id == params.id){
				x.title = title.value
				x.content = content.value
			}
		}
		let save = await localforage.setItem('dataBlog', data)
		if (save){
			push(`/read/${params.id}`)
		}
	}
</script>

<template>
	<form @submit.prevent='save' class="p-2" action="">
		<label for="">Title</label>
		<input v-model='title' type="text" required />
		<label for="">Content</label>
		<textarea v-model='content' name="" id="" cols="30" rows="10"></textarea>
		<input class="px-3 focus:outline-none cursor-pointer py-1 bg-green-500 rounded text-white" type="submit" value="Change" />
	</form>
</template>

<style scoped="">
	label {
		@apply font-bold mb-2 block
	}
	input:not([type=submit]), textarea {
		@apply focus:outline-none block border mb-2 p-2 w-full border-green-500/50 focus:border-green-500
	}
</style>