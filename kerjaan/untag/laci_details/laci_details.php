<?php
defined('_JEXEC') or die;

class plgContentLaci_Details extends JPlugin
{
    public function onContentPrepare($context, &$article, &$params, $limitstart)
    {
        // Menemukan tag [laci] dan menggantinya dengan <details>
        $article->text = preg_replace_callback('/\[laci judulnya="([^"]+)"\](.*?)\[\/laci\]/s', array($this, 'replaceLaciTag'), $article->text);
    }

    private function replaceLaciTag($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details>' . "\n" .
            '<summary>' . $title . '</summary>' . "\n" .
            '<div>' . $content . '</div>' . "\n" .
            '</details>';
    }
}
