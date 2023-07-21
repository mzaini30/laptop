<?php
defined('_JEXEC') or die;

class plgContentLaci_Details extends JPlugin
{
public function onContentPrepare($context, &$article, &$params, $limitstart)
{
// Menemukan tag [laci] dan menggantinya dengan <details>
$article->text = preg_replace_callback('/\[laci judulnya="([^"]+)"\](.*?)\[\/laci\]/s', array($this, 'replaceLaciTag'), $article->text);
$article->text = preg_replace_callback('/\[laci2 judulnya="([^"]+)"\](.*?)\[\/laci2\]/s', array($this, 'replaceLaciTag2'), $article->text);
$article->text = preg_replace_callback('/\[laci3 judulnya="([^"]+)"\](.*?)\[\/laci3\]/s', array($this, 'replaceLaciTag3'), $article->text);
$article->text = preg_replace_callback('/\[laci4 judulnya="([^"]+)"\](.*?)\[\/laci4\]/s', array($this, 'replaceLaciTag4'), $article->text);
$article->text = preg_replace_callback('/\[laci5 judulnya="([^"]+)"\](.*?)\[\/laci5\]/s', array($this, 'replaceLaciTag5'), $article->text);
$article->text = preg_replace_callback('/\[laci6 judulnya="([^"]+)"\](.*?)\[\/laci6\]/s', array($this, 'replaceLaciTag6'), $article->text);
$article->text = preg_replace_callback('/\[laci7 judulnya="([^"]+)"\](.*?)\[\/laci7\]/s', array($this, 'replaceLaciTag7'), $article->text);
$article->text = preg_replace_callback('/\[laci8 judulnya="([^"]+)"\](.*?)\[\/laci8\]/s', array($this, 'replaceLaciTag8'), $article->text);
$article->text = preg_replace_callback('/\[laci9 judulnya="([^"]+)"\](.*?)\[\/laci9\]/s', array($this, 'replaceLaciTag9'), $article->text);
$article->text = preg_replace_callback('/\[laci10 judulnya="([^"]+)"\](.*?)\[\/laci10\]/s', array($this, 'replaceLaciTag10'), $article->text);

}

private function replaceLaciTag($matches)
{
$title = $matches[1];
$content = $matches[2];
return '<details class="laci laci-1">' . "\n" .
'<summary>' . $title . '</summary>' . "\n" .
'<div>' . $content . '</div>' . "\n" .
'</details>';
}
}
