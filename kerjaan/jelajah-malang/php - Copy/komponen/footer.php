<?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>
<h2 class="caveat text-center text-[70px] sm:text-[100px] mt-5">Our Teams</h2>
<b:section id="our_teams">
    <b:widget id='LinkList1' locked='false' title='Our Teams (link gambar)' type='LinkList'>
        <b:widget-settings>
            <b:widget-setting name='sorting'>NONE</b:widget-setting>
            <b:widget-setting name='text-1'>Gambar Naruto</b:widget-setting>
            <b:widget-setting
                name='link-1'>https://github.com/mzaini30/svelte/assets/7939342/e3735a8e-a8e7-4c4f-869e-51d585da0713</b:widget-setting>
            <b:widget-setting name='text-0'>Gambar Naruto</b:widget-setting>
            <b:widget-setting
                name='link-2'>https://github.com/mzaini30/svelte/assets/7939342/e3735a8e-a8e7-4c4f-869e-51d585da0713</b:widget-setting>
            <b:widget-setting
                name='link-0'>https://github.com/mzaini30/svelte/assets/7939342/e3735a8e-a8e7-4c4f-869e-51d585da0713</b:widget-setting>
            <b:widget-setting name='text-2'>Gambar Naruto</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>

            <center>
                <div class="mx-auto w-fit p-10 pt-0">
                    <b:loop values='data:links' var='link'>
                        <div class="p-2 inline-block">
                            <img expr:src="data:link.target"
                                class="sm:w-[100px] w-[70px] object-cover aspect-square rounded-[50%]  ring-4 ring-orange-500 inline-block"
                                expr:alt="data:link.name" />
                        </div>
                    </b:loop>
                </div>
            </center>

            <b:include name='quickedit' />
        </b:includable>
    </b:widget>
</b:section>

<h2 class="caveat text-center text-[70px]">Follow Us</h2>
<div>
    <b:section id="media_sosial"
        class="[&amp;&gt;*]:inline-block [&amp;&gt;*]:mr-3 w-fit mx-auto last:[&amp;&gt;*]:mr-0 mb-[100px]">
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
            ],
            [
                "urutan" => "3",
                "title" => "Instagram",
                "link" => "https://instagram.com",
                "include" => "instagram"
            ],
            [
                "urutan" => "4",
                "title" => "YouTube",
                "link" => "https://youtube.com",
                "include" => "youtube"
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
</div>
<div class="mx-auto w-fit mb-3">
    <a href="https://selalu-zen.my.id/" target="_blank">
        <img src="https://github.com/mzaini30/svelte/assets/7939342/17e41dc5-f0ad-4435-9ad2-5ff9b9bea44a" alt=""
            width="150" />
    </a>
</div>