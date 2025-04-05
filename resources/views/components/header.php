<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/appimg/caala-new-logo.png" rel="icon" type="image/png" />
    <link rel="stylesheet" href="/assets/css/default.css">
    <script src="/assets/js/default.js"></script>
    <title><?= $title ?> | Caála news</title>
</head>
<body>
<header>
    <h1><a href="/"><img style="width: 20px;" src="/assets/appimg/caala-new-logo.png" alt="Logo Caála news"> Caála news</a></h1>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/notice">Notícia</a></li>
            <li><a href="/about">Sobre</a></li>
            <li><a href="/contact">Contactos</a></li>
        </ul>
    </nav>
</header>
<main>
    <div class="bigtitle">
        <h1><?= $titleH1 ?? null ?></h1>
        <p><?= $descriptionPage ?? null ?></p>
    </div>
    <div class="bodymain">
        <div class="big-part">