<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) && $page_title !== '' ? $page_title : 'Smash' ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/bsu4zoh.css">
    <link rel="stylesheet" href="./public/style/main.css">
    <?php if (isset($css_file_name) && $css_file_name !== '') : ?>
        <link rel="stylesheet" href="./public/style/<?= $css_file_name ?>.css">
    <?php endif; ?>
</head>

<body>
    <nav class="menu solano-bold">
        <div class="menu-logo">
            <a href="./"></a>
            <img src="./public/images/logo/logo-smash-black.svg" alt="Logo Smash Black" class="logo-smash-black active">
            <img src="./public/images/logo/logo-smash-white.svg" alt="Logo Smash White" class="logo-smash-white">
        </div>
        <div class="menu-burger">
           <div class="burger-line burger-line-1"></div>
           <div class="burger-line burger-line-2"></div>
           <div class="burger-line burger-line-3"></div>
        </div>
    </nav>