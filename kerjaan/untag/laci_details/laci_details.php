<?php
defined('_JEXEC') or die;

class plgContentLaci_Details extends JPlugin
{
    public function onContentPrepare($context, &$article, &$params, $limitstart)
    {
        // Menemukan tag [laci] dan menggantinya dengan <details>
        $article->text = preg_replace_callback('/\[laci judulnya="([^"]+)"\](.*?)\[\/laci\]/s', array($this, 'replaceLaciTag1'), $article->text);
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

    private function replaceLaciTag1($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-1">' . "\n" .
            '<summary class="text-white summary-1 bg-orange-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag2($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-2">' . "\n" .
            '<summary class="text-white summary-2 bg-green-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag3($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-3">' . "\n" .
            '<summary class="text-white summary-3 bg-yellow-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag4($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-4">' . "\n" .
            '<summary class="text-white summary-4 bg-blue-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag5($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-5">' . "\n" .
            '<summary class="text-white summary-5 bg-green-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag6($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-6">' . "\n" .
            '<summary class="text-white summary-6 bg-yellow-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag7($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-7">' . "\n" .
            '<summary class="text-white summary-7 bg-orange-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag8($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-8">' . "\n" .
            '<summary class="text-white summary-8 bg-red-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag9($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-9">' . "\n" .
            '<summary class="text-white summary-9 bg-amber-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
    private function replaceLaciTag10($matches)
    {
        $title = $matches[1];
        $content = $matches[2];
        return '<details class="laci border laci-10">' . "\n" .
            '<summary class="text-white summary-10 bg-red-500 p-3 cursor-pointer">' . $title . '</summary>' . "\n" .
            '<div class="isi-laci m-3">' . $content . '</div>' . "\n" .
            '</details>';
    }
}