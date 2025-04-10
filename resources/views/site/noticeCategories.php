<?php

$title = 'Categorias | Notícias';
$titleH1 = 'Categorias';
$descriptionPage = 'Categorias de notícias da Caála news.';
$cssPage = "<link rel='stylesheet' href='/assets/css/default.css'><link rel='stylesheet' href='/assets/css/notice.css'>";
require_once '../resources/views/components/header.php';
?>
            <section class="notice cat">
                <div>
                    <?php foreach($categories as $value): ?>
                    <article><a href="/notice/category/<?= $value[1] ?>">
                        <h1><?= $value[0] ?></h1>
                        <p><?= $value[2] ?> notícias</p>
                    </a></article>
                    <?php endforeach ?>
                </div>
            </section>

<?php require_once '../resources/views/components/footer.php'; ?>