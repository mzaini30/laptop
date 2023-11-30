<!DOCTYPE HTML>
<html lang="id">

<head>
    <b:skin></b:skin>

    <meta charset="utf-8" />
    <link rel="canonical" href="/" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Menjelajahi Malang" />
    <title>
        <data:view.title.escaped />
    </title>
    <b:include data='blog' name='all-head-content' />
    <script src="//unpkg.com/htmx.org"></script>
    <style>
        /* <![CDATA[ */
        <?= file_get_contents("./reset.css") ?>
        <?= file_get_contents("./uno.css") ?>
        /* ]]> */
    </style>
    <style>
        /* <![CDATA[ */


        .caveat {
            font-family: "Caveat", cursive;
        }

        /* ]]> */
    </style>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&amp;display=swap" rel="stylesheet" />
</head>

<body>
    <div class="prose max-w-full hidden"></div>
    <?php include "./komponen/menu-atas.php" ?>
    <?php include "./komponen/judul.php" ?>
    <?php include "./komponen/slider.php" ?>
    <div class="grid grid-cols-4 gap-5 p-5">
        <div class="sm:col-span-3 col-span-4">
            <?php include "./komponen/postingan.php" ?>
        </div>
        <div class="sm:col-span-1 col-span-4">
            <?php include "./komponen/sidebar.php" ?>
        </div>
    </div>
    <div class="pt-7 -mb-[70px]">
        <?php include "./komponen/garis-garis.php" ?>
    </div>
    <?php include "./komponen/footer.php" ?>
</body>

</html>