<div class="w-full bg-white p-3 sticky top-0 px-[5%] sm:px-[10%] flex shadow bordered justify-between">
    <div class="flex items-center">
        <a href="/" hx-boost="true" class="text-red-500 text-lg">Aku Bertanya</a>
    </div>
    <form class="hidden sm:block" hx-get="/search" hx-target="body" hx-push-url="true">
        <input placeholder="Cari apa?" type="search" class="focus:outline-none border p-1 px-2" name="q" id="">
    </form>
</div>