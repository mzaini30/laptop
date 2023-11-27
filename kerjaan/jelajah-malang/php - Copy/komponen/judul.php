<?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>
<div class="justify-center sm:flex py-10 sm:py-0">
    <div class="sm:flex items-center sm:gap-5" hx-boost="true">
        <a href="/">
            <img src="<?= $logo_jelajah_malang ?>" class="w-[100px] sm:w-[300px] mx-auto" width="300" />
        </a>
        <b:section id="bagian_header" class="text-center sm:text-left">
            <b:widget id='Header1' locked='false' title='Judul' type='Header'>
                <b:widget-settings>
                    <b:widget-setting name='displayUrl' />
                    <b:widget-setting name='displayHeight'>0</b:widget-setting>
                    <b:widget-setting name='sectionWidth'>-1</b:widget-setting>
                    <b:widget-setting name='useImage'>false</b:widget-setting>
                    <b:widget-setting name='shrinkToFit'>false</b:widget-setting>
                    <b:widget-setting name='imagePlacement'>BEHIND</b:widget-setting>
                    <b:widget-setting name='displayWidth'>0</b:widget-setting>
                </b:widget-settings>
                <b:includable id='main'>

                    <h1 class="text-[40px] sm:text-[80px] judul caveat">
                        <a href="/">
                            <data:title />
                        </a>
                    </h1>
                    <p class="text-sm sm:text-base">
                        <data:description />
                    </p>

                </b:includable>
            </b:widget>
        </b:section>

    </div>
</div>