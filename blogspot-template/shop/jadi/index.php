<!DOCTYPE html>
<html lang="en">

<head>
    <b:skin></b:skin>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <data:view.title.escaped />
    </title>
    <b:include data='blog' name='all-head-content' />
    <style>
        /* <![CDATA[ */
        <?= file_get_contents("./reset.css") ?>
        <?= file_get_contents("./uno.css") ?>
        <?= file_get_contents("./prose.css") ?>

        .bagian-konten {
            background: white;
            width: 100%;
            max-width: 100%;
            padding: 30px;
        }

        .gambar-cover {
            width: 100%;
        }

        /* ]]> */
    </style>
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
    <?php include "./script.php" ?>
</head>

<body>
    <div class="min-h-screen py-5 sm:py-15 bg-gray-200">
        <div class="bg-white p-10 shadow">
            <b:section id="judul">
                <b:widget id='Header1' locked='false' title='Mall Template (Header)' type='Header'>
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
                        <h1 class="text-center text-xl sm:text-8xl font-bold">
                            <a href="/" hx-boost="true">
                                <data:title />
                            </a>
                        </h1>
                    </b:includable>
                </b:widget>
            </b:section>

        </div>
        <div class="pt-10 px-10 sm:px-30">
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
                            <div class="grid gap-10 grid-cols-1 sm:grid-cols-3" hx-boost="true">
                                <b:loop values='data:posts' var='post'>
                                    <a expr:href="data:post.url" class="border shadow bg-white">
                                        <img expr:src="resizeImage(data:post.thumbnailUrl, 350)" alt="Gambar cover"
                                            class="gambar-cover" />
                                        <div class="p-4 ">
                                            <p class="font-bold">
                                                <data:post.title />
                                            </p>
                                            <b:loop values='data:post.labels' var='label'>
                                                <p class="text-gray-700">
                                                    <data:label.name />
                                                </p>
                                            </b:loop>

                                        </div>
                                    </a>
                                </b:loop>
                            </div>
                            <div hx-boost="true">
                                <b:include name="nextprev"></b:include>
                            </div>
                            <b:else></b:else>
                            <b:loop values='data:posts' var='post'>
                                <div class="prose bagian-konten max-w-full">
                                    <h1>
                                        <data:post.title />
                                    </h1>
                                    <data:post.body />
                                    <!-- bagian komentar -->
                                    <b:include data='post' name='threaded_comments' />
                                </div>

                            </b:loop>
                        </b:if>
                    </b:includable>
                </b:widget>
            </b:section>

            <div class="pt-10 flex justify-center">
                <a href="https://mall-template.blogspot.com/2023/12/template-jualan.html" hx-boost="true"
                    class="inline-block  px-5 text-sm py-2 rounded text-white bg-black">GUNAKAN
                    TEMPLATE INI</a>
            </div>

        </div>
    </div>

</body>

</html>