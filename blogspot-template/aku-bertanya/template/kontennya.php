<style>
    /* <![CDATA[ */
    .blog-pager a {
        --un-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--un-bg-opacity));
        /* px-3 */
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        /* py-2 */
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        border-radius: 0.25rem;
        --un-shadow: var(--un-shadow-inset) 0 1px 3px 0 var(--un-shadow-color, rgb(0 0 0 / 0.1)), var(--un-shadow-inset) 0 1px 2px -1px var(--un-shadow-color, rgb(0 0 0 / 0.1));
        box-shadow: var(--un-ring-offset-shadow), var(--un-ring-shadow), var(--un-shadow);
    }

    /* ]]> */
</style>

<div class="col-span-4 sm:col-span-2">
    <b:section id="konten">
        <b:widget id='Blog1' locked='false' title='Postingan Blog' type='Blog'>
            <b:widget-settings>
                <b:widget-setting name='showDateHeader'>true</b:widget-setting>
                <b:widget-setting name='style.textcolor'>#ffffff</b:widget-setting>
                <b:widget-setting name='showShareButtons'>false</b:widget-setting>
                <b:widget-setting name='showCommentLink'>true</b:widget-setting>
                <b:widget-setting name='style.urlcolor'>#ffffff</b:widget-setting>
                <b:widget-setting name='showAuthor'>true</b:widget-setting>
                <b:widget-setting name='style.linkcolor'>#ffffff</b:widget-setting>
                <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
                <b:widget-setting name='style.bgcolor'>#ffffff</b:widget-setting>
                <b:widget-setting name='reactionsLabel' />
                <b:widget-setting name='showAuthorProfile'>false</b:widget-setting>
                <b:widget-setting name='style.layout'>1x1</b:widget-setting>
                <b:widget-setting name='showLabels'>true</b:widget-setting>
                <b:widget-setting name='showLocation'>true</b:widget-setting>
                <b:widget-setting name='showTimestamp'>true</b:widget-setting>
                <b:widget-setting name='postsPerAd'>1</b:widget-setting>
                <b:widget-setting name='showBacklinks'>false</b:widget-setting>
                <b:widget-setting name='style.bordercolor'>#ffffff</b:widget-setting>
                <b:widget-setting name='showInlineAds'>false</b:widget-setting>
                <b:widget-setting name='showReactions'>false</b:widget-setting>
            </b:widget-settings>
            <b:includable id='main' var='top'>


                <b:if cond='data:blog.pageType != &quot;item&quot;'> <!-- Blog feed links -->
                    <b:loop values='data:posts' var='post'>
                        <a expr:href="data:post.url"
                            class="bg-white rounded shadow border block mb-3 last:mb-0 overflow-hidden [&amp;>*:not(.separator)]:pb-3 [&amp;>*:not(.separator)]:px-3 pt-3 [&amp;_img]:w-full"
                            hx-boost="true">
                            <p class="font-bold">
                                <data:post.title />
                            </p>
                            <p>
                                <data:post.snippet />
                            </p>
                            <b:if cond="data:post.thumbnailUrl">
                                <img class="separator" expr:src="resizeImage(data:post.thumbnailUrl, 350)"
                                    alt="Ini gambar cover" />
                            </b:if>
                        </a>
                    </b:loop>
                    <div hx-boost="true">
                        <b:include name="nextprev"></b:include>
                    </div>
                    <b:else></b:else>
                    <b:loop values='data:posts' var='post'>
                        <div expr:href="data:post.url"
                            class="bg-white rounded shadow border block mb-3 last:mb-0 overflow-hidden [&amp;>*:not(.separator)]:pb-3 [&amp;>*:not(.separator)]:px-3 pt-3 [&amp;_img]:w-full"
                            hx-boost="true">
                            <h1 class="font-bold">
                                <data:post.title />
                            </h1>
                            <data:post.body />
                            <!-- bagian komentar -->
                            <div class="[&amp;_img]:!w-auto">
                                <b:include data='post' name='threaded_comments' />
                            </div>
                        </div>
                    </b:loop>
                </b:if>

            </b:includable>
        </b:widget>
    </b:section>
</div>