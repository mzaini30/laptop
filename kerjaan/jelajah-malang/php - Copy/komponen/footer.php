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
<div hx-boost="true" class="[&amp;_a]:inline-block [&amp;_a]:mr-3 w-fit mx-auto last:[&amp;_a]:mr-0 mb-[100px]">
    <b:section id="media_sosial">
        <?php $data_media_sosial = [
            [
                "urutan" => "1",
                "title" => "Facebook",
                "link" => "https://facebook.com",
                "include" => "facebook"
            ],
            [
                "urutan" => "2",
                "title" => "X",
                "link" => "https://x.com",
                "include" => "x"
            ]
        ] ?>
        <?php foreach ($data_media_sosial as $x): ?>
            <?php $urutan = $x["urutan"];
            $title = $x["title"];
            $link = $x["link"];
            $include = $x["include"] ?>
            <b:widget id='Text<?= $urutan ?>' locked='false' title='<?= $title ?>' type='Text'>
                <b:widget-settings>
                    <b:widget-setting name='content'>
                        <?= $link ?>
                    </b:widget-setting>
                </b:widget-settings>
                <b:includable id='main'>
                    <a expr:href="data:content">
                        <?php include "./icon/$include.php" ?>
                    </a>

                    <b:include name='quickedit' />
                </b:includable>
            </b:widget>
        <?php endforeach ?>

    </b:section>
    <!-- <a href="/">
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
    </a> -->
</div>
<div class="mx-auto w-fit mb-3">
    <a href="https://selalu-zen.my.id/" target="_blank">
        <img src="https://github.com/mzaini30/svelte/assets/7939342/17e41dc5-f0ad-4435-9ad2-5ff9b9bea44a" alt=""
            width="150" />
    </a>
</div>