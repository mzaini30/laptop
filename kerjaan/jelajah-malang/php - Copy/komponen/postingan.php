<style>
  /* <![CDATA[ */


  .kotak-list-konten {
    box-shadow: 10px 10px 0 0 rgb(249 115 22);
  }

  /* ]]> */
</style>

<?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>

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
        <!-- bagian beranda -->
        <div hx-boost="true" class="gap-5 grid grid-cols-1">
          <b:loop values='data:posts' var='post'>
            <a expr:href="data:post.url"
              class="kotak-list-konten flex  border overflow-hidden rounded-xl border-orange-500">
              <img class="w-[150px] aspect-square object-cover" expr:src="resizeImage(data:post.thumbnailUrl, 150)"
                alt="" />
              <div class="ringkasan-konten p-5">
                <h2 class="font-bold text-lg">
                  <data:post.title />
                </h2>
                <p>
                  <data:post.snippet />
                </p>
              </div>
            </a>
          </b:loop>
        </div>
        <b:include name="nextprev"></b:include>



        <b:else />
        <b:loop values='data:posts' var='post'>
          <div class="prose p-5 mb-3 max-w-full kotak-list-konten border overflow-hidden rounded-xl border-orange-500">
            <h1>
              <data:post.title />
            </h1>
            <data:post.body />
          </div>
          <!-- bagian komentar -->
          <b:include data='post' name='threaded_comments' />
        </b:loop>
      </b:if>
    </b:includable>
  </b:widget>
</b:section>