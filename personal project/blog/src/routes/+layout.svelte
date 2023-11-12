<script>
	import '../app.postcss';
</script>

<div class="p-7">
	<div class="grid grid-cols-12">
		<h1 class="text-[100px] col-span-4 font-bold">Blog Zen</h1>
		<p class="pt-5 col-span-8">
			Hai, selamat datang di Blog Zen. Di sini, kamu akan menemukan berbagai artikel menarik dan
			bermanfaat untuk dibaca. Semoga betah ya membaca di blog ini, supaya nanti kembali lagi ke
			sini.
		</p>
	</div>
	<slot />
</div>
<div class="p-7 bg-slate-500 text-white">
	Hak edar &copy; {new Date().getFullYear()} oleh Blog Zen
</div>
