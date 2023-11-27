<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<style>
    /* <![CDATA[ */


    .slick-arrow {
        display: none !important;
    }

    .slider-for img {
        width: 100%;
        aspect-ratio: 10 / 7;
        object-fit: cover;
    }

    .slider-nav img {
        width: 500px;
        height: 300px;
        object-fit: cover;
        cursor: pointer;
    }

    .slick-slide {
        height: auto;
    }

    /* ]]> */
</style>

<b:section id="bagian_slider">
    <b:widget id='LinkList2' locked='false' title='Slider (link gambar)' type='LinkList'>
        <b:widget-settings>
            <b:widget-setting
                name='link-3'>https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjzKDwl2WcAS5sPAoD3j7Oy6ONH0hss8tnY9kE6SPeOJ8x4t0bROO2a59RFnlXaS5ejHlD68QxPjLDmMraRsfSStQe-gbEfz7hR4XyL5kmYx-VEmIaLPZdfvaAVsdTAyN1MlTItlX_CXmcD7kdps2LrU0adLmHbwN2vCnONeEZfAX2qIo1bFwn3zJssoQOk/w1440/wisma%20tumapel.jpg</b:widget-setting>
            <b:widget-setting name='sorting'>NONE</b:widget-setting>
            <b:widget-setting
                name='link-4'>https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhmSAPNfDimnZeLoBUXq0Sl8UIuHJe7X7Wh1YRBvLhBftH1c6aIVJaJV-fPULglk5oBxWAildpExEafx6oMpVWdJsPZ8Uwrv0tovUnM49mxXWD_1onVrrl1zeRlQWIi5SqlgyNWPEB3AG9VGDBEq6reevv7y4kSNnpRbkikOWDr50AON0hVCNFnsfLXcNwH/w1440/petirtaan%20watu%20gedhe.jpg</b:widget-setting>
            <b:widget-setting name='text-1'>Gambar</b:widget-setting>
            <b:widget-setting
                name='link-1'>https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjf1UjZNFEtnAEVgAZ0Z6g4OJRlKO93G_PyMbJTohqxdMTS0ViotC_Ni8DX2fVYyM88aqPMXraAVOlca2__tg5OIgirNnvChA4jeB8BD2wYUDdgVhb7XXrNYt85-G0nDeUN_WwpC5vMcBI4SllPVN8nqfwZn47OW22c2UEcGKLF_tfZUvvY8HW8B9OpB6MP/w1440/onsen.webp</b:widget-setting>
            <b:widget-setting name='text-0'>Gambar</b:widget-setting>
            <b:widget-setting
                name='link-2'>https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEibc58uLwlYvi99pOKprd6m6JZVnJSn9BNT7Pcnikl0cMPlNieh7GLWxoMhrwi2CIFi9ExVLgSiuxMXFiV-bwUD4G1ms8lGCQWy2gbBKDdczAU7w3FddzZoVxwJObM1aLIVlpZ-TxRGdQlifp7JwHsP6oxcmeGrcoHmwoMciJtYuVGFIKGEyhuSzy95xMRx/w1440/IMG_20231023_130154.jpg</b:widget-setting>
            <b:widget-setting name='text-3'>Gambar</b:widget-setting>
            <b:widget-setting
                name='link-0'>https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhZStO3YiAll6GSUbbc79LNNsFW4L9b5E9ppVYTYA4GDArjC0JHgBjRaCgqLxlRNbF2jBXImGIS-RM5BbpYgC5QT4cGL2OFjGFhDTxkAokiF_DjdrFR5H-v8ySkq-g-IoPRYpo5V1uwa__7IpKoee-3KAXhm7Ye-4K_MAMI6NDANPtGB7oce4o6bJv8utOc/w1440/IMG_20220810_085800.jpg</b:widget-setting>
            <b:widget-setting name='text-2'>Gambar</b:widget-setting>
            <b:widget-setting name='text-4'>Gambar</b:widget-setting>
        </b:widget-settings>
        <b:includable id='main'>

            <?php include dirname(__FILE__) . "/" . "../link-gambar.php" ?>
            <?php foreach ([1, 2] as $x): ?>
                <div class="<?= $x == 1 ? 'slider-for' : 'slider-nav' ?>">
                    <b:loop values='data:links' var='link'>
                        <div>
                            <img expr:src="data:link.target" expr:alt="data:link.name" />
                        </div>
                    </b:loop>
                </div>
            <?php endforeach ?>


            <b:include name='quickedit' />
        </b:includable>
    </b:widget>
</b:section>



<script src="//unpkg.com/jquery"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    // <![CDATA[
    htmx.onLoad(() => {
        $(".slider-for").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: ".slider-nav",
        });
        $(".slider-nav").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".slider-for",
            dots: true,
            centerMode: true,
            focusOnSelect: true,
        });
    })
    // ]]>
</script>