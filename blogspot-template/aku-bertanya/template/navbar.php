<div class="w-full bg-white p-3 sticky top-0 px-[5%] sm:px-[10%] flex shadow bordered justify-between z-1000">
    <b:section id="bagian-header">
        <b:widget id='Header1' locked='false' title='Aku Bertanya (Header)' type='Header'>
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
                <div class="flex items-center">
                    <a href="/" hx-boost="true" class="text-red-500 text-lg">
                        <data:title />
                    </a>
                </div>
            </b:includable>
        </b:widget>
    </b:section>

    <form class="hidden sm:block" hx-get="/search" hx-target="body" hx-push-url="true">
        <input placeholder="Cari apa?" type="search" class="focus:outline-none border p-1 px-2" name="q" id="" />
    </form>
</div>