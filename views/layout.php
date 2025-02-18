
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo['title'] ?></title>
    <link rel="stylesheet" href="style/404.css">
    <script src="./public/script/uploadPhoto.js" defer></script>
    <script src="./public/script/map.js" defer></script>
    <link rel="shortcut icon" href="./public/img/icon_balancemoche.png" type="image/x-icon">

    <link rel="stylesheet" href="public/css/app.css">

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

    <meta name="description" content=<?= $seo["description"] ?>>
</head>
<body>
    <?php require('views/partials/_header.html') ?>
    <main>
        <?php require($template) ?>
    </main>
    <?php require('views/partials/_footer.html') ?>
</body>
</html>