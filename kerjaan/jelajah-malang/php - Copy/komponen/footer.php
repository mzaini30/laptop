<?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>
<h2 class="caveat text-center text-[70px] sm:text-[100px] mt-5">Our Teams</h2>
<center>
    <div class="mx-auto w-fit p-10 pt-0">
        <?php foreach ([1, 2, 3, 4, 5] as $x): ?>
            <div class="p-2 inline-block">
                <img src="<?= $naruto ?>"
                    class="sm:w-[100px] w-[70px] object-cover aspect-square rounded-[50%]  ring-4 ring-orange-500 inline-block"
                    alt="" />
            </div>
        <?php endforeach ?>
    </div>
</center>
<h2 class="caveat text-center text-[70px]">Follow Us</h2>
<div hx-boost="true" class="[&_a]:inline-block [&_a]:mr-3 w-fit mx-auto last:[&_a]:mr-0 mb-[100px]">
    <a href="/">
        <?php include "./icon/facebook.php" ?>
    </a>
    <a href="/">
        <?php include "./icon/x.php" ?>
    </a>
    <a href="/">
        <?php include "./icon/instagram.php" ?>
    </a>
    <a href="/">
        <?php include "./icon/youtube.php" ?>
    </a>
</div>
<div class="mx-auto w-fit mb-3">
    <a href="https://selalu-zen.my.id/" target="_blank">
        <img src="../gambar/logo.png" alt="" width="150" />
    </a>
</div>