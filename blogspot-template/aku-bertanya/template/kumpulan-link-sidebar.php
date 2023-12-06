<style>
    /* <![CDATA[ */
    #bagian-kiri {
        grid-column: span 1/span 1;
        display: none;
    }

    @media (min-width: 640px) {

        #bagian-kiri {
            display: block;
        }
    }

    #PopularPosts4 {
        position: sticky;
        top: 5rem;
    }

    /* ]]> */
</style>
<b:section id="bagian-kiri">
    <?php $popular_posts = [
        ["nomor" => "1", "time_range" => "ALL_TIME"],
        ["nomor" => "2", "time_range" => "LAST_YEAR"],
        ["nomor" => "3", "time_range" => "LAST_MONTH"],
        ["nomor" => "4", "time_range" => "LAST_WEEK"]
    ] ?>
    <?php foreach ($popular_posts as $x): ?>
        <b:widget id='PopularPosts<?= $x["nomor"] ?>' locked='false' title='Postingan Populer' type='PopularPosts'>
            <b:widget-settings>
                <b:widget-setting name='numItemsToShow'>5</b:widget-setting>
                <b:widget-setting name='showThumbnails'>false</b:widget-setting>
                <b:widget-setting name='showSnippets'>false</b:widget-setting>
                <b:widget-setting name='timeRange'>
                    <?= $x["time_range"] ?>
                </b:widget-setting>
            </b:widget-settings>
            <b:includable id='main'>
                <div class="rounded mb-3  bordered overflow-hidden  shadow bg-white">
                    <b:loop values='data:posts' var='post'>
                        <a expr:href='data:post.href' hx-boost="true" class="block p-2 text-sm border-b last:border-b-none">
                            <data:post.title />
                        </a>
                    </b:loop>
                </div>
            </b:includable>
        </b:widget>
    <?php endforeach ?>
</b:section>