<!DOCTYPE html>
<html lang="en" b:layoutsVersion='3' b:css='false'>

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

        /* ]]> */
    </style>
    <b:template-skin>
        #layout .hidden {
        display: block;
        }
    </b:template-skin>
    <?php include "./template/script.php" ?>
</head>

<body>
    <?php include "./template/navbar.php" ?>
    <?php include "./template/isi.php" ?>

</body>

</html>