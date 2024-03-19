<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page_title?></title>
    <link rel="stylesheet" href="<?=_WEB_ROOT?>/public/assets/clients/css/style.css">
</head>

<body>
    
    <?php
    $this->render('blocks/header');
    $this->render($content, $sub_content);
    $this->render('blocks/footer');
    ?>

    <script type="text/javascritp" src="<?=_WEB_ROOT?>/public/assets/js/script.js"></script>
</body>

</html>