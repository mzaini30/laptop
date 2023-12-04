<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./uno.css">
    <script src="./js/htmx.min.js"></script>
</head>

<body>
    <div class="min-h-screen py-5 sm:py-15 bg-gray-200">
        <div class="bg-white p-10 shadow">
            <h1 class="text-center text-xl sm:text-8xl font-bold">
                <a href="/" hx-boost="true">MALL TEMPLATE</a>
            </h1>
        </div>
        <div class="pt-10 px-10 sm:px-30">
            <div class="grid gap-10 grid-cols-1 sm:grid-cols-3" hx-boost="true">
                <?php foreach ([1, 1, 1, 1, 1, 1] as $x): ?>
                    <a href="/" class="border shadow bg-white">
                        <img src="./gambar/5-ways-seo-web-design-go-together-5e2945dd5df37.png" alt="Gambar cover">
                        <div class="p-4 ">
                            <p class="font-bold">TEMPLATE LANDING PAGE</p>
                            <p class="text-gray-700">Rp 5.000</p>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</body>

</html>