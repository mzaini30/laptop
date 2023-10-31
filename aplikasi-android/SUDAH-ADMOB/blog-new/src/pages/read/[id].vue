<script setup="">
	import localforage from 'localforage'
	import {ref} from 'vue'
	import {useRoute, useRouter} from 'vue-router'
	import {parse} from 'marked'

	const {params} = useRoute()
	const {push} = useRouter()

	const data = ref({})
	const isDelete = ref(false)

	async function get(){
		const getData = await localforage.getItem('dataBlog')
		data.value = getData.filter(x => x.id == params.id)[0]
		if (!data.value.content){
			data.value.content = '&nbsp;'
		}
		data.value.content = parse(data.value.content)
	}
	get()

	async function deletePost(){
		const getData = await localforage.getItem('dataBlog')
		const newData = getData.filter(x => x.id != params.id)
		const save = await localforage.setItem('dataBlog', newData)
		if (save){
			push('/')
		}
	}
</script>

<template>
	<div class="prose p-3 max-w-full">
		<h3 class="text-center">{{ data.title }}</h3>
		<p class="text-sm text-center">
			<router-link class='mx-1' to="/">home</router-link>
			&bull;
			<router-link class='mx-1' to="/new">new</router-link>
			&bull;
			<router-link class='mx-1' :to="'/edit/' + params.id">edit</router-link>
			&bull;
			<a class="mx-1" @click.prevent='isDelete = true' href="">delete</a>
		</p>
		<div v-html='data.content'></div>
	</div>

	<div v-if='isDelete' class="fixed bottom-0 left-0 w-full p-2">
		<div class="border rounded p-3">
			<p class="mb-2">Delete this post?</p>
			<p>
				<button @click='deletePost' class="px-3 py-1 rounded bg-red-500 text-white mr-2">Yes</button>
				<button @click='isDelete = false' class="px-3 py-1 rounded bg-green-500 text-white">No</button>
			</p>
		</div>
	</div>
</template>