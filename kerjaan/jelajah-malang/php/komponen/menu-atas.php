<div class="bg-orange-300 top-0 sticky z-50">
    <div class="block px-5 py-3 sm:hidden">
        <select onchange="
            location.href = `#/${this.value}`
            " class="w-full p-2">
            <?php $label = ["jalan-jalan", "buku", "travel"] ?>
            <?php foreach ($label as $x): ?>
                <option>
                    <?= $x ?>
                </option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="hidden sm:block" hx-boost="true">
        <?php foreach ($label as $x): ?>
            <a class="px-5 py-3 hover:bg-orange-500 hover:text-white inline-block" href="/">
                <?= $x ?>
            </a>
        <?php endforeach ?>
    </div>
</div>