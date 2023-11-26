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
<?php foreach ([1, 2] as $x): ?>
    <div class="<?= $x == 1 ? 'slider-for' : 'slider-nav' ?>">
        <?php foreach ([1, 2, 3, 4, 5, 6, 7] as $y): ?>
            <div>
                <img src="/gambar-lainnya/<?= $y ?>.jpg" alt="" />
            </div>
        <?php endforeach ?>
    </div>
<?php endforeach ?>

<script src="/js/jquery-3.7.1.min.js"></script>
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