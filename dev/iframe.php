<?php
$url = $_GET['url'];
$width = array_key_exists('width', $_GET) ? $_GET['width'] : 600;
$height = array_key_exists('height', $_GET) ? $_GET['height'] : 300;
?>

<html>
<body>
    <!--Here is a <?= $width ?>x<?= $height ?> iframe of <a href="<?= $url ?>"><?= $url ?></a>:-->
    <br>
    <iframe src="<?= $url ?>"
        width="<?= $width ?>"
        height="<?= $height ?>" />
</body>
</html>
