<script setup="">
	import localforage from 'localforage'
	import {ref} from 'vue'
	import {useRouter} from 'vue-router'

	const {push} = useRouter()

	const title = ref('')
	const content = ref('')

	const currentId = Math.random().toString().replace('0.', '')

	async function save(){
		let data = await localforage.getItem('dataBlog')
		if (!data){
			data = []
		}
		const save = await localforage.setItem('dataBlog', [
			{
				id: currentId,
				title: title.value,
				content: content.value
			},
			...data
		])
		if (save){
			push(`/read/${currentId}`)
		}
	}
</script>

<template>
	<form @submit.prevent='save' class="p-2" action="">
		<label for="">Title</label>
		<input v-model='title' type="text" required />
		<label for="">Content</label>
		<textarea v-model='content' name="" id="" cols="30" rows="10"></textarea>
		<input class="px-3 focus:outline-none cursor-pointer py-1 bg-green-500 rounded text-white" type="submit" value="Submit" />
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