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
        <div class="menu-right">
            <div class="menu-auth">
                <a href="/auth">
                    <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 1C8.96243 1 6.5 3.46243 6.5 6.5C6.5 9.53757 8.96243 12 12 12C15.0376 12 17.5 9.53757 17.5 6.5C17.5 3.46243 15.0376 1 12 1Z" />
                        <path d="M7 14C4.23858 14 2 16.2386 2 19V22C2 22.5523 2.44772 23 3 23H21C21.5523 23 22 22.5523 22 22V19C22 16.2386 19.7614 14 17 14H7Z" />
                    </svg>
                </a>
            </div>

            <div class="menu-burger">
                <div class="burger-line burger-line-1"></div>
                <div class="burger-line burger-line-2"></div>
                <div class="burger-line burger-line-3"></div>
            </div>
        </div>
    </nav>