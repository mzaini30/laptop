<b:section id="bagian_label">
    <b:widget id='Label1' locked='false' title='Label' type='Label'>
        <b:widget-settings>
            <b:widget-setting name='sorting'>ALPHA</b:widget-setting>
            <b:widget-setting name='display'>LIST</b:widget-setting>
            <b:widget-setting name='selectedLabelsList' />
            <b:widget-setting name='showType'>ALL</b:widget-setting>
            <b:widget-setting name='showFreqNumbers'>false</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>

            <div class="bg-orange-300 top-0 sticky z-50">
                <div class="block px-5 py-3 sm:hidden">
                    <select onchange="
            location.href = `/search/label/${this.value}`
            " class="w-full p-2">
                        <b:loop values='data:labels' var='label'>
                            <option>
                                <data:label.name />
                            </option>
                        </b:loop>
                    </select>
                </div>
                <div class="hidden sm:block" hx-boost="true">
                    <b:loop values='data:labels' var='label'>
                        <a class="px-5 py-3 hover:bg-orange-500 hover:text-white inline-block"
                            expr:href='data:label.url'>
                            <data:label.name />
                        </a>
                    </b:loop>
                </div>
            </div>



            <b:include name='quickedit' />
        </b:includable>
    </b:widget>
</b:section>